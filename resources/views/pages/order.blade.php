@include('header.header')
<div class="content">
    <div class="order">
        <div class="container">
            <div class="row">
                <order-page :menu="{{ $menu }}" :category="{{ $category }}" :initial-similar="{{ $similar }}"></order-page>
            </div>
        </div>
    </div>
</div>
@include('footer')
