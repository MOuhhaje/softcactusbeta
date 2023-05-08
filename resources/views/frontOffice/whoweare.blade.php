@extends('frontOffice.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/about.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

        .img_circle {
            /* background: red; */
            position: absolute;
            top: 0;
            width: 70px;
            height: 70px;
            /* border-radius: 50%; */
            /* overflow: hidden; */
            transition: all 0.5s ease;
            transform: translate(150px, 10px);
            animation-delay: 0s;
        }
        .bounce {
            animation: bounce 2s infinite linear;
        }
        .img_circle:nth-child(2) {
            transform: translate(270px, 10px);
            animation-delay: 0.5s;
        }
        .img_circle:nth-child(3) {
            transform: translate(110px, 90px);
            animation-delay: 1s;
        }
        .img_circle:nth-child(4) {
            transform: translate(210px, 110px);
            animation-delay: 1.5s;
        }
        .img_circle:nth-child(5) {
            transform: translate(310px, 90px);
            animation-delay: 2s;
        }
        @keyframes bounce {
            0% {
                top: 0;
            }
            50% {
                top: 7px;
            }
            100% {
                top: 0;
            }
        }
        .img_circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            transition: all 0.5s ease;
            background-color: red;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid var(--main-color);
        }
        .img_circle img:hover {
            transform: scale(1.3);

        }
        /* .img_circle:hover {
            width: 90px;
            height: 90px;
        } */

        .contianer-OT{
            position: relative;
            width: 300px;
            height: 300px;
            border: 3px solid var(--text_color);
            border-radius: 50%;
            margin: 20px auto;
        }
        .contianer-OT .icon{
            left: -50%;
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* cursor: pointer; */
        }
        .contianer-OT .icon .imgBx{
            position: absolute;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 1px solid var(--text_color);
            box-shadow: 0 0 0 4px #fff, 0 0 0 6px var(--text_color);
            transform: rotate(calc(360deg / var(--c) * var(--i)));
            transform-origin: 178px;
            z-index: 90;
            overflow: hidden;
            transition: all 0.5s ease;
            cursor: pointer;
        } 
        .contianer-OT .icon .imgBx.active,
        .contianer-OT .icon .imgBx:hover{
            box-shadow: 0 0 0 4px #fff, 0 0 0 8px var(--text_color);

        }
        .contianer-OT .icon .imgBx img{
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            object-fit: cover;
            object-position: top;
            transition: all 0.5s ease;
            border-radius: 50%;
            transform: rotate(calc(-360deg / var(--c) * var(--i)));
            transition: all 0.5s ease;
            filter: grayscale(100%);
        }
        .contianer-OT .icon .imgBx.active img,
        .contianer-OT .icon .imgBx:hover img{
            filter: grayscale(0);
        }
        .content-OT{
            position: absolute;
            inset: 0;
            overflow: hidden;
        }
        .content-OT::before{
            content: '';
            position: absolute;
            inset: 40px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-left-color: var(--text_color);
            border-right-color: var(--color_1);
            animation: animate1 10s linear infinite;
            z-index: 1;
            pointer-events: none;
        }
        @keyframes animate1{
            0%{
                rotate: 0deg;
            }
            100%{
                rotate: 360deg;
            }
        }
        .content-OT::after{
            content: '';
            position: absolute;
            inset: 70px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-left-color: var(--color_2);
            border-right-color: var(--color_5);
            animation: animate2 4s linear infinite;
            z-index: 1;
            pointer-events: none;
        }
        @keyframes animate2{
            0%{
                rotate: 0deg;
            }
            100%{
                rotate: -360deg;
            }
        }
        .content-OT .imgBx{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 1px solid var(--text_color);
            box-shadow: 0 0 0 4px #fff, 0 0 0 6px var(--text_color);
            transform-origin: 175px;
            z-index: 100;
            overflow: hidden;
            transition: all 0.5s ease-in-out;
            z-index: 1;
        }
        .content-OT .imgBx img{
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            object-fit: cover;
            object-position: top;
            transition: all 0.5s ease;
            border-radius: 50%;
        }
        .opacity{
            opacity: 0;
            width: 0 !important;
            height: 0 !important;
            transition: all 0.5s ease-in-out;
        }
        g text:nth-child(1) tspan{
            font-family: 'Bebas Neue', cursive;
        }
        g text:nth-child(2) tspan{
            /* Dubai-Regular, Dubai */
            font-family: 'Dubai-Regular', sans-serif;
        }
    </style>
