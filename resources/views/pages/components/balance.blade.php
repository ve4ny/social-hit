<div class="account-balance">
    <div class="account-balance__title">Баланс:</div>
    <div class="account-balance__info d-flex">
        <div class="account-balance__value">{{ $user->balance ? $user->balance->amount : 0 }}₽</div>
        <a class="account-balance__btn btn btn-black" href="/refill">Пополнить</a>
    </div>
</div>
