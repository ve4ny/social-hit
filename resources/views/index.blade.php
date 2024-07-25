@include('header.header')
<div class="content">
    @if(in_array('hero', array_keys($blocks)))
        <div class="intro">
            <div class="container">
                <div class="intro-content">
                    <div class="intro-content__img">
                        <div class="intro-img">
                            <div class="intro-img__desctop"><img src="{{ isset($blocks['hero']->image['pc']) ? asset($blocks['hero']->image['pc']) : ''  }}"
                                                                 width="undefined"
                                                                 height="undefined" alt="img"/>
                            </div>
                            <div class="intro-img__mobile"><img src="{{ asset($blocks['hero']->image['mobile']) }}"
                                                                width="undefined"
                                                                height="undefined" alt="img"/>
                            </div>
                        </div>
                    </div>
                    <div class="intro-content__info">
                        <div class="intro-info">
                            <div class="intro-info__title">
                                <h1 class="intro__title title">{{ $blocks['hero']->title }}</h1>
                            </div>
                            <div class="intro-info__txt">
                                <div class="intro__txt">{{ $blocks['hero']->text }}
                                </div>
                            </div>

                            <div class="intro-info__links">
                                <div class="intro__links d-flex">
                                    @guest()
                                        <div class="intro__links-item"><a class="intro__btn btn" href="#regModal"
                                                                          data-bs-toggle="modal">Регистрация</a></div>
                                        <div class="intro__link-item"><a class="intro__link" href="#loginModal"
                                                                         data-bs-toggle="modal">Войти</a></div>
                                    @endguest
                                </div>
                            </div>

                        </div>
                        <div class="intro-stats">
                            <div class="intro__stats d-flex">
                                <div class="intro__stats-item d-flex">
                                    <div class="intro__stats-item__icon icon">
                                        <svg class="svg-sprite-icon icon-receipt-check">
                                            <use xlink:href="images/svg/symbol/sprite.svg#receipt-check"></use>
                                        </svg>
                                    </div>
                                    <div class="intro__stats-item__txt"><span class="title">143 489</span> заказов</div>
                                </div>
                                <div class="intro__stats-item d-flex">
                                    <div class="intro__stats-item__icon icon">
                                        <svg class="svg-sprite-icon icon-user-circle">
                                            <use xlink:href="images/svg/symbol/sprite.svg#user-circle"></use>
                                        </svg>
                                    </div>
                                    <div class="intro__stats-item__txt"><span class="title">21 854</span> пользователей
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-rating" @auth() style="margin-top: 90px" @endauth>
                            <div class="intro__rating d-flex">
                                <div class="intro__rating-value title">4.8 / 5</div>
                                <div class="intro__rating-icon icon">
                                    <svg class="svg-sprite-icon icon-star-2">
                                        <use xlink:href="images/svg/symbol/sprite.svg#star-2"></use>
                                    </svg>
                                </div>
                                <div class="intro__rating-txt">Рейтинг пользователей</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @include('components.index.socials')
    @include('components.index.brands')
    @guest()
        <authentication-min></authentication-min>
    @endguest
        @if(in_array('referral', array_keys($blocks)))
        <div class="referral">
            <div class="container">
                <div class="referral-content">
                    <div class="referral-content__inner row">
                        <div class="col-lg-7">
                            <div class="referral-img"><img src="{{ asset($blocks['referral']->image['pc']) }}"
                                                           width="659" height="338"
                                                           alt="img"/>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="referral-info">
                                <div class="referral__title title h1">{{ $blocks['referral']->title }}</div>
                                <div class="referral__txt">{{ $blocks['referral']->text }}</div>
                                @guest()
                                    <a class="referral__btn btn" href="#loginModal" data-bs-toggle="modal">Войти</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
        @if(in_array('about-us', array_keys($blocks)))
        <div class="about">
            <div class="container">
                <div class="about-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about__info">
                                <div class="about__title title h1">{{ $blocks['about-us']->title }}</div>
                                <div class="about__txt">
                                    <p>{{ $blocks['about-us']->text }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about__img">
                                <picture>
                                    <source srcset="{{ $blocks['about-us']->image['pc'] }}" type="image/webp"/>
                                    <img src="{{ $blocks['about-us']->image['pc'] }}" width="527" height="524"
                                         alt="img"/>
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @include('components.index.faqs')
</div>
@include('footer')
