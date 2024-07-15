@include('header.header')
<div class="content">
    <div class="order">
        <div class="container">
            <div class="row">
                <order-page :menu="{{ $menu }}" :category="{{ $category }}"></order-page>
            </div>
        </div>
    </div>
</div>
@include('footer')
