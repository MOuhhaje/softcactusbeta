<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/career.css')); ?>">
    <?php $__env->stopSection(); ?>

    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> <?php $__env->startSection('langue'); ?> <a href="<?php echo e(route('career','Fr')); ?>">EN</a><?php $__env->stopSection(); ?>
    <?php else: ?> <?php $__env->startSection('langue'); ?><a href="<?php echo e(route('career','En')); ?>">FR</a><?php $__env->stopSection(); ?>    <?php endif; ?>

    <div class="row career">
        <div class="col-lg-6  col-sm-12 first">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('contact.showbylang',$lang->name_langue)); ?>">Contact</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="javascript::void(0);" class="cr_li"><?php echo e($career->name_career); ?></a>
                    </li>
                </ol>
            </nav>
            <div>
                <h1><?php echo e($career->name_career); ?></h1><span></span>
            </div>
        </div>
        <div class="col-lg-6  col-sm-12 last p-sm-4">
            <div>
                <?php echo e($career->desc_career); ?>

            </div>
        </div>
    </div>

    <div class="jobs">
        <h1>Available jobs  <span></span></h1>
        <div class="row">
            <?php $__currentLoopData = $offres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6 col-md-6" style="border-color: <?php echo e($offre->border_color_offre); ?>">
                    <h5><?php echo e($offre->name_offre); ?></h5>
                    <h6><?php echo e($offre->ville_offre); ?></h6>
                    <p style="width: 70%"> <?php print(nl2br(substr($offre->desc_offre,0,80)).'...') ?> </p>
                    <a href="<?php echo e(route('offre.show',['lang' => $lang->name_langue ,'offre' => strtolower(str_replace(' ','-',$offre->name_offre))])); ?>">see more</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/client/careers.blade.php ENDPATH**/ ?>