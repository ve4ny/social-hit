@include('header.header')
@php
    $perPage = request('perPage', 10);
@endphp
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
                        @if($transactions->total() > 0)
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
                                    @foreach($transactions as $transaction)
                                    <div class="account-table__row">
                                        <div class="account-table__inner d-flex">
                                            <div class="account-table__left account-table__left-2">
                                                <div class="account-table__left-inner d-flex">
                                                    <div class="account-table__date-col account-table__col">
                                                        <div class="account-table__date">
                                                            <div class="account-table__name account-table__date-name">Дата:</div>
                                                            <div class="account-table__date-inner">
                                                                <div class="account-table__date-date">{{ $transaction->created_at['date'] }}</div>
                                                                <div class="account-table__date-time">{{ $transaction->created_at['time'] }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="account-table__id-col account-table__col">
                                                        <div class="account-table__id">
                                                            <div class="account-table__name account-table__id-name">ID:</div>
                                                            <div class="account-table__id-txt account-table__nowrap">{{ $transaction->id }}</div>
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
                                                        <div class="account-table__txt account-table__nowrap">{{ $transaction->payment_method }}</div>
                                                    </div>
                                                    <div class="account-table__quantity-col account-table__col">
                                                        <div class="account-table__name">Количество:</div>
                                                        <div class="account-table__txt account-table__nowrap">{{ $transaction->amount }}₽</div>
                                                    </div>
                                                    <div class="account-table__status-2-col account-table__col">
                                                        <div class="account-table__name">Статус:</div>
                                                        <div
                                                            @if($transaction->status === 'succeeded')
                                                                class="account-table__status account-table__status--success"
                                                            @elseif($transaction->status === 'waiting_for_capture')
                                                                class="account-table__status account-table__status--process"
                                                            @elseif($transaction->status === 'canceled' || $transaction->status === 'created')
                                                                class="account-table__status account-table__status--cancel"
                                                            @elseif($transaction->status === 'fail')
                                                                class="account-table__status account-table__status--error"
                                                            @endif>{{ $transaction->status_rus }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="account-orders__foot">
                            <div class="account-pagination">
                                <div class="account-pagination__inner d-flex">
                                    <div class="account-pagination__left">
                                        <div class="account-pagination__displaying d-flex">
                                            <div class="account-pagination__displaying-txt">Рядов на страницу:</div>
                                            <select class="account-pagination__displaying-select" onchange="location = '/transactions?perPage=' + this.value;">
                                                <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10 </option>
                                                <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20 </option>
                                                <option value="30" {{ $perPage == 30 ? 'selected' : '' }}>30 </option>
                                            </select>
                                            <div class="account-pagination__displaying-txt">
                                                {{ $transactions->perPage() * $transactions->currentPage() - ($transactions->perPage() - 1) }}
                                                -
                                                {{ $transactions->perPage() * $transactions->currentPage() > $transactions->total()
                                                    ? $transactions->total()
                                                    : $transactions->perPage() * $transactions->currentPage() }}
                                                из {{ $transactions->total() }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-pagination__right">
                                        <ul class="account-pagination__list flex">
                                            @if (!$transactions->onFirstPage())
                                            <li class="account-pagination__list-item">
                                                <a class="account-pagination__link centered" href="{{ $transactions->previousPageUrl() }}">
                                                    <svg class="svg-sprite-icon icon-arrow-left">
                                                        <use xlink:href="images/svg/symbol/sprite.svg#arrow-left"></use>
                                                    </svg>
                                                </a>
                                            </li>
                                            @endif
                                                @foreach ($transactions->links()->elements as $element)
                                                    @if (is_string($element))
                                                        <li class="account-pagination__list-item disabled"><span class="account-pagination__link centered">{{ $element }}</span></li>
                                                    @endif

                                                    @if (is_array($element))
                                                        @foreach ($element as $page => $url)
                                                            @if ($page == $transactions->currentPage())
                                                                <li class="account-pagination__list-item"><a href="{{ $url }}" class="account-pagination__link centered selected">{{ $page }}</a></li>
                                                            @else
                                                                <li class="account-pagination__list-item"><a href="{{ $url }}" class="account-pagination__link centered">{{ $page }}</a></li>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
{{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered selected" href="#">1</a></li>--}}
{{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">2</a></li>--}}
{{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">3</a></li>--}}
{{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">...</a></li>--}}
{{--                                            <li class="account-pagination__list-item"> <a class="account-pagination__link centered" href="#">14</a></li>--}}
                                                @if (!$transactions->onLastPage())
                                                    <li class="account-pagination__list-item">
                                                        <a class="account-pagination__link centered" href="{{ $transactions->nextPageUrl() }}">
                                                            <svg class="svg-sprite-icon icon-arrow-right">
                                                                <use xlink:href="images/svg/symbol/sprite.svg#arrow-right"></use>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                            @else
                        <p>Вы пока не совершили ни одного пополнения</p>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
