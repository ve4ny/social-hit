@extends('layouts.app')

@section('title', '')

@section('content')
    <div class="contacts">
        <div class="container">
            <div class="contacts__info">
                <h1 class="contacts__title title">контакты</h1>
                <div class="contacts__links">
                    <div class="contacts__links-item">
                        <a href="tel:{{ str_replace(' ', '', optional($contacts)->phone ?? '') }}">{{ optional($contacts)->phone }}</a></div>
                    <div class="contacts__links-item">  <a href="mailto:{{ optional($contacts)->email }}">{{ optional($contacts)->email }}</a></div>
                </div>
                <div class="contacts__address">{{ optional($contacts)->address }}</div>
                <div class="contacts__social flex">
                    <div class="contacts__social-item"> <a class="contacts__social-link centered" href="#"><img src="{{ asset('images/general/contacts-fb.svg')}}" width="32" height="32" alt="img"></a></div>
                    <div class="contacts__social-item"> <a class="contacts__social-link centered" href="#"><img src="{{ asset('images/general/contacts-tw.svg')}}" width="32" height="32" alt="img"></a></div>
                    <div class="contacts__social-item"> <a class="contacts__social-link centered" href="#"><img src="{{ asset('images/general/contacts-tg.svg')}}" width="32" height="32" alt="img"></a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
