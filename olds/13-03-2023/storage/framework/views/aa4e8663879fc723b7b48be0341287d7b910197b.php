<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AdminLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('head'); ?>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <?php $__env->stopSection(); ?>

      <!-- Page Header -->
      <div class="page-header">
        <div class="row">
            <div class="col-sm-7 col-auto">
                <h3 class="page-title">Bonjour SOFT CACTUS !</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Tableau de bord</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('admin.blog.show',$news->blog->id)); ?>" style="color: #6C757D">Gestion des news</a></li>
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">Modification de news</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->


    <div class="row">
        <div class="col-sm-12">

            <?php if(session('status')): ?>
                <div class="alert alert-success my-2" role="alert"> <button type="button" class="close"
                        data-dismiss="alert">×</button>
                    <?php echo e(session('status')); ?>

                </div>
            <?php elseif(session('failed')): ?>
                <div class="alert alert-danger my-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <?php echo e(session('failed')); ?>

                </div>
            <?php endif; ?>

            <?php if(count($errors) > 0): ?>
                <div class="p-1">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="alert alert-warning alert-danger fade show" role="alert"><?php echo e($error); ?> <button type="button" class="close"
                            data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

            <div class="col-9 mb-lg-5">
                <table class="table table-borderless">
                    <form action="<?php echo e(route('admin.news.update',$news->id)); ?>" method="POST"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <tr>
                        <th style="width: 250px">Title actualité :</th>
                        <td>
                            <input type="text" class="form-control" name="titre_news" value="<?php echo e($news->titre_news); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Actualité par :</th>
                        <td>
                            <input type="text" class="form-control" name="by_name_news"  value="<?php echo e($news->by_name_news); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Ville de l'actualité :</th>
                        <td>
                            <input type="text" class="form-control" name="ville_news" value="<?php echo e($news->ville_news); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Date de l'actualité :</th>
                        <td>
                            <input type="date" class="form-control" name="date_news" value="<?php echo e($news->date_news->format('Y-m-d')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Description de l'actualité :</th>
                        <td>

                            <textarea name="desc_news" class="desc_offre desc_news" cols="30" rows="10">
                                <?php
                                    // $news->desc_news = preg_replace('/ title=".*?"/', '', $news->desc_news);
                                    // $news->desc_news = preg_replace('/ class=".*?"/', '', $news->desc_news);
                                    // $news->desc_news = preg_replace('/ style=".*?"/', '', $news->desc_news);
                                    // $news->desc_news = str_replace([ '&nbsp;','<o:p>','</o:p>','<div>','<p>','</p>','</div>','<font>','</font>','<span>','</span>'],[' ','','','','','','','','',''],nl2br($news->desc_news));
                                    echo nl2br($news->desc_news)
                                ?>
                            </textarea>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>Hashtags de l'actualité :</th>
                        <td>
                            <textarea name="hashtags_news" class="hashtags_news form-control" cols="30" rows="5"><?php echo e($news->hashtags_news); ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Image de l'actualité :</th>
                        <td>
                            <img src="<?php echo e(asset('storage/blogs/'. $news->img_news )); ?>" class="col-12">
                        </td>
                    </tr>
                    <tr>
                        <th>Image de l'actualité :</th>
                        <td>
                            <input type="file" class="form-control" name="img_news" value="<?php echo e($news->img_news); ?>">
                        </td>

                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <button type="submit" class="btn btn-primary valider">Valider</button>
                        </td>
                    </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>


    <?php $__env->startSection('script'); ?>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $( function() {
                $('.gestionBlog<?php echo e($news->blog_id); ?>').addClass('active');
                $('.gestionBlog').css('display','block');

                $('.desc_offre').summernote({
                    toolbar: [
                        ['font',['bold', 'underline', 'clear','ul']]
                    ]
                });

                $('.hashtags_news').on('change',function(){
                    let hashtags_idea = $('.hashtags_news').val().split('#');
                    if( (hashtags_idea.length - 1) > 30 ){
                        $('.valider').attr('disabled','disabled');
                        $('.valider').css('opacity','0.5');
                    }
                    else{
                        $('.valider').attr('disabled',false);
                        $('.valider').css('opacity','1');
                    }
                });
            });
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-blogs/news/edit-news.blade.php ENDPATH**/ ?>