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
                        <div class="account-menu__item"> <a class="account-menu__link d-flex selected" href="#"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-user-left-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#user-left-2"></use>
                        </svg></span><span class="account-menu__link-txt">Реферальная программа</span></a></div>
                        <div class="account-menu__item"> <a class="account-menu__link d-flex" href="#"> <span class="account-menu__link-icon icon">
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
                    <div class="referal-balance account-block">
                        <div class="referal-balance__title">Реферальный баланс:</div>
                        <div class="referal-balance__value">3 953 $</div>
                        <div class="referal-balance__link"> <a href="#">Вывести</a></div>
                    </div>
                    <div class="referal-share account-block">
                        <div class="referal-share__title account-subtitle">Реферальная ссылка:</div>
                        <div class="referal-share__group d-flex">
                            <div class="referal-share__group-left">
                                <div class="referal-share__link d-flex">
                                    <div class="referal-share__link-txt">https://Likemenow.me/r/20215e31ad9241b49efb1a6a863a4b72</div><a class="referal-share__link-copy icon" href="#">
                                        <svg class="svg-sprite-icon icon-copy-2">
                                            <use xlink:href="static/images/svg/symbol/sprite.svg#copy-2"></use>
                                        </svg></a>
                                </div>
                            </div>
                            <div class="referal-share__group-right">
                                <div class="referal-share__subtitle">Поделитьсся ссылкой:</div>
                                <div class="referal-share__social d-flex"><a class="referal-share__social-item centered" href="#"><img src="static/images/general/contacts-fb.svg" width="28" height="28" alt="img"></a><a class="referal-share__social-item centered" href="#"><img src="static/images/general/contacts-tw.svg" width="28" height="28" alt="img"></a><a class="referal-share__social-item centered" href="#"><img src="static/images/general/contacts-vk.svg" width="28" height="28" alt="img"></a><a class="referal-share__social-item centered" href="#"><img src="static/images/general/contacts-ok.svg" width="28" height="28" alt="img"></a></div>
                            </div>
                        </div>
                        <div class="referal-qr border">
                            <div class="referal-qr__head">
                                <div class="referal-qr__list d-flex">
                                    <div class="referal-qr__list-item"><a class="referal-qr__link" href="#">50 px</a></div>
                                    <div class="referal-qr__list-item"><a class="referal-qr__link" href="#">100 px</a></div>
                                    <div class="referal-qr__list-item"><a class="referal-qr__link selected" href="#">200 px</a></div>
                                    <div class="referal-qr__list-item"><a class="referal-qr__link" href="#">300 px</a></div>
                                    <div class="referal-qr__list-item"><a class="referal-qr__link" href="#">SVG</a></div>
                                </div>
                            </div>
                            <div class="referal-qr__body">
                                <div class="referal-qr__img">
                                    <picture>
                                        <source srcset="static/images/content/qr.webp" type="image/webp"><img src="static/images/content/qr.png" width="200" height="200" alt="img">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="referal-table account-block">
                        <div class="account-orders__title account-subtitle">Transactions</div>
                        <div class="account-orders__content">
                            <div class="account-table account-table--referal">
                                <div class="account-table__thead">
                                    <div class="account-table__inner d-flex">
                                        <div class="account-table__left account-table__left-3">
                                            <div class="account-table__left-inner d-flex">
                                                <div class="account-table__name-col account-table__col">
                                                    <div class="account-table__th">Имя</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-table__right collapse">
                                            <div class="account-table__right-inner d-flex">
                                                <div class="account-table__online-col account-table__col account-table__col--px-4">
                                                    <div class="account-table__th">Последний онлайн</div>
                                                </div>
                                                <div class="account-table__month-col account-table__col account-table__col--px-4">
                                                    <div class="account-table__th top">
                                                        <div class="account-table__th-inner d-flex">
                                                            <div class="account-table__th-txt">Месячный доход</div>
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
                                                <div class="account-table__week-col account-table__col account-table__col--px-4">
                                                    <div class="account-table__th bottom">
                                                        <div class="account-table__th-inner d-flex">
                                                            <div class="account-table__th-txt">Недельный доход</div>
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
                                                <div class="account-table__total-col account-table__col account-table__col--px-4">
                                                    <div class="account-table__th">
                                                        <div class="account-table__th-inner d-flex">
                                                            <div class="account-table__th-txt">Доход всего</div>
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
                                    </div>
                                </div>
                                <div class="account-table__body">
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
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
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
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
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
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
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
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
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
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
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
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
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
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
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
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
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
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
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-3">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Имя:</div>
                                                            <div class="account-table__txt">Denys Kozyr</div>
                                                        </div>
                                                        <div class="account-table__date account-table__date--d-hidden">
                                                            <div class="account-table__name account-table__date-name">Всего:</div>
                                                            <div class="account-table__txt account-table__txt--total">320$</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="account-table__left-hidden"> <a class="account-table__open icon" href="#info10" data-bs-toggle="collapse">
                                                        <svg class="svg-sprite-icon icon-down-225">
                                                            <use xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                        </svg></a></div>
                                            </div>
                                            <div class="account-table__right collapse" id="info10">
                                                <div class="account-table__right-inner d-flex">
                                                    <div class="account-table__online-col account-table__col">
                                                        <div class="account-table__name">Последний онлайн:</div>
                                                        <div class="account-table__txt account-table__nowrap">27.04.23</div>
                                                    </div>
                                                    <div class="account-table__month-col account-table__col">
                                                        <div class="account-table__name">Месячный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">42 $</div>
                                                    </div>
                                                    <div class="account-table__week-col account-table__col">
                                                        <div class="account-table__name">Недельный доход:</div>
                                                        <div class="account-table__txt account-table__nowrap">5 $</div>
                                                    </div>
                                                    <div class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                        <div class="account-table__name">Доход всего:</div>
                                                        <div class="account-table__txt account-table__txt--total account-table__nowrap">320 $</div>
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
