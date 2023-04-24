
    <!--==================== header ====================-->
    <div class="nav-mobile">
        <div class="logo-mobile">
            
            <a href="#"><img src="<?php echo e(asset('imgs/logo-purple.png')); ?>"></a>
        </div>
        <div class="right-nav-mobile">
            
            <div class="burger-mobile" >
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

        </div>
    </div>
    <section class="header" id="header">
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="<?php echo e(route('home')); ?>#ourwork" >Our work</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo e(route('about')); ?>" >About</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('imgs/logo-purple.png')); ?>" id="flipping-logo"></a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo e(route('blog')); ?>" >Blog</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo e(route('contact')); ?>" >Contact</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="header-mobile" >
        <div class="bg-white">
            <div class="nav__menu-mobile" id="nav-menu-mobile">
                <ul class="nav__list-mobile">
                    
                    <li class="nav__item-mobile" onclick="window.location.href='<?php echo e(route('home')); ?>'">
                        <a href="javascript:void(0)" >Home</a>
                    </li>
                    <li class="nav__item-mobile" onclick="window.location.href='<?php echo e(route('home')); ?>#ourwork'">
                        <a href="javascript:void(0)" >Our work</a>
                    </li>
                    <li class="nav__item-mobile" onclick="window.location.href='<?php echo e(route('about')); ?>'">
                        <a href="javascript:void(0)"  >About</a>
                    </li>
                    <li class="nav__item-mobile" onclick="window.location.href='<?php echo e(route('blog')); ?>'">
                        <a href="javascript:void(0)" >Blog</a>
                    </li>
                    <li class="nav__item-mobile" onclick="window.location.href='<?php echo e(route('contact')); ?>'">
                        <a href="javascript:void(0)" >Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </section><?php /**PATH /home/softcact/public_html/resources/views/frontOffice/partial/header.blade.php ENDPATH**/ ?>