<script setup>
import {reactive} from 'vue';

const form = reactive({
    amount: 0
})

const refill = () => {
    axios.post('/refill/create', form)
        .then((res) => console.log(res.data))
        .catch((err) => console.log(err))
}
</script>

<template>
    <form class="refill-form form w-block">
<!--        <div class="refill-form__item">-->
<!--            <div class="refill-form__bonus">Бонус +10%, за пополнение с помощью криптовалют</div>-->
<!--        </div>-->
<!--        <div class="refill-form__item">-->
<!--            <div class="form-item">-->
<!--                <div class="form-item__label">Выберите систему:</div>-->
<!--                <div class="form-item__field">-->
<!--                    <div class="form-refill"><a class="form-refill__btn d-flex border" href="#"-->
<!--                                                data-bs-toggle="dropdown" aria-expanded="false"> <span-->
<!--                        class="form-refill__btn-icon centered"> <img-->
<!--                        src="images/general/fastspring.svg" alt="img"></span><span-->
<!--                        class="form-refill__btn-txt">Fastspring</span><span-->
<!--                        class="form-refill__btn-arrow centered"> <img-->
<!--                        src="images/general/select-arrow.svg" width="undefined"-->
<!--                        height="undefined" alt="img"></span></a>-->
<!--                        <div class="form-refill__dropdown dropdown-menu" style="">-->
<!--                            <div class="form-refill__dropdown-inner">-->
<!--                                <div class="form-refill__list">-->
<!--                                    <div class="form-refill__list-item">-->
<!--                                        <label class="form-refill__label">-->
<!--                                            <input type="radio" name="refill" data-img="fastspring"-->
<!--                                                   data-txt="Fastspring"><span-->
<!--                                            class="form-refill__label-content d-flex"> <span-->
<!--                                            class="form-refill__label-img centered"> <img-->
<!--                                            src="images/general/fastspring.svg"-->
<!--                                            alt="img"></span><span-->
<!--                                            class="form-refill__label-txt">Fastspring</span></span>-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                    <div class="form-refill__list-item">-->
<!--                                        <label class="form-refill__label">-->
<!--                                            <input type="radio" name="refill" data-img="coinbase"-->
<!--                                                   data-txt="Coinbase"><span-->
<!--                                            class="form-refill__label-content d-flex"> <span-->
<!--                                            class="form-refill__label-img centered"> <img-->
<!--                                            src="images/general/coinbase.svg"-->
<!--                                            alt="img"></span><span-->
<!--                                            class="form-refill__label-txt">Coinbase</span></span>-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                    <div class="form-refill__list-item">-->
<!--                                        <label class="form-refill__label">-->
<!--                                            <input type="radio" name="refill" data-img="paypal"-->
<!--                                                   data-txt="Paypal"><span-->
<!--                                            class="form-refill__label-content d-flex"> <span-->
<!--                                            class="form-refill__label-img centered"> <img-->
<!--                                            src="images/general/paypal.svg"-->
<!--                                            alt="img"></span><span-->
<!--                                            class="form-refill__label-txt">Paypal</span></span>-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="refill-form__item">
            <div class="form-item">
                <div class="form-item__label">Введите сумму:</div>
                <div class="form-item__field">
                    <input v-model="form.amount" class="form-input" type="tel" >
                    <div class="form-item__right">₽</div>
                </div>
            </div>
        </div>
        <div class="refill-form__item">
            <div class="form-item">
                <div class="form-item__label">Промокод:</div>
                <div class="refill-form__promocode d-flex">
                    <div class="refill-form__promocode-input">
                        <input class="form-input" type="text" placeholder="fVskrF">
                    </div>
                    <div class="refill-form__promocode-button">
                        <button class="refill-form__promocode-btn btn btn-black" type="button">
                            Применить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="refill-form__item">
            <button class="refill-form__btn btn" @click.prevent="refill">Пополнить</button>
        </div>
    </form>
</template>

<style scoped>

</style>
