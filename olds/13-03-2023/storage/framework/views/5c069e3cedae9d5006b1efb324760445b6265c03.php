

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front/css/about.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--==================== sub header ====================-->

    <section class="sub-header">

        <ul class="sub__head">
            <li class="sub__item">
                <a href="#who">Who are we&nbsp;|</a>
            </li>
            <li class="sub__item">
                <a href="#values">Our values&nbsp;|</a>
            </li>
            <li class="sub__item">
                <a href="#story">Our story&nbsp;|</a>
            </li>
            <li class="sub__item">
                <a href="#team">Our team</a>
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
                <p class="prg1">Here goes a text that shows a good mix between<br>
                    the mission and the vision put by Soft Cactus, it<br>
                    shouldn’t be a long text, a minimum of 4 sentences<br>
                    and a max of 5, just to make it easy to read and<br>
                    beautiful in the design part .
                </p>

                <p class="prg2">
                    Here goes an even smaller text, showing the fact<br>
                    that we specialise in Branding, web dev, and<br>
                    community management. ( key words )
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

    <div class="container" id="values">

        <div class="slide-container active">
            <div class="slide">
                <div class="content">
                    <h3>01</h3>
                    <p>
                        Here goes a phrase<br>
                        about Passion.
                    </p>
                </div>
                <div class="image">
                    
                    <img src="<?php echo e(asset('imgs/ian-schneider-TamMbr4okv4-unsplash.png')); ?>" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h3>02</h3>
                    <p>
                        Here goes a phrase<br>
                        about Passion.</p>
                </div>
                <div class="image">
                    
                    <img src="<?php echo e(asset('imgs/Resistance.jpg')); ?>" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h3>03</h3>
                    <p>
                        Here goes a phrase<br>
                        about Passion.</p>
                </div>
                <div class="image">
                    
                    <img src="<?php echo e(asset('imgs/ian-schneider-TamMbr4okv4-unsplash.png')); ?>" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h3>04</h3>
                    <p>
                        Here goes a phrase<br>
                        about Passion.</p>
                </div>
                <div class="image">
                    <img src="<?php echo e(asset('imgs/Resistance.jpg')); ?>" alt="">
                </div>
            </div>
        </div>
        <div id="prev" class="prev-slide"> < </div>
        <div id="next" class="next-slide"> > </div>
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
                        Here goes a small sentence based on Passion for the year 2018
                        ( each <br>year goes with a value )
                    </p>
                    <p class="2019">
                        Here goes a small sentence based on Passion for the year 2019
                        ( each <br>year goes with a value )
                    </p>
                    <p class="2020">
                        Here goes a small sentence based on Passion for the year 2020
                        ( each <br>year goes with a value )
                    </p>
                    <p class="2021">
                        Here goes a small sentence based on Passion for the year 2021
                        ( each <br>year goes with a value )
                    </p>
                    <p class="2022">
                        Here goes a small sentence based on Passion for the year 2022
                        ( each <br>year goes with a value )
                    </p>
                    <p class="2023">
                        Here goes a small sentence based on Passion for the year 2023
                        ( each <br>year goes with a value )
                    </p>

                </div>
                <div class="year">
                    <div class="btn year-prev">
                         < 
                    </div>
                    <span>
                        <span class="prefix">20</span>
                        
                        
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
        
    </div>
    <!--==================== our team ====================-->

    <div class="team" id="team">
        <div class="left-team">
            <h2>Notre team <span>.</span></h2>
            <p>A small text talking about the team,<br>
                how creative the team members<br>
                are when it comes to everyones<br>
                creativity, and expertise</p>
        </div>

        <div class="gallery">
           <img class="image1" src="<?php echo e(asset('imgs/Hanae.png')); ?>" alt="">
           <img class="image2" src="<?php echo e(asset('imgs/pdp1.jpg')); ?>" alt="">
           <img class="image3" src="<?php echo e(asset('imgs/layla.jpeg')); ?>" alt="">
           <img class="image4" src="<?php echo e(asset('imgs/rabie.png')); ?>" alt="">
           
       
        </div>
    </div>

     <!--==================== info ====================-->

     <div class="info">
        <div class="info1">
            <ul>
                <li class="li1">Experience</li>
                <li class="li2">5y</li>
                
            </ul>
        </div>

        <div class="info2">
            <ul>
                <li class="li1">Team member</li>
                <li class="li2">5</li>
            </ul>
            
        </div>

        <div class="info3">
            <ul>
                <li class="li1">Our projets</li>
                <li class="li2">+30</li>
            </ul>
            
        </div>
       
     </div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SoftCactus\resources\views/frontOffice/whoweare.blade.php ENDPATH**/ ?>