<script setup>

import {ref} from "vue";

const props = defineProps({
    balance: Object
})

const amount = ref(props.balance.amount);

const transfer = () => {
    axios.post('/transfer-ref-balance')
        .then((res) => {
                window.location.reload();
        })
        .catch((err) => console.log(err.data));
}
</script>

<template>
    <div class="referal-balance account-block">
        <div class="referal-balance__title">Реферальный баланс:</div>
        <div class="referal-balance__value">{{ amount }} ₽</div>
        <div class="referal-balance__link"><a @click.prevent="transfer" href="javascript.void(0)">Вывести</a></div>
    </div>
</template>

<style scoped>

</style>
