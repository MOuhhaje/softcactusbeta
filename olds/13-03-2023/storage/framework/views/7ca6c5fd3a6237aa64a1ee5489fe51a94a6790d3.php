<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app_name', 'Soft Cactus | Agence de communication digitale')); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/logo.png')); ?>" loading="lazy">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font.css')); ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/header-footer.css')); ?>">
<?php echo $__env->yieldContent('head'); ?>

</head>
<body>
    <header class="header-basic">
        <div class="head">
            <ul>
                
                <li>
                    <span class="lang"><?php echo $__env->yieldContent('langue'); ?></span>
                </li>
                <li class="head-links">
                    <a href="tel:+212 648927820" target="_blank">+212 648 927 820</a>
                </li>
                <li class="head-links">|</li>
                <li class="head-links">
                    <a href="mailto:contact@softcactus.ma" target="_blank">Contact@softcactus.ma</a>
                </li>
            </ul>
        </div>
        <nav>
            <ul>
                <?php echo $__env->yieldContent('menu'); ?>
            </ul>
        </nav>
    </header>

    <header class="header-mobile">
        <div class="head">
            <ul>
                <li>
                    <a href="<?php echo e(route('welcome')); ?>"><img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="image" loading="lazy"></a>
                </li>
                <li>
                    <span style="margin:8px 20px;font-size:12px;" class="menu">
                        <a href="javascript::void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/>
                            </svg>
                        </a>
                    </span>
                </li>
                <li>
                    <span class="lang"><?php echo $__env->yieldContent('langue'); ?></span>
                </li>
            </ul>
        </div>
    </header>

        <?php echo e($slot); ?>


    <footer>
        <ul>
            <li class="footer-logo">
                <a <?php echo $__env->yieldContent('link_home'); ?>>
                    <h3>
                        <img src="<?php echo e(asset('assets/img/logo-complet.png')); ?>" alt="logo" width="200px" class="logo-complet" loading="lazy">
                    </h3>
                </a>
            </li>
            <li>
                <a href="https://web.facebook.com/softCactus19" target="_blank">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35" viewBox="0 0 35 35">
                        <defs>
                          <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 512 512">
                            <image width="512" height="512" xlink:href="data:image/png;base64,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"/>
                          </pattern>
                        </defs>
                        <circle id="facebook_3_" data-name="facebook (3)" cx="17.5" cy="17.5" r="17.5" fill="url(#pattern)"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/soft.cactus.communication/" target="_blank">
                    <img src="<?php echo e(asset('assets/img/instagram.png')); ?>" alt="intagram" loading="lazy">
                </a>
                <a href="https://www.linkedin.com/company/soft-cactus/" target="_blank">
                    <img src="<?php echo e(asset('assets/img/linkedin.png')); ?>" alt="linkedin" loading="lazy">
                </a>
            </li>
            <li>
                <p>All rights reserved to </p>
                <p>
                    <a href="<?php echo e(route('welcome')); ?>">
                        SOFT CACTUS
                    </a>
                    2018-2022
                </p>
            </li>
        </ul>
    </footer>

    <div class="offcanvas offcanvas-top h-100" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex justify-content-center align-items-center">
            <nav>
                <ul class="p-0 m-0">
                    <?php echo $__env->yieldContent('menu-mobile'); ?>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Fichiers Javascript -->
    <script  type="text/javascript" src="<?php echo e(asset('assets/js/jquery/jquery.min.js')); ?>"></script>
    <script  type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script  type="text/javascript">
        $(function(){
            let deg = 0;
            setInterval(() => {
                if(deg == 360){
                    $('.logoMenu img').animate( { deg: 360 }, {
                        duration: 2500,
                        step: function(now) { $(this).css({ transform: 'rotateY(' + now + 'deg)' }); }
                    },2500);
                    deg = 0;
                }else{
                    $('.logoMenu img').animate( { deg: 0 }, {
                        duration: 2500,
                        step: function(now) { $(this).css({ transform: 'rotateY(' + now + 'deg)' }); }
                    },2500);
                    deg = 360;
                }
            }, 5000);
        });
    </script>
    <?php echo $__env->yieldContent('body'); ?>
</body>
</html>
<?php /**PATH /home/softcact/public_html/resources/views/layouts/guest-layout.blade.php ENDPATH**/ ?>