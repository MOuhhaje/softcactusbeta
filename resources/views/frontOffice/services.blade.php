@extends('frontOffice.layouts.layout')
@section('css')
    <link href="{{ asset('front/css/service.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')

    <main class="service-content">
        <div class="service-title" >
            <H2>
                <span class="color-text">Services.</span>
            </H2>
        </div>
        @include('frontOffice.partialPages.serviceHome')
    </main>
@endsection
@section('script')
    <script>
       
       
    </script>
@endsection