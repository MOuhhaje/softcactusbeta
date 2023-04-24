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
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/prtips.css')); ?>">
    <?php $__env->stopSection(); ?>

    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if($lang == 'EN' || $lang == 'en' || $lang == 'En' || $lang == 'eN'): ?>
        <?php $__env->startSection('langue'); ?>
            <a href="<?php echo e(route('blog.show',[ 'lang' => 'Fr',
                    'blog' => $blog->name_blog])); ?>">
                EN
            </a>
        <?php $__env->stopSection(); ?>
    <?php else: ?>
        <?php $__env->startSection('langue'); ?>
            <a href="<?php echo e(route('blog.show',[  'lang' => 'En',
                'blog' => $blog->name_blog])); ?>">
                FR
            </a>
        <?php $__env->stopSection(); ?>
    <?php endif; ?>

    <div class="section-head">
        <p>What's new <span>?</span></p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($blog->id == $blg->id): ?>
                    <?php if($lang->name_langue == 'fr'): ?>
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('blog.show',['blog' => $blg->name_blog,'lang' =>  $lang->name_langue])); ?>"><?php echo e($blg->title_blog); ?></a></li>
                    <?php else: ?>
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('blog.show',['blog' => $blg->name_blog,'lang' =>  $lang->name_langue])); ?>"><?php echo e($blg->name_blog); ?></a></li>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if($lang->name_langue == 'fr'): ?>
                    <li class="breadcrumb-item "><a href="<?php echo e(route('blog.show',['blog' => $blg->name_blog,'lang' =>  $lang->name_langue])); ?>"><?php echo e($blg->title_blog); ?></a></li>
                    <?php else: ?>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('blog.show',['blog' => $blg->name_blog,'lang' => $lang->name_langue])); ?>"><?php echo e($blg->name_blog); ?></a></li>
                    <?php endif; ?>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </nav>
    </div>

    <div class="protip">
        <?php $__currentLoopData = $protips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $protip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(($key)  % 2 == 0): ?>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 video p-0 m-0">
                <div class="col-12 p-0 m-0 justify-content-end">
                    <blockquote class="instagram-media" data-instgrm-permalink="<?php echo e($protip->video_protip); ?>" data-instgrm-version="14"></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 texts" style="background: <?php echo e($protip->color_protip); ?>;">
                <div>
                    <label><?php echo e($protip->titre_protip); ?></label>
                    <div>
                        <?php
                            $protip->desc_protip = preg_replace('/ class=".*?"/', '', $protip->desc_protip);
                            $protip->desc_protip = preg_replace('/ style=".*?"/', '', $protip->desc_protip);
                            $protip->desc_protip = str_replace([ '<o:p>','</o:p>','<div>','<p>','</p>','</div>','<font>','</font>','<span>','</span>'],['','','','','','','','','',''],$protip->desc_protip);
                            print(nl2br($protip->desc_protip))
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 texts" style="background: <?php echo e($protip->color_protip); ?>;">
                <div>
                    <label><?php echo e($protip->titre_protip); ?></label>
                    <div>
                        <?php
                            $protip->desc_protip = preg_replace('/ class=".*?"/', '', $protip->desc_protip);
                            $protip->desc_protip = preg_replace('/ style=".*?"/', '', $protip->desc_protip);
                            $protip->desc_protip = str_replace([ '<o:p>','</o:p>','<div>','<p>','</p>','</div>','<font>','</font>','<span>','</span>'],['','','','','','','','','',''],$protip->desc_protip);
                            print(nl2br($protip->desc_protip))
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 video p-0 m-0">
                <div class="col-12 p-0 m-0 justify-content-start">
                    <blockquote class="instagram-media" data-instgrm-permalink="<?php echo e($protip->video_protip); ?>" data-instgrm-version="14"></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/client/blogs/protips.blade.php ENDPATH**/ ?>