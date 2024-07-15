<div class="social">
    <div class="container">
        <div class="social__title title h1">Выберите социальную сеть</div>
        <div class="social-list row">
            @foreach($socials as $key => $social)
                <div class="social-list__item col-lg-4 col-md-6">
                    <div class="social-link"><a class="social-link__open d-flex" href="#info{{$key}}"
                                                data-bs-toggle="collapse"
                                                aria-expanded="false"> <span class="social-link__open-img centered">
                      <picture>
                        <source srcset="{{asset($social->image)}}" type="image/webp"/><img
                              src="{{asset($social->image)}}"
                              width="28" height="28"
                              alt="img"/>
                      </picture></span><span class="social-link__open-txt">{{ $social->name }}</span><span
                                class="social-link__open-arrow icon">
                      <svg class="svg-sprite-icon icon-down-2">
                        <use xlink:href="images/svg/symbol/sprite.svg#down-2"></use>
                      </svg></span></a>
                            <div class="social-link__hidden collapse" id="info{{ $key }}">
                                <div class="social-link__hidden-inner">
                                    <div class="social-link__list">
                                        @foreach($social->categories as $category)
                                        <div class="social-link__list-item">
                                            <a class="social-link__type d-flex" href="/order?categoryId={{$category->id}}">
                                                <span class="social-link__type-icon icon">
                                                    @if($category->image)
                                                        <img class="svg-sprite-icon icon-users-plus-2" src="{{asset($category->image)}}" alt="Иконка категории услуг">
                                                        @else
                                                  <svg class="svg-sprite-icon icon-users-plus-2">
                                                    <use xlink:href="images/svg/symbol/sprite.svg#users-plus-2"></use>
                                                  </svg>
                                                        @endif
                                                </span>
                                                <span class="social-link__type-txt">
                                                    @if($category->rus_name)
                                                    {{ $category->rus_name }}
                                                        @else
                                                    {{ $category->jap_name }}
                                                        @endif
                                                </span>
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
    </div>
</div>