@endsection

@section('content')

    {{-- @include('frontOffice.partial.nav') --}}
    {{-- @include('frontOffice.partial.header') --}}
{{-- @include('frontOffice.partial.newNav', ['color' => 'light']) --}}

    <!--==================== sub header ====================-->

    <section class="sub-header">

        <ul class="sub__head">
            <li class="sub__item">
                <a href="#who">Qui sommes-nous&nbsp;|</a>
            </li>
            <li class="sub__item">
                <a href="#values">Nos valeurs&nbsp;|</a>
            </li>
            <li class="sub__item">
                <a href="#story">Notre histoire&nbsp;|</a>
            </li>
            <li class="sub__item">
                <a href="#team">Notre team</a>
            </li>
        </ul>
    </section>
    

    <!--==================== who are we ====================-->

    <main class="who" id="who">


        <div class="left-who">
            <p class="p1">QUI SOMMES</p>
            <p class="p2">NOUS<span>.</span> </p>
        </div>

        <div class="right-who">

            <div class="line-left"></div>
            <div class="content-r">
                <p class="prg1">
                    Chez soft cactus, vous contrôlez tout le processus que ce soit pour un positionnement  , repositionnement ou même pour la création de votre marque . 
                </p>

                <p class="prg2">
                    Notre équipe expérimentée dans le branding, le développement web et le community management est là pour vous conseiller en premier et vous guider pour trouver la stratégie de communication digitale qui mènera votre business à un niveau supérieur.
                </p>
            </div>

        </div>

    </main>

    <!--==================== our values ====================-->

    <div class="values">
        <div class="ourvalue">
            <h2>Nos Valeurs <span>.</span></h2>
        </div>

    </div>
    
    <div class="container" id="values" style="overflow-x: clip;">
        @include('frontOffice.partialPages.nosValeurs')

        {{-- <div class="slide-container active">
            <div class="slide">
                <div class="content">
                    <span class="name">
                        Autonomie
                    </span>
                    <h3>01</h3>
                    <p>
                        La liberté de prendre des décisions renforce la confiance en soi chez le collaborateur, ce qui augmente sa créativité.
                    </p>
                </div>
                <div class="image">
                    <img src="{{ asset('imgs/autonomie.jpg') }}" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <span class="name">
                        Force
                    </span>
                    <h3>02</h3>
                    <p>
                        Nous tirons notre force de notre union.
                    </p>
                </div>
                <div class="image">
                    <img src="{{ asset('imgs/force.jpg') }}" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <span class="name">
                        Résistance
                    </span>
                    <h3>03</h3>
                    <p>
                        Grâce à notre union, nous sommes confiants de pouvoir trouver une solution à tout défi que nous rencontrons.    
                    </p>
                </div>
                <div class="image">
                    <img src="{{ asset('imgs/resistance.png') }}" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <span class="name">
                        Passion
                    </span>
                    <h3>04</h3>
                    <p>
                        Rien de grand ne s’est accompli sans passion    
                    </p>
                </div>
                <div class="image">
                    <img src="{{ asset('imgs/pexels-ann-h-1762851.png') }}" alt="">
                </div>
            </div>
        </div>
        <div id="prev" class="prev-slide"> < </div>
        <div id="next" class="next-slide"> > </div> --}}
    </div>

  
    <!--==================== our story ====================-->

    <div class="histoire">
        <div class="nohisto">
            <h2>Notre histoire <span>.</span></h2>
        </div>

    </div>

    <div class="historys" id="story">

       

        <div class="history-container active">
            <div class="history" id="first">
                <div class="sentence">
                    <p class="2018 active">
                        Naissance de Soft Cactus et début de l’aventure entrepreneuriale de sa fondatrice hanae dekhissi.
                    </p>
                    <p class="2019">
                        Soft Cactus ouvre ses portes, à Casablanca, au Abdelmoumen, Maroc.
                    </p>
                    <p class="2020">
                        Ce qui nuit à l’un, duit a l’autre.
                        <br>
                        La crise pandémique était une nouvelle chance pour que nous puissions nous démarquer dans le domaine digital.

                    </p>
                    <p class="2021">
                        Rebelote, mais avec un nouvel esprit et une deuxième agence à Oujda 
                    </p>
                    <p class="2022">
                        Renforcement de ce projet ambitieux à l’Oriental, à travers le programme Forsa “Opportunité”.
                    </p>
                    <p class="2023">
                        Finalement tous réunis à l’agence, tout en ayant des clients partout dans le Maroc     
                    </p>

                </div>
                <div class="year">
                    <div class="btn year-prev">
                         < 
                    </div>
                    <span>
                        <span class="prefix">20</span>
                        {{-- <span class="val">18</span> --}}
                        {{--  --}}
                        <div class="scene">
                            <div class="cube">
                                <div class="cube__face cube__face--front " data-val="front"></div>
                                <div class="cube__face cube__face--back " data-val="back"></div>
                                <div class="cube__face cube__face--right " data-val="right"></div>
                                <div class="cube__face cube__face--left " data-val="left"></div>
                                <div class="cube__face cube__face--top " data-val="top"></div>
                                <div class="cube__face cube__face--bottom " data-val="bottom"></div>
                            </div>
                        </div>
                        {{--  --}}
                    </span>
                    <div  class="btn year-next">
                         > 

                    </div>
                </div>

                <div class="years">
                    <ul>
                        <li data-value="2018" class="active">2018</li>
                        <li data-value="2019">2019</li>
                        <li data-value="2020">2020</li> 
                        <li data-value="2021">2021</li>
                        <li data-value="2022">2022</li>
                        <li data-value="2023">2023</li>
                    </ul>
                </div>
                
            </div>
        </div>
        {{-- 
        <div class="history-container">
            <div class="history">
                <div class="sentence">
                    <p>Here goes a small sentence based on Passion 
                        ( each <br>year goes with a value )</p>
                </div>

                <div class="year">
                    <p>20<span id="changeme">2019</span></p>
                </div>

                <div class="years active">
                    <ul>
                        <li id="eighteen">2018</li>
                        <li id="nineteen">2019</li>
                        <li id="twenty">2020</li> 
                        <li id="twentyone">2021</li>
                        <li id="twentytwo">2022</li>
                    </ul>
                </div>
                
            </div>
        </div>

        <div class="history-container">
            <div class="history">
                <div class="sentence">
                    <p>Here goes a small sentence based on Passion 
                        ( each <br>year goes with a value )</p>
                </div>

                <div class="year">
                    <p>20<span id="changeme">2020</span></p>
                </div>

                <div class="years active">
                    <ul>
                        <li id="eighteen">2018</li>
                        <li id="nineteen">2019</li>
                        <li id="twenty">2020</li> 
                        <li id="twentyone">2021</li>
                        <li id="twentytwo">2022</li>
                    </ul>
                </div>
                
            </div>
        </div>

        <div class="history-container">
            <div class="history">
                <div class="sentence">
                    <p>Here goes a small sentence based on Passion 
                        ( each <br>year goes with a value )</p>
                </div>

                <div class="year">
                    <p>20<span id="changeme">2021</span></p>
                </div>

                <div class="years active">
                    <ul>
                        <li id="eighteen">2018</li>
                        <li id="nineteen">2019</li>
                        <li id="twenty">2020</li> 
                        <li id="twentyone">2021</li>
                        <li id="twentytwo">2022</li>
                    </ul>
                </div>
                
            </div>
        </div>

        <div class="history-container">
            <div class="history">
                <div class="sentence">
                    <p>Here goes a small sentence based on Passion 
                        ( each <br>year goes with a value )</p>
                </div>

                <div class="year">
                    <p><span id="changeme">2022</span></p>
                </div>

                <div class="years active">
                    <ul>
                        <li id="eighteen">2018</li>
                        <li id="nineteen">2019</li>
                        <li id="twenty">2020</li> 
                        <li id="twentyone">2021</li>
                        <li id="twentytwo">2022</li>
                    </ul>
                </div>
                
            </div>
        </div> --}}
    </div>
    <!--==================== our team ====================-->

    <div class="team" id="team">
        <div class="left-team">
            <h2>Notre team <span>.</span></h2>
            <p>
                L’équation est très simple : <br> Des collaborateurs épanouis = une meilleure qualité de travail 
            </p>
            <p>
                L’équipe Soft Cactus rassemble des membres à la fois talentueux et créatifs, notre but, c'est de grandir ensemble tout en appréciant chaque pas que nous faisons, parce que seule une bonne expérience employé permet d'offrir une bonne expérience client !
            </p>
        </div>
        <div class="right-team">
            
            <div class="contianer-OT">
                <div class="icon" style="--c:5;">
                    <div class="imgBx active" style="--i:1;">
                        <img src="{{ asset('imgs/Hanae-VF.png') }}" alt="" >
                    </div>
                    <div class="imgBx" style="--i:2;">
                        <img src="https://www.colorhexa.com/ffc400.png" alt="" >
                    </div>
                    <div class="imgBx" style="--i:3;">
                        <img src="https://www.colorhexa.com/ffc400.png" alt="" >
                    </div>
                    <div class="imgBx" style="--i:4;">
                        <img src="https://www.colorhexa.com/ffc400.png" alt="" >
                    </div>
                    <div class="imgBx" style="--i:5;">
                        <img src="{{ asset('imgs/pdp1.jpg') }}" alt="" >
                    </div>
                </div>
                <div class="content-OT">
                    <div class="imgBx">
                        <img src="{{ asset('imgs/Hanae-VF.png') }}" alt="" >
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- <div class="gallery">
       <img class="image1" src="{{ asset('imgs/Hanae.png') }}" alt="">
       <img class="image2" src="{{ asset('imgs/pdp1.jpg') }}" alt="">
       <img class="image3" src="{{ asset('imgs/layla.jpeg') }}" alt="">
       <img class="image4" src="{{ asset('imgs/rabie.png') }}" alt="">
       <img class="image4" src="{{ asset('imgs/raheem.jpg') }}" alt="">
    </div> --}}

     <!--==================== info ====================-->

     <div class="info">
        <div class="info1">
            <ul>
                <li class="li1">Expérience</li>
                <li class="li2">5ans</li>
                
            </ul>
        </div>

        <div class="info2">
            <ul>
                <li class="li1">Les membres de l'équipe</li>
                <li class="li2">5</li>
            </ul>
            
        </div>

        <div class="info3">
            <ul>
                <li class="li1">Nos projets</li>
                <li class="li2">+30</li>
            </ul>
            
        </div>
       
     </div>



