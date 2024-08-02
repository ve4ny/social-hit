@extends('layouts.app')

@section('title', '')

@section('content')
    <div class="helpCenter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="helpCenter-links">
                        <div class="helpCenter-links__item">
                            <a class="helpCenter-link d-flex helpCenter-link--default {{ !$socialName ? 'selected' : '' }}" href="/help-center">
                                <span class="helpCenter-link__img helpCenter-link__img--sm icon">
                                    <svg class="svg-sprite-icon icon-help">
                                        <use xlink:href="{{ asset('images/svg/symbol/sprite.svg#help')}}"></use>
                                    </svg>
                                </span>
                                <span class="helpCenter-link__txt">FAQ</span>
                            </a>
                        </div>
                        @foreach($socials as $key => $social)
                            <div class="helpCenter-links__item">
                                <a class="helpCenter-link d-flex {{ $socialName === mb_strtolower($social->name) ? 'selected' : '' }}" href="/help-center/{{ mb_strtolower($social->name) }}">
                                    <span class="helpCenter-link__img icon">
                                        <picture>
                                            <source srcset="{{ asset($social->image)}}" type="image/webp">
                                            <img src="{{ asset('images/general/inst.png')}}" width="28" height="28" alt="img">
                                        </picture>
                                    </span>
                                    <span class="helpCenter-link__txt">{{ $social->name }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="helpCenter-intro">
                        <div class="helpCenter-intro__title title h1">Часто задаваемые вопросы</div>
                        <div class="helpCenter-intro__txt">Получите ответы на часто задаваемые вопросы прямо здесь! В
                            нашем обширном разделе часто задаваемых вопросов представлены быстрые и простые решения
                            распространенных вопросов и проблем.
                        </div>
                    </div>
                    <div class="faq-list">
                        @foreach($faqs as $key => $faq)
                            <div class="faq-list__item">
                                <div class="faq-item">
                                    <div class="faq-item__head">
                                        <a class="faq-item__open d-flex" href="#faq{{$key}}" data-bs-toggle="collapse">
                                            <span class="faq-item__open-txt">{{ $faq->question }}</span>
                                            <span class="faq-item__open-icon icon">
                                                <svg class="svg-sprite-icon icon-plus-15">
                                                    <use xlink:href="{{ asset('images/svg/symbol/sprite.svg#plus-15')}}"></use>
                                                </svg>
                                                <svg class="svg-sprite-icon icon-minus-15">
                                                    <use xlink:href="{{ asset('images/svg/symbol/sprite.svg#minus-15')}}"></use>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="faq-item__body collapse" id="faq{{$key}}">
                                        <div class="faq-item__body-inner">
                                            <div class="faq-item__txt">{{ $faq->answer }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
