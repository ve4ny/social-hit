<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @vite('resources/css/styles.scss')
    <link rel="stylesheet" type="text/css" href="css/styles.min.css">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__content d-flex">
                <div class="header__m-menu"> <a class="open-menu icon" href="#">
                        <svg class="svg-sprite-icon icon-menu-3">
                            <use xlink:href="images/svg/symbol/sprite.svg#menu-3"></use>
                        </svg>
                        <svg class="svg-sprite-icon icon-close-15">
                            <use xlink:href="images/svg/symbol/sprite.svg#close-15"></use>
                        </svg></a></div>
                <div class="header__logo"> <a class="logo" href="/"><img src="images/general/logo.svg" width="undefined" height="undefined" alt="img"/></a></div>
                <div class="header__m-user"> <a class="open-user icon" href="#">
                        <svg class="svg-sprite-icon icon-user-3">
                            <use xlink:href="images/svg/symbol/sprite.svg#user-3"></use>
                        </svg></a></div>
                <div class="header__group d-flex">
                    <div class="header__menu">
                        <nav class="nav">
                            <ul class="menu flex">
                                <li class="menu__item"> <a class="menu__link has-child" href="#"> <span class="menu__link-txt">Услуги</span><span class="menu__link-icon icon">
                          <svg class="svg-sprite-icon icon-down-2">
                            <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                          </svg></span></a>
                                    <div class="menu__dropdown" id="dropdownMenu">
                                        <div class="menu__dropdown-inner"> <a class="menu__dropdown-back btn" href="#"><span class="menu__dropdown-back__icon icon">
                              <svg class="svg-sprite-icon icon-back-15">
                                <use xlink:href="images/svg/symbol/sprite.svg#back-15"></use>
                              </svg></span><span class="menu__dropdown-back__txt">Назад в меню</span></a>
                                            <div class="menu__dropdown-title">Services </div>
                                            <div class="menu__dropdown-row d-flex">
                                                <div class="menu__dropdown-col">
                                                    <div class="dropdown-menu__list">
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden1" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/inst.webp" type="image/webp"/><img src="images/general/inst.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Instagram</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden1" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden2" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/fb.webp" type="image/webp"/><img src="images/general/fb.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Facebook</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden2" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden3" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/tg.webp" type="image/webp"/><img src="images/general/tg.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Telegram</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden3" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden4" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/twitch.webp" type="image/webp"/><img src="images/general/twitch.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Twitch</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden4" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden5" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/yt.webp" type="image/webp"/><img src="images/general/yt.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Youtube</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden5" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden6" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/tiktok.webp" type="image/webp"/><img src="images/general/tiktok.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">TikTok</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden6" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="menu__dropdown-col">
                                                    <div class="dropdown-menu__list">
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden7" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/in.webp" type="image/webp"/><img src="images/general/in.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Linkedin</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden7" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden8" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/snap.webp" type="image/webp"/><img src="images/general/snap.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Snapchat</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden8" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden9" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/apps.webp" type="image/webp"/><img src="images/general/apps.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Apps</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden9" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden10" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/shazam.webp" type="image/webp"/><img src="images/general/shazam.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Shazam</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden10" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden11" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/sc.webp" type="image/webp"/><img src="images/general/sc.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Soundcloud</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden11" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu__list-item"> <a class="dropdown-menu__link d-flex" href="#hidden12" data-bs-toggle="collapse"><span class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="images/general/spot.webp" type="image/webp"/><img src="images/general/spot.png" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">Spotify</span><span class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                            <div class="dropdown-menu__more collapse" id="hidden12" data-bs-parent="#dropdownMenu">
                                                                <div class="social-link__list">
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-users-plus-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                            </svg></span><span class="social-link__type-txt">Подписчики</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-thumbs-up-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#thumbs-up-2"></use>
                                            </svg></span><span class="social-link__type-txt">Лайки</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-eye-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#eye-2"></use>
                                            </svg></span><span class="social-link__type-txt">Просмотры</span></a></div>
                                                                    <div class="social-link__list-item"> <a class="social-link__type d-flex" href="#"> <span class="social-link__type-icon icon">
                                            <svg class="svg-sprite-icon icon-message-text-circle-2">
                                              <use xlink:href="images/svg/symbol/sprite.svg#message-text-circle-2"></use>
                                            </svg></span><span class="social-link__type-txt">Комменты </span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu__item"> <a class="menu__link" href="#">Центр помощи</a></li>
                                <li class="menu__item"> <a class="menu__link" href="#">Контакты</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__phone"> <a class="header-phone" href="tel:+380661900018">+38 (066) 19-000-18</a></div>
                    <div class="header__user">
                        <ul class="user-menu flex">
                            <li class="user-menu__item"> <a class="user-menu__link" href="#loginModal" data-bs-toggle="modal">Вход</a></li>
                            <li class="user-menu__item"> <a class="user-menu__btn btn" href="#regModal" data-bs-toggle="modal">Регистрация</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
