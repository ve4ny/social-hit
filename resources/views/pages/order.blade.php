@extends('layouts.app')

@section('title', '')

@section('content')
    <div class="order">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order__left">
                    @include('pages.components.order-menu')
                </div>
                <order-page :user="{{ $user }}" :menu="{{ $menu }}" :social="{{ $social }}" :category="{{ $category }}" :service="{{ $service }}" :initial-similar="{{ $similar }}"></order-page>
            </div>
        </div>
    </div>
@endsection
