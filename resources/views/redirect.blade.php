@include('header.header', [
    'meta' => "<meta http-equiv=\"refresh\" content=\"0;url={$redirectUrl}\">"
])
<div class="content">
    <div class="account">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    @include('pages.components.balance')
                    @include("pages.components.menu")
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="account-block account-orders">
                        <div class="account-orders__title account-subtitle">Перенаправление на сервис опаты</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
