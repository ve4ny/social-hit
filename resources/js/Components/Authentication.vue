<script setup>

import {reactive, ref} from "vue";
import axios from "axios";

const form = reactive({
    'email': '',
    'password': '',
    'remember_me': false
})

const buttonText = ref('Войти')
const errorMessages = ref({})

function formSubmit() {
    buttonText.value = 'Подождите...';
    axios.post('/login', form)
        .then((res) => {
            window.location.reload();
        }).catch((error) => {
        if (error.response && error.response.status === 422) {
            console.error('Bad Request:', error.response.data.message);
            errorMessages.value = error.response.data.errors;
        }
        buttonText.value = 'Войти';
    })
}

</script>

<template>
        <div class="modal-content"><a class="modal-close icon" href="#" data-bs-dismiss="modal">
            <svg class="svg-sprite-icon icon-x-close">
                <use xlink:href="@images/svg/symbol/sprite.svg#x-close"></use>
            </svg></a>
            <div class="modal-content__head">
                <div class="modal-head">
                    <div class="modal-head__logo"> <img src="@images/general/logo.svg" width="104" height="48" alt="img"/>
                    </div>
                    <div class="modal-head__info">
                        <div class="modal-head__title title">Авторизация </div>
                    </div>
                </div>
            </div>
            <div class="modal-content__body">
                <form class="modal-form form" action="/">
                    <div class="modal-form__fields">
                        <div class="modal-form__item">
                            <div class="form-item">
                                <div class="form-item__label">Почта:</div>
                                <div class="form-item__field">
                                    <input v-model="form.email" @focusin="()=>{errorMessages.email = ''}" class="form-input" type="email" placeholder="Введите почту">
                                    <template v-if="errorMessages.email">
                                        <p v-for="error in errorMessages.email" class="error">{{ error }}</p>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <div class="modal-form__item modal-form__item--mb-2">
                            <div class="form-item">
                                <div class="form-item__label">Пароль:</div>
                                <div class="form-item__field">
                                    <input v-model="form.password" @focusin="()=>{errorMessages.password = ''}" class="form-input" type="password" placeholder="Введите свой пароль">
                                    <template v-if="errorMessages.password">
                                        <p v-for="error in errorMessages.password" class="error">{{ error }}</p>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <div class="modal-form__item">
                            <div class="modal-form__group d-flex">
                                <div class="modal-form__group-item">
                                    <label class="form-checkbox">
                                        <input v-model="form.remember_me" type="checkbox"><span class="form-checkbox__info"> <span class="form-checkbox__icon icon">
                            <svg class="svg-sprite-icon icon-checkbox">
                              <use xlink:href="@images/svg/symbol/sprite.svg#checkbox"></use>
                            </svg>
                            <svg class="svg-sprite-icon icon-checkbox-check">
                              <use xlink:href="@images/svg/symbol/sprite.svg#checkbox-check"></use>
                            </svg></span><span class="form-checkbox__txt">Запомнить меня</span></span>
                                    </label>
                                </div>
                                <div class="modal-form__group-item">
                                    <div class="modal-form__link"> <a href="#resetModal" data-bs-toggle="modal">Забыли пароль? </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-form__actions">
                        <div class="modal-form__item modal-form__item--mb-2">
                            <button @click.prevent="formSubmit()" class="modal-form__btn btn" type="submit">{{ buttonText }}</button>
                        </div>
                        <div class="modal-form__item"><a class="modal-form__bottom-link" href="#regModal" data-bs-toggle="modal">Регистрация </a></div>
                    </div>
                </form>
            </div>
        </div>
</template>

<style scoped>

</style>
