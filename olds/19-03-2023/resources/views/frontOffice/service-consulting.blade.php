@extends('frontOffice.layouts.layout')
@section('css')
    <link href="{{ asset('front/css/service.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')

    <main class="service-content">
        <div class="sec-header" >
            <div class="title color-1">
                <H2>
                    <span class="color-text">Consulting<span class="color-4">.</span></span>
                </H2>
            </div>
            <div class="text">
                <p>
                    Le consulting touche l'ensemble de nos services ainsi que la partie commerciale, il est également notre base et façon de vendre le marketing digital. 
                </p>
                <p>
                    Nous sommes là pour vous aider à identifier vous-mêmes vos besoins, pour que nous puissions mettre en place ensemble la bonne stratégie qui mènera à la réussite de votre projet sur le digital.
                </p>
                <p>
                    C’est le changement que nous souhaitons voir et avoir, puisque notre but ce n’est pas juste de vous vendre un service, mais de vous proposer celui qui répond aux besoins de votre projet.
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