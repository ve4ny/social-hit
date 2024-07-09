<div class="account-menu">
    <div class="account-menu__item"> <a class="account-menu__link d-flex {{ request()->is('profile') ? 'selected' : '' }}" href="/profile"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-user-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#user-2"></use>
                        </svg></span><span class="account-menu__link-txt">Профиль</span></a></div>
    <div class="account-menu__item"> <a class="account-menu__link d-flex {{ request()->is('safety') ? 'selected' : '' }}" href="/safety"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-safety-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#safety-2"></use>
                        </svg></span><span class="account-menu__link-txt">Безопасность</span></a></div>
    <div class="account-menu__item"> <a class="account-menu__link d-flex {{ request()->is('referral') ? 'selected' : '' }}" href="/referral"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-user-left-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#user-left-2"></use>
                        </svg></span><span class="account-menu__link-txt">Реферальная программа</span></a></div>
    <div class="account-menu__item"> <a class="account-menu__link d-flex {{ request()->is('orders') ? 'selected' : '' }}" href="/orders"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-receipt-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#receipt-2"></use>
                        </svg></span><span class="account-menu__link-txt">Заказы</span></a></div>
    <div class="account-menu__item"> <a class="account-menu__link d-flex {{ request()->is('transactions') ? 'selected' : '' }}" href="/transactions"> <span class="account-menu__link-icon icon">
                        <svg class="svg-sprite-icon icon-switch-horizontal-2">
                          <use xlink:href="static/images/svg/symbol/sprite.svg#switch-horizontal-2"></use>
                        </svg></span><span class="account-menu__link-txt">Транзакции</span></a></div>
</div>
