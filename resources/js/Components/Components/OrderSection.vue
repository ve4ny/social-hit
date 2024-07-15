<script setup>
import { ref, watch } from 'vue';

const props = defineProps({
    services: Array,
    category: Object,
    social: Object,
    similar: Array
});

const selectedService = ref({});

const order = ref({
    service: {},
    quantity: selectedService.max ? selectedService.max : 1
})

watch(() => props.services, (newVal) => {
    if (Array.isArray(newVal) && newVal.length > 0) {
        selectedService.value = newVal[0];
    } else {
        selectedService.value = {};
    }
}, { immediate: true });

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
                        <option v-for="(service, key) in services" :key="service.id" @click="()=> selectedService = service" :selected="key === 0">{{ service.rus_name ? service.rus_name : service.name }}</option>
                    </select>
                </div>
            </div>
            <div class="order-form__item">
                <div class="order-form__price d-flex">
                    <div class="order-form__price-txt-left">Цена за 1:</div>
                    <div class="order-form__price-value">{{ selectedService && selectedService.rate ? selectedService.rate / 100 : 0 }} $ </div>
                    <div v-if="selectedService && selectedService.max > 1" class="order-form__price-txt-right">(Цена за 1 действие
                        {{ selectedService ? selectedService.rate / 100 : 0}} $. ({{ selectedService && selectedService.max ? getExampleCount(selectedService.max) : 1 }} шт. = {{ selectedService ? selectedService.rate / 100 * getExampleCount(selectedService.max) : 0}}$ ))</div>
                </div>
            </div>
            <div class="order-form__item order-form__item--mb-2">
                <div class="order-form__group row">
                    <div class="order-form__group-left">
                        <div class="form-item">
                            <div class="form-item__label d-flex">
                                <div class="form-item__label-name">Количество:</div>
                                <div class="form-item__label-hint">{{ selectedService ? selectedService.min : 1}} min - {{ selectedService && selectedService.max ? replaceZeros(selectedService.max) : 1}} max</div>
                            </div>
                            <div class="form-item__field">
                                <div class="form-qty d-flex border">
                                    <button class="form-qty__btn form-qty__minus icon" type="button">
                                        <svg class="svg-sprite-icon icon-minus-circle-2">
                                            <use xlink:href="@images/svg/symbol/sprite.svg#minus-circle-2"></use>
                                        </svg>
                                    </button>
                                    <input v-model="order.quantity" class="form-qty__input" >
                                    <button class="form-qty__btn form-qty__plus icon" type="button">
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
                                <input class="form-input" type="text" placeholder="https://youtu.be/dQw4w9WgXcQ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-form__item order-form__item--mb-2">
                <div class="form-item">
                    <div class="form-item__label">Промокод:</div>
                    <div class="refill-form__promocode d-flex">
                        <div class="refill-form__promocode-input">
                            <input class="form-input" type="text" placeholder="fVskrF">
                        </div>
                        <div class="refill-form__promocode-button">
                            <button class="refill-form__promocode-btn btn btn-black" type="button">Применить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-form__item">
                <div class="order-form__bottom">
                    <div class="order-form__bottom-group row">
                        <div class="order-form__bottom-left">
                            <div class="order-form__total">Всего: <span>{{ order.quantity * selectedService.rate / 100 }} $ </span></div>
                        </div>
                        <div class="order-form__bottom-right">
                            <button class="order-form__btn btn" type="button" data-bs-toggle="modal" data-bs-target="#fastModal">Заказать</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="order-benefit">
            <div class="row">
                <div class="col-4">
                    <div class="order-benefit__item">
                        <div class="order-benefit__item-img"> <img src="@images/general/play.svg" width="48" height="48" alt="img">
                        </div>
                        <div class="order-benefit__item-title">Время начала:</div>
                        <div class="order-benefit__item-txt">1 час</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="order-benefit__item">
                        <div class="order-benefit__item-img"> <img src="@images/general/quality.svg" width="48" height="48" alt="img">
                        </div>
                        <div class="order-benefit__item-title">Качество</div>
                        <div class="order-benefit__item-txt">Настоящие пользователи</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="order-benefit__item">
                        <div class="order-benefit__item-img"> <img src="@images/general/speed.svg" width="48" height="48" alt="img">
                        </div>
                        <div class="order-benefit__item-title">Скорость</div>
                        <div class="order-benefit__item-txt">500 в день</div>
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
                                <source :srcset="social.picture" type="image/webp"><img :src="social.picture" width="28" height="28" alt="img">
                            </picture>
                        </div>
                        <div class="order-more__title-txt title">Другое в {{ social.name }}</div>
                    </div>
                </div>
                <div v-for="sim in similar " class="order-more__list-item">
                    <div class="order-more__item d-flex">
                        <div class="order-more__item-img icon">
                            <picture>
                                <source :srcset="social.picture" type="image/webp"><img :src="social.picture" width="32" height="32" alt="img">
                            </picture>
                        </div>
                        <div class="order-more__item-name d-flex">
                            <div class="order-more__item-name__icon icon">
                                <svg class="svg-sprite-icon icon-users-plus-2">
                                    <use xlink:href="@images/svg/symbol/sprite.svg#users-plus-2"></use>
                                </svg>
                            </div>
                            <div class="order-more__item-name__txt">{{ sim.rus_name ? sim.rus_name : sim.jap_name }}</div>
                        </div>
                        <div class="order-more__item-price">250 шт. = {{sim.price/100 * 250 }}$ </div><a class="order-more__item-btn btn" href="#">Купить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
