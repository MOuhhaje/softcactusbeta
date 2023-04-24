@extends('frontOffice.layouts.layout')
@section('css')
    <link href="{{ asset('front/css/service.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')

    <main class="service-content">
        <div class="sec-header" >
            <div class="title color-2">
                <H2>
                    <span class="color-text"> Web développement<span class="color-3">.</span></span>
                </H2>
            </div>
            <div class="text">
                <p>
                    Chez Soft cactus , nous estimons que la création d'un site web est exactement pareille à la construction d’un immeuble, plus la base est solide plus ça nous permettra d’ajouter davantage d'étages
                </p>
                <p>
                    Grâce au framework web utilisé Laravel (écrit en PHP) , vous gardez toujours le contrôle sur votre site web, ce qui vous permettra d’effectuer des futurs changements vous-même sans aucun souci, et de notre part, ainsi qu’un suivi continu.
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