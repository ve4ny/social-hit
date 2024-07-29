<script setup>

import {ref, onMounted, watch} from 'vue';
import OrderModals from "./Components/OrderModals.vue";

const props = defineProps({
    user: Object,
    menu: Array,
    social: Object,
    category: Object,
    service: Object,
    initialSimilar: Array
})

const chosenSocial = ref({});
const chosenCat = ref({});
const services = ref([]);
const similar = ref(props.initialSimilar);
const selectedService = ref(props.service ? props.service : services.value[0]);
const discount = ref(1);
const errors = ref({});

const order = ref({
    service: selectedService.value,
    link: '',
    promocode: '',
    quantity: selectedService.value.min
})

function selectedCategory(args) {
    chosenCat.value = args.category;
    chosenSocial.value = props.menu.find(menuItem =>
        menuItem.categories.some(category => category.id === args.category.id)
    );
    axios.get('/order/services/' + args.category.id)
        .then((res) => {
            services.value = res.data.services;
            similar.value = res.data.services.slice(1, 6);
        })
        .catch((err) => console.log(err))
}

function selectService(service) {
    selectedService.value = service;
    order.value.quantity = service.min;
    similar.value = services.value.filter((el, key) => el.id !== selectedService.value.id).slice(0, 5);
}

function getExampleCount(max) {
    if(max < 1000) return max;
    else return 1000;
}

function replaceZeros(quantity) {
    if (quantity >= 1000000) {
        return (quantity / 1000000).toFixed(0) + 'M';
    } else if (quantity >= 1000) {
        return (quantity / 1000).toFixed(0) + 'K';
    } else {
        return quantity.toString();
    }
}

function roundToTwo(num) {
    return parseFloat(num.toFixed(2));
}

const checkMax = () => {
    if (order.value.quantity > selectedService.value.max) {
        order.value.quantity = selectedService.value.max;
    } else if(order.value.quantity < selectedService.value.min) {
        order.value.quantity = selectedService.value.min;
    }
};

function checkPromo() {
    discount.value = 1;
    axios.post('/order/promo/check', {code: order.value.promocode})
        .then((res) => discount.value = res.data.discount)
        .catch((err) => errors.value.promo = err.response.data.promo)
}

const validateInput = () => {
    order.value.quantity = order.value.quantity.toString().replace(/[^0-9]/g, '');
};

onMounted(() => {
    selectedCategory({category: props.category})
})

</script>

