<div class="header__group d-flex">
    <div class="header__menu">
        <nav class="nav">
            <ul class="menu flex">
                <li class="menu__item">
                    <a class="menu__link has-child" href="#"> <span
                            class="menu__link-txt">Услуги</span><span class="menu__link-icon icon">
                          <svg class="svg-sprite-icon icon-down-2">
                            <use xlink:href="/images/svg/symbol/sprite.svg#down-2"></use>
                          </svg></span></a>
                    <div class="menu__dropdown" id="dropdownMenu">
                        <div class="menu__dropdown-inner"><a class="menu__dropdown-back btn" href="#"><span
                                    class="menu__dropdown-back__icon icon">
                              <svg class="svg-sprite-icon icon-back-15">
                                <use xlink:href="/images/svg/symbol/sprite.svg#back-15"></use>
                              </svg></span><span class="menu__dropdown-back__txt">Назад в меню</span></a>
                            <div class="menu__dropdown-title">Services</div>
                            <div class="menu__dropdown-row d-flex">
                                <div class="menu__dropdown-col">
                                    <div class="dropdown-menu__list">
                                        @foreach($socials->slice(0, 6) as $key => $social)
                                        <div class="dropdown-menu__list-item">
                                            <a class="dropdown-menu__link d-flex"
                                               href="#hidden{{ $key }}" data-bs-toggle="collapse">
                                                <span class="dropdown-menu__link-icon">
                                                    <picture>
                                                        <source srcset="{{ asset($social->image) }}" type="image/webp"/>
                                                            <img src="{{ asset($social->image) }}" width="28" height="28" alt="img"/>
                                                    </picture>
                                                </span>
                                                <span class="dropdown-menu__link-txt">{{ $social->name }}</span>
                                                <span class="dropdown-menu__link-arrow icon">
                                                    <svg class="svg-sprite-icon icon-right-225">
                                                        <use xlink:href="/images/svg/symbol/sprite.svg#right-225"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <div class="dropdown-menu__more collapse" id="hidden{{ $key }}"
                                                 data-bs-parent="#dropdownMenu">
                                                <div class="social-link__list">
                                                    @foreach($social->categories as $category)
                                                        <div class="social-link__list-item">
                                                            <a class="social-link__type d-flex" href="/order?categoryId={{$category->id}}">
                                                                <span class="social-link__type-icon icon">
                                                                    @if($category->image)
                                                                        <img class="svg-sprite-icon icon-users-plus-2" src="{{asset($category->image)}}" alt="Иконка категории услуг">
                                                                    @else
                                                                    <svg class="svg-sprite-icon icon-users-plus-2">
                                                                        <use xlink:href="/images/svg/symbol/sprite.svg#users-plus-2"></use>
                                                                    </svg>
                                                                        @endif
                                                                </span>
                                                                <span class="social-link__type-txt">
                                                                    @if($category->rus_name)
                                                                        {{ $category->rus_name }}
                                                                    @else
                                                                        {{ $category->jap_name }}
                                                                    @endif
                                                                </span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="menu__dropdown-col">
                                    <div class="dropdown-menu__list">
                                        @foreach($socials->slice(6) as $key => $social)
                                            <div class="dropdown-menu__list-item">
                                                <a class="dropdown-menu__link d-flex"
                                                   href="#hidden1{{ $key }}"
                                                   data-bs-toggle="collapse"><span
                                                        class="dropdown-menu__link-icon">
                                      <picture>
                                        <source srcset="{{ asset($social->image) }}" type="image/webp"/><img
                                              src="{{ asset($social->image) }}" width="28" height="28" alt="img"/>
                                      </picture></span><span class="dropdown-menu__link-txt">{{ $social->name }}</span><span
                                                        class="dropdown-menu__link-arrow icon">
                                      <svg class="svg-sprite-icon icon-right-225">
                                        <use xlink:href="/images/svg/symbol/sprite.svg#right-225"></use>
                                      </svg></span></a>
                                                <div class="dropdown-menu__more collapse" id="hidden1{{ $key }}"
                                                     data-bs-parent="#dropdownMenu">
                                                    <div class="social-link__list">
                                                        @foreach($social->categories as $category)
                                                            <div class="social-link__list-item">
                                                                <a class="social-link__type d-flex" href="#">
                                                                <span class="social-link__type-icon icon">
                                                                    @if($category->image)
                                                                        <img class="svg-sprite-icon icon-users-plus-2" src="{{asset($category->image)}}" alt="Иконка категории услуг">
                                                                    @else
                                                                        <svg class="svg-sprite-icon icon-users-plus-2">
                                                                        <use xlink:href="/images/svg/symbol/sprite.svg#users-plus-2"></use>
                                                                    </svg>
                                                                    @endif
                                                                </span>
                                                                    <span class="social-link__type-txt">
                                                                    @if($category->rus_name)
                                                                            {{ $category->rus_name }}
                                                                        @else
                                                                            {{ $category->jap_name }}
                                                                        @endif
                                                                </span>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu__item"><a class="menu__link" href="/help-center">Центр помощи</a></li>
                <li class="menu__item"><a class="menu__link" href="/contacts">Контакты</a></li>
            </ul>
        </nav>
    </div>
    <div class="header__phone"><a class="header-phone" href="tel:+380661900018">+38 (066) 19-000-18</a></div>
    @auth
        <div class="header__balance">
            <div class="header-balance-wrapper">
                <div class="header-balance__title">Баланс</div>
                <div class="header-balance">
                    <div class="header-balance__value">10.24 ₽</div>
                    <a class="header-balance__btn btn" href="/refill">Пополнить</a>
                </div>
            </div>
        </div>
        <div class="header__profile">
            <div class="header-profile"><a class="header-profile__btn d-flex" href="#" data-bs-toggle="dropdown"><span
                        class="header-profile__btn-img">
                      <picture>
                          @if($user->details->image)
                              <img src="{{ asset($user->details->image) }}" style="object-fit: cover" width="40" height="40" alt="img"/>
                              @else
                              <img src="{{asset('/images/general/avatar.jpg')}}" width="40" height="40" alt="img"/>
                              @endif
                      </picture></span><span class="header-profile__btn-icon icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="/images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                <div class="header-profile__dropdown dropdown-menu dropdown-menu-end">
                    <div class="header-profile__menu">
                        <div class="header-profile__menu-item"><a class="header-profile__link d-flex" href="/profile"> <span
                                    class="header-profile__link-icon icon">
                            <svg class="svg-sprite-icon icon-user-2">
                              <use xlink:href="/images/svg/symbol/sprite.svg#user-2"></use>
                            </svg></span><span class="header-profile__link-txt">Профиль</span></a></div>
                        <div class="header-profile__menu-item"><a
                                class="header-profile__link header-profile__link--red d-flex" href="/logout"> <span
                                    class="header-profile__link-icon icon">
                            <svg class="svg-sprite-icon icon-power-2">
                              <use xlink:href="/images/svg/symbol/sprite.svg#power-2"></use>
                            </svg></span><span class="header-profile__link-txt">Выйти</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
    @guest()
        <div class="header__user">
            <ul class="user-menu flex">
                <li class="user-menu__item"><a class="user-menu__link" href="#loginModal"
                                               data-bs-toggle="modal">Вход</a></li>
                <li class="user-menu__item"><a class="user-menu__btn btn" href="#regModal" data-bs-toggle="modal">Регистрация</a>
                </li>
            </ul>
        </div>
    @endguest
</div>
