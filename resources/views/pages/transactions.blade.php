@include('header.header')
<div class="content">
    <div class="account">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    @include('pages.components.balance')
                    @include("pages.components.menu")
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="account-block account-orders">
                        <div class="account-orders__title account-subtitle">Transactions</div>
                        <div class="account-orders__content">
                            <div class="account-table">
                                <div class="account-table__thead">
                                    <div class="account-table__inner d-flex">
                                        <div class="account-table__left account-table__left-2">
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
                                                <div class="account-table__method-col account-table__col">
                                                    <div class="account-table__th">Метод</div>
                                                </div>
                                                <div class="account-table__quantity-col account-table__col">
                                                    <div class="account-table__th">Количество</div>
                                                </div>
                                                <div class="account-table__status-2-col account-table__col">
                                                    <div class="account-table__th">Статус</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-table__body">
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--process">В процессе</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--cancel">Отменен</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
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
                                                    <div class="account-table__method-col account-table__col">
                                                        <div class="account-table__name">Метод:</div>
                                                        <div class="account-table__txt account-table__nowrap">Карта</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">400₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div class="account-table__status account-table__status--success">Выполнен</div>
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
