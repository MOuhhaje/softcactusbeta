
<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="content">
        <img src="<?php echo e(asset('imgs/acceuil.jpg')); ?>" alt="" class="img-desk">
        <img src="<?php echo e(asset('imgs/phone1.png')); ?>" alt=""class="img-mobile">
        
    </main>

    <?php echo $__env->make('frontOffice.partialPages.ourworkHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partialPages.serviceHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partialPages.chandelleHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partialPages.teamHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        // ==================== nav ====================
        // #flipping-logo
        // var logo=$('img#flipping-logo');

        // //make the logo turn around itself with a 180deg rotation
        // logo.css({
        //     'transform':'rotate(180deg)',
        //     'transition':'all 0.5s ease-in-out'
        // });


        // ==================== nav ====================
        // ==================== chandelle ====================
         $(document).ready(function(){
            var wrapper = $('.wrapper');
            var box = $('.single-box');
            wrapper.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,  
                // nextArrow: '<i class="fa fa-angle-right"></i>',
                // prevArrow: '<i class="fa fa-angle-left"></i>',
                infinite: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2000,
                speed: 1000,   
            });
            
        });
        // ==================== chandelle ====================
        // var scroll = $(window).scrollTop();
        
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SoftCactus\resources\views/frontOffice/home.blade.php ENDPATH**/ ?>