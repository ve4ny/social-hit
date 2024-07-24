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
                    <referral-balance :balance="{{ $ref_balance }}"></referral-balance>
                    <qr-generator ref-code="{{ $user->details->referral_code }}"
                                  site-url="{{ $site_url }}"></qr-generator>
                    @if($transactions)
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
                                                    <div
                                                        class="account-table__online-col account-table__col account-table__col--px-4">
                                                        <div class="account-table__th">Последний онлайн</div>
                                                    </div>
                                                    <div
                                                        class="account-table__month-col account-table__col account-table__col--px-4">
                                                        <div class="account-table__th top">
                                                            <div class="account-table__th-inner d-flex">
                                                                <div class="account-table__th-txt">Месячный доход</div>
                                                                <div class="account-table__th-sort">
                                                                    <div class="account-table__th-sort-icon icon">
                                                                        <svg
                                                                            class="svg-sprite-icon icon-bi_caret-up-fill">
                                                                            <use
                                                                                xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-up-fill"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="account-table__th-sort-icon icon">
                                                                        <svg
                                                                            class="svg-sprite-icon icon-bi_caret-down-fill">
                                                                            <use
                                                                                xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-down-fill"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="account-table__week-col account-table__col account-table__col--px-4">
                                                        <div class="account-table__th bottom">
                                                            <div class="account-table__th-inner d-flex">
                                                                <div class="account-table__th-txt">Недельный доход</div>
                                                                <div class="account-table__th-sort">
                                                                    <div class="account-table__th-sort-icon icon">
                                                                        <svg
                                                                            class="svg-sprite-icon icon-bi_caret-up-fill">
                                                                            <use
                                                                                xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-up-fill"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="account-table__th-sort-icon icon">
                                                                        <svg
                                                                            class="svg-sprite-icon icon-bi_caret-down-fill">
                                                                            <use
                                                                                xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-down-fill"></use>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="account-table__total-col account-table__col account-table__col--px-4">
                                                        <div class="account-table__th">
                                                            <div class="account-table__th-inner d-flex">
                                                                <div class="account-table__th-txt">Доход всего</div>
                                                                <div class="account-table__th-sort">
                                                                    <div class="account-table__th-sort-icon icon">
                                                                        <svg
                                                                            class="svg-sprite-icon icon-bi_caret-up-fill">
                                                                            <use
                                                                                xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-up-fill"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div class="account-table__th-sort-icon icon">
                                                                        <svg
                                                                            class="svg-sprite-icon icon-bi_caret-down-fill">
                                                                            <use
                                                                                xlink:href="static/images/svg/symbol/sprite.svg#bi_caret-down-fill"></use>
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
                                        @foreach($transactions as $t)
                                            <div class="account-table__row">
                                                <div class="account-table__inner d-flex">
                                                    <div class="account-table__left account-table__left-3">
                                                        <div class="account-table__left-inner d-flex">
                                                            <div class="account-table__date-col account-table__col">
                                                                <div class="account-table__date">
                                                                    <div
                                                                        class="account-table__name account-table__date-name">
                                                                        Имя:
                                                                    </div>
                                                                    <div
                                                                        class="account-table__txt">{{ $t['referral'] }}</div>
                                                                </div>
                                                                <div
                                                                    class="account-table__date account-table__date--d-hidden">
                                                                    <div
                                                                        class="account-table__name account-table__date-name">
                                                                        Всего:
                                                                    </div>
                                                                    <div
                                                                        class="account-table__txt account-table__txt--total">
                                                                        {{$t['total_sum']}} ₽
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="account-table__left-hidden"><a
                                                                class="account-table__open icon" href="#info1"
                                                                data-bs-toggle="collapse">
                                                                <svg class="svg-sprite-icon icon-down-225">
                                                                    <use
                                                                        xlink:href="static/images/svg/symbol/sprite.svg#down-225"></use>
                                                                </svg>
                                                            </a></div>
                                                    </div>
                                                    <div class="account-table__right collapse" id="info1">
                                                        <div class="account-table__right-inner d-flex">
                                                            <div class="account-table__online-col account-table__col">
                                                                <div class="account-table__name">Последний онлайн:</div>
                                                                <div
                                                                    class="account-table__txt account-table__nowrap">{{$t['last_login']}}</div>
                                                            </div>
                                                            <div class="account-table__month-col account-table__col">
                                                                <div class="account-table__name">Месячный доход:</div>
                                                                <div
                                                                    class="account-table__txt account-table__nowrap">{{$t['monthly_sum']}}
                                                                    ₽
                                                                </div>
                                                            </div>
                                                            <div class="account-table__week-col account-table__col">
                                                                <div class="account-table__name">Недельный доход:</div>
                                                                <div
                                                                    class="account-table__txt account-table__nowrap">{{$t['weekly_sum']}}
                                                                    ₽
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="account-table__total-col account-table__col account-table__col--m-hidden">
                                                                <div class="account-table__name">Доход всего:</div>
                                                                <div
                                                                    class="account-table__txt account-table__txt--total account-table__nowrap">{{$t['total_sum']}}
                                                                    ₽
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{--                        <div class="account-orders__foot">--}}
                            {{--                            <div class="account-pagination">--}}
                            {{--                                <div class="account-pagination__inner d-flex">--}}
                            {{--                                    <div class="account-pagination__left">--}}
                            {{--                                        <div class="account-pagination__displaying d-flex">--}}
                            {{--                                            <div class="account-pagination__displaying-txt">Рядов на страницу:</div>--}}
                            {{--                                            <select class="account-pagination__displaying-select">--}}
                            {{--                                                <option value="10" selected="">10 </option>--}}
                            {{--                                                <option value="20">20 </option>--}}
                            {{--                                                <option value="30">30 </option>--}}
                            {{--                                            </select>--}}
                            {{--                                            <div class="account-pagination__displaying-txt">1-12 из 2123</div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="account-pagination__right">--}}
                            {{--                                        <ul class="account-pagination__list flex">--}}
                            {{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">--}}
                            {{--                                                    <svg class="svg-sprite-icon icon-arrow-left">--}}
                            {{--                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#arrow-left"></use>--}}
                            {{--                                                    </svg></a></li>--}}
                            {{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered selected" href="#">1</a></li>--}}
                            {{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">2</a></li>--}}
                            {{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">3</a></li>--}}
                            {{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">...</a></li>--}}
                            {{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">14</a></li>--}}
                            {{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">--}}
                            {{--                                                    <svg class="svg-sprite-icon icon-arrow-right">--}}
                            {{--                                                        <use xlink:href="static/images/svg/symbol/sprite.svg#arrow-right"></use>--}}
                            {{--                                                    </svg></a></li>--}}
                            {{--                                        </ul>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