@endsection

@section('script')
<script>

    // =======================================somthing=======================================
    $(document).ready(function(){
        var imgsBx=$('.icon .imgBx');
        var contentBx=$('.content-OT .imgBx');
        imgsBx.click(function(){
            var imgSrc=$(this).find('img').attr('src');

            contentBx.addClass('opacity');
            imgsBx.removeClass('active');

            $(this).addClass('active');

            setTimeout(function(){
                contentBx.find('img').attr('src',imgSrc);
                contentBx.removeClass('opacity');
            },500);
            
        });

    });

    // =======================================somthing=======================================
    // =======================================cube=======================================
        $(document).ready(function(){
            var lis=$('.years ul li');
            var activeLi=$('.years ul li.active');
            var cubeDivs=$('.cube div');
            var cube=$('.cube');
            for(var i=0;i<lis.length;i++){
                cubeDivs.eq(i).attr('data-index',lis.eq(i).attr('data-value'));
                cubeDivs.eq(i).text(lis.eq(i).attr('data-value').slice(2));
                lis.eq(i).attr('data-index',cubeDivs.eq(i).attr('data-val'));
            }
            var currentClass = '';
            function changeSide() {
                // var checkedRadio = radioGroup.querySelector(':checked');
                var showClass = 'show-' + activeLi.attr('data-index');
                if ( currentClass ) {
                    cube.removeClass( currentClass );
                }
                cube.addClass( showClass );
                currentClass = showClass;
            }
            // set initial side
            changeSide();
            lis.click(function(){
                lis.removeClass('active');
                $(this).addClass('active');
                activeLi=$(this);
                //.sentence p add class active if has class .$data-value
                var text= $('.sentence p');
                $.each(text,function(index,value){
                    if($(this).hasClass(activeLi.attr('data-value'))){
                        $(this).addClass('active');
                    }else{
                        $(this).removeClass('active');
                    }
                });


                changeSide();
            });
            // $('.btn .year-prev');
            var prevBtn=$('.btn.year-prev');
            var nextBtn=$('.btn.year-next');
            prevBtn.click(function(){
                var prevLi=activeLi.prev();
                if(prevLi.length){
                    lis.removeClass('active');
                    prevLi.addClass('active');
                    activeLi=prevLi;
                    changeSide();
                }else{
                    lis.removeClass('active');
                    lis.last().addClass('active');
                    activeLi=lis.last();
                    changeSide();
                }
                //.sentence p add class active if has class .$data-value
                var text= $('.sentence p');
                $.each(text,function(index,value){
                    if($(this).hasClass(activeLi.attr('data-value'))){
                        $(this).addClass('active');
                    }else{
                        $(this).removeClass('active');
                    }
                });
            });
            nextBtn.click(function(){
                var nextLi=activeLi.next();
                if(nextLi.length){
                    lis.removeClass('active');
                    nextLi.addClass('active');
                    activeLi=nextLi;
                    changeSide();
                }else{
                    lis.removeClass('active');
                    lis.first().addClass('active');
                    activeLi=lis.first();
                    changeSide();
                }
                //.sentence p add class active if has class .$data-value
                var text= $('.sentence p');
                $.each(text,function(index,value){
                    if($(this).hasClass(activeLi.attr('data-value'))){
                        $(this).addClass('active');
                    }else{
                        $(this).removeClass('active');
                    }
                });
            });
            //auto change 3s
            var autoChange=setInterval(function(){
            nextBtn.click();
            },10000);

        
        });
    // =======================================cube=======================================
    // =======================================slider=======================================
       $(document).ready(function(){
        var slides=$('.slide-container');
        slides.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 10000,
            nextArrow: $('.next-slide'),
            prevArrow: $('.prev-slide'),
            speed: 1000,
            cssEase: 'ease-in-out',
            draggable: true,
            dots: false,
            pauseOnHover: true,
        });
       });

    // =======================================slider=======================================
    let slides = document.querySelectorAll('.slide-container');
    let index = 0;

    // next function
    function next(){
        slides[index].classList.remove('active');
        index = (index + 1) % slides.length;
        slides[index].classList.add('active');
    }

    // previous function
    function prev(){
        slides[index].classList.remove('active');
        index = (index - 1 + slides.length) % slides.length;
        slides[index].classList.add('active');
    }

    let slide = document.querySelectorAll('.history-container');
    let indexx = 0;

     // next function
    function avant(){
        slide[indexx].classList.remove('active');
        indexx = (indexx + 1) % slide.length;
        slide[indexx].classList.add('active');
    }

    // previous function
    function befor(){
        slide[indexx].classList.remove('active');
        indexx = (indexx - 1 + slide.length) % slide.length;
        slide[indexx].classList.add('active');
    }
     

    const element1 = document.getElementById("eighteen");
    element1.addEventListener("click", function(){
        document.getElementById("changeme").innerHTML = "18";
    });

    const element2 = document.getElementById("nineteen");
    element2.addEventListener("click", function(){
        document.getElementById("changeme").innerHTML = "19";
    });

    const element3 = document.getElementById("twenty");
    element3.addEventListener("click", function(){
        document.getElementById("changeme").innerHTML = "20";
    });

    const element4 = document.getElementById("twentyone");
    element4.addEventListener("click", function(){
        document.getElementById("changeme").innerHTML = "21";
    });

    const element5 = document.getElementById("twentytwo");
    element5.addEventListener("click", function(){
        document.getElementById("changeme").innerHTML = "22";
    });

</script>
@endsection