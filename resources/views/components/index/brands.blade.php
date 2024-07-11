@if(count($brands) > 0)
    <div class="brands">
        <div class="container">
            <div class="brands-list row">
                @foreach($brands as $brand)
                    <div class="brands-list__item col-auto">
                        <div class="brands-img"><img src="{{ asset($brand->image) }}" alt="img"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
