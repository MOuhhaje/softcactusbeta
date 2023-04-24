
@extends('frontOffice.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/refernecePages.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/scroll.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/hover.css') }}">

    <style>
       svg {
            position: absolute;
            bottom: 0;
            margin-left: 10px;
            fill: none;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke:white;
            stroke-width: 3;
            transform: translate(120px,-34px);
            transition: all 0.3s ease;
            animation: move 1s infinite;
        }
        @keyframes move {
            0% {
                transform: translate(120px,-34px);
            }
            50% {
                transform: translate(115px,-34px);
            }
            100% {
                transform: translate(120px,-34px);
            }
        }
    </style>
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')
  

    <main class="container">
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
                <img src="{{ asset('front/img/SupCanada/Banner.png') }}" alt="">
            </div>
       </div>
       <div class="row w-100">
            <section id="panels">
                <div id="panels-container" style="width: 200%;">
                  <article id="panel-1" class="panel ">
                    <div class="container">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{ asset('front/img/SupCanada/SupCanada-1.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </article>
                  <article id="panel-2" class="panel ">
                    <div class="container">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{ asset('front/img/SupCanada/SupCanada-2.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </article>
                  {{-- <article id="panel-2" class="panel ">
                    <div class="container">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{ asset('front/img/Cleanco/Cleanco-3.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </article> --}}
                </div>
            </section>
       </div>
       <div class="row w-100 align-items-center justify-content-between relative">
            <div class="hover-over-words">
                <div class="text-1">
                   <p class="p1">
                        Enjoyed?
                    </p>
                    <p class="p2">
                        go next
                    </p>
                </div>
            </div>
            <div class="hover-over-words overlay">
                <div class="text-1">
                   <p class="p1">
                        Enjoyed?
                    </p>
                    <p class="p2" onclick="window.location.href='{{ route('Kockpit-konsulting') }}'">
                        go next
                    </p>
                    <svg viewBox="0 0 13 10" height="30px" width="45px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </div>
            </div>
            <div class="img-tooltip">
                <a href="{{ route('Kockpit-konsulting') }}">
                    <img src="{{ asset('front/img/Kockpit-konsulting/Banner.png') }}" alt="" style="height: 100%;">
                </a>
            </div>
       </div>
    </main>

   
@endsection

@section('script')
    <script src="{{ asset('front/js/scroll.js') }}"></script>
    <script>
        const overlay = document.querySelector('.overlay');
        window.addEventListener('mousemove', (e) => {
            const {clientX, clientY} = e;
            const x = Math.round(clientX / window.innerWidth * 100);
            const y = Math.round(clientY / window.innerHeight * 100);
            gsap.to(overlay, {
                '--x': `${x}%`,
                '--y': `${y}%`,
                duration: 0.5,
                ease: 'sine.out'
            });
        });
        $('.p2').hover(function(){
            $('.img-tooltip').addClass('show');
        }, function(){
            $('.img-tooltip').removeClass('show');
        });
        
    </script>
@endsection
