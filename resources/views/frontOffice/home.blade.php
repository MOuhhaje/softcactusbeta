@extends('frontOffice.layouts.layout')
    @section('nav')
        <nav-included-in-hero></nav-included-in-hero>
    @endsection
@section('css')
    <link href="{{ asset('front/css/_canvas.scss') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('front/css/scroll.css') }}">
    <style>
        tspan{
            font-family: 'Bebas Neue', cursive;
        }

        .slider-container .slider .wrapper .text .text-canva{
            font-size: 2.5rem;
            font-weight: 700;
            color: #fff;
            text-align: center;
            line-height: 1.2;
            /* margin-top: 10%; */
            text-transform: uppercase;
            display: block;
            width: 100%;
        }
        .slider-container .slider .wrapper{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            pointer-events: none;
        }
        .slider-container .slider{
            position: relative;
            /* width: 100%;
            height: 100%;
            overflow: hidden; */
        }
       
        #header{
            transition: all 0.5s ease-in-out ;
        }
    </style>
@endsection

@section('content')
    {{-- @include('frontOffice.partial.header') --}}
    @include('frontOffice.partialPages.hero')
    {{-- <main> --}}
        {{-- <div class="slider-container" >
            <div class="slider">
                <img src="{{ asset('imgs/acceuil.jpg') }}" alt="" class="img-desk">
            </div>
            <div class="slider">
                <main class="content" id="global-wrapper">
                    <div class="live-background " data-x="" data-y="" style="width: 100%;">
                        <canvas class="lb-canvas"  style="width: 100%;height:100%;"></canvas>
                    </div>
                </main>
                <div class="wrapper">
                    <div class="text">
                        <span class="text-canva">
                            Le conseil est la nouvelle <br>
                            faÇon de vendre en marketing digital.
                        </span> 
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('imgs/phone1.png') }}" alt="" class="img-mobile"> --}}
    {{-- </main> --}}

    @include('frontOffice.partialPages.ourworkHome')
    @include('frontOffice.partialPages.serviceHome')
    {{-- @include('frontOffice.partialPages.teamHome') --}}
    {{-- @include('frontOffice.partialPages.NewteamHome') --}}
    @include('frontOffice.partialPages.chandelleHome')

@endsection
@section('script')
    {{-- gsap  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    {{-- stackblur --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stackblur-canvas/2.5.0/stackblur.min.js" integrity="sha512-W5pl1mdnRnOONc8pHMFi5xyBNNNHo6N7Q2psPRHWMPR47VyO6F/sL1G5PpRLBcsd9QL+WfDa0J9mEsGoxQH+RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- canvas --}}
    <script>
        var gsap = gsap || {};
        var StackBlur = StackBlur || {};
    </script>
    <script src="{{ asset('front/js/canvas.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/scroll.js') }}"></script>
    <script>
        
        $(document).ready(function(){
            var liveBackground = $('.live-background');
            var img = $('.img-desk');
            liveBackground.height(img.height());
            $(window).resize(function(){
                liveBackground.height(img.height());
            });

            var slider_container = $('.slider-container');
            
            var slider = $('.slider');
            slider_container.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,  
                infinite: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                speed: 1000,   
            });
            //when the window is under 479px hide the slider-container
            $(window).resize(function(){
                if($(window).width() < 479){
                    slider_container.hide();
                }else{
                    slider_container.show();
                }
            });
            // var wrapper=$('.wrapper');
            // wrapper.click(function(){
            //     window.location.href = "{{ route('chandelles') }}";
            // });
        });
        
        const faviconTag = document.getElementById("faviconTag");
        const isDark = window.matchMedia("(prefers-color-scheme: dark)");

        const changeFavicon = () => {
            if (isDark.matches) faviconTag.href = "{{ asset('imgs/logo-white.png') }}"
            else faviconTag.href = "{{ asset('imgs/logo-purple.png') }}"
        };
        changeFavicon();
        setInterval(changeFavicon, 1000);

        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
@endsection