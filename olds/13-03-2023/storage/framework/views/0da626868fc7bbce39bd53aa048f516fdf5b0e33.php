<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('front/css/service.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="service-content">
        <div class="sec-header" >
            <div class="title color-text">
                <H2>
                    <span class="color-3">Community Management<span class="color-2">.</span></span>
                </H2>
            </div>
            <div class="text">
                <p>
                    lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                </p>
            </div>
        </div>
        <div class="sec-body">
            <a href="<?php echo e(route('chandelles')); ?>">
                <div>
                    <img src="<?php echo e(asset('imgs/chandelles.png')); ?>" alt="">
                </div>
            </a>
        </div>
        <div class="sec-contact">
            <div>
                <div class="contact-text">
                    <div class="text-1">
                        wanna get in touch?
                    </div>
                    <div class="text-2">
                        <p>
                            Let us know how can help you. We are open to talk
                        </p>
                    </div>
                </div>
                <div class="contact-btn">
                    
                    <a href="<?php echo e(route('contact')); ?>" class="btn btn-primary">
                        <span>
                            Contact
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
       
       
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softcact/public_html/resources/views/frontOffice/service-managment.blade.php ENDPATH**/ ?>