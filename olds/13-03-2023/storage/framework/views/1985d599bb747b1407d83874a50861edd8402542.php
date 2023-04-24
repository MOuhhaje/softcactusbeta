<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOFT CACTUS - Agence de communication digitale</title>
    <link href="assets/websiteStyle/css/costum.css" rel="stylesheet" />
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
                <a href="mailto:Contact@softcactus.ma?subject = subject text" target="_blank">Contact@Softcactus.ma</a>
            </div>
        </div>
        
    </nav>

    <div class="nav-mobile">
        <div class="logo-mobile">
            <a href="#"><img src="assets/websiteStyle/assets/logo-purple.png"></a>
        </div>
        <div class="right-nav-mobile">
            <div class="lang">
                <span>EN</span>
            </div>
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

    <!--==================== main ====================-->

    <main class="content">
        
        <img src="assets/websiteStyle/assets/acceuil.jpg" alt="" class="img-desk">
        <img src="assets/websiteStyle/assets/phone1.png" alt=""class="img-mobile">
        
    </main>

    <!--==================== Our work ====================-->

    <section class="ourwork" id="ourwork">
        <div class="title1">Our work <span>.</span></div>
        <div class="side-right"></div>
        <div class="left-p">
            <p class="p1">What we<br>
            do best</p>  
        </div>
        <div class="right-p">
            <p>Here goes a small paragraph showing<br>
                the client what are the results they may<br>
                expect from working with us, in general<br>
                basically saying you'll be better</p>
        </div>
    </section>


    <!--==================== Services ====================-->

     
    <div class="service">

        <div class="service-1">
            <h2>Branding</h2>
            <div class="content-right">
                <div class="line-left1"></div>
                <div class="content-r">
                    <p id="para">Here goes a text about branding<br>
                        explaining what they will get after<br>
                        getting the service in general,<br>
                        simply put. mentioning branding.
                    </p>
                    <a href="" class="links">see more&nbsp;&nbsp;</a>

                </div>
            </div>
        </div>

        <div class="service-1">
            <h2>Web Development</h2>
            <div class="content-right">
                <div class="line-left2"></div>
                <div class="content-r">
                    <p id="para">Here goes a text about branding<br>
                        explaining what they will get after<br>
                        getting the service in general,<br>
                        simply put. mentioning branding.
                    </p>
                    <a href="" class="links">see more&nbsp;&nbsp;</a>

                </div>
            </div>
        </div>

        <div class="service-1">
            <h2>Community management</h2>
            <div class="content-right">
                <div class="line-left3"></div>
                <div class="content-r">
                    <p id="para">Here goes a text about branding<br>
                        explaining what they will get after<br>
                        getting the service in general,<br>
                        simply put. mentioning branding.
                    </p>
                    <a href="" class="links">see more&nbsp;&nbsp;</a>

                </div>
            </div>
        </div>

        <div class="service-1">
            <h2>Consulting</h2>
            <div class="content-right">
                <div class="line-left4"></div>
                <div class="content-r">
                    <p id="para">Here goes a text about branding<br>
                        explaining what they will get after<br>
                        getting the service in general,<br>
                        simply put. mentioning branding.
                    </p>
                    <a href="" class="links">see more&nbsp;&nbsp;</a>

                </div>
            </div>
        </div>


    </div>


    <!--==================== chandelle ====================-->
   
    <div class="wrapper box">
		<div class="single-box"><img alt="" src="assets/websiteStyle/assets/chandelles.png"></div>
		<div class="single-box"><img alt="" src="assets/websiteStyle/assets/chandelles.png"></div>
		<div class="single-box"><img alt="" src="assets/websiteStyle/assets/chandelles.png"></div>
		<div class="single-box"><img alt="" src="assets/websiteStyle/assets/chandelles.png"></div>
	</div>
   
    <!--==================== team ====================-->

       <div class="team">
        <div class="title-team">Our team <span>.</span></div>

        <div class="team-members">

            <div class="member">
                <div class="img1"></div>
                <h1>HANAE DEKHISSI</h1>
                <p>Founder & manager</p>
            </div>

            <div class="member">
                <div class="img2"></div>
                <h1>RABIE RAGGUI</h1>
                <p>Graphic project manager</p>
            </div>

            <div class="member">
                <div class="img3"></div>
                <h1>ABDERRAHIM MOULOUDI</h1>
                <p>Développeur web</p>
            </div>

            <div class="member">
                <div class="img4"></div>
                <h1>LAYLA SARRI</h1>
                <p>Community manager</p>
            </div>

            <div class="member">
                <div class="img1"></div>
                <h1>HANAE DEKHISSI</h1>
                <p>Founder & manager</p>
            </div>
            

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
</body>

</html><?php /**PATH /home/softcact/public_html/resources/views/homePage.blade.php ENDPATH**/ ?>