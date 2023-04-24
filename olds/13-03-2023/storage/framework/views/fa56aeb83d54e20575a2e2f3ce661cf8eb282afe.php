<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('front/css/service.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="service-content">
        <div class="service-title" >
            <H2>
                <span class="color-text">Services.</span>
            </H2>
        </div>
        <?php echo $__env->make('frontOffice.partialPages.serviceHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
       
       
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softcact/public_html/resources/views/frontOffice/services.blade.php ENDPATH**/ ?>