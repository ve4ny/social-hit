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
                    @foreach($pages as $page)
                        <li class="footer-menu__item"> <a class="footer-menu__link" href="/{{$page->slug}}">{{$page->title}}</a></li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="footer__contacts">
                <ul class="footer-contacts d-flex">
                    <li class="footer-contacts__item"> <a class="footer-contacts__link" href="tel:+380661900018">+ 38 (066) 19-000-18</a></li>
                    <li class="footer-contacts__item"> <a class="footer-contacts__link" href="mailto:support@socialhit.com">support@socialhit.com </a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
@include('modals')
@vite('resources/js/app.js')


</body>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/libs.js') }}"></script>
</html>
