@include('header.header')
<div class="content">
    <div class="recoveryPassword">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <h1 class="recoveryPassword__title title">Восстановление пароля</h1>
                    <password-reset email="{{$email}}"></password-reset>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
