<script setup>

const props = defineProps({
    menu: Array
})

const emits = defineEmits(['selectedCategory']);

</script>

<template>
    <div class="col-lg-3 order__left">
        <div class="order-menu">
            <div v-for="(item, key) in menu" class="order-menu__item">
                <div class="social-link"><a class="social-link__open d-flex" :href="'#info' + key" data-bs-toggle="collapse" aria-expanded="true"> <span class="social-link__open-img centered">
                          <picture>
                            <source :srcset="item.picture" type="image/webp"><img :src="item.picture" width="28" height="28" alt="img">
                          </picture></span><span class="social-link__open-txt">{{ item.name }}</span><span class="social-link__open-arrow icon">
                          <svg class="svg-sprite-icon icon-down-2">
                            <use xlink:href="@images/svg/symbol/sprite.svg#down-2"></use>
                          </svg></span></a>
                    <div class="social-link__hidden collapse" :id="'info' + key" style="">
                        <div class="social-link__hidden-inner">
                            <div class="social-link__list">
                                <div v-for="cat in item.categories" class="social-link__list-item">
                                    <a class="social-link__type d-flex" @click.prevent="$emit('selectedCategory', {social: item, category: cat})" href="#">
                                        <span class="social-link__type-icon icon">
                                            <img v-if="cat.picture" :src="cat.picture" alt="icon">
<!--                                  <svg class="svg-sprite-icon icon-users-plus-2">-->
<!--                                    <use :xlink:href="cat.picture"></use>-->
<!--                                  </svg>-->
                                        </span>
                                        <span class="social-link__type-txt">{{ cat.rus_name ? cat.rus_name : cat.jap_name }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
