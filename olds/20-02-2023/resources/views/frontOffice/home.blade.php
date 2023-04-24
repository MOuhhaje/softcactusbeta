@extends('frontOffice.layouts.layout')
@section('css')
    {{-- <link href="{{ asset('front/css/style.css') }}" rel="stylesheet"/>   --}}
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')

    <main class="content">
        <img src="{{ asset('imgs/acceuil.jpg') }}" alt="" class="img-desk">
        <img src="{{ asset('imgs/phone1.png') }}" alt=""class="img-mobile">
        
    </main>

    @include('frontOffice.partialPages.ourworkHome')
    @include('frontOffice.partialPages.serviceHome')
    @include('frontOffice.partialPages.chandelleHome')
    @include('frontOffice.partialPages.teamHome')

@endsection
@section('script')
    <script>
        // ==================== nav ====================
        // #flipping-logo
        // var logo=$('img#flipping-logo');

        // //make the logo turn around itself with a 180deg rotation
        // logo.css({
        //     'transform':'rotate(180deg)',
        //     'transition':'all 0.5s ease-in-out'
        // });


        // ==================== nav ====================
        // ==================== chandelle ====================
         $(document).ready(function(){
            var wrapper = $('.wrapper');
            var box = $('.single-box');
            wrapper.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,  
                // nextArrow: '<i class="fa fa-angle-right"></i>',
                // prevArrow: '<i class="fa fa-angle-left"></i>',
                infinite: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                speed: 1000,   
            });
            
        });
        // ==================== chandelle ====================
        // var scroll = $(window).scrollTop();
        
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


        // var slideIndex = 1;
        // showDivs(slideIndex);

        // function plusDivs(n) {
        //     showDivs(slideIndex += n);
        // }

        // function showDivs(n) {
        //     var i;
        //     var x = document.getElementsByClassName("mySlides");
        //     if (n > x.length) { slideIndex = 1 }
        //     if (n < 1) { slideIndex = x.length }
        //     for (i = 0; i < x.length; i++) {
        //         x[i].style.display = "none";
        //     }
        //     x[slideIndex - 1].style.display = "block";
        // }
       
    </script>
@endsection