<script setup>
import {reactive, ref} from "vue";
import axios from "axios";

const form = reactive({
    'email': '',
    'password': '',
})

const buttonText = ref('Войти')
const errorMessages = ref({})

function formSubmit() {
    buttonText.value = 'Подождите...';
    axios.post('/login', form)
        .then((res) => {
            window.location.reload();
        }).catch((error) => {
        if (error.response) {
            errorMessages.value = error.response.data.errors;
        }
        buttonText.value = 'Войти';
    })
}


</script>

<template>
    <div class="enter">
        <div class="container">
            <div class="enter-content">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <form class="enter-form form" action="/">
                            <div class="enter-form__title">Начните получать множество преимуществ от Social-Hit, войдя в
                                нашу панель!
                            </div>
                            <div class="enter-form__group">
                                <div class="enter-form__group-left">
                                    <div class="enter-form__fields row">
                                        <div class="col-lg-6">
                                            <div class="form-item">
                                                <input v-model="form.email" @focusin="()=>{errorMessages.email = ''}"
                                                       class="form-input" type="email" placeholder="Почта">
                                                <template v-if="errorMessages.email">
                                                    <p v-for="error in errorMessages.email" class="error">{{ error }}</p>
                                                </template>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-item">
                                                <input v-model="form.password" @focusin="()=>{errorMessages.password = ''}"
                                                       class="form-input" type="password" placeholder="Пароль">
                                                <template v-if="errorMessages.password">
                                                    <p v-for="error in errorMessages.password" class="error">{{ error }}</p>
                                                </template>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-auto">
                                            <div class="enter-form__txt"><span>Не имеете аккаунта?</span>
                                                <a href="#regModal" data-bs-toggle="modal">Регистрация</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-auto">
                                            <div class="enter-form__txt"><a href="#resetModal" data-bs-toggle="modal">Забыли пароль?</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="enter-form__group-right">
                                    <button @click.prevent="formSubmit()" class="enter-form__btn btn" type="submit">{{ buttonText }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.error {
    font-size: 12px;
    font-weight: normal;
    color: #FF0000;
    margin-top:6px
}
</style>
