<script setup>
import {ref, onMounted} from 'vue';

const props = defineProps({
    user: Object,
    email_changes: Object
})

const EMAIL_SUCCESS_TEXT = 'На новый email отправлено письмо с подтверждением. ' +
    'Пройдите по ссылке в письме, чтобы подтвердить смену email.';

const email = ref(props.user.email);
const emailMessageShow = ref(false);
const password = ref('********');
const errors = ref({});

const changeEmail = async () => {
    try {
        const response = await axios.post('/safety/change-email',
            {email: email.value}
        );
        if (response.status === 200) {
            emailMessageShow.value = true;
        }
    } catch (error) {
        if(error.response.data.email) {
            errors.value.email = error.response.data.email;
        }
    }
}

onMounted(()=>{
    if(props.email_changes){
        emailMessageShow.value = true;
    }
})

</script>

<template>
    <form class="account-user form account-user--safety" action="/">
        <div class="account-user__bottom">
            <div class="account-user__subtitle account-subtitle">Безопасность</div>
            <div class="account-user__group row">
                <div class="col-lg-6">
                    <div class="form-item">
                        <div class="form-item__label">Почта:</div>
                        <input v-model="email" @click="()=>{errors.email = ''}" class="form-input" type="email">
                        <div class="form-item__link"><a @click="()=>changeEmail()" href="#">Сменить почту</a></div>
                        <p v-if="errors.email" class="error">
                            {{ errors.email }}
                        </p>
                        <p v-if="emailMessageShow" class="success">{{ EMAIL_SUCCESS_TEXT }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-item">
                        <div class="form-item__label">Пароль:</div>
                        <input v-model="password" class="form-input" type="password">
                        <div class="form-item__link"> <a href="#">Сменить пароль</a></div>
                    </div>
                </div>
            </div>
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
