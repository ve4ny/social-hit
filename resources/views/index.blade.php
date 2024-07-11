@include('header.header')
<div class="content">
    <div class="intro">
        <div class="container">
            <div class="intro-content">
                <div class="intro-content__img">
                    <div class="intro-img">
                        <div class="intro-img__desctop"><img src="images/general/intro-img.svg" width="undefined"
                                                             height="undefined" alt="img"/>
                        </div>
                        <div class="intro-img__mobile"><img src="images/general/intro-img-m.svg" width="undefined"
                                                            height="undefined" alt="img"/>
                        </div>
                    </div>
                </div>
                <div class="intro-content__info">
                    <div class="intro-info">
                        <div class="intro-info__title">
                            <h1 class="intro__title title">Покорите социальные сети</h1>
                        </div>
                        <div class="intro-info__txt">
                            <div class="intro__txt">В современном мире социальные сети выходят за рамки онлайн-чатов;
                                они являются яркими платформами для самовыражения и зарабатывания денег. Однако, чтобы
                                по-настоящему преуспеть и добиться заметных результатов в продвижении в социальных
                                сетях, иногда собственных усилий недостаточно. Именно тогда обращение к профессионалам
                                может иметь решающее значение.
                            </div>
                        </div>

                            <div class="intro-info__links">
                                <div class="intro__links d-flex">
                                    @guest()
                                        <div class="intro__links-item"><a class="intro__btn btn" href="#regModal" data-bs-toggle="modal">Регистрация</a></div>
                                        <div class="intro__link-item"><a class="intro__link" href="#loginModal" data-bs-toggle="modal">Войти</a></div>
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
    @include('components.index.socials')
    <div class="brands">
        <div class="container">
            <div class="brands-list row">
                <div class="brands-list__item col-auto">
                    <div class="brands-img"><img src="images/general/brands-1.svg" alt="img"></div>
                </div>
                <div class="brands-list__item col-auto">
                    <div class="brands-img"><img src="images/general/brands-2.svg" alt="img"></div>
                </div>
                <div class="brands-list__item col-auto">
                    <div class="brands-img"><img src="images/general/brands-3.svg" alt="img"></div>
                </div>
                <div class="brands-list__item col-auto">
                    <div class="brands-img"><img src="images/general/brands-4.svg" alt="img"></div>
                </div>
                <div class="brands-list__item col-auto">
                    <div class="brands-img"><img src="images/general/brands-5.svg" alt="img"></div>
                </div>
            </div>
        </div>
    </div>
    @guest()
        <authentication-min></authentication-min>
    @endguest
    <div class="referral">
        <div class="container">
            <div class="referral-content">
                <div class="referral-content__inner row">
                    <div class="col-lg-7">
                        <div class="referral-img"><img src="images/general/referral-img.svg" width="659" height="338"
                                                       alt="img"/>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="referral-info">
                            <div class="referral__title title h1">Реферальная программа</div>
                            <div class="referral__txt">Увеличьте популярность своего аккаунта в социальных сетях в
                                несколько раз с помощью нашей панели для накрутки лайков! Наша инновационная технология
                                позволит вам получить сотни и тысячи лайков за короткое время.
                            </div>
                            @guest()
                                <a class="referral__btn btn" href="#loginModal" data-bs-toggle="modal">Войти</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="about-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__info">
                            <div class="about__title title h1">О нас</div>
                            <div class="about__txt">
                                <p>Основатель ООО «Social Hit» — 18-летний предприниматель и эксперт по социальным сетям
                                    родом из Ямайки.</p>
                                <p>Они верят в то, что стремятся к более высоким целям, чем те, которые, по их мнению,
                                    они могут достичь, а не просто пытаются превзойти других. Основатель поощряет
                                    стремление постоянно совершенствоваться, а не сравнивать себя с другими.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__img">
                            <picture>
                                <source srcset="images/general/about-img.webp" type="image/webp"/>
                                <img src="images/general/about-img.png" width="527" height="524" alt="img"/>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.index.faqs')
</div>
@include('footer')
