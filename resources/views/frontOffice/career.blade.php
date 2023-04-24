@extends('frontOffice.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/career.css') }}">
@endsection

@section('content')

    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')
    <section class="sub-header">
        <ul class="sub__head">
            <li class="sub__item">
                <a href="#who">Contact&nbsp;|</a>
            </li>
            <li class="sub__item">
                <a href="#values">Career &nbsp;</a>
            </li>
        </ul>
    </section>
    <div class="career">
        <div class="first"> 
            <div>
                <h1>Carrière</h1><span class="dot-4">.</span>
            </div>
        </div>
        <div class="last">
            <div class="text">
                Vos valeurs reflètent votre marque.  
                Notre équipe croit en compétences. C’est notre culture organisationnelle. 
                Soft cactus opte pour une culture de personnalité, soft skills et comportement avant, parcours et formations.
            </div>
        </div>
    </div>

    <div class="jobs">
        <div class="job_header">
            <h1>Available jobs  <span></span></h1>
        </div>
        <div class="row">
            <div style="border-color: #9D00FF">
                <h5>Community manager</h5>
                <h6>Oujda</h6>
                <p > As our team is growing. <br />
                    we are looking for a community manager.<br />
                    In SOFT CACTUS,... </p>
                <a href="{{ route('careerDetails') }}">see more</a>
            </div>
            <div style="border-color: #00FFC4">
                <h5>Commercial agent</h5>
                <h6>Oujda</h6>
                <p >  As our team is growing. <br />
                    we are looking for a commercial agent. <br />
                    In SOFT CACTUS... </p>
                <a href="{{ route('careerDetails') }}">see more</a>
            </div>
        </div>
        <div class="row">
            <div {{-- style="border-color: #00FFC4" --}}>
                <h5>Commercial agent</h5>
                <h6>Oujda</h6>
                <p>  As our team is growing. <br />
                    we are looking for a commercial agent. <br />
                    In SOFT CACTUS... </p>
                <a href="{{ route('careerDetails') }}">see more</a>
            </div>
            <div style="border-color: #FF00C4">
                <h5>Community manager</h5>
                <h6>Oujda</h6>
                <p> As our team is growing. <br />
                    we are looking for a community manager.<br />
                    In SOFT CACTUS,... </p>
                <a href="{{ route('careerDetails') }}">see more</a>
            </div>
        </div>
    </div>
    
@endsection

@section('script')
<script>

</script>
@endsection