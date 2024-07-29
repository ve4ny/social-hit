<div class="header__m-menu">
    <a class="open-menu icon" href="#">
        <svg class="svg-sprite-icon icon-menu-3">
            <use xlink:href="images/svg/symbol/sprite.svg#menu-3"></use>
        </svg>
        <svg class="svg-sprite-icon icon-close-15">
            <use xlink:href="images/svg/symbol/sprite.svg#close-15"></use>
        </svg>
    </a>
</div>
<div class="header__logo">
    <a class="logo" href="/">
        <img src="/images/general/logo.svg" width="undefined" height="undefined" alt="img"/>
    </a>
</div>
@guest
    <div class="header__m-user">
        <a class="open-user icon" href="#loginModal" data-bs-toggle="modal">
            <svg class="svg-sprite-icon icon-user-3">
                <use xlink:href="/images/svg/symbol/sprite.svg#user-3"></use>
            </svg>
        </a>
    </div>
@endguest
@auth()
    <div class="header__m-user">
        <a class="open-user icon" href="#" data-bs-toggle="dropdown">
            <svg class="svg-sprite-icon icon-user-3">
                <use xlink:href="/images/svg/symbol/sprite.svg#user-3"></use>
            </svg>
        </a>
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
@endauth

