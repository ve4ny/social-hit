@include('header.header')
<div class="content">
    <div class="recoveryPassword">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <h1 class="recoveryPassword__title title">Регистрация с реферальным кодом</h1>
                    <registration referral="{{$code}}"></registration>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
