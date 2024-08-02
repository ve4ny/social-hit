@extends('layouts.app')

@section('title', '')

@section('content')
    <div class="account">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    @include('pages.components.balance')
                    @include('pages.components.menu')
                </div>
                <div class="col-xl-9 col-lg-8">
                    @if($orders->total() !== 0)
                    <orders-table
                        :orders="{{ json_encode($orders->items()) }}"
                        :current-page="{{ $orders->currentPage() }}"
                        :per-page="{{ $orders->perPage() }}"
                        :total-pages="{{ $orders->lastPage() }}"
                        :total-items="{{ $orders->total() }}"
                        :sprite="'{{ asset('images/svg/symbol/sprite.svg') }}'"
                    ></orders-table>

                    <div class="account-orders__foot">
                        <div class="account-pagination">
                            <div class="account-pagination__inner d-flex">
                                <div class="account-pagination__left">
                                    <div class="account-pagination__displaying d-flex">
                                        <div class="account-pagination__displaying-txt">Рядов на страницу:</div>
                                        <select class="account-pagination__displaying-select" id="perPageSelect">
                                            <option value="10" {{ $orders->perPage() == 10 ? 'selected' : '' }}>10
                                            </option>
                                            <option value="20" {{ $orders->perPage() == 20 ? 'selected' : '' }}>20
                                            </option>
                                            <option value="30" {{ $orders->perPage() == 30 ? 'selected' : '' }}>30
                                            </option>
                                        </select>
                                        <div class="account-pagination__displaying-txt">{{ $orders->firstItem() }}-{{ $orders->lastItem() }} из {{$orders->total()}}</div>
                                    </div>
                                </div>
                                @if($orders->total() > $orders->perPage())
                                    <div class="account-pagination__right">
                                        <ul class="account-pagination__list flex">
                                            @if($orders->currentPage() !== 1)
                                                <li class="account-pagination__list-item"><a
                                                        class="account-pagination__link centered"
                                                        href="/orders?page={{$orders->currentPage() - 1}}">
                                                        <svg class="svg-sprite-icon icon-arrow-left">
                                                            <use
                                                                xlink:href="images/svg/symbol/sprite.svg#arrow-left"></use>
                                                        </svg>
                                                    </a>
                                                </li>
                                            @endif
                                                <?php for ($i = 1; $i <= $orders->lastPage(); $i++) {
                                                if ($i === $orders->currentPage()) {
                                                    echo '<li class="account-pagination__list-item"><a
                                                    class="account-pagination__link centered selected" href="/orders?page=' . $i . '">' . $i . '</a>
                                            </li>';
                                                } else {
                                                    echo '<li class="account-pagination__list-item"><a
                                                    class="account-pagination__link centered" href="/orders?page=' . $i . '">' . $i . '</a>
                                            </li>';
                                                }

                                            } ?>
                                            @if($orders->currentPage() !== $orders->lastPage())
                                                <li class="account-pagination__list-item">
                                                    <a
                                                        class="account-pagination__link centered"
                                                        href="/orders?page={{ $orders->currentPage() + 1 }}">
                                                        <svg class="svg-sprite-icon icon-arrow-right">
                                                            <use
                                                                xlink:href="images/svg/symbol/sprite.svg#arrow-right"></use>
                                                        </svg>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @else
                        <p>Заказов пока нет</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
