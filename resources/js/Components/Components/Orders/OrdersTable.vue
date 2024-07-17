<script setup>

import {onMounted, ref} from 'vue';
const props = defineProps(['orders', 'currentPage', 'perPage', 'totalPages', 'totalItems', 'sprite'])

const PENDING = 'Pending';
const IN_PROGRESS = 'In progress';
const COMPLETED = 'Completed';

const currentOrder = ref({});
const orders = ref(props.orders)
const currentPage = ref(props.currentPage)
const totalPages = ref(props.totalPages)

function setCurrent(order) {
    currentOrder.value = order
}

async function fetchOrders(page) {
    try {
        const response = await axios.get(`/orders?page=${page}&perPage=${props.perPage}`)
        orders.value = response.data.data // Обновление заказов
        currentPage.value = page // Обновление текущей страницы
    } catch (error) {
        console.error('Error fetching orders:', error)
    }
}

function nextPage() {
    if (currentPage.value < totalPages.value) {
        fetchOrders(currentPage.value + 1)
    }
}

function prevPage() {
    if (currentPage.value > 1) {
        fetchOrders(currentPage.value - 1)
    }
}
</script>

<template>
    <div class="account-block account-orders">
        <div class="account-orders__title account-subtitle">Заказы</div>
        <div class="account-orders__content">
            <div class="account-table">
                <div class="account-table__thead">
                    <div class="account-table__inner d-flex">
                        <div class="account-table__left">
                            <div class="account-table__left-inner d-flex">
                                <div class="account-table__date-col account-table__col">
                                    <div class="account-table__th">
                                        <div class="account-table__th-inner d-flex">
                                            <div class="account-table__th-txt">Дата</div>
                                            <div class="account-table__th-sort">
                                                <div class="account-table__th-sort-icon icon">
                                                    <svg class="svg-sprite-icon icon-bi_caret-up-fill">
                                                        <use
                                                            :xlink:href="`${sprite}#bi_caret-up-fill`"></use>
                                                    </svg>
                                                </div>
                                                <div class="account-table__th-sort-icon icon">
                                                    <svg
                                                        class="svg-sprite-icon icon-bi_caret-down-fill">
                                                        <use
                                                            :xlink:href="`${sprite}#bi_caret-down-fill`"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-table__id-col account-table__col">
                                    <div class="account-table__th">
                                        <div class="account-table__th-inner d-flex">
                                            <div class="account-table__th-txt">ID</div>
