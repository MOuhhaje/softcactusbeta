@extends('frontOffice.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/refernecePages.css') }}">
    
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')
  

    <main class="container">
       {{--  four sections --}}
       <div class="row w-90">
            <div class="left">
                <h2 class="color-text title">Project description<span class="color-2">.</span></h2>
                <div class="text">
                    <p>
                        Here goes a general description about the project, what they do , and what are the problem that  they faced, we can even say their services in general and their goal or the end result that they wanted to reach .
                    </p>
                </div>
            </div>
            <div class="right">
                <h2 class="color-text title">Services que nous avons fournis<span class="color-2">.</span></h2>
                <div class="list color-text">
                    <ul>
                        <li>Branding</li>
                        <li>Community management</li>
                        <li>Web development</li>
                    </ul>
                </div>
            </div>
       </div>
       <div class="row w-100">
            <div class="banner w-100">
                <img src="{{ asset('front/img/LLF/banner.png') }}" alt="">
            </div>
       </div>
       <div class="row w-100">
            <div class="slide-container">
                <div class="slide">
                    <img src="{{ asset('front/img/LLF/LLF-01.png') }}" alt="" >
                </div>
                <div class="slide">
                    <img src="{{ asset('front/img/LLF/LLF-02.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('front/img/LLF/LLF-03.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('front/img/LLF/LLF-04.png') }}" alt="">
                </div>
            </div>
       </div>
       <div class="row w-90 align-items-center justify-content-between">
            <div class="enjoyed">
                <svg xmlns="http://www.w3.org/2000/svg" width="60vw" height="30vw" viewBox="0 0 1200 600">
                    <defs>
                        <style>
                            .a {
                                fill: #00ffc4;
                            }

                            .b {
                                fill: #2f0052;
                                font-size: 190px;   
                            }

                            .b,
                            .c,
                            .d {
                                font-family: SegoeUI-Bold, Segoe UI;
                                font-weight: 700;
                            }

                            .c {
                                fill: #eb00ff;
                                font-size: 162px;
                            }

                            .d {
                                fill: #f8ac00;
                                font-size: 144px;
                                opacity: 0.198;
                            }
                        </style>
                    </defs>
                    <g transform="translate(-57 -3133)" id="Group_1" data-name="Group 1">
                        <circle class="a" cx="261" cy="261" r="261" transform="translate(57 3133)"></circle>
                        <text class="b" transform="translate(150 3530)">
                            <tspan x="0" y="0">Enjoyed</tspan>
                        </text><text class="c" transform="translate(892 3531)">
                            <tspan x="35" y="0">?</tspan>
                        </text><text class="d" transform="translate(487 3685)">
                            <tspan x="0" y="0">go next</tspan>
                        </text>
                    </g>
                </svg>
            </div>
            <div class="next-project">
                <div>
                    <a href="{{ route('chandelles') }}">
                        <img src="{{ asset('front/img/Chandelle.png') }}" alt="" style="width: 100%;height: 100%;">
                    </a>
                </div>
            </div>
       </div>
    </main>

   
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            var slider=$('.slide-container');
              slider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                cssEase: 'ease-in-out',
                draggable: true,
                dots: false,
                arrows: false,
                infinite: false
            });
           
        });

    </script>
@endsection
