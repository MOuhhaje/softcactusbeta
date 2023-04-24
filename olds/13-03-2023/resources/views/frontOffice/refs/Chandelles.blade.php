@extends('frontOffice.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/refernecePages.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/scroll.css') }}">
    <style>
        .text-1 {
            font-size: 100px;
            text-align: center;
            font-weight: 700;
        }
        .text-2 {
            font-size: 70px;
            text-align: center;
            font-weight: 600;
        }
        .text-1,.text-2 {
            color: var(--color_5);
        }
    </style>
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')
  

    <main class="container">
       <div class="row w-90">
            <div class="left">
                <h2 class="color-text title">Project description<span class="color-2">.</span></h2>
                <div class="text">
                    <p>
                        Here goes a general description about the project, what they do , and what are the problem that  they faced, we can even say their services in general and their goal or the end result that they wanted to reach .
                    </p>
                </div>
            </div>
            <div class="right">
                <h2 class="color-text title">Services que nous avons fournis<span class="color-2">.</span></h2>
                <div class="list color-text">
                    <ul>
                        <li>Branding</li>
                        <li>Community management</li>
                        <li>Web development</li>
                    </ul>
                </div>
            </div>
       </div>
       <div class="row w-100">
            <div class="banner w-100">
                <img src="{{ asset('front/img/Chandelles/Banner.png') }}" alt="">
            </div>
       </div>
       <div class="row w-100">
            <div class="space-holder">
                <div class="sticky">
                  <div class="horizontal">
                    <section role="feed" class="cards">
                      <article class="sample-card revealer">
                        <img src="{{ asset('front/img/Chandelles/variations.png') }}" alt="" >
                      </article>
                      <article class="sample-card revealer">
                        <img src="{{ asset('front/img/Chandelles/Quote.png') }}" alt="">
                      </article>
                    </section>
                  </div>
                </div>
            </div>
       </div>
       {{-- <div class="row w-90 align-items-center justify-content-between">
            <div class="enjoyed">
                <svg xmlns="http://www.w3.org/2000/svg" width="60vw" height="30vw" viewBox="0 0 1200 600">
                    <defs>
                        <style>
                            .a {
                                fill: #00ffc4;
                            }

                            .b {
                                fill: #2f0052;
                                font-size: 190px;   
                            }

                            .b,
                            .c,
                            .d {
                                font-family: SegoeUI-Bold, Segoe UI;
                                font-weight: 700;
                            }

                            .c {
                                fill: #eb00ff;
                                font-size: 162px;
                            }

                            .d {
                                fill: #f8ac00;
                                font-size: 144px;
                                opacity: 0.198;
                            }
                        </style>
                    </defs>
                    <g transform="translate(-57 -3133)" id="Group_1" data-name="Group 1">
                        <circle class="a" cx="261" cy="261" r="261" transform="translate(57 3133)"></circle>
                        <text class="b" transform="translate(150 3530)">
                            <tspan x="0" y="0">Enjoyed</tspan>
                        </text><text class="c" transform="translate(892 3531)">
                            <tspan x="35" y="0">?</tspan>
                        </text><text class="d" transform="translate(487 3685)">
                            <tspan x="0" y="0">go next</tspan>
                        </text>
                    </g>
                </svg>
            </div>
            <div class="next-project">
                <div>
                    <a href="{{ route('LLF') }}">
                        <img src="{{ asset('front/img/LLF.png') }}" alt="" style="width: 100%;height: 100%;">
                    </a>
                </div>
            </div>
       </div> --}}
       <div class="row w-100 align-items-center justify-content-between">
            <div class="hover-over-words" style="width:100%;">
               {{--  make two divs for the text --}}
                <div class="text-1">
                    Enjoyed ?
                </div>
                <div class="text-2">
                    go next
                </div>
                   
            </div>
       </div>
    </main>

   
@endsection

@section('script')
    <script src="{{ asset('front/js/scroll.js') }}"></script>
    <script>
    
            // $('.hover-over-words').css('cursor','none');
            $('.hover-over-words').parent().css('cursor','none');
            $('.hover-over-words').parent().css('position','relative');
            //overflow: hidden;
            $('.hover-over-words').parent().css('overflow','hidden');


            const cursorCircle = document.createElement('div');
            $('.hover-over-words').parent().append(cursorCircle);
            const moveCursor = (e) => {
                const clientX = e.clientX - cursorCircle.offsetWidth / 2;
                const clientY = e.clientY-300 - cursorCircle.offsetHeight / 2;
                //if clientX is less than 0 then make it 0
                //if clientX is greater than window.innerWidth then make it window.innerWidth
                //if clientY is less than 0 then make it 0
                //if clientY is greater than window.innerHeight then make it window.innerHeight
                if (clientX < 0) {
                    cursorCircle.style.left = 0;
                } else if (clientX > window.innerWidth) {
                    cursorCircle.style.left = window.innerWidth + 'px';
                } else {
                    cursorCircle.style.left = clientX + 'px';
                }
                if (clientY < 0) {
                    cursorCircle.style.top = 0;
                } else if (clientY > window.innerHeight) {
                    cursorCircle.style.top = window.innerHeight + 'px';
                } else {
                    cursorCircle.style.top = clientY + 'px';
                }

            }
            cursorCircle.classList.add('cursor');
            // make the cursor with css 
            cursorCircle.style.width = '160px';
            cursorCircle.style.height = '160px';
            cursorCircle.style.borderRadius = '50%';
            cursorCircle.style.backgroundColor = 'var(--color_5)';
            cursorCircle.style.position = 'absolute';
            
            $('.hover-over-words').parent().on('mousemove', moveCursor);

    
    </script>
@endsection
