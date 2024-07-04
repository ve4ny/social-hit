<script setup>

import {reactive, ref} from 'vue';

const form = reactive({
    'email': ''
})

const successMessage = ref('')
const errorMessages = ref({})
const buttonText = ref('Сбросить пароль')

function submitForm() {
    buttonText.value = 'Подождите...';
    axios.post('/remind-password', form)
        .then((res) => {
            successMessage.value = res.data.message;
            buttonText.value = 'Сбросить пароль';
        }).catch((error) => {
        if (error.response && error.response.status === 422) {
            console.error('Bad Request:', error.response.data.message);
            errorMessages.value = error.response.data.errors;
        }
        buttonText.value = 'Сбросить пароль';
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
                    <div class="modal-head__title title">Сброс пароля</div>
                </div>
            </div>
        </div>
        <div class="modal-content__body">
            <form class="modal-form form" action="/public">
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
                </div>
                <template v-if="successMessage">
                    <p class="success">{{ successMessage }}</p>
                </template>
                <div class="modal-form__actions">
                    <div class="modal-form__item modal-form__item--mb-2">
                        <button @click.prevent="()=>submitForm()" class="modal-form__btn btn" type="submit">Сбросить пароль</button>
                    </div>
                    <div class="modal-form__item"><a class="modal-form__bottom-link" href="#loginModal" data-bs-toggle="modal">Войти в систему</a></div>
                </div>
            </form>
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

.success {
    font-size: 12px;
    font-weight: normal;
    color: #00aa00;
    margin-top:6px
}
</style>
