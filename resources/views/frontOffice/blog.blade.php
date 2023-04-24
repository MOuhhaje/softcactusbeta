@extends('frontOffice.layouts.layout')
@section('css')
    {{-- <link href="{{ asset('front/css/canvas.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('front/css/_canvas.scss') }}" rel="stylesheet" type="text/css"/> --}}
    <link href="{{ asset('front/css/blog.css') }}" rel="stylesheet"/>
    <style>
        section.coming-soon {
            display: none;
        }
        section.coming-soon.active {
            display: flex;
        }
        section.coming-soon .coming-soon-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        section.coming-soon .coming-soon-container .coming-soon-img{
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('imgs/blog/coming-soon.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        section.coming-soon .coming-soon-container .coming-soon-text{
            font-size: 2rem;
            font-weight: 600;
            color: #000;
            margin-top: 2rem;
        }
        section.coming-soon .coming-soon-container .coming-soon-text h2{
            font-size: 2rem;
            font-weight: 600;
            color: #000;
        }
        section.coming-soon .coming-soon-container .coming-soon-text p{
            font-size: 1.5rem;
            font-weight: 400;
            color: #000;
        }
        .card.card_img{
            justify-content: center;
        }
        .card.card_img .card-img {
            width: 100%;
            max-height: initial !important;
        }
        .card.card_img .card-img img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .d-none{
            display: none;
        }
        @media screen and (min-width: 320px) {
            .card.card_img .card-img{
                height: auto !important;
                width: 100% !important;
            }
        }
    </style>
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')


    <section class="content">
        <div class="blog-header bottom-line color-text">
            <div class="header">
                <span class="color-text">Quoi de neuf <span class="color-2">?</span>
            </div>
            <div class="sub__blog-header">
                <ul class="toggles">
                    <li id="News" class="active">
                        Les nouveautés
                    </li>
                    <li {{-- id="Protips" --}} id="coming-soon">
                        Astuces
                    </li>
                    <li {{-- id="Ideas"  --}} id="coming-soon">
                        Les idées
                    </li>
                </ul>
            </div>
        </div>
        <section class="News active">
            <div class="card d-none">
                <div class="card-img ">  
                    <img 
                        src="{{ asset('imgs/blog/news/AI.jpg') }}"
                        alt="" 
                        onclick="window.location.href='{{ route('blogDetails') }}'"
                        >
                </div>
                <div class="card-body">
                    <div>
                        <div class="card-type">
                            <span>News</span>
                        </div>
                        <div class="card-title">
                            <h3>
                                <span>L’intelligence artificielle</span>
                            </h3>
                        </div>
                        <div class="card-text">
                            <p>
                                L’intelligence artificielle a achevé une étape très avancée ces dernières années , il
                                s’est développé profondément dans les différents domaines, en permettant la
                                réalisation des tâches humaines rapidement et efficacement, ce qui nous pousse à
                                poser des questions : est ce qu’elle peut remplacer l’être humain ? si oui, est ce
                                qu’elle est sécurisée et contrôlable ?
                            </p>
                        </div>
                        <div class="card-link">
                            <a  href="{{ route('blogDetails') }}" class="btn btn-primary">
                                <span class="link">voir plus </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card_img">
                <div class="card-img ">  
                    <img 
                        src="{{ asset('imgs/blog/news/AI.jpg') }}"
                        alt="" 
                        onclick="window.location.href='{{ route('blogDetails') }}'"
                        >
                </div>
            </div>
            
            {{-- <div class="card">
                <div class="card-img bg-color-3">  
                </div>
                <div class="card-body">
                    <div>
                        <div class="card-type">
                            <span>News</span>
                        </div>
                        <div class="card-title">
                            <h3>
                                <span>Here goes a title for an article</span>
                            </h3>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                            </p>
                        </div>
                        <div class="card-link">
                            <a href="#" class="btn btn-primary">
                                <span class="link">see more
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-img bg-color-2">  
                </div>
                <div class="card-body">
                    <div>
                        <div class="card-type">
                            <span>News</span>
                        </div>
                        <div class="card-title">
                            <h3>
                                <span>Here goes a title for an article</span>
                            </h3>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                            </p>
                        </div>
                        <div class="card-link">
                            <a href="#" class="btn btn-primary">
                                <span class="link">see more
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-img bg-color-1">  
                </div>
                <div class="card-body">
                    <div>
                        <div class="card-type">
                            <span>News</span>
                        </div>
                        <div class="card-title">
                            <h3>
                                <span>Here goes a title for an article</span>
                            </h3>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                            </p>
                        </div>
                        <div class="card-link">
                            <a href="#" class="btn btn-primary">
                                <span class="link">see more
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            --}}
            
            {{-- loader --}}
            <div class=" lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            {{-- no more results --}}
            <div class="no-more-results">
                <span>Aucun autre résultat</span>
            </div>
            <div id="scroll" class="d-none" data-scroll="true"></div>
            
        </section>
        <section class="Protips ">

            <div class="column">
                <div class="row even">
                    <div class="video">
                        <a class="play-btn" href="#"></a>
                    </div>
                    
                    <div class="card-protips bg-color-4 text-color-light">
                        <div class="card-body">
                            <div class="card-type">
                                <span>Protips</span>
                            </div>
                            <div class="card-title">
                                <h3>
                                    <span>Here goes a title for an article</span>
                                </h3>
                            </div>
                            <div class="card-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row odd">
                    <div class="video">
                        <div class="play-btn">
                            <div class="play-btn__icon"></div>
                        </div>
                    </div>
                    
                    <div class="card-protips bg-color-2 text-color-dark">
                        <div class="card-body">
                            <div class="card-type">
                                <span>Protips</span>
                            </div>
                            <div class="card-title">
                                <h3>
                                    <span>Here goes a title for an article</span>
                                </h3>
                            </div>
                            <div class="card-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row even">
                    <div class="video">
                        <div class="play-btn">
                            <div class="play-btn__icon"></div>
                        </div>
                    </div>
                    
                    <div class="card-protips bg-color-3 text-color-light">
                        <div class="card-body">
                            <div class="card-type">
                                <span>Protips</span>
                            </div>
                            <div class="card-title">
                                <h3>
                                    <span>Here goes a title for an article</span>
                                </h3>
                            </div>
                            <div class="card-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                                </p>
                            </div>
                        </div> 
                    </div>
                </div>
               
                
            </div>

           {{-- loader --}}
           <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
              
        </section>
        <section class="Ideas ">
            <div class="idea-container">
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">

                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">

                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">

                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">

                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="coming-soon">
            <div class="coming-soon-container">
                <div class="coming-soon-img bg-color-5">
                    <img src="{{ asset('images/coming-soon.png') }}" alt="">
                </div>
                <div class="coming-soon-text">
                    <h2>A venir</h2>
                    {{--  some text in french here to tell people that we are working on something --}}
                    <p>
                       Rejoignez notre newsletter pour être informé de nos prochaines sorties
                    </p>
                </div>
            </div>

        </section>
    </section>

@endsection
@section('script')
    <script>
        //.toggles 
        const li = $('.toggles li');
        //on click li add class active
        li.on('click', function () {
            li.removeClass('active');
            $(this).addClass('active');
            //get attr id
            const id = $(this).attr('id');
            //find section with class id
            const section = $('.' + id);
            //remove class active from section
            $('section').removeClass('active');
            //add class active to section
            section.addClass('active');
        });

        $(document).ready(function () {
            $('.lds-default').hide();
            $('.no-more-results').hide();
           //make infinite scroll with ajax
            $(window).scroll(function () {
                var scroll = $('#scroll').data('scroll');
                if ($(window).scrollTop() == $(document).height() - $(window).height() && scroll) {
                    $('.lds-default').show();
                    $('.no-more-results').hide();
                    $.ajax({
                        url: '{{ route('loadMore') }}',
                        type: 'GET',
                        success: function (data) {
                            // data = JSON.parse(data);
                            console.log(data.data.length);
                           if(data.data.length == 0){
                                $('.lds-default').hide();
                                $('.no-more-results').show();
                                //and stop ajax request if no more results
                                $('#scroll').data('scroll', false);
                                console.log('no more results');
                            }else{
                                $('.lds-default').hide();
                                $('.no-more-results').hide();
                                $('.idea-container').append(data);
                                console.log('more results');
                            }
                        },
                        error: function (data) {
                            return false;
                        }
                    });
                }
            });
            
        });

    </script>

@endsection