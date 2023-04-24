@extends('frontOffice.layouts.layout')
@section('css')
    {{-- <link href="{{ asset('front/css/canvas.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('front/css/_canvas.scss') }}" rel="stylesheet" type="text/css"/> --}}
    <link href="{{ asset('front/css/blog.css') }}" rel="stylesheet"/>

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
                    <li id="News" >
                        Les nouveautés
                    </li>
                    <li id="Protips">
                        Astuces
                    </li>
                    <li id="Ideas" class="active">
                        Les idées
                    </li>
                </ul>
            </div>
        </div>
        <section class="News ">
            <div class="card">
                <div class="card-img bg-color-4">  
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
           
            
            {{-- loader --}}
            <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            
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
        <section class="Ideas active">
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
    </section>









    {{-- <main class="content" id="global-wrapper">
        <div class="live-background " data-x="" data-y="" style="width: 100%;height:500px">
            <canvas class="lb-canvas" width="768" height="224"></canvas>
        </div>
    </main> --}}



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

    </script>



















    {{-- gsap  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    {{-- stackblur --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stackblur-canvas/2.5.0/stackblur.min.js" integrity="sha512-W5pl1mdnRnOONc8pHMFi5xyBNNNHo6N7Q2psPRHWMPR47VyO6F/sL1G5PpRLBcsd9QL+WfDa0J9mEsGoxQH+RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- canvas --}}
    <script>
        var gsap = gsap || {};
        var StackBlur = StackBlur || {};
    </script>
    {{-- <script src="{{ asset('front/js/canvas.js') }}" type="text/javascript"></script> --}}
@endsection