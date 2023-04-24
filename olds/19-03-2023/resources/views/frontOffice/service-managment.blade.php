@extends('frontOffice.layouts.layout')
@section('css')
    <link href="{{ asset('front/css/service.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')

    <main class="service-content">
        <div class="sec-header" >
            <div class="title color-text">
                <H2>
                    <span class="color-3">Community Management<span class="color-2">.</span></span>
                </H2>
            </div>
            <div class="text">
                    <p>
                        Aujourd’hui, l’image virtuelle joue un rôle important pour attirer ou assurer des prospects, pourtant poster des photos et des vidéos de temps en temps n’est pas vraiment suffisant.
                    </p>
                    <p>
                        Ce qui vous apportera réellement des résultats, c'est d’avoir une stratégie digitale complète qui vise votre clientèle cible. 
                    </p>
                    <p>
                        Nos engagements vers vous  : 
                    </p>
                    <ul>
                        <li>
                            <p>
                                Une stratégie est la boussole qui vous mène aux besoins de votre projet et la cible.
                            </p>
                        </li>
                        <li>
                            <p>
                                L'étude de vos communautés, leurs comportements pour découvrir leurs attentes. 
                            </p>
                        </li>
                        <li>
                            <p>
                                Le développement de votre notoriété
                            </p>
                        </li>
                        <li>
                            <p>
                                Le contrôle de votre e-réputation (votre réputation digitale).
                            </p>
                        </li>
                        <li>
                            <p>
                                L’augmentation de votre visibilité.
                            </p>
                        </li>
                        <li>
                            <p>
                                Des analyses régulières des résultats pour adapter la suite du plan.
                            </p>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="sec-body">
            <a href="{{ route('chandelles') }}">
                <div>
                    <img src="{{ asset('imgs/chandelles.png') }}" alt="">
                </div>
            </a>
        </div>
        <div class="sec-contact">
            <div>
                <div class="contact-text">
                    <div class="text-1">
                        wanna get in touch?
                    </div>
                    <div class="text-2">
                        <p>
                            Let us know how can help you. We are open to talk
                        </p>
                    </div>
                </div>
                <div class="contact-btn">
                    
                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        <span>
                            Contact
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>
       
       
    </script>
@endsection