<!--                                            <div class="account-table__th-sort">-->
<!--                                                <div class="account-table__th-sort-icon icon">-->
<!--                                                    <svg class="svg-sprite-icon icon-bi_caret-up-fill">-->
<!--                                                        <use-->
<!--                                                            :xlink:href="`${sprite}#bi_caret-up-fill`"></use>-->
<!--                                                    </svg>-->
<!--                                                </div>-->
<!--                                                <div class="account-table__th-sort-icon icon">-->
<!--                                                    <svg-->
<!--                                                        class="svg-sprite-icon icon-bi_caret-down-fill">-->
<!--                                                        <use-->
<!--                                                            :xlink:href="`${sprite}#bi_caret-down-fill`"></use>-->
<!--                                                    </svg>-->
<!--                                                </div>-->
<!--                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-table__right collapse">
                            <div class="account-table__right-inner d-flex">
                                <div class="account-table__service-col account-table__col">
                                    <div class="account-table__th">Услуга</div>
                                </div>
                                <div
                                    class="account-table__qty-col account-table__col account-table__col--px-4">
                                    <div class="account-table__th">Количество/сумма</div>
                                </div>
                                <div class="account-table__link-col account-table__col">
                                    <div class="account-table__th">Ссылка</div>
                                </div>
                                <div class="account-table__status-col account-table__col">
                                    <div class="account-table__th">Статус</div>
                                </div>
                                <div class="account-table__actions-col account-table__col">
                                    <div class="account-table__th">Действие</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-for="order in orders" class="account-table__body">
                    <div class="account-table__row">
                        <div class="account-table__inner d-flex">
                            <div class="account-table__left">
                                <div class="account-table__left-inner d-flex">
                                    <div class="account-table__date-col account-table__col">
                                        <div class="account-table__date">
                                            <div
                                                class="account-table__name account-table__date-name">
                                                Дата:
                                            </div>
                                            <div class="account-table__date-inner">
                                                <div
                                                    class="account-table__date-date">{{ order.date }}
                                                </div>
                                                <div
                                                    class="account-table__date-time">{{ order.time }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__id-col account-table__col">
                                        <div class="account-table__id">
                                            <div class="account-table__name account-table__id-name">
                                                ID:
                                            </div>
                                            <div
                                                class="account-table__id-txt account-table__nowrap">{{ order.id }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-table__left-hidden"><a
                                    class="account-table__open icon" href="#info1"
                                    data-bs-toggle="collapse">
                                    <svg class="svg-sprite-icon icon-down-225">
                                        <use
                                            :xlink:href="`${sprite}#eye-15`"></use>
                                    </svg>
                                </a></div>
                            </div>
                            <div class="account-table__right collapse" id="info1">
                                <div class="account-table__right-inner d-flex">
                                    <div class="account-table__service-col account-table__col">
                                        <div class="account-table__name">Услуга:</div>
                                        <div
                                            class="account-table__service account-table__nowrap">
                                            {{ order.service['rus_name'] ?? order.service['name'] }}
                                        </div>
                                    </div>
                                    <div class="account-table__qty-col account-table__col">
                                        <div class="account-table__name">Количество/сумма:</div>
                                        <div class="account-table__qty">
                                            <div class="account-table__qty-inner">
                                                <div class="account-table__qty-value">{{ order.quantity }}/</div>
                                                <div class="account-table__qty-price">{{ order.sum }} $</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__link-col account-table__col">
                                        <div class="account-table__name">Ссылка:</div>
                                        <div class="account-table__link account-table__nowrap">
                                            {{ order.link }}
                                        </div>
                                    </div>
                                    <div class="account-table__status-col account-table__col">
                                        <div class="account-table__name">Статус:</div>
                                        <div v-if="order.status === PENDING || order.status === IN_PROGRESS"
                                             class="account-table__status account-table__status--process">
                                            В процессе
                                        </div>
                                        <div v-else-if="order.status === COMPLETED"
                                             class="account-table__status account-table__status--success">
                                            Выполнен
                                        </div>
                                        <div v-else
                                             class="account-table__status account-table__status--error">
                                            Ошибка
                                        </div>
                                    </div>
                                    <div class="account-table__actions-col account-table__col">
                                        <div class="account-table__actions d-flex">
                                            <div
                                                class="account-table__actions-item account-table__actions-item--m-hidden">
                                                <a class="account-table__actions-btn centered" @click="setCurrent(order)"
                                                   href="#orderModal" data-bs-toggle="modal">
                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                        <use
                                                            :xlink:href="`${sprite}#eye-15`"></use>
                                                    </svg>
                                                </a></div>
                                            <div class="account-table__actions-item"><a
                                                class="account-table__actions-btn centered"
                                                :href="`/order?categoryId=${order.service.category_id}`">
                                                <svg class="svg-sprite-icon icon-return-15">
                                                    <use
                                                        :xlink:href="`${sprite}#return-15`"></use>
                                                </svg>
                                            </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-order modal-dialog-centered">
            <div class="modal-content modal-content--p2"> <a class="modal-close icon" href="#" data-bs-dismiss="modal">
                <svg class="svg-sprite-icon icon-x-close">
                    <use :xlink:href="`${sprite}#x-close`"></use>
                </svg></a>
                <div class="modal-order">
                    <div class="modal-order__title">Информация о заказе</div>
                    <div class="modal-order__table-wrapper">
                        <table class="modal-order__table">
                            <tbody>
                            <tr>
                                <td>Дата</td>
                                <td>
                                    <div class="modal-order__date">
                                        <div class="modal-order__date-date">{{ currentOrder.date }}</div>
                                        <div class="modal-order__date-time">{{ currentOrder.time }}</div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td>{{ currentOrder.id }}</td>
                            </tr>
                            <tr>
                                <td>Услуга</td>
                                <td v-if="currentOrder.service">{{ currentOrder.service.rus_name ?? currentOrder.service.name  }}</td>
                            </tr>
                            <tr>
                                <td>Количестов и сумма</td>
                                <td>{{  currentOrder.quantity }} / {{ currentOrder.sum }} $ </td>
                            </tr>
                            <tr>
                                <td>Ссылка</td>
                                <td>{{ currentOrder.link }}</td>
                            </tr>
                            <tr>
                                <td>Статус заказа</td>
                                <td>
                                    <div v-if="currentOrder.status === PENDING || currentOrder.status === IN_PROGRESS" class="account-table__status account-table__status--process">
                                        В процессе
                                    </div>
                                    <div v-else-if="currentOrder.status === COMPLETED" class="account-table__status account-table__status--completed">
                                        Выполнен
                                    </div>
                                    <div v-else class="account-table__status account-table__status--error">
                                        Ошибка
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div><a v-if="currentOrder.service" class="modal-order__btn btn" :href="`/order?categoryId=${currentOrder.service.category_id}`"> <span class="modal-order__btn-icon icon">
                <svg class="svg-sprite-icon icon-return-15">
                  <use :xlink:href="`${sprite}#return-15`"></use>
                </svg></span><span class="modal-order__btn-txt">Заказать заново</span></a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
