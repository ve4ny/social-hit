@include('header.header')
<div class="content">
    <div class="account">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="account-balance">
                        <div class="account-balance__title">Баланс:</div>
                        <div class="account-balance__info d-flex">
                            <div class="account-balance__value">10.24 ₽</div><a class="account-balance__btn btn btn-black" href="#">Пополнить</a>
                        </div>
                    </div>
                    <div class="account-menu">
                        <div class="account-menu__item"> <a class="account-menu__link d-flex" href="#"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-user-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#user-2"></use>
                        </svg></span><span class="account-menu__link-txt">Профиль</span></a></div>
                        <div class="account-menu__item"> <a class="account-menu__link d-flex" href="#"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-safety-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#safety-2"></use>
                        </svg></span><span class="account-menu__link-txt">Безопасность</span></a></div>
                        <div class="account-menu__item"> <a class="account-menu__link d-flex" href="#"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-user-left-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#user-left-2"></use>
                        </svg></span><span class="account-menu__link-txt">Реферальная программа</span></a></div>
                        <div class="account-menu__item"> <a class="account-menu__link d-flex selected" href="#"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-receipt-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#receipt-2"></use>
                        </svg></span><span class="account-menu__link-txt">Заказы</span></a></div>
                        <div class="account-menu__item"> <a class="account-menu__link d-flex" href="#"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-switch-horizontal-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#switch-horizontal-2"></use>
                        </svg></span><span class="account-menu__link-txt">Транзакции</span></a></div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
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
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-up-fill"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="account-table__th-sort-icon icon">
                                                                    <svg class="svg-sprite-icon icon-bi_caret-down-fill">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-down-fill"></use>
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
                                                            <div class="account-table__th-sort">
                                                                <div class="account-table__th-sort-icon icon">
                                                                    <svg class="svg-sprite-icon icon-bi_caret-up-fill">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-up-fill"></use>
                                                                    </svg>
                                                                </div>
                                                                <div class="account-table__th-sort-icon icon">
                                                                    <svg class="svg-sprite-icon icon-bi_caret-down-fill">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-down-fill"></use>
                                                                    </svg>
                                                                </div>
                                                            </div>
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
                                                <div class="account-table__qty-col account-table__col account-table__col--px-4">
                                                    <div class="account-table__th">Количество/цена</div>
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
                                <div class="account-table__body">
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info1" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info1">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--process">В процессе</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info2" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info2">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info3" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info3">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--error">Ошибка</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info3" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info3">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info4" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info4">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info5" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info5">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info6" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info6">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info7" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info7">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info8" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info8">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">20.04.23</div>
                                                                <div class="account-table__date-time">14:45</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">4e8ThK9</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info9" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info9">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__service-col account-table__col">
                                                        <div class="account-table__name">Услуга:</div>
                                                        <div class="account-table__service account-table__nowrap">Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</div>
                                                    </div>
                                                    <div class="account-table__qty-col account-table__col">
                                                        <div class="account-table__name">Количество/цена:</div>
                                                        <div class="account-table__qty">
                                                            <div class="account-table__qty-inner">
                                                                <div class="account-table__qty-value">250</div>
                                                                <div class="account-table__qty-price">0.066&nbsp;$</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__link-col account-table__col">
                                                        <div class="account-table__name">Ссылка:</div>
                                                        <div class="account-table__link account-table__nowrap">https://t.me/kozyrhistory</div>
                                                    </div>
                                                    <div class="account-table__status-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                    <div class="account-table__actions-col account-table__col">
                                                        <div class="account-table__actions d-flex">
                                                            <div class="account-table__actions-item account-table__actions-item--m-hidden"> <a class="account-table__actions-btn centered" href="#orderModal" data-bs-toggle="modal">
                                                                    <svg class="svg-sprite-icon icon-eye-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#eye-15"></use>
                                                                    </svg></a></div>
                                                            <div class="account-table__actions-item"> <a class="account-table__actions-btn centered" href="#">
                                                                    <svg class="svg-sprite-icon icon-return-15">
                                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#return-15"></use>
                                                                    </svg></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-orders__foot">
                            <div class="account-pagination">
                                <div class="account-pagination__inner d-flex">
                                    <div class="account-pagination__left">
                                        <div class="account-pagination__displaying d-flex">
                                            <div class="account-pagination__displaying-txt">Рядов на страницу:</div>
                                            <select class="account-pagination__displaying-select">
                                                <option value="10" selected="">10 </option>
                                                <option value="20">20 </option>
                                                <option value="30">30 </option>
                                            </select>
                                            <div class="account-pagination__displaying-txt">1-12 из 2123</div>
                                        </div>
                                    </div>
                                    <div class="account-pagination__right">
                                        <ul class="account-pagination__list flex">
                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">
                                                    <svg class="svg-sprite-icon icon-arrow-left">
                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#arrow-left"></use>
                                                    </svg></a></li>
                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered selected" href="#">1</a></li>
                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">2</a></li>
                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">3</a></li>
                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">...</a></li>
                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">14</a></li>
                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">
                                                    <svg class="svg-sprite-icon icon-arrow-right">
                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#arrow-right"></use>
                                                    </svg></a></li>
                                        </ul>
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
@include('footer')
