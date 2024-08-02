@extends('layouts.app')

@section('title', '')

@section('content')
    <div class="recoveryPassword">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <div class="modal-content">
                        <a class="modal-close icon" href="#" data-bs-dismiss="modal">
                            <svg class="svg-sprite-icon icon-x-close">
                                <use xlink:href="@images/svg/symbol/sprite.svg#x-close"></use>
                            </svg>
                        </a>
                        <div class="modal-content__head">
                            <div class="modal-head">
                                <div class="modal-head__info">
                                    <div class="modal-head__title title">Регистрация</div>
                                </div>
                            </div>
                        </div>
                    <registration referral="{{$code}}"></registration>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
