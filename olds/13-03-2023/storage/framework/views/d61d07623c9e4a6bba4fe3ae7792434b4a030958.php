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
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/details-service.css')); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <?php $__env->stopSection(); ?>

    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
        <?php $__env->startSection('langue'); ?>
        <a href="<?php echo e(route('reference.show',[ 'lang' => 'Fr', 'reference' => $reference->id ])); ?>">
                EN
            </a>
        <?php $__env->stopSection(); ?>
    <?php else: ?>
        <?php $__env->startSection('langue'); ?>
            <a href="<?php echo e(route('reference.show', [ 'lang' => 'En',  'reference' => $reference->id ])); ?>">
                FR
            </a>
        <?php $__env->stopSection(); ?>
    <?php endif; ?>


<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"  style="color: lightgray">
            <a href="<?php echo e(route('service.show',['lang' => $lang->name_langue,'service' => strtolower(str_replace(' ','-', $reference->service->name_service))])); ?>">
                <?php echo e($reference->service->name_service); ?>

            </a>
        </li>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($ser->name_service != $reference->service->name_service): ?>
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('service.show',['lang' => $lang->name_langue,'service' => strtolower(str_replace(' ','-',$ser->name_service))])); ?>">
                    <?php echo e($ser->name_service); ?>

                </a>
            </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</nav>

    <div class="row service">
        <div class="col-lg-6  col-sm-12 first">
            <div>
                <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
                <h4>Project description <span></span></h4>
                <p>
                    <?php
                        print(nl2br($reference->client->desc_client_en));
                    ?>
                </p>
                <?php else: ?>
                <h4>Description du projet<span></span></h4>
                <p>
                    <?php
                        print(nl2br($reference->client->desc_client));
                    ?>
                </p>
                <?php endif; ?>

            </div>
        </div>
        <div class="col-lg-6  col-sm-12 last ">
            <div>
                <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
                    <h4>Services we provided <span></span></h4>
                    <ul>
                        <?php
                            print(nl2br($reference->desc_references_eng))
                        ?>
                    </ul>
                    <?php else: ?>
                    <h4>Services que nous avons fournis <span></span></h4>
                    <ul>
                        <?php
                            print(nl2br($reference->desc_reference))
                        ?>
                    </ul>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="row img" style="margin-bottom: 80px">
       <img src="<?php echo e(asset('storage/references/'.$reference->long_banner_reference)); ?>" alt="image"  loading="lazy">
    </div>


    <?php if($reference->sliders->count() > 0): ?>
    <div class="row img slick">
        <?php $__currentLoopData = $reference->sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <img src="<?php echo e(asset('storage/references/'.$slider->img_reference)); ?>" style="width: 100%" alt="image"  loading="lazy">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>



    <div class="row footer">
        <div class="col-lg-6 col-sm-12">
            <img src="<?php echo e(asset('assets/img/foo.png')); ?>" alt="image"  loading="lazy">
        </div>
        <div class="col-lg-6 col-sm-12 last">
            <?php if($second): ?>
            <a href="<?php echo e(route('reference.show',['lang' => $lang->name_langue,'reference' => $second->id])); ?>">
                <img src="<?php echo e(asset('storage/references/'.$second->small_banner_reference)); ?>" class="col-12" alt="image"  loading="lazy">
            </a>
            <?php endif; ?>

        </div>
    </div>


    <?php $__env->startSection('body'); ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.slick').slick({
            autoplay: true,
            autoplaySpeed: 2000
        });
    </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/client/reference.blade.php ENDPATH**/ ?>