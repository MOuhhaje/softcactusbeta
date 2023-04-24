<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('front/css/_canvas.scss')); ?>" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo e(asset('front/css/scroll.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
        <div class="slider-container" >
            <div class="slider">
                <img src="<?php echo e(asset('imgs/acceuil.jpg')); ?>" alt="" class="img-desk">
            </div>
            <div class="slider">
                <main class="content" id="global-wrapper">
                    <div class="live-background " data-x="" data-y="" style="width: 100%;">
                        <canvas class="lb-canvas"  style="width: 100%;height:100%;"></canvas>
                    </div>
                </main>
            </div>
        </div>
        <img src="<?php echo e(asset('imgs/phone1.png')); ?>" alt="" class="img-mobile">
    

    <?php echo $__env->make('frontOffice.partialPages.ourworkHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partialPages.serviceHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partialPages.chandelleHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partialPages.teamHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stackblur-canvas/2.5.0/stackblur.min.js" integrity="sha512-W5pl1mdnRnOONc8pHMFi5xyBNNNHo6N7Q2psPRHWMPR47VyO6F/sL1G5PpRLBcsd9QL+WfDa0J9mEsGoxQH+RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        var gsap = gsap || {};
        var StackBlur = StackBlur || {};
    </script>
    <script src="<?php echo e(asset('front/js/canvas.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('front/js/scroll.js')); ?>"></script>
    <script>
      
        $(document).ready(function(){
            var liveBackground = $('.live-background');
            var img = $('.img-desk');
            liveBackground.height(img.height());
            $(window).resize(function(){
                liveBackground.height(img.height());
            });

            var slider_container = $('.slider-container');
            
            var slider = $('.slider');
            slider_container.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,  
                infinite: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                speed: 1000,   
            });
            //when the window is under 479px hide the slider-container
            $(window).resize(function(){
                if($(window).width() < 479){
                    slider_container.hide();
                }else{
                    slider_container.show();
                }
            });
            var wrapper=$('.wrapper');
            wrapper.click(function(){
                window.location.href = "<?php echo e(route('chandelles')); ?>";
            });
        });
        
        const faviconTag = document.getElementById("faviconTag");
        const isDark = window.matchMedia("(prefers-color-scheme: dark)");

        const changeFavicon = () => {
            if (isDark.matches) faviconTag.href = "<?php echo e(asset('imgs/logo-white.png')); ?>"
            else faviconTag.href = "<?php echo e(asset('imgs/logo-purple.png')); ?>"
        };
        changeFavicon();
        setInterval(changeFavicon, 1000);

        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softcact/public_html/resources/views/frontOffice/home.blade.php ENDPATH**/ ?>