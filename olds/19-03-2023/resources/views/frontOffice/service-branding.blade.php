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
                    <span class="color-2">Branding<span class="color-3">.</span></span>
                </H2>
            </div>
            <div class="text">
                <p>
                    Une marque ce n’est pas juste un logo, il doit y avoir aussi un message et une histoire qui se cache derrière, et plus l’histoire que vous racontez est authentique, plus ça aide les consommateurs potentiels à avoir une attitude positive envers votre produit ou votre service, ce qui crée une mémoire émotionnelle entre le client et le produit, comme une forme de connexion qui va au-delà du besoin. 
                </p>
                <p>
                    Chez Soft cactus, on met à votre disposition une équipe expérimentée en marketing digital  afin de vous aider à faire les meilleurs choix pour construire l’image de marque qui aidera au développement de votre business.
                </p>
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