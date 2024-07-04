<script setup>
import {reactive, ref} from "vue";

const props = defineProps({
    'email': {
        type: String,
        required: true
    }
})

const buttonText = ref('Сменить пароль');
const errorMessages = ref({});
const form = reactive({
    'email': props.email,
    'password': '',
    'password_confirmation': ''
})

function submitForm() {
    buttonText.value = "Подождите...";
    axios.post('/password-reset', form)
        .then((res) => {
            window.location.href = '/';
        })
        .catch((error) => {
            if (error.response && error.response.status === 422) {
                console.error('Bad Request:', error.response.data.message);
                errorMessages.value = error.response.data.errors;
            }
            buttonText.value = 'Сменить пароль';
        })
}
</script>

<template>
    <form class="recoveryPassword-form">
        <input v-model="form.email" type="hidden">
        <div class="recoveryPassword-form__item">
            <div class="form-item">
                <div class="form-item__label">Новый пароль:</div>
                <input v-model="form.password" @click="()=>{errorMessages.password = ''}" class="form-input" type="password">
                <template v-if="errorMessages.password">
                    <p v-for="error in errorMessages.password" class="error">{{ error }}</p>
                </template>
            </div>
        </div>
        <div class="recoveryPassword-form__item">
            <div class="form-item">
                <div class="form-item__label">Повторите пароль:</div>
                <input v-model="form.password_confirmation"
                       @click="()=>{errorMessages.password_confirmation = ''}" class="form-input" type="password">
                <template v-if="errorMessages.password_confirmation">
                    <p v-for="error in errorMessages.password_confirmation" class="error">{{ error }}</p>
                </template>
            </div>
        </div>
        <div class="recoveryPassword-form__item">
            <button @click.prevent="()=>{submitForm()}" class="recoveryPassword-form__btn btn">{{ buttonText }}</button>
        </div>
    </form>
</template>

<style scoped>
.error {
    font-size: 12px;
    font-weight: normal;
    color: #FF0000;
    margin-top:6px
}

.success {
    font-size: 12px;
    font-weight: normal;
    color: #00aa00;
    margin-top:6px
}
</style>
