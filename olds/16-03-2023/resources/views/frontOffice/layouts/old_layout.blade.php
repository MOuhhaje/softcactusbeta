<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @hasSection('title')
            @yield('title')
        @else
            SOFT CACTUS - Agence de communication digitale
        @endif
    </title>
    @hasSection('css')
        @yield('css')
    @endif
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    {{-- slick --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('imgs/logo-purple.png') }}" id="faviconTag" />
   
</head>

<body>

    @yield('content')


    <!--==================== footer ====================-->
    <footer class="footer">
        <ul class="ul-footer">

            <li class="footer-logo">
                <a><img src="{{ asset('imgs/logo-black2.png') }}" alt=""></a>
            </li>
            <li class="social-media">
                <a target="_blank" href="https://web.facebook.com/softCactus19" class="li-fb">
                    <img src="{{ asset('imgs/fb.png') }}" alt="">
                </a>
                <a target="_blank" href="https://www.instagram.com/soft.cactus.communication/" class="li-ig">
                    <img src="{{ asset('imgs/ig.png') }}" alt="">
                </a>
                <a target="_blank" href="https://www.linkedin.com/company/soft-cactus/" class="li-in">
                    <img src="{{ asset('imgs/in.png') }}" alt="">
                </a>
            </li>
            <li class="rightss">
                <p>All rights reserved for </p>
                <p>SOFT CACTUS 2018-{{ date('Y') }}</p>
            </li>
        </ul>
    </footer>
    {{-- jQuery CDN--}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- slick CDN --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    @hasSection('script')
        @yield('script')
    @endif

</body>

</html>
