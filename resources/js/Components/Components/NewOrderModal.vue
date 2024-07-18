<script setup>

const props = defineProps({
    order: Object
})

const emit = defineEmits(['error']);

function roundToTwo(num) {
    return parseFloat(num.toFixed(2));
}

async function makeOrder() {
        try {
            const response = await axios.post('/order/make-order', props.order)
            window.location.href = '/orders'
        } catch (err) {
            if (err.response && err.response.status === 422) {
                emit('error', {error: err.response.data.errors})
                let modalElement = document.getElementById('makeOrderModal');
                // Создаем экземпляр модального окна
                let myModal = bootstrap.Modal.getInstance(modalElement);
                // Закрываем модальное окно
                myModal.hide();
            } else {
                // Handle other errors
                console.error(err)
            }
        }
}

</script>

<template>
    <div class="modal fade" id="makeOrderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-order modal-dialog-centered">
            <div class="modal-content modal-content--p2"> <a class="modal-close icon" href="#" data-bs-dismiss="modal">
                <svg class="svg-sprite-icon icon-x-close">
                    <use xlink:href="@images/svg/symbol/sprite.svg#x-close"></use>
                </svg></a>
                <div class="modal-order">
                    <div class="modal-order__title">Информация о заказе</div>
                    <div class="modal-order__table-wrapper">
                        <table class="modal-order__table">
                            <tbody>
                            <tr>
                                <td>Услуга</td>
                                <td>{{ order.service.rus_name ? order.service.rus_name : order.service.name }}</td>
                            </tr>
                            <tr>
                                <td>Количестов и сумма</td>
                                <td>{{ order.quantity }} / {{ roundToTwo(order.quantity * order.service.rate - order.service.rate * order.discount ) }} $</td>
                            </tr>
                            <tr>
                                <td>Ссылка</td>
                                <td>{{ order.link }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-order__btn btn" style="cursor: pointer" @click="makeOrder()">
                        <span class="modal-order__btn-icon icon">
                            <svg class="svg-sprite-icon icon-return-15">
                                <use xlink:href="@images/svg/symbol/sprite.svg#return-15"></use>
                            </svg>
                        </span>
                        <span class="modal-order__btn-txt">Заказать</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
