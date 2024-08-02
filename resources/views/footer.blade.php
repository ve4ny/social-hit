<footer class="footer">
    <div class="container">
        <div class="footer__content d-flex">
            <div class="footer__logo">
                <div class="footer-logo"><img src="{{ asset('/images/general/logo.svg') }}" width="104" height="48" alt="img"/>
                </div>
            </div>
            @if(count($pages) > 0)
            <div class="footer__menu">
                <ul class="footer-menu d-flex">
                    @foreach($pages as $title => $slug)
                        <li class="footer-menu__item"> <a class="footer-menu__link" href="/{{$slug}}">{{$title}}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="footer__contacts">
                <ul class="footer-contacts d-flex">
                    <li class="footer-contacts__item"> <a class="footer-contacts__link" href="tel:{{ str_replace(' ', '', optional($contacts)->phone ?? '') }}">{{ optional($contacts)->phone }}</a></li>
                    <li class="footer-contacts__item"> <a class="footer-contacts__link" href="mailto:{{ optional($contacts)->email }}">{{ optional($contacts)->email }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

