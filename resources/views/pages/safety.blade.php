@include('header.header')
<div class="content">
    <div class="account">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    @include('pages.components.balance')
                    @include('pages.components.menu')
                </div>
                <div class="col-xl-9 col-lg-8">
                    <safety
                        :user="{{json_encode($user)}}"
                        :email_changes="{{ json_encode($email_changes) }}">
                    </safety>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
