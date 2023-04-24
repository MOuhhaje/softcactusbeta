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
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/service.css')); ?>">
    <?php $__env->stopSection(); ?>

    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
        <?php $__env->startSection('langue'); ?>
            <a href="<?php echo e(route('service.show',
                [
                    'lang' => 'fr',
                    'service' => strtolower(str_replace(' ','-',$service->name_service))
                ])); ?>">
                EN
            </a>
        <?php $__env->stopSection(); ?>
    <?php else: ?>
        <?php $__env->startSection('langue'); ?>
            <a href="<?php echo e(route('service.show',
            [
                'lang' => 'en',
                'service' => strtolower(str_replace(' ','-',$service->name_service))
                ])); ?>">
                FR
            </a>
        <?php $__env->stopSection(); ?>
    <?php endif; ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"  style="color: lightgray">
                <a href="javascript::void(0);">
                    <?php echo e($service->sub_name_service); ?>

                </a>
            </li>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($ser->name_service != $service->name_service): ?>
                <li class="breadcrumb-item">
                    <a href="<?php echo e(route('service.show',['lang' => $lang->name_langue,'service' => strtolower(str_replace(' ','-',$ser->name_service))])); ?>">
                        <?php echo e($ser->sub_name_service); ?>

                    </a>
                </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </nav>

    <div class="row brand">
        <div class="col-lg-6  col-sm-12 first">
            <img src="<?php echo e(asset('storage/services/'.$service->img_service)); ?>" alt="" width="75%">
        </div>
        <div class="col-lg-6  col-sm-12 last">
            <div style="border:none">
                <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
                <div style="border-left-color: <?php echo e($service->color_service); ?>;width:100%">
                    <?php print(nl2br($service->desc_service_en)) ?>
                </div>
                <div style="border: none;margin: 30px 0;overflow:hidden;padding: 10px;">
                    <a href="<?php echo e(asset('softcactus.pdf')); ?>" target="_blank" style="padding: 10px 20px;color: white;background: #9D00FF;border-radius: 5px;">Download brochure</a>
                </div>
                <?php else: ?>
                <div style="border-left-color: <?php echo e($service->color_service); ?>;width:100%">
                    <?php print(nl2br($service->desc_service)) ?>
                </div>
                <div style="border: none;margin: 30px 0;overflow:hidden;padding: 10px;">
                    <a href="<?php echo e(asset('softcactus.pdf')); ?>" target="_blank" style="padding: 10px 20px;color: white;background: #9D00FF;border-radius: 5px;"> Télécharger la brochure</a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <div class="row collection">
        <?php $__currentLoopData = $service->references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key == 0): ?>
                <a href="<?php echo e(route('reference.show',['lang' => $lang->name_langue,'reference' => $reference->id])); ?>"
                    class="col-lg-12 col-sm-12 col-12 first" style="background-image: url(' <?php echo e(asset('storage/references/'. $reference->long_banner_reference)); ?>');background-size: cover;text-align:left">
                    <div style="background: rgb(0, 0, 0,0.4);text-align: center">
                        <?php echo e($reference->service->name_service); ?>

                    </div>
                </a>
                <?php else: ?>
                <a href="<?php echo e(route('reference.show',['lang' => $lang->name_langue,'reference' => $reference->id])); ?>"
                    class="col-lg-6 col-sm-12">
                    <div class="col-12 p-0 m-0" style="background-repeat: no-repeat;background-image: url(' <?php echo e(asset('storage/references/'. $reference->small_banner_reference)); ?>');background-size: 100% 100%;align-items:flex-end;font-size: 22px;color: white;justify-content: left">
                        <div class="col-12 p-1 m-0" style="text-align: left;background: rgb(0, 0, 0,0.4);">
                            <?php print(str_replace(' ','<br>',$reference->service->name_service)); ?>
                        </div>
                    </div>
                </a>
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('reference.show',['lang' => $lang->name_langue,'reference' => $reference->id])); ?>"
            class="col-lg-6 col-sm-12">
            <div class="col-12 p-0 m-0" style="background-repeat: no-repeat;background-image: url(' <?php echo e(asset('storage/references/'. $reference->small_banner_reference)); ?>');background-size: 100% 100%;align-items:flex-end;font-size: 22px;color: white;justify-content: left">
                <div class="col-12 p-1 m-0" style="text-align: left;background: rgb(0, 0, 0,0.4);">
                    <?php print(str_replace(' ','<br>',$reference->service->name_service)); ?>
                </div>
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



    <div class="contact">
        <h6>Wanna get <br>in touch  <span>?</span></h6>
        <p>
            Let us know how can we help you, <br>
            we are open to talk
        </p>
        <a href="<?php echo e(route('contact.showbylang',$lang->name_langue)); ?>">Contact</a>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/client/service.blade.php ENDPATH**/ ?>