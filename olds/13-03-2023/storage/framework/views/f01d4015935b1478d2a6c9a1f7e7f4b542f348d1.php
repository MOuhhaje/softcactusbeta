<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOFT CACTUS - Agence de communication digitale</title>
    <link href="assets/websiteStyle/css/contact.css" rel="stylesheet" />
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




    <!--==================== container ====================-->

    <div class="container">


        <div class="left-info">

            <h1>Parlez-nous<br>de vous <span>.</span></h1>

            <form action="" class="form">
                <label class="labels" for="">Hi, I'm from&nbsp;&nbsp; </label>
                <input class="put" type="text" placeholder="Company name">&nbsp;&nbsp;
                
                <label class="labels" for=""> and you can call me&nbsp;&nbsp;&nbsp;</label>
                <input class="put" type="text" placeholder="Personal name"><br>
                
                <label class="labels" for="">I was wondering if we could collaborate for a&nbsp;&nbsp;</label>
                <input type="text" class="put"placeholder="Project name">
                <label class="labels" for=""> Project ?</label><br>
                
                <label class="labels" for="">You can connect with me at&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="put" placeholder="Email address">
                
                <label class="labels" for="">&nbsp;&nbsp;&nbsp;&nbsp; Or just give me a call</label><br>
                <input class="put" type="tel" placeholder="Phone number">
                <label class="labels" for="">&nbsp;&nbsp;.</label><br>
                
                <div class="btn-holder">
                    <input onclick="" class="btn" type="button" name="doit" value="Let's do it">
                </div>
            </form>


        </div>

        <div class="right-info">
          
            <p>Parlons <br>de votre <br> projet <span class="dot">.</span></p>
        
            <div class="sous-contact">
                <div class="two-a">
                    <a href="tel:212 648 927 820"><span>+212 648 927 820</span></a>
                    <br>
                    <a href="mailto:Contact@Softcactus.ma?subject = subject text"><span>Contact@softcactus.ma</span>
                    </a>
                    <br>
                </div>

                <div class="one-a">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                        class="a3" value="Find" onclick="InitializeMap();">
                        <span>N° 79, Boulevard Derfoufi,<br>
                            6éme étage, appartement 6,<br>
                            Oujda</span></a>
                </div>
            </div>
        </div>



        <div class="left-support">

            <div class="tech">
                <h2>TECHNICAL SUPPORT</h2>
                <div class="tech-info">
                    <div class="phone-mail">
                        <a href="tel:212 648 927 820"><span>+212 648 927 820</span></a>
                        <br>
                        <a href="mailto:Support@Softcactus.ma?subject = subject text"><span>Support@softcactus.ma</span>
                        </a>
                        <br>
                    </div>

                    <div class="address">
                        <a target="_blank"
                            href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                            class="a3" value="Find" onclick="InitializeMap();">
                            <span>N° 79, Boulevard Derfoufi<br>
                                6éme étage appat 6<br>
                                Oujda</span></a>
                    </div>
                </div>
            </div>

            <div class="jobs">
                <h2>JOBS</h2>
                <div class="tech-info">
                    <div class="phone-mail">
                        <a href=""><span>Available jobs</span></a>
                        <br>
                        <a href="mailto:Jobs@Softcactus.ma?subject = subject text"><span>Jobs@softcactus.ma</span>
                        </a>
                        <br>
                    </div>

                    <div class="address">
                        <a target="_blank"
                            href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                            class="a3" value="Find" onclick="InitializeMap();">
                            <span>N° 79, Boulevard Derfoufi<br>
                                6éme étage appat 6<br>
                                Oujda</span></a>
                    </div>
                </div>

            </div>

        </div>

        <div class="right-support">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.7867749967145!2d-1.9196774237148206!3d34.68533058403652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd786522b2629bc7%3A0xae892dbc9b8b7453!2sSoft%20Cactus!5e0!3m2!1sfr!2sma!4v1669822933241!5m2!1sfr!2sma"
             width="100%"
              height="100%"
               style="border:0;" 
               allowfullscreen="" 
               loading="lazy" 
               referrerpolicy="no-referrer-when-downgrade">
            </iframe>
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




</body><?php /**PATH /home/softcact/public_html/resources/views/contact.blade.php ENDPATH**/ ?>