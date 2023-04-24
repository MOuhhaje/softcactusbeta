
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SOFT CACTUS - Agence de communication digitale</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo e(asset('front/css/styles.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('front/css/costum.css')); ?>" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('imgs/logo-purple.png')); ?>" id="faviconTag" />
    <script>
        const faviconTag = document.getElementById("faviconTag");
        const isDark = window.matchMedia("(prefers-color-scheme: dark)");

        const changeFavicon = () => {
            if (isDark.matches) faviconTag.href = "<?php echo e(asset('imgs/logo-white1.png')); ?>";
            else faviconTag.href = "<?php echo e(asset('imgs/logo-purple.png')); ?>";
        };
        changeFavicon();
        setInterval(changeFavicon, 1000);
    </script>
    
</head>

<body>

    <!--==================== Responsive navbar ====================-->


    <div class="contact-mobile">
        <a href="tel:212 648 927 820">+212 648 927 820</a>
        <a href="mailto:Contact@softcactus.ma?subject = subject text" class="email-pipe" target="_blank">Contact@Softcactus.ma</a>
        
    
    </div>
    <nav class="row navbar navbar-expand-lg navbar-light bg-light">
        <div class="col-md-7 col-lg-7 col-sm-12 container-fluid">
            <a class="navbar-brand" href="#" >
                
                <img class="navbar-brand1" width="260px" src="<?php echo e(asset('imgs/full-logo-white.png')); ?>" alt="" />
                
                <img class="navbar-brand2" width="260px" src="<?php echo e(asset('imgs/logo-white1.png')); ?>" alt="" />
            </a>
        </div>

        <div class="col-5 cont"></div>
    </nav>


    <!--==================== Page content ====================-->

    <div class="row col-12 full-content">
        <div class="row col-md-7 col-lg-7 col-sm-12 d-flex justify-content-between right-content">

            <div class=" row col-md-1 col-sm-1  sidebar" id="contact-info">
                <a href="mailto:Contact@softcactus.ma?subject = subject text" class="email-pipe" target="_blank">Contact@Softcactus.ma</a>
                <a href="tel:212 648 927 820">+212 648 927 820</a>
            </div>

            <div class="col-5 comingdiv">
                <h1 class=" text1 font-weight-bold float-end">COMING</h1>
            </div>

        </div>

        <div class="row col-md-5 col-lg-5 col-sm-12  left-content">
            <h1 class="font-weight-bold text2">soon .</h1>

        </div>
    </div>

    <!-- Page Solutions-->

    <div class="row solution ">
        <div class="row col-md-7 col-lg-7 col-sm-12 right-solution">

            <div class="sous-solution1">
                <h5 class="title3 font-weight-bold">NOS SOLUTIONS </h5>
                <h5 class="title4 font-weight-bold">.</h5>
            </div>
            <div class="sous-solution2">
                <p class="text3 ">
                    Ni trop grande, no trop petite, notre équipe prend en charge des projets de tailles différents et variés
                    tout en vous assurant proximité, créativité et rendu de qualité.<br>
                    Que ce soit du Consulting & Branding, Développement web et Design ou du Marketing des réseaux
                    sociaux & Community management, nos experts sont à votre écoute pour transformer vos idées en
                    concepts fonctionnels et pertinents.
            </p>
            </div>
            

        </div>
        
        <div class="row col-md-5 col-lg-5 col-sm-12  left-solution">
           
                <div class="line1"></div>
                 <div class="line2"></div>
                <div class="line3"></div>
          
            
            
        </div>
    
    </div>

    <!--==================== Services====================-->

    <div class="row servicess">

        <div class="row col-md-7 col-lg-7 col-sm-12 service-left">

            <div class="row service1">

                <div class="col-1 sous-service1">
                    <span class="service1__line"></span>
                </div>

                <div class="col-11 sous-service2">
                    <h5 class="titles">Développement <br> web</h5>
                    <ul class="li1" >
                        <li><span>Développement Front/Back - end</span> </li>
                        <li><span>Développement mobile</span></li>
                        <li><span>Sites vitrines, institutionnels et e-business : WordPress, Laravel</span></li>
                        <li><span>Sites e-commerce</span></li>
                        <li><span>Direction technique</span></li>
                        <li><span>Hébergement & Choix du nom de domaine</span></li>
                        <li><span>Sécurisation de site : certificat SSL</span></li>
                        <li><span>Création ou refonte de site internet</span></li>
                        <li><span>Maintenance corrective et évolutive</span></li>
                    </ul>
                </div>

            </div>

            <!-- <div class="row service2">
                <div class="col-1 sous-service3">
                    <span class="service2__line"></span>
                </div>
                <div class="col-11 sous-service4">
                    <h5 class="titles">Design UX / UI</h5>
                    <p class="sous-title"> “Le conseil est la nouvelle façon de vendre<br> en marketing digital”</p>
                </div>

            </div> -->
        </div>

        <div class="row col-md-5 col-lg-5 col-sm-12 service-right">
        
            <div class="row service3">
                <div class="col-1 sous-service5">
                    <span class="service3__line"></span>
                </div>
                <div class="col-11 sous-service6">
                    <h5 class="titles">Design UX / UI</h5>
                    <ul class="li2">
                        <li><span>UI Design</span></li>
                        <li><span>UX Design</span></li>
                        <li><span>Webdesign</span></li>
                        <li><span>Design mobile</span></li>
                        <li><span>Product design</span></li>
                    </ul>
                </div>

            </div>

            <div class="row service4">
                <div class="col-1 sous-service7">
                    <span class="service4__line"></span>
                </div>
                <div class="col-11 sous-service8">
                    <h5 class="titles">Marketing des réseaux<br> sociaux</h5>
                   
                        <ul class="li3">
                            <li><span>Évaluation page/canal</span></li>
                            <li><span>Marketing & gestion des réseaux sociaux</span></li>
                            <li><span>Marketing & gestion de contenu</span></li>
                            <li><span>Optimisation & Copywriting</span></li>
                        </ul>
                </div>
            </div>
        
        </div>

    </div>

    <!--==================== Contact ====================-->
    <div class="row circle">

        <div class="row contact">

            <div class="row col-md-7 col-lg-7 col-sm-12 contact-left">
                <div class="sous-contact1">
                    <p>Parlons <br>de votre <br> projet <span>.</span></p>
                    <div class="contact-line"></div>
                </div>
            </div>


            <div class="row col-md-5 col-lg-5 col-sm-12 contact-right">
                <div class="start-cont">
                     <div class="sous-contact3">
                        <div class="two-a" >
                            <a href="tel:212 648 927 820" ><span>+212 648 927 820</span></a>
                            <br>
                            <a href="mailto:Contact@softcactus.ma?subject = subject text"><span>Contact@softcactus.ma</span> </a>
                            <br>
                         </div>
                         <div class="one-a">
                        <a target="_blank" href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE" class="a3" value="Find" onclick="InitializeMap();">
                                <span>N° 79, Boulevard Derfoufi,<br> 
                            6éme étage, appartement 6,<br>
                            Oujda</span></a>
                        </div>
                     </div>

                </div>
            </div>


        </div>


        <!--==================== Footer ====================-->

          <footer class="footer">
            <ul class="ul-footer">
                
                <li class="footer-logo">
                    <a>                      
                        
                    <img src="<?php echo e(asset('imgs/logo-black2.png')); ?>" width="250px">                       
                    </a>
                </li>
                <li class="social-media">
                    <a target="_blank" href="https://web.facebook.com/softCactus19" class="li-fb">
                        
                        <img src="<?php echo e(asset('imgs/fb.png')); ?>">
                    </a>
                    <a target="_blank" href="https://www.instagram.com/soft.cactus.communication/" class="li-ig">
                        <img src="<?php echo e(asset('imgs/ig.png')); ?>">
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/company/soft-cactus/" class="li-in">
                        <img src="<?php echo e(asset('imgs/in.png')); ?>">
                    </a>
                </li>
                <li class="rightss" width="200px">
                    <p>All rights reserved for </p>
                    <p>SOFT CACTUS 2018-2022</p>
                </li>
            </ul>
        </footer> 

        <div class="row semi-circle"></div>

    </div>

    <!--==================== Semi cercle ====================-->


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>

<!--==================== c ====================-<?php /**PATH /home/softcact/public_html/resources/views/coming.blade.php ENDPATH**/ ?>