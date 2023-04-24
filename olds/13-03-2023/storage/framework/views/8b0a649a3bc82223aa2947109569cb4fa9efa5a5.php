<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOFT CACTUS - Agence de communication digitale</title>
    <link href="assets/websiteStyle/css/whoarewe.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="shortcut icon" type="image/x-icon" href="assets/websiteStyle/assets/logo-purple.png" id="faviconTag" />
    <script>
        const faviconTag = document.getElementById("faviconTag");
        const isDark = window.matchMedia("(prefers-color-scheme: dark)");

        const changeFavicon = () => {
            if (isDark.matches) faviconTag.href = "assets/websiteStyle/assets/logo-white.png";
            else faviconTag.href = "assets/websiteStyle/assets/logo-purple.png";
        };
        changeFavicon();
        setInterval(changeFavicon, 1000);

        function myFunction(x) {
            x.classList.toggle("change");
        }


        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
</head>

<body>

    <!--==================== Responsive navbar ====================-->

    <nav class="contact-nav">
        <div class="left-nav">
            <div class="phone">
                <a href="tel:212 648 927 820">+212 648 927 820</a>
            </div>
            <div class="line"></div>
            <div class="mail">
                <a href="mailto:Contact@Softcactus.ma?subject = subject text" target="_blank">Contact@Softcactus.ma</a>
            </div>
        </div>
        <div class="right-nav">
            <div class="lang"> <span>EN</span> </div>
        </div>
    </nav>

    <div class="nav-mobile">
        <div class="logo-mobile">
            <a href="#"><img src="assets/websiteStyle/assets/logo-purple.png"></a>
        </div>
        <div class="right-nav-mobile">
            <div class="burger-mobile" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

        </div>
    </div>

    <!--==================== header ====================-->

      <section class="header" id="header">
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="" target="_blank">Our work</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo e(URL::to('whoarewe')); ?>" target="_blank">About</a>
                </li>
                <li class="nav__item">
                    <a href="#"><img src="assets/websiteStyle/assets/logo-purple.png" width="100px"></a>
                </li>
                <li class="nav__item">
                    <a href="" target="_blank">Blog</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo e(URL::to('contact')); ?>" target="_blank">Contact</a>
                </li>
            </ul>
        </div>

    </section>


    <!--==================== sub header ====================-->

    <section class="sub-header">

        <ul class="sub__head">
            <li class="sub__item">
                <a href="#who">Who are we&nbsp;/</a>
            </li>
            <li class="sub__item">
                <a href="#values">Our values&nbsp;/</a>
            </li>
            <li class="sub__item">
                <a href="#story">Our story&nbsp;/</a>
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
                        about Passion.</p>
                </div>
                <div class="image">
                    <img src="assets/websiteStyle/assets/ian-schneider-TamMbr4okv4-unsplash.png" alt="">
                </div>
            </div>
        </div>

        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <h3>02</h3>
                    <p>
                        Here goes a phrase<br>
                        about Passion.</p>
                </div>
                <div class="image">
                    <img src="assets/websiteStyle/assets/Resistance.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <h3>03</h3>
                    <p>
                        Here goes a phrase<br>
                        about Passion.</p>
                </div>
                <div class="image">
                    <img src="assets/websiteStyle/assets/ian-schneider-TamMbr4okv4-unsplash.png" alt="">
                </div>
            </div>
        </div>

        <div class="slide-container">
            <div class="slide">
                <div class="content">
                    <h3>04</h3>
                    <p>
                        Here goes a phrase<br>
                        about Passion.</p>
                </div>
                <div class="image">
                    <img src="assets/websiteStyle/assets/Resistance.jpg"  alt="">
                </div>
            </div>
        </div>

        <div id="prev" onclick="prev()"> < </div>
        <div id="next" onclick="next()"> > </div>
    </div>

    <script>

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
        
    </script>
    <!--==================== our story ====================-->

    <div class="histoire">
        <div class="nohisto">
            <h2>Notre histoire <span>.</span></h2>
        </div>

    </div>

    <div class="historys" id="story">

        <div id="befor" onclick="befor()"> < </div>
        <div id="avant" onclick="avant()"> > </div>

        <div class="history-container active">
            <div class="history" id="first">
                <div class="sentence">
                    <p>Here goes a small sentence based on Passion 
                        ( each <br>year goes with a value )</p>
                </div>

                <div class="year">
                    <p>20<span id="changeme">18</span></p>
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
        </div>


        


    </div>

    <script>

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
     
 </script>

<script>

   
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
           <img class="image1" src="assets/websiteStyle/assets/Hanae.png" alt="">
           <img class="image2" src="assets/websiteStyle/assets/rabie.png" alt="">
           <img class="image3" src="assets/websiteStyle/assets/Hanae.png" alt="">
           <img class="image4" src="assets/websiteStyle/assets/rabie.png" alt="">
       
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

         <!--==================== footer ====================-->


    <footer class="footer">
        <ul class="ul-footer">

            <li class="footer-logo">
                <a><img src="assets/websiteStyle/assets/logo-black.png" alt=""></a>
            </li>
            <li class="social-media">
                <a target="_blank" href="https://web.facebook.com/softCactus19" class="li-fb">
                    <img src="assets/websiteStyle/assets/fb.png" alt="">
                </a>
                <a target="_blank" href="https://www.instagram.com/soft.cactus.communication/" class="li-ig">
                    <img src="assets/websiteStyle/assets/ig.png" alt="">
                </a>
                <a target="_blank" href="https://www.linkedin.com/company/soft-cactus/" class="li-in">
                    <img src="assets/websiteStyle/assets/in.png" alt="">
                </a>
            </li>
            <li class="rightss">
                <p>All rights reserved for </p>
                <p>SOFT CACTUS 2018-2022</p>
            </li>
        </ul>
    </footer>



</body><?php /**PATH /home/softcact/public_html/resources/views/whoarewe.blade.php ENDPATH**/ ?>