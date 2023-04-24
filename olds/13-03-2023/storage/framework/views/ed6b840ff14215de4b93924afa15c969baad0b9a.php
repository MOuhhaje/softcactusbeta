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
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('admin.blog')); ?>" style="color: #6C757D">Gestion des blogs</a></li>
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D"><?php if($blog->name_blog == 'Ideas'): ?> details de l'idée <?php elseif($blog->name_blog == 'Protips'): ?> details de protips <?php else: ?> details de l'actualité <?php endif; ?></a></li>
                </ul>
            </div>
            <div class="col-5">
                <?php if($blog->name_blog == 'Ideas'): ?>
                    <a href="<?php echo e(route('admin.idea.create',$blog)); ?>" class="btn btn-primary mx-2 float-right mt-2">Nouvelle idée</a>
                <?php elseif($blog->name_blog == 'Protips'): ?>
                    <a href="<?php echo e(route('admin.protip.create',$blog)); ?>" class="btn btn-primary mx-2 float-right mt-2">Nouveau protips</a>
                <?php else: ?>
                <a href="<?php echo e(route('admin.news.create',$blog)); ?>" class="btn btn-primary mx-2 float-right mt-2">Nouvelle actualité</a>
                <?php endif; ?>
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
                    <div class="alert alert-warning alert-danger fade show" role="alert"><?php echo e($error); ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>


            <div class="blogd">
                <div class="blogd-body">
                    <div class="table-responsive">
                        <?php if($blog->name_blog == 'News'): ?>
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre de l'actualité</th>
                                    <th>date de l'actualité</th>
                                    <th>ville de l'actualité</th>
                                    <th>par nom de l'actualité </th>
                                    <th>description de l'actualité</th>
                                    <td>Blog</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $blog->news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);" style="color: #333" data-toggle="modal" data-target="#news<?php echo e($news->id); ?>">
                                                <?php echo e($key + 1); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="javascript::void(0)" class="avatar avatar-lg mr-2"  style="color: #333" data-toggle="modal" data-target="#news<?php echo e($news->id); ?>">
                                                    <?php if( $news->img_news): ?> <img class="avatar-img rounded-right rounded-left rounded-top"  src="<?php echo e(asset('storage/blogs/'.$news->img_news )); ?>"><?php endif; ?>
                                                </a>
                                            </h2>
                                            <a href="javascript::void(0)" style="color: #333" data-toggle="modal" data-target="#news<?php echo e($news->id); ?>"><?php echo e($news->titre_news); ?></a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" style="color: #333" data-toggle="modal" data-target="#news<?php echo e($news->id); ?>">
                                            <?php echo e($news->date_news->format('Y-m-d')); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" style="color: #333" data-toggle="modal" data-target="#news<?php echo e($news->id); ?>">
                                            <?php echo e($news->ville_news); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" style="color: #333" data-toggle="modal" data-target="#news<?php echo e($news->id); ?>">
                                                <?php echo e($news->by_name_news); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" style="color: #333" data-toggle="modal" data-target="#news<?php echo e($news->id); ?>">
                                                <?php print(nl2br(substr($news->desc_news,0,50))) ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" style="color: #333" data-toggle="modal" data-target="#news<?php echo e($news->id); ?>">
                                                <?php echo e($news->blog->name_blog); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm bg-success-light"  href="<?php echo e(route('admin.news.edit',$news->id)); ?>" class="btn btn-primary mx-2 ">
                                                <i class="fe fe-pencil"></i> Edit
                                            </a>

                                            <a class="btn btn-sm bg-danger-light deleteModal" href="javascript:void(0);"
                                                onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre l\'actualité ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.news.destroy', $news->id)); ?>'; }});">
                                                <i class="fe fe-trash"></i> Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php endif; ?>

                        <?php if($blog->name_blog == 'Ideas'): ?>
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre de l'idée</th>
                                    <th>Type </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $blog->ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a <?php if( $idea->link_idea): ?>  href="<?php echo e($idea->link_idea); ?>" target='_blank' <?php else: ?>  href="javascript::void(0)" data-toggle="modal" data-target="#idea<?php echo e($idea->id); ?>" <?php endif; ?> class="avatar avatar-lg mr-2">
                                                    <img src="<?php echo e(asset('storage/blogs/'.$idea->img_idea )); ?>">
                                                </a>
                                            </h2>
                                            <a href="javascript::void(0)" data-toggle="modal" data-target="#idea<?php echo e($idea->id); ?>" style="color: #333"><?php echo e($idea->titre_idea); ?></a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm bg-success-light"  href="<?php echo e(route('admin.idea.edit',$idea->id)); ?>" class="btn btn-primary mx-2 ">
                                                <i class="fe fe-pencil"></i> Edit
                                            </a>

                                            <a class="btn btn-sm bg-danger-light deleteModal" href="javascript:void(0);"
                                                onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre l\'idée ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.idea.destroy', $idea->id)); ?>'; }});">
                                                <i class="fe fe-trash"></i> Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php endif; ?>


                        <?php if($blog->name_blog == 'Protips'): ?>
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre de protip</th>
                                    
                                    <th>Description de protip</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $blog->protips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $protip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="javascript:void(0);" style="color: #333" data-toggle="modal" data-target="#protip<?php echo e($protip->id); ?>">
                                                <?php echo e($key + 1); ?>

                                            </a></td>
                                        <td>
                                            <a href="javascript:void(0);" style="color: #333" data-toggle="modal" data-target="#protip<?php echo e($protip->id); ?>">
                                                <?php print(nl2br(substr($protip->titre_protip,0,10).'...'))   ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" style="color: #333" data-toggle="modal" data-target="#protip<?php echo e($protip->id); ?>">
                                                <?php
                                                    $protip->desc_protip = preg_replace('/ class=".*?"/', '', $protip->desc_protip);
                                                    $protip->desc_protip = preg_replace('/ style=".*?"/', '', $protip->desc_protip);
                                                    $protip->desc_protip = str_replace([ '<o:p>','</o:p>','<div>','<p>','</p>','</div>','<font>','</font>','<span>','</span>'],['','','','','','','','','',''],$protip->desc_protip);
                                                    print(nl2br(substr($protip->desc_protip,0,20).'...'))
                                                ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm bg-success-light"  href="<?php echo e(route('admin.protip.edit',$protip->id)); ?>" class="btn btn-primary mx-2 ">
                                                <i class="fe fe-pencil"></i> Edit
                                            </a>

                                            <a class="btn btn-sm bg-danger-light deleteModal" href="javascript:void(0);"
                                                onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre protip ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.protip.destroy', $protip->id)); ?>'; }});">
                                                <i class="fe fe-trash"></i> Supprimer
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php $__currentLoopData = $blog->news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- Update protips -->
    <div class="modal fade" id="news<?php echo e($news->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="acc_title">Affichage de l'actualité</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <label  class="col-4">Titre de l'actualité : </label>
                            <div class="col-8">
                                <?php echo e($news->titre_news); ?>

                            </div>
                        </div>
                        <div class="col-12 d-flex align-items-center">
                            <label class="col-4">par de l'actualité : </label>
                            <div class="col-8">
                                <?php echo e($news->by_name_news); ?>

                            </div>
                        </div>
                        <div class="col-12 d-flex align-items-center">
                            <label class="col-4">Ville de l'actualité : </label>
                            <div class="col-8">
                                <?php echo e($news->ville_news); ?>

                            </div>
                        </div>
                        <div class="col-12 d-flex align-items-center">
                            <label class="col-4">Année de l'actualité : </label>
                            <div class="col-8">
                                <?php echo e($news->date_news->format('Y-m-d')); ?>

                            </div>
                        </div>
                        <div class="col-12 d-flex align-items-center">
                            <label class="col-4">Titre de l'actualité : </label>
                            <div class="col-8">
                                <?php echo e($news->titre_news); ?>

                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <label  class="col-4">Description de l'actualité :   </label>
                            <div class="col-8">
                                <?php print(nl2br( $news->desc_news )) ?>
                            </div>
                        </div>

                        <div class="col-12 d-flex align-items-center">
                            <label class="col-4">Hashtags de l'actualité : </label>
                            <div class="col-8"> <?php echo e($news->hashtags_news); ?></div>
                        </div>
                        <div class="col-12 d-flex align-items-center">
                            <label class="col-4">image de l'actualité :</label>
                            <div class="col-8"><img src="<?php echo e(asset('storage/blogs/'.$news->img_news)); ?>" class="col-12"></div>
                        </div>
                        <div class="col-12 d-flex">
                            <label  class="col-4"></label>
                            <div class="col-8">
                                <a class="btn btn-sm bg-success-light"  href="<?php echo e(route('admin.news.edit',$news->id)); ?>" class="btn btn-primary mx-2 ">
                                    <i class="fe fe-pencil"></i> Edit
                                </a>

                                <a class="btn btn-sm bg-danger-light deleteModal" href="javascript:void(0);"
                                    onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre l\'actualité ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.news.destroy', $news->id)); ?>'; }});">
                                    <i class="fe fe-trash"></i> Supprimer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Update protips -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $blog->protips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $protip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Update protips -->
        <div class="modal fade" id="protip<?php echo e($protip->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="acc_title">Affichage Protip</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center">
                                <label  class="col-4">Titre de protip : </label>
                                <div class="col-8">
                                    <?php echo e($protip->titre_protip); ?>

                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <label  class="col-4">Description de protip :   </label>
                                <div class="col-8">
                                    <?php print(nl2br( $protip->desc_protip )) ?>
                                </div>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <label class="col-4">Hashtags de protip : </label>
                                <div class="col-8"> <?php echo e($protip->hashtags_protip); ?></div>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <label class="col-4">Video de protip :</label>
                                <div class="col-8"><?php print(nl2br( $protip->video_protip )) ?></div>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <label class="col-4">Color de protip : </label>
                                <div class="col-8" style="background: ">

                                <input type="color" value="<?php echo e($protip->color_protip); ?>" disabled style="width:  100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update protips -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $blog->ideas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $idea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Update protips -->
        <div class="modal fade" id="idea<?php echo e($idea->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="acc_title">Affichage Protip</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center">
                                <label  class="col-12">Titre de l'idée : <?php echo e($idea->titre_idea); ?> </label>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <label class="col-4">Hashtags de l'idée : </label>
                                <div class="col-8"><?php print(nl2br( $idea->hashtags_idea )) ?></div>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <label class="col-4">Image de l'idée :</label>
                                <p class="col-8">
                                    <img src="<?php echo e(asset('storage/blogs/'.$idea->img_idea)); ?>" class="col-12">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update protips -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->startSection('script'); ?>
        <script>
            $( function() {
                $('.gestionBlog<?php echo e($blog->id); ?>').addClass('active');
                $('.gestionBlog').css('display','block');
            });
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-blogs/details-blog.blade.php ENDPATH**/ ?>