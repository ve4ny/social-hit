<script setup>
import OrderMenu from "./Components/OrderMenu.vue";
import OrderSection from "./Components/OrderSection.vue";

import {ref, onMounted} from 'vue';

const props = defineProps({
    menu: Array,
    category: Object
})

const chosenSocial = ref({});
const chosenCat = ref({});
const services = ref([]);

function selectedCategory (args){
    chosenCat.value = args.category;
    chosenSocial.value = props.menu.find(menuItem =>
        menuItem.categories.some(category => category.id === args.category.id)
    );
    axios.get('/order/services/' + args.category.id)
        .then((res) => services.value = res.data.services)
        .catch((err) => console.log(err))
}

onMounted(() => {
    selectedCategory ({category : props.category})
})

</script>

<template>
    <OrderMenu :menu="menu" @selected-category="args => selectedCategory(args)"></OrderMenu>
    <OrderSection :services="services" :category="chosenCat" :social="chosenSocial"></OrderSection>
</template>

<style scoped>

</style>
