@include('header.header', [
    'meta' => "<meta http-equiv=\"refresh\" content=\"0;url={$redirectUrl}\">"
])
<div class="content">
    <div class="account">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <form class="refill-form form w-block">
                        <div class="refill-form__item">
                            <h2 class="refill__title title">Подождите, перенаправляем на страницу платёжного
                                сервиса</h2>
                        </div>
                        <div class="refill-form__item">
                            <p>Если перенаправление не произошло автоматически, нажмите на ссылку ниже</p>
                        </div>
                        <div class="refill-form__item">
                            <a class="refill-form__btn btn" href="{{$redirectUrl}}">Перейти к оплате</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('footer')
