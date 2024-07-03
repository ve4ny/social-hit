<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <Authentication></Authentication>
    </div>
</div>
<div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <Registration></Registration>
    </div>
</div>
<div class="modal fade" id="resetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><a class="modal-close icon" href="#" data-bs-dismiss="modal">
                <svg class="svg-sprite-icon icon-x-close">
                    <use xlink:href="images/svg/symbol/sprite.svg#x-close"></use>
                </svg></a>
            <div class="modal-content__head">
                <div class="modal-head">
                    <div class="modal-head__logo"> <img src="images/general/logo.svg" width="104" height="48" alt="img"/>
                    </div>
                    <div class="modal-head__info">
                        <div class="modal-head__title title">Сброс пароля</div>
                    </div>
                </div>
            </div>
            <div class="modal-content__body">
                <form class="modal-form form" action="/">
                    <div class="modal-form__fields">
                        <div class="modal-form__item">
                            <div class="form-item">
                                <div class="form-item__label">Почта:</div>
                                <div class="form-item__field">
                                    <input class="form-input" type="email" placeholder="Введите почту">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-form__actions">
                        <div class="modal-form__item modal-form__item--mb-2">
                            <button class="modal-form__btn btn" type="submit">Сбросить пароль</button>
                        </div>
                        <div class="modal-form__item"><a class="modal-form__bottom-link" href="#loginModal" data-bs-toggle="modal">Войти в систему</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="fastModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content"><a class="modal-close icon" href="#" data-bs-dismiss="modal">
                <svg class="svg-sprite-icon icon-x-close">
                    <use xlink:href="images/svg/symbol/sprite.svg#x-close"></use>
                </svg></a>
            <div class="modal-content__head">
                <div class="modal-head modal-head--center">
                    <div class="modal-head__logo"> <img src="images/general/logo.svg" width="104" height="48" alt="img"/>
                    </div>
                    <div class="modal-head__info">
                        <div class="modal-head__title title">Введите <br>почту</div>
                    </div>
                </div>
            </div>
            <div class="modal-content__body">
                <form class="modal-form form" action="/">
                    <div class="modal-form__fields">
                        <div class="modal-form__item">
                            <div class="modal-form__txt">Создав учетную запись, вы сможете отслеживать свой заказ со своей панели управления.</div>
                        </div>
                        <div class="modal-form__item">
                            <div class="form-item">
                                <div class="form-item__label">Почта:</div>
                                <div class="form-item__field">
                                    <input class="form-input" type="email" placeholder="Введите почту">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-form__actions">
                        <div class="modal-form__item modal-form__item--mb-2">
                            <button class="modal-form__btn btn" type="submit">Сделать заказ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-order modal-dialog-centered">
        <div class="modal-content modal-content--p2"> <a class="modal-close icon" href="#" data-bs-dismiss="modal">
                <svg class="svg-sprite-icon icon-x-close">
                    <use xlink:href="images/svg/symbol/sprite.svg#x-close"></use>
                </svg></a>
            <div class="modal-order">
                <div class="modal-order__title">Информация о заказе</div>
                <div class="modal-order__table-wrapper">
                    <table class="modal-order__table">
                        <tbody>
                        <tr>
                            <td>Дата</td>
                            <td>
                                <div class="modal-order__date">
                                    <div class="modal-order__date-date">20.04.23</div>
                                    <div class="modal-order__date-time">14:45</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>4e8ThK9</td>
                        </tr>
                        <tr>
                            <td>Услуга</td>
                            <td>Telegram Post Views [Last 1] [Refill: No] [Max: 100K] [Start Time: 1 Hour] [Speed: 100K/Day]</td>
                        </tr>
                        <tr>
                            <td>Количестов и цена</td>
                            <td>250 / 8 ₽ </td>
                        </tr>
                        <tr>
                            <td>Ссылка</td>
                            <td>https://t.me/kozyrhistory</td>
                        </tr>
                        <tr>
                            <td>Статус заказа</td>
                            <td>
                                <div class="account-table__status account-table__status--process">В процессе</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><a class="modal-order__btn btn" href="#"> <span class="modal-order__btn-icon icon">
                <svg class="svg-sprite-icon icon-return-15">
                  <use xlink:href="images/svg/symbol/sprite.svg#return-15"></use>
                </svg></span><span class="modal-order__btn-txt">Заказать заново</span></a>
            </div>
        </div>
    </div>
</div>
