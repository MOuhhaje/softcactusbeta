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
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/idea.css')); ?>">
    <?php $__env->stopSection(); ?>
    
    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> 
        <?php $__env->startSection('langue'); ?> 
            <a href="<?php echo e(route('blog.show',
                [ 
                'blog'=> $blog->name_blog,
                    'lang' => 'Fr'
                ])); ?>">
                EN
            </a>
        <?php $__env->stopSection(); ?>
    <?php else: ?> 
        <?php $__env->startSection('langue'); ?>
            <a href="<?php echo e(route('blog.show',
            [
                'blog'=> $blog->name_blog,
                'lang' => 'En'
                ])); ?>">
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

    <div class="ideas">
        <div class="container">
            <?php $__currentLoopData = $ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <figure>
                <?php if($idea->link_idea): ?> <a href="<?php echo e($idea->link_idea); ?>" class="links"> <?php else: ?> <a href="javascript::void(0)" class="links"><?php endif; ?>
                    <img src="<?php echo e(asset('storage/blogs/'.$idea->img_idea)); ?>"  class="col-12" />
                </a>
                <div class="text-center">
                    <figcaption>
                        <?php if($idea->link_idea): ?> <a href="<?php echo e($idea->link_idea); ?>" class="links"> <?php else: ?> <a href="javascript::void(0)" class="links"><?php endif; ?>
                            <?php echo e($idea->titre_idea); ?>

                        </a>
                    </figcaption>
                </div>
            </figure>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php $__env->startSection('body'); ?>
    <script>
        $(function(){
        });
    </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/client/blogs/Ideas.blade.php ENDPATH**/ ?>