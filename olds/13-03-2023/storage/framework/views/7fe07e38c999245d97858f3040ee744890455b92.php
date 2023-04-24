

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front/css/career.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="sub-header">
        <ul class="sub__head">
            <li class="sub__item">
                <a href="#who">Contact&nbsp;|</a>
            </li>
            <li class="sub__item">
                <a href="#values">Career &nbsp;</a>
            </li>
        </ul>
    </section>
    <div class="career">
        <div class="first"> 
            <div>
                <h1>Carrière</h1><span></span>
            </div>
        </div>
        <div class="last">
            <div class="text">
                Vos valeurs reflètent votre marque.  
                Notre équipe croit en compétences. C’est notre culture organisationnelle. 
                Soft cactus opte pour une culture de personnalité, soft skills et comportement avant, parcours et formations.
            </div>
        </div>
    </div>

    <div class="jobs">
        <div class="job_header">
            <h1>Available jobs  <span></span></h1>
        </div>
        <div class="row">
            <div style="border-color: #9D00FF">
                <h5>Community manager</h5>
                <h6>Oujda</h6>
                <p > As our team is growing. <br />
                    we are looking for a community manager.<br />
                    In SOFT CACTUS,... </p>
                <a href="<?php echo e(route('careerDetails')); ?>">see more</a>
            </div>
            <div style="border-color: #00FFC4">
                <h5>Commercial agent</h5>
                <h6>Oujda</h6>
                <p >  As our team is growing. <br />
                    we are looking for a commercial agent. <br />
                    In SOFT CACTUS... </p>
                <a href="<?php echo e(route('careerDetails')); ?>">see more</a>
            </div>
        </div>
        <div class="row">
            <div >
                <h5>Commercial agent</h5>
                <h6>Oujda</h6>
                <p>  As our team is growing. <br />
                    we are looking for a commercial agent. <br />
                    In SOFT CACTUS... </p>
                <a href="<?php echo e(route('careerDetails')); ?>">see more</a>
            </div>
            <div style="border-color: #FF00C4">
                <h5>Community manager</h5>
                <h6>Oujda</h6>
                <p> As our team is growing. <br />
                    we are looking for a community manager.<br />
                    In SOFT CACTUS,... </p>
                <a href="<?php echo e(route('careerDetails')); ?>">see more</a>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SoftCactus\resources\views/frontOffice/career.blade.php ENDPATH**/ ?>