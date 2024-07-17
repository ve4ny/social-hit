<script setup>

import NewOrderModal from "./NewOrderModal.vue";

const props = defineProps({
    order: Object
})

</script>

<template>
    <div class="modal fade" id="unregMakeOrderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><a class="modal-close icon" href="#" data-bs-dismiss="modal">
            <svg class="svg-sprite-icon icon-x-close">
                <use xlink:href="@images/svg/symbol/sprite.svg#x-close"></use>
            </svg></a>
            <div class="modal-content__head">
                <div class="modal-head modal-head--center">
                    <div class="modal-head__logo"> <img src="@images/general/logo.svg" width="104" height="48" alt="img"/>
                    </div>
                    <div class="modal-head__info">
                        <div class="modal-head__title title">Введите <br>почту</div>
                    </div>
                </div>
            </div>
            <div class="modal-content__body">
                <form class="modal-form form" action="/">
                    <div class="modal-form__fields">
                        <div class="modal-form__item">
                            <div class="modal-form__txt">Создав учетную запись, вы сможете отслеживать свой заказ со своей панели управления.</div>
                        </div>
                        <div class="modal-form__item">
                            <div class="form-item">
                                <div class="form-item__label">Почта:</div>
                                <div class="form-item__field">
                                    <input class="form-input" type="email" placeholder="Введите почту">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-form__actions">
                        <div class="modal-form__item modal-form__item--mb-2">
                            <button class="modal-form__btn btn" type="submit">Сделать заказ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <NewOrderModal :order="order"></NewOrderModal>
</template>

<style scoped>

</style>
