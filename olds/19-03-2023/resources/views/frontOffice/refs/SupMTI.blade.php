
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
                        L’École Supérieure de Management, d’Informatique et de Télécommunications SupMTI OUJDA est une institution d’enseignement supérieur privé qui fait partie du « <i><b>Groupe SupMTI</b></i> » créé en 2006 par un groupe d’enseignants pour satisfaire les besoins du secteur professionnel en cadres de haut niveau dans les domaines du génie logiciel, des systèmes d’information, des réseaux ainsi que celui du management.
                    </p>
                    <br>
                    <p>
                        Le  « <i><b>Groupe SupMTI</b></i> » regroupant pour l’instant « <b>Oujda, Rabat et Béni Mellal</b> » a pour mission d’assurer une formation d’excellence aussi bien théorique que pratique dans les domaines liés au management et des systèmes d’information et de télécommunication. Ce qui donne au « <i><b>Groupe SupMTI</b></i> » et chemin faisant à SupMTI OUJDA sa place parmi les écoles d’ingénieurs et de management réputées au Maroc.
                    </p>
                </div>
            </div>
            <div class="right">
                <h2 class="color-text title">Services que nous avons fournis<span class="color-2">.</span></h2>
                <div class="list color-text">
                    <ul>
                        <li>Consulting </li>
                        <li>
                            Achat et configuration de:
                            <ul>
                                <li>Nom de domaine</li>
                                <li>Hébergement </li>
                            </ul>
                        </li>
                        <li>Conception et développement du site web présentatif avec un back office sur mesure</li>
                    </ul>
                </div>
            </div>
       </div>
       <div class="row w-100">
            <div class="banner w-100">
                <img src="{{ asset('front/img/SupMTI/Banner.png') }}" alt="">
            </div>
       </div>
       <div class="row w-100">
            <section id="panels">
                <div id="panels-container" style="width: 200%;">
                  <article id="panel-1" class="panel ">
                    <div class="container">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{ asset('front/img/SupMTI/SupMTI-1.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </article>
                  <article id="panel-2" class="panel ">
                    <div class="container">
                      <div class="row">
                        <div class="col-6">
                          <img src="{{ asset('front/img/SupMTI/SupMTI-2.png') }}" alt="">
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
                    <p class="p2" onclick="window.location.href='{{ route('SupCanada') }}'">
                        go next
                    </p>
                    <svg viewBox="0 0 13 10" height="30px" width="45px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </div>
            </div>
            <div class="img-tooltip">
                <a href="{{ route('SupCanada') }}">
                    <img src="{{ asset('front/img/SupCanada.png') }}" alt="" style="width: 100%;height: 100%;">
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
