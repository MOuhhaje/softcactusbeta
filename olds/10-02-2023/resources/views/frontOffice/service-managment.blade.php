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
                    lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                </p>
            </div>
        </div>
        <div class="sec-body">
            <div>
                <img src="{{ asset('imgs/chandelles.png') }}" alt="">
            </div>
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