<template>
    <div v-if="category" class="col-lg-9">
        <div class="order-head w-block d-flex">
            <div class="order-head__img centered">
                <picture>
                    <source :srcset="social.picture" type="image/webp">
                    <img :src="social.picture" width="28" height="28" alt="img">
                </picture>
            </div>
            <div class="order-head__title title">{{ category.rus_name ? category.rus_name : category.jap_name }}</div>
        </div>
        <form class="order-form form w-block" action="/">
            <div class="order-form__item">
                <div class="form-item">
                    <div class="form-item__label">Выберите пакет:</div>
                    <select class="form-select">
                        <option v-for="(service, key) in services"
                                :key="service.id"
                                :selected="service.id === selectedService.id"
                                @click="()=> {selectService(service)}">
                            {{ service.rus_name ? service.rus_name : service.name }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="order-form__item">
                <div class="order-form__price d-flex">
                    <div class="order-form__price-txt-left">Цена за 1:</div>
                    <div class="order-form__price-value">
                        {{ selectedService && selectedService.rate ? roundToTwo(selectedService.rate) : 0 }} ₽
                    </div>
                    <div v-if="selectedService && selectedService.max > 1"
                         class="order-form__price-txt-right">
                        (Цена за 1 действие {{ selectedService ? roundToTwo(selectedService.rate) : 0 }} ₽.
                        ({{ selectedService && selectedService.max ? getExampleCount(selectedService.max) : 1 }} шт.
                        = {{ selectedService ? roundToTwo(selectedService.rate * getExampleCount(selectedService.max)) : 0 }}₽ ))
                    </div>
                </div>
            </div>
            <div class="order-form__item order-form__item--mb-2">
                <div class="order-form__group row">
                    <div class="order-form__group-left">
                        <div class="form-item">
                            <div class="form-item__label d-flex">
                                <div class="form-item__label-name">Количество:</div>
                                <div class="form-item__label-hint">
                                    {{ selectedService && selectedService.min ? replaceZeros(selectedService.min) : 1 }}
                                    min -
                                    {{ selectedService && selectedService.max ? replaceZeros(selectedService.max) : 1 }}
                                    max
                                </div>
                            </div>
                            <div class="form-item__field">
                                <div class="form-qty d-flex border">
                                    <button class="form-qty__btn form-qty__minus icon" @click="()=>{order.quantity -= 1}" type="button">
                                        <svg class="svg-sprite-icon icon-minus-circle-2">
                                            <use xlink:href="@images/svg/symbol/sprite.svg#minus-circle-2"></use>
                                        </svg>
                                    </button>
                                    <input v-model.number="order.quantity" class="form-qty__input"
                                           @input="validateInput" @focusout="checkMax">
                                    <button class="form-qty__btn form-qty__plus icon" @click="()=>{order.quantity += 1}" type="button">
                                        <svg class="svg-sprite-icon icon-plus-circle-2">
                                            <use xlink:href="@images/svg/symbol/sprite.svg#plus-circle-2"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-form__group-right">
                        <div class="form-item">
                            <div class="form-item__label">Ссылка:</div>
                            <div class="form-item__field">
                                <input v-model="order.link" @focusin="errors.link = ''" class="form-input" type="text">
                            </div>
                            <span class="red" v-if="errors" v-for="err in errors.link" >{{ err }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-form__item order-form__item--mb-2">
                <div class="form-item">
                    <div class="form-item__label">Промокод:</div>
                    <div class="refill-form__promocode d-flex">
                        <div class="refill-form__promocode-input">
                            <input v-model="order.promocode" @focusin="errors.promo = ''" class="form-input" type="text" placeholder="fVskrF">
                        </div>
                        <div class="refill-form__promocode-button">
                            <button class="refill-form__promocode-btn btn btn-black" type="button" @click="checkPromo()">
                                Применить
                            </button>
                        </div>
                    </div>
                    <span class="red" v-if="errors" v-for="err in errors.promo" >{{ err }}</span>
                    <span v-if="discount < 1" class="green">
                        Ваша скидка: {{roundToTwo((order.quantity * selectedService.rate) - (order.quantity * selectedService.rate * discount))}} ₽
                    </span>
                </div>
            </div>
            <div class="order-form__item">
                <div class="order-form__bottom">
                    <div class="order-form__bottom-group row">
                        <div class="order-form__bottom-left">
                            <div class="order-form__total">Всего: <span>
                                {{
                                    selectedService.rate ? roundToTwo(order.quantity * selectedService.rate * discount) : 0
                                }} ₽ </span></div>
                        </div>
                        <div class="order-form__bottom-right">
                            <button class="order-form__btn btn"
                                    type="button"
                                    data-bs-toggle="modal"
                                    :data-bs-target="!user ? '#unregMakeOrderModal' : '#makeOrderModal'">
                                Заказать
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div v-if="selectedService.advantage" class="order-benefit">
            <div class="row">
                <div class="col-4">
                    <div class="order-benefit__item">
                        <div class="order-benefit__item-img"><img src="@images/general/play.svg" width="48" height="48"
                                                                  alt="img">
                        </div>
                        <div class="order-benefit__item-title">Время начала:</div>
                        <div class="order-benefit__item-txt">{{ selectedService.advantage.start }}</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="order-benefit__item">
                        <div class="order-benefit__item-img"><img src="@images/general/quality.svg" width="48"
                                                                  height="48" alt="img">
                        </div>
                        <div class="order-benefit__item-title">Качество</div>
                        <div class="order-benefit__item-txt">{{ selectedService.advantage.quality }}</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="order-benefit__item">
                        <div class="order-benefit__item-img"><img src="@images/general/speed.svg" width="48" height="48"
                                                                  alt="img">
                        </div>
                        <div class="order-benefit__item-title">Скорость</div>
                        <div class="order-benefit__item-txt">{{ selectedService.advantage.speed }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-more">
            <div class="order-more__list">
                <div class="order-more__list-item">
                    <div class="order-more__item order-more__title d-flex">
                        <div class="order-more__title-img icon">
                            <picture>
                                <source :srcset="social.picture" type="image/webp">
                                <img :src="social.picture" width="28" height="28" alt="img">
                            </picture>
                        </div>
                        <div class="order-more__title-txt title">Другое в {{ social.name }}</div>
                    </div>
                </div>
                <div v-for="sim in similar " class="order-more__list-item">
                    <div class="order-more__item d-flex">
                        <div class="order-more__item-img icon">
                            <picture>
                                <source :srcset="social.picture" type="image/webp">
                                <img :src="social.picture" width="32" height="32" alt="img">
                            </picture>
                        </div>
                        <div class="order-more__item-name d-flex">
                            <div class="order-more__item-name__icon icon">
                                <svg class="svg-sprite-icon icon-users-plus-2">
                                    <use xlink:href="@images/svg/symbol/sprite.svg#users-plus-2"></use>
                                </svg>
                            </div>
                            <div class="order-more__item-name__txt">{{
                                    sim.rus_name ? sim.rus_name : (sim.name ? sim.name : sim.jap_name)
                                }}
                            </div>
                        </div>
                        <div class="order-more__item-price">250 шт. = {{ sim.rate ? roundToTwo(sim.rate * 250) : 0 }}₽</div>
                        <a class="order-more__item-btn btn" :href="'/order?category='+ sim.category_id + '&service=' + sim.id">Купить</a>
                    </div>
                </div>
            </div>
        </div>
        <OrderModals :order="order" :discount="discount" @error="args => errors = args.error.error"></OrderModals>
    </div>
</template>

<style scoped>
.red {
    font-size: 12px;
    color: #dc3545
}

.green {
    font-size: 12px;
    color: #28a745
}
</style>
