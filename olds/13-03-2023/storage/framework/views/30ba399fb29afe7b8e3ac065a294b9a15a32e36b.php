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
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/details-news.css')); ?>">
    <?php $__env->stopSection(); ?>

    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php if($lang == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
        <?php $__env->startSection('langue'); ?>
            <a href="<?php echo e(route('news',['lang'=> 'Fr' ,'news' => $news->id])); ?>">
                EN
            </a>
        <?php $__env->stopSection(); ?>
    <?php else: ?>
        <?php $__env->startSection('langue'); ?>
        <a href="<?php echo e(route('news',['lang'=> 'En' ,'news' => $news->id])); ?>">
                FR
            </a>
        <?php $__env->stopSection(); ?>
    <?php endif; ?>

    <div class="section-head">
        <p>What's new <span>?

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

    <div class="details-news">
        <div class="news">
            <div class="row first">
                <div class="col-lg-6 col-sm-12">
                    <img src="<?php echo e(asset('storage/blogs/'.$news->img_news)); ?>" class="col-12  col-sm-12">
                </div>
                <div class="col-lg-6 col-sm-12 d-flex justify-left align-items-start p-4">
                    <div>
                        <h2 class="title" style="font-weight: 800"> <?php echo e($news->titre_news); ?></h2>
                        <div>
                            <?php
                                $news->desc_news = preg_replace('/ title=".*?"/', '', $news->desc_news);
                                $news->desc_news = preg_replace('/ class=".*?"/', '', $news->desc_news);
                                $news->desc_news = preg_replace('/ style=".*?"/', '', $news->desc_news);
                                $news->desc_news = str_replace([ '&nbsp;','<o:p>','</o:p>','<div>','<p>','</p>','</div>','<font>','</font>','<span>','</span>',],[' ','','','','','','','','','',''],$news->desc_news);
                            $x = 510;
                            for ($i=0; $i < strlen($news->desc_news); $i++) {
                                if ($i >=  510 && $news->desc_news[$i] == ' ') {$x = $i; break; }
                                else{ $x =510; }
                            }
                            print(nl2br(substr($news->desc_news,0,$x)));
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row desc">
                <div class="col-lg-8 col-md-12 col-sm-12 descriptions">
                    <div>
                        <?php print(nl2br(substr($news->desc_news,$x, strlen($news->desc_news)))); ?>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="col-12 articles">
                        <?php $__currentLoopData = $newses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-10 col-sm-12 col-md-12">
                            <div class="img col-12">
                                <a href="<?php echo e(route('news',['lang' => $lang->name_langue,'news' => $item->id])); ?>">
                                    <img src="<?php echo e(asset('storage/blogs/'.$item->img_news)); ?>" class="col-12">
                                </a>
                            </div>
                            <div class="title col-12 p-4 text-center">
                                <a href="<?php echo e(route('news',['lang' => $lang->name_langue,'news' => $item->id])); ?>"><?php echo e($item->titre_news); ?></a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="desc-footer">
                    <div>
                        <p>Rédigé par</p>
                        <p class="titles"><?php echo e($news->by_name_news); ?></p>
                    </div>
                    <div class="footers">
                        <p>Posté le :</p>
                        <p class="titles"><?php echo e($news->date_news->format('Y-m-d')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>



<?php /**PATH /home/softcact/public_html/resources/views/client/blogs/news.blade.php ENDPATH**/ ?>