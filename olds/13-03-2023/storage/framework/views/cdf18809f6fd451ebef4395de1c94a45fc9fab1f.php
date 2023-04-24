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
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">Gestion des offres</a></li>
                </ul>
            </div>
            <div class="col-5">
                <a href="<?php echo e(route('career','Fr')); ?>" class="btn btn-primary mx-2 float-right mt-2" target="_blank"> Page de carrière</a>
                <a href="<?php echo e(route('admin.offre.create')); ?>"  class="btn text-white border-none mx-2 float-right mt-2" style="background: #9100D8">Nouvelle offre</a>
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

            <div class="offred">
                <div class="offred-body">
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title de l'offre</th>
                                    
                                    <th>Localisation</th>
                                    <th>Type de contrat</th>
                                    <th>Langue</th>
                                    <th>Description de l'offre</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $offres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $offre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.offre.show',$offre->id)); ?>"><?php echo e($key + 1); ?></a></td>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.offre.show',$offre->id)); ?>"><?php echo e($offre->name_offre); ?></a></td>
                                        
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.offre.show',$offre->id)); ?>"><?php echo e($offre->ville_offre); ?></a></td>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.offre.show',$offre->id)); ?>"><?php echo e($offre->type_offre); ?></a></td>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.offre.show',$offre->id)); ?>"><?php if($offre->langue->name_langue == 'fr'): ?> Français <?php else: ?> Anglais <?php endif; ?></a></td>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.offre.show',$offre->id)); ?>"><div style="border-left: 3px solid <?php echo e($offre->border_color_offre); ?>;padding:5px;"><?php print(nl2br(substr($offre->desc_offre,0,30).'...')) ?></div></a></td>
                                        <td>
                                            <div class="actions">
                                                

                                                <a class="btn btn-sm bg-success-light"  href="<?php echo e(route('admin.offre.edit',$offre->id)); ?>" class="btn btn-primary mx-2 ">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>

                                                <a class="btn btn-sm bg-danger-light deleteModal" href="javascript:void(0);"
                                                    onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre offre ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.offre.destroy', $offre->id)); ?>'; }});">
                                                    <i class="fe fe-trash"></i> Supprimer
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Add -->
    <div class="modal fade"  id="addModal" tabindex="-1" aria-labelledby="addModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModal1">Ajouter offre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.offre.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Title de l'offre<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="title_offre">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nom de l'offre <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name_offre">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Ville de l'offre <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="ville_offre">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Type de contrat <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="type_offre">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>color <span class="text-danger">*</span></label>
                                <input class="form-control" type="color" name="border_color_offre">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Langue <span class="text-danger">*</span></label>
                                <select name="langue_id" class="form-control">
                                    <?php $__currentLoopData = $langues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $langue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($langue->name_langue == 'fr'): ?><option value="<?php echo e($langue->id); ?>">Français</option> 
                                    <?php else: ?> <option value="<?php echo e($langue->id); ?>">Anglais</option> <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Description de l'offre <span class="text-danger">*</span></label>
                                <textarea name="desc_offre" id="" class="form-control desc_offre" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn"  style="background:green;color:white;" type="submit">
                            Valider
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add -->

    <?php $__currentLoopData = $offres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $offre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Update -->
        <div class="modal fade"  id="UpdateModal<?php echo e($key); ?>" tabindex="-1" aria-labelledby="UpdateModal<?php echo e($key); ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UpdateModal<?php echo e($key); ?>">Modifier offre</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?php echo e(route('admin.offre.update',$offre->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Title de l'offre<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="title_offre" value="<?php echo e($offre->title_offre); ?>" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nom de l'offre <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="name_offre" value="<?php echo e($offre->name_offre); ?>" id="marque_offre<?php echo e($key); ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Ville de l'offre <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="ville_offre"  value="<?php echo e($offre->ville_offre); ?>" id="type_container<?php echo e($key); ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Type de contrat <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="type_offre" value="<?php echo e($offre->type_offre); ?>"  id="type_offre<?php echo e($key); ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>color <span class="text-danger">*</span></label>
                                    <input class="form-control" type="color" name="border_color_offre" value="<?php echo e($offre->border_color_offre); ?>">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description de l'offre <span class="text-danger">*</span></label>
                                    <textarea name="desc_offre" id="" class="form-control desc_offre" cols="30" rows="10"><?php echo e($offre->desc_offre); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn"  style="background:green;color:white;" type="submit">
                                Valider
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Update -->

        <!-- viewModal -->
        <div class="modal fade"  id="viewModal<?php echo e($key); ?>" tabindex="-1" aria-labelledby="UpdateModal<?php echo e($key); ?>" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UpdateModal<?php echo e($key); ?>">Affichage de l'offre</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?php echo e(route('admin.offre.update',$offre->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body row">
                            <div class="col-lg-6">
                                <label>Title de l'offre : <?php echo e($offre->title_offre); ?></label>
                            </div>

                            <div class="col-lg-6">
                                <label>Nom de l'offre : <?php echo e($offre->name_offre); ?></label>
                            </div>

                            <div class="col-lg-6">
                                <label>Ville de l'offre : <?php echo e($offre->ville_offre); ?></label>
                            </div>

                            <div class="col-lg-6">
                                <label>Type de contrat : <?php echo e($offre->type_offre); ?></label>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description de l'offre <span class="text-danger">*</span></label>
                                    <div style="background: lightgray;padding: 10px;"><?php print(nl2br($offre->desc_offre)) ?></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- viewModal -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->startSection('script'); ?>
        <!-- include summernote css/js -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $( function() {
                $('.gestionCareer .gestionOffre').addClass('active');
                $('.gestionCareer').css('display','block');        
                
                $('.desc_offre').summernote({
                    toolbar: [
                        ['font',['bold', 'underline', 'clear','ul']]
                    ]
                });

                $('.desc').summernote({
                    toolbar: [
                        []
                    ]
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
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-offres/offres.blade.php ENDPATH**/ ?>