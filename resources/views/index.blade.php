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
                                <div class="intro__links-item"><a class="intro__btn btn" href="#">Регистрация</a></div>
                                <div class="intro__link-item"><a class="intro__link" href="#">Войти</a></div>
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
                    <div class="intro-rating">
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
    <div class="social">
        <div class="container">
            <div class="social__title title h1">Выберите социальную сеть</div>
            <div class="social-list row">
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info1" data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/inst.webp" type="image/webp"/><img src="images/general/inst.png"
                                                                                          width="28" height="28"
                                                                                          alt="img"/>
                      </picture></span><span class="social-link__open-txt">Instagram</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info1">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info2" data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/fb.webp" type="image/webp"/><img src="images/general/fb.png"
                                                                                        width="28" height="28"
                                                                                        alt="img"/>
                      </picture></span><span class="social-link__open-txt">Facebook</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info2">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info3" data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/tg.webp" type="image/webp"/><img src="images/general/tg.png"
                                                                                        width="28" height="28"
                                                                                        alt="img"/>
                      </picture></span><span class="social-link__open-txt">Telegram</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info3">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info4" data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/twitch.webp" type="image/webp"/><img
                              src="images/general/twitch.png" width="28" height="28" alt="img"/>
                      </picture></span><span class="social-link__open-txt">Twitch</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info4">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info5" data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/yt.webp" type="image/webp"/><img src="images/general/yt.png"
                                                                                        width="28" height="28"
                                                                                        alt="img"/>
                      </picture></span><span class="social-link__open-txt">Youtube</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info5">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info6" data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/tiktok.webp" type="image/webp"/><img
                              src="images/general/tiktok.png" width="28" height="28" alt="img"/>
                      </picture></span><span class="social-link__open-txt">TikTok</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info6">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info7" data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/in.webp" type="image/webp"/><img src="images/general/in.png"
                                                                                        width="28" height="28"
                                                                                        alt="img"/>
                      </picture></span><span class="social-link__open-txt">Linkedin</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info7">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info8" data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/snap.webp" type="image/webp"/><img src="images/general/snap.png"
                                                                                          width="28" height="28"
                                                                                          alt="img"/>
                      </picture></span><span class="social-link__open-txt">Snapchat</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info8">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info9" data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/apps.webp" type="image/webp"/><img src="images/general/apps.png"
                                                                                          width="28" height="28"
                                                                                          alt="img"/>
                      </picture></span><span class="social-link__open-txt">Apps</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info9">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info10"
                                                data-bs-toggle="collapse" aria-expanded="false"> <span
                                class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/shazam.webp" type="image/webp"/><img
                              src="images/general/shazam.png" width="28" height="28" alt="img"/>
                      </picture></span><span class="social-link__open-txt">Shazam</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info10">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info11"
                                                data-bs-toggle="collapse" aria-expanded="false"> <span
                                class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/sc.webp" type="image/webp"/><img src="images/general/sc.png"
                                                                                        width="28" height="28"
                                                                                        alt="img"/>
                      </picture></span><span class="social-link__open-txt">Soundcloud</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info11">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info12"
                                                data-bs-toggle="collapse" aria-expanded="false"> <span
                                class="social-link__open-img centered">
                      <picture>
                        <source srcset="images/general/spot.webp" type="image/webp"/><img src="images/general/spot.png"
                                                                                          width="28" height="28"
                                                                                          alt="img"/>
                      </picture></span><span class="social-link__open-txt">Spotify</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                        <div class="social-link__hidden collapse" id="info12">
                            <div class="social-link__hidden-inner">
                                <div class="social-link__list">
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-users-plus-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                              </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-thumbs-up-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                              </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex selected"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-eye-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                              </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                    <div class="social-link__list-item"><a class="social-link__type d-flex"
                                                                           href="#"> <span
                                                class="social-link__type-icon icon">
                              <svg class="svg-sprite-icon icon-message-text-circle-2">
                                <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                              </svg></span><span class="social-link__type-txt">Комменты</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <div class="enter">
        <div class="container">
            <div class="enter-content">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <form class="enter-form form" action="/">
                            <div class="enter-form__title">Начните получать множество преимуществ от Social-Hit, войдя в
                                нашу панель!
                            </div>
                            <div class="enter-form__group">
                                <div class="enter-form__group-left">
                                    <div class="enter-form__fields row">
                                        <div class="col-lg-6">
                                            <div class="form-item">
                                                <input class="form-input" type="email" placeholder="Почта">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-item">
                                                <input class="form-input" type="password" placeholder="Пароль">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-auto">
                                            <div class="enter-form__txt"><span>Не имеете аккаунта?</span><a href="#">Регистрация</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-auto">
                                            <div class="enter-form__txt"><a href="#">Забыли пароль?</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="enter-form__group-right">
                                    <button class="enter-form__btn btn" type="submit">Войти</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <a class="referral__btn btn" href="#">Войти</a>
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
    <div class="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="faq__title title h1">Часто задаваемые вопросы</div>
                    <a class="faq__btn btn btn-black" href="#">Узнать больше </a>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="faq-list">
                        <div class="faq-list__item">
                            <div class="faq-item">
                                <div class="faq-item__head"><a class="faq-item__open d-flex" href="#faq1"
                                                               data-bs-toggle="collapse"> <span
                                            class="faq-item__open-txt">Я беспокоюсь о том, что меня могут заблокировать в Instagram, может ли это случиться?</span><span
                                            class="faq-item__open-icon icon">
                            <svg class="svg-sprite-icon icon-plus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#plus-15"></use>
                            </svg>
                            <svg class="svg-sprite-icon icon-minus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#minus-15"></use>
                            </svg></span></a></div>
                                <div class="faq-item__body collapse" id="faq1">
                                    <div class="faq-item__body-inner">
                                        <div class="faq-item__txt">No, your account can't being blocked. Instagram
                                            doesn't block users who use services of promotion.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-list__item">
                            <div class="faq-item">
                                <div class="faq-item__head"><a class="faq-item__open d-flex" href="#faq2"
                                                               data-bs-toggle="collapse"> <span
                                            class="faq-item__open-txt">Могу ли я получить комментарии по моему заказу?</span><span
                                            class="faq-item__open-icon icon">
                            <svg class="svg-sprite-icon icon-plus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#plus-15"></use>
                            </svg>
                            <svg class="svg-sprite-icon icon-minus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#minus-15"></use>
                            </svg></span></a></div>
                                <div class="faq-item__body collapse" id="faq2">
                                    <div class="faq-item__body-inner">
                                        <div class="faq-item__txt">No, your account can't being blocked. Instagram
                                            doesn't block users who use services of promotion.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-list__item">
                            <div class="faq-item">
                                <div class="faq-item__head"><a class="faq-item__open d-flex" href="#faq3"
                                                               data-bs-toggle="collapse"> <span
                                            class="faq-item__open-txt">Как получить подписку на автоматические лайки?</span><span
                                            class="faq-item__open-icon icon">
                            <svg class="svg-sprite-icon icon-plus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#plus-15"></use>
                            </svg>
                            <svg class="svg-sprite-icon icon-minus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#minus-15"></use>
                            </svg></span></a></div>
                                <div class="faq-item__body collapse" id="faq3">
                                    <div class="faq-item__body-inner">
                                        <div class="faq-item__txt">No, your account can't being blocked. Instagram
                                            doesn't block users who use services of promotion.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq-list__item">
                            <div class="faq-item">
                                <div class="faq-item__head"><a class="faq-item__open d-flex" href="#faq4"
                                                               data-bs-toggle="collapse"> <span
                                            class="faq-item__open-txt">Почему люди отписываются и есть ли у вас гарантия на этот случай?</span><span
                                            class="faq-item__open-icon icon">
                            <svg class="svg-sprite-icon icon-plus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#plus-15"></use>
                            </svg>
                            <svg class="svg-sprite-icon icon-minus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#minus-15"></use>
                            </svg></span></a></div>
                                <div class="faq-item__body collapse" id="faq4">
                                    <div class="faq-item__body-inner">
                                        <div class="faq-item__txt">No, your account can't being blocked. Instagram
                                            doesn't block users who use services of promotion.
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
</div>
@include('footer')
