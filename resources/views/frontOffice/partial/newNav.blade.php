@php
    $color = $color ?? 'light';
@endphp
<style>
    :root {

        --white-light: #845EC2;
        --color-1-light: #12033C;
        --color-2-light: #ffd800;
        --color-3-light: #845EC2;

        --white-dark: #ffd800;
        --color-1-dark: #fff;
        --color-2-dark: #845EC2;
        --color-3-dark: #ffd800;
    }

    nav {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 999;
        /* border-bottom: .1px solid #eee; */
        overflow: hidden;
        height: 70px;
    }

    .nav-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* padding: 0 20px; */
        height: 80px;
        width: 80%;
        margin: auto;
    }

    .nav-bar ul {
        display: flex;
        justify-content: space-between;
        align-items: center;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-bar ul li {
        margin: 0 20px;
    }

    .nav-bar ul li a {
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        font-family: 'Bebas Neue', cursive;
    }

    .logo {
        width: 200px;
    }

    .logo img {
        width: 100%;
        cursor: pointer;
    }

    nav ul li a {
        letter-spacing: 2px;
        color: var(--color-1-{{ $color }});
        -webkit-transition: color .2s ease;
        -o-transition: color .2s ease;
        transition: color .2s ease;
        padding: 3px 0;
        margin-bottom: 10px;
        position: relative;
        display: inline-block;
    }

    .effect.active {
        color: var(--white-{{ $color }});
    }

    .effect.active:hover {
        color: var(--color-2-{{ $color }});
    }

    .effect::before {
        -webkit-transition: width .25s cubic-bezier(0.51, 0.18, 0, 0.88) .1s;
        -o-transition: width .25s cubic-bezier(0.51, 0.18, 0, 0.88) .1s;
        transition: width .25s cubic-bezier(0.51, 0.18, 0, 0.88) .1s;
        background: var(--color-2-{{ $color }});
    }

    .effect:hover::after,
    .effect:hover::before {
        width: 100%;
        left: 0;
    }

    .effect.active:before {
        z-index: 2;
    }

    .effect:hover {
        color: var(--color-3-{{ $color }});
    }

    .effect.active:after {
        background: var(--color-3-{{ $color }});
        width: 100%;
        left: 0;
    }

    .effect::after {
        -webkit-transition: width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        -o-transition: width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        transition: width .2s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        background: var(--color-3-{{ $color }});
    }

    .effect::after,
    .effect::before {
        content: '';
        position: absolute;
        top: calc(100% + 5px);
        width: 0;
        right: 0;
        height: 3px;
    }

    .hamburger {
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 9999;
        display: none;
        cursor: pointer;
    }

    .hamburger.show {
        display: block;
    }

    .hamburger .linee {
        width: 30px;
        height: 3px;
        background: var(--color-1-{{ $color }});
        margin: 5px 0;
        transition: all .3s ease-in-out;
    }

    .hamburger.bounce {
        animation: bounceRight 1s ease-in-out infinite;
    }

    @keyframes bounceRight {
        0% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(10px);
        }

        100% {
            transform: translateX(0);
        }
    }

    .hamburger.active .linee:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .hamburger.active .linee:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .linee:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
    }

    /* hover */
    .hamburger:hover .linee {
        background: var(--color-2-{{ $color }});
    }

    .hamburger.active:hover .linee {
        background: var(--color-1-{{ $color }});
    }

    .nav-bar-expand {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        z-index: 999;
        display: none;
        /* filter the background to blur */
    }

    .nav-bar-expand.active {
        display: block;
    }

    .nav-bar-expand .nav {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .nav-bar-expand .nav ul {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-bar-expand .nav ul li {
        margin: 20px 0;
    }

    .nav-bar-expand .nav ul li a {
        font-size: 30px;
        font-weight: 500;
        color: var(--color-1-{{ $color }});
        text-decoration: none;
        text-transform: uppercase;
        position: relative;
        transition: color .3s ease;

    }

    .nav-bar-expand .nav ul li a:hover {
        color: var(--color-1-{{ $color }});
    }

    .nav-bar-expand .nav ul li a.active {
        color: var(--color-1-{{ $color }});
    }

    .nav-bar-expand .nav ul li a.active:hover {
        color: var(--color-1-{{ $color }});
    }

    .nav-bar-expand .nav ul li a::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: var(--color-1-{{ $color }});
        z-index: -1;
        -webkit-transition: width .3s cubic-bezier(0.51, 0.18, 0, 0.88) .1s;
        -o-transition: width .3s cubic-bezier(0.51, 0.18, 0, 0.88) .1s;
        transition: width .3s cubic-bezier(0.51, 0.18, 0, 0.88) .1s;
    }

    .nav-bar-expand .nav ul li a::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: var(--color-3-{{ $color }});
        z-index: -1;
        -webkit-transition: width .25s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        -o-transition: width .25s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        transition: width .25s cubic-bezier(0.29, 0.18, 0.26, 0.83);
    }

    .nav-bar-expand .nav ul li a.active::before {
        width: 100%;
    }

    .nav-bar-expand .nav ul li a.active::after {
        width: 100%;
    }

    .nav-bar-expand .nav ul li a.effect::before {
        content: '';
        position: absolute;
        top: calc(100% + 5px);
        width: 0;
        right: 0;
        height: 3px;
        background: var(--color-1-{{ $color }});
        -webkit-transition: width .3s cubic-bezier(0.51, 0.18, 0, 0.88) .1s;
        -o-transition: width .3s cubic-bezier(0.51, 0.18, 0, 0.88) .1s;
        transition: width .3s cubic-bezier(0.51, 0.18, 0, 0.88) .1s;
    }

    .nav-bar-expand .nav ul li a.effect::after {
        content: '';
        position: absolute;
        top: calc(100% + 5px);
        width: 0;
        left: 0;
        height: 3px;
        background: var(--color-3-{{ $color }});
        -webkit-transition: width .25s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        -o-transition: width .25s cubic-bezier(0.29, 0.18, 0.26, 0.83);
        transition: width .25s cubic-bezier(0.29, 0.18, 0.26, 0.83);
    }

    .nav-bar-expand .nav ul li a.effect:hover::before {
        width: 100%;
    }

    .nav-bar-expand .nav ul li a.effect:hover::after {
        width: 100%;
    }

    .nav-bar-expand .nav ul li a.effect.active::before {
        width: 100%;
    }

    .nav-bar-expand .nav ul li a.effect.active::after {
        width: 100%;
    }

    .nav-bar-expand .nav ul li a.effect.active:hover::before {
        width: 0;
    }

    .nav-bar-expand .nav ul li a.effect.active:hover::after {
        width: 0;
    }

    .nav-bar-expand .nav ul li a.effect.active:hover {
        color: var(--color-1-{{ $color }});
    }

    .nav-bar-expand {
        background-image: url("{{ asset('imgs/bgHero.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
    }

    .nav-bar-mobile {
        height: 70px;
        width: 80%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 auto;
    }

    .nav-bar-mobile .logo2 {
        width: 180px;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav-bar-mobile .logo2 img {
        width: 100%;
    }

    @media screen and (max-width: 768px) {}
</style>
<nav>
    <div class="nav-bar active">
        <div class="logo">
            <img src="{{ asset('imgs/full-logo-purple.png') }}" alt=""
                onclick="window.location.href='{{ route('home') }}'">
        </div>
        <div class="nav">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="effect {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="effect {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">L’agence</a>
                </li>
                <li>
                    <a href="{{ route('home') }}#ourwork" class="effect {{ Route::currentRouteName() == 'services' ? 'active' : '' }}">Nos services</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="effect {{ Route::currentRouteName() == 'blog' ? 'active' : '' }}">Blog</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="effect {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="nav-bar-mobile">
        <div class="hamburger show">
            <div class="linee"></div>
            <div class="linee"></div>
            <div class="linee"></div>
        </div>
        <div class="logo2 show">
            <img src="{{ asset('imgs/full-logo-purple.png') }}" alt=""
                onclick="window.location.href='{{ route('home') }}'">
        </div>
    </div>
    <div class="nav-bar-expand ">
        {{-- <div class="nav">
            <ul>
                <li><a href="#home" class="effect active">Home</a></li>
                <li><a href="#about" class="effect">About</a></li>
                <li><a href="#services" class="effect">Services</a></li>
                <li><a href="#blog" class="effect">Blog</a></li>
                <li><a href="#contact" class="effect">Contact</a></li>
            </ul>
        </div> --}}
        <div class="nav">
            <ul>
                <li>
                    <a href="{{ route('home') }}" class="effect {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="effect {{ Route::currentRouteName() == 'about' ? 'active' : '' }}">L’agence</a>
                </li>
                <li>
                    <a href="{{ route('home') }}#ourwork" class="effect {{ Route::currentRouteName() == 'services' ? 'active' : '' }}">Nos services</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="effect {{ Route::currentRouteName() == 'blog' ? 'active' : '' }}">Blog</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="effect {{ Route::currentRouteName() == 'contact' ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    $(document).ready(function() {
        $('.hamburger').click(function() {
            $('.nav-bar-expand').toggleClass('active');
            $('.hamburger').toggleClass('active');
        });

        function checkWidth(width) {
            if ($(window).width() < width) {
                $('.nav-bar-mobile').show();
                $('.nav-bar').hide();
            } else {
                $('.nav-bar-mobile').hide();
                $('.nav-bar').show();
            }
        }
        // if screen size is less than 768px remove the nav-bar
        $(window).resize(function() {
            checkWidth(768);
        });
        checkWidth(768);
    });
</script>
