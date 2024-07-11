<div class="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="faq__title title h1">Часто задаваемые вопросы</div>
                <a class="faq__btn btn btn-black" href="/help-center">Узнать больше </a>
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="faq-list">
                    @foreach($faqs as $key => $faq)
                    <div class="faq-list__item">
                        <div class="faq-item">
                            <div class="faq-item__head"><a class="faq-item__open d-flex" href="#faq{{ $key }}"
                                                           data-bs-toggle="collapse"> <span
                                        class="faq-item__open-txt">{{ $faq->question }}</span><span
                                        class="faq-item__open-icon icon">
                            <svg class="svg-sprite-icon icon-plus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#plus-15"></use>
                            </svg>
                            <svg class="svg-sprite-icon icon-minus-15">
                              <use xlink:href="images/svg/symbol/sprite.svg#minus-15"></use>
                            </svg></span></a></div>
                            <div class="faq-item__body collapse" id="faq{{ $key }}">
                                <div class="faq-item__body-inner">
                                    <div class="faq-item__txt">{{ $faq->answer }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
