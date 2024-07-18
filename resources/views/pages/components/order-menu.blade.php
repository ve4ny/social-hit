<div class="order-menu">
    @foreach($menu as $key => $item)
        <div class="order-menu__item">
            <div class="social-link"><a class="social-link__open d-flex" href="#info{{$key}}"
                                        data-bs-toggle="collapse" aria-expanded="true"> <span
                        class="social-link__open-img centered">
                          <picture>
                            <source srcset="{{ asset($item->picture) }}" type="image/webp"><img src="{{ asset($item->picture) }}" width="28"
                                                                                                height="28" alt="img">
                          </picture></span><span class="social-link__open-txt">{{ $item->name }}</span><span
                        class="social-link__open-arrow icon">
                          <svg class="svg-sprite-icon icon-down-2">
                            <use xlink:href="/images/svg/symbol/sprite.svg#down-2"></use>
                          </svg></span></a>
                <div class="social-link__hidden collapse" id="info{{$key}}" style="">
                    <div class="social-link__hidden-inner">
                        <div class="social-link__list">
                            @foreach($item->categories as $cat)
                                <div class="social-link__list-item">
                                    <a class="social-link__type d-flex"
                                       href="/order?category={{ $cat['id'] }}">
                                        <span class="social-link__type-icon icon">
                                            @if($cat['picture'])
                                                <img src="{{$cat['picture']}}" alt="icon">
                                            @endif
                                            <!--                                  <svg class="svg-sprite-icon icon-users-plus-2">-->
                                            <!--                                    <use :xlink:href="cat.picture"></use>-->
                                            <!--                                  </svg>-->
                                        </span>
                                        <span
                                            class="social-link__type-txt">{{ $cat['rus_name'] ? $cat['rus_name'] :  $cat['jap_name'] }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
