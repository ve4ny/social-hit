<script setup>
import { ref, watch } from 'vue';
import OrderModals from "./OrderModals.vue";

const props = defineProps({
    user: Object,
    services: Array,
    category: Object,
    social: Object,
    similar: Array
});

const selectedService = ref({});

const order = ref({
    service: {},
    link: '',
    promocode: '',
    discount: 0,
    quantity: 1
})

watch(() => props.services, (newVal) => {
    if (Array.isArray(newVal) && newVal.length > 0) {
        selectedService.value = newVal[0];
        order.value.service = newVal[0];
        order.value.quantity = newVal[0]['min'] ? newVal[0]['min'] : 1;
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

const checkPromo = () => {
    let promo = String.trim(order.value.promocode);
    axios.post('/order/promo/check', {promo: promo})
        .then((res) => order.value.discount = res.data.discount)
        .catch((err) => console.log(err))
}

const validateInput = () => {
    order.value.quantity = order.value.quantity.toString().replace(/[^0-9]/g, '');
};


</script>

<template>

</template>

<style scoped>

</style>
