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
    <?php $__env->stopSection(); ?>

      <!-- Page Header -->
      <div class="page-header">
        <div class="row">
            <div class="col-sm-7 col-auto">
                <h3 class="page-title">Bonjour SOFT CACTUS !</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Tableau de bord</a></li>
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">Gestion des candidatures</a></li>
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

            <div class="my-4">
                <h5 class="card-title">Candidatures</h5>
                <div class="candidatured-body">
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom Complet</th>
                                    <th>Email de candidature</th>
                                    <th>Numéro de téléphone</th>
                                    <th>Fichier</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $candidatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $candidature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a class="text-capitalize" style="color: #474648" href="<?php echo e(route('admin.candidature.show',$candidature->id)); ?>">
                                                <?php echo e($key + 1); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <a class="text-capitalize" style="color: #474648" href="<?php echo e(route('admin.candidature.show',$candidature->id)); ?>">
                                                <?php echo e($candidature->nom_candidature .' '. $candidature->prenom_candidature); ?>

                                            </a>
                                        </td>
                                        <td><a href="mailto:<?php echo e($candidature->email_candidature); ?>" style="color: #474648"  target="_blank"><?php echo e($candidature->email_candidature); ?></a></td>
                                        <td><a href="tel:<?php echo e($candidature->phone_candidature); ?>" style="color: #474648"  target="_blank"><?php echo e($candidature->phone_candidature); ?></a></td>
                                        <td>
                                            <?php if($candidature->up_cl_candidature): ?> 
                                                <a href="<?php echo e(asset('storage/candidatures/'.$candidature->up_cl_candidature)); ?>"  target="_blank"> Lettre de motivation</a> <br/> 
                                            <?php endif; ?>
                                            <?php if($candidature->cv_candidature): ?> 
                                                <a href="<?php echo e(asset('storage/candidatures/'.$candidature->cv_candidature)); ?>" target="_blank"> CV </a> 
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a class="text-capitalize" style="color: #474648" href="<?php echo e(route('admin.candidature.show',$candidature->id)); ?>">
                                                <?php echo e($candidature->consulter_candidature); ?>

                                            </a>
                                        </td>
                                        <td>
                                            <div class="actions d-flex">
                                                

                                                <form action="<?php echo e(route('admin.candidature.update',$candidature->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php if($candidature->visibility_candidature == 'show'): ?>
                                                        <input type="text" name="visibility_candidature" value="hide" class="d-none">
                                                        <a class="btn btn-sm bg-danger-light m-1" 
                                                            onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur d\'archiver votre candidature ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { this.closest('form').submit();return false; }});">
                                                            Archiver
                                                        </a>
                                                    <?php endif; ?>
                                                </form>

                                                <a class="btn btn-sm bg-danger-light deleteModal m-1" href="javascript:void(0);"
                                                    onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre candidature ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.candidature.destroy', $candidature->id)); ?>'; }});">
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


            <div class="my-4">
                <h5 class="card-title">Archivage des candidatures</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom Complet</th>
                                    <th>Email de candidature</th>
                                    <th>Numéro de téléphone</th>
                                    <th>Fichier</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $archivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $candidature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($candidature->nom_candidature .' '. $candidature->prenom_candidature); ?></td>
                                        <td><a href="mailto:<?php echo e($candidature->email_candidature); ?>" style="color: #474648" target="_blank"><?php echo e($candidature->email_candidature); ?></a></td>
                                        <td><a href="tel:<?php echo e($candidature->phone_candidature); ?>"style="color: #474648" target="_blank"><?php echo e($candidature->phone_candidature); ?></a></td>
                                        <td>
                                            <?php if($candidature->up_cl_candidature): ?> <a href="<?php echo e(asset('storage/candidatures/'.$candidature->up_cl_candidature)); ?>"  target="_blank"> Lettre de motivation</a> <br/> <?php endif; ?>
                                            <a href="<?php echo e(asset('storage/candidatures/'.$candidature->cv_candidature)); ?>"  target="_blank"> CV </a> 
                                        </td>
                                        <td>
                                            <?php echo e($candidature->consulter_candidature); ?>

                                        </td>
                                        <td>
                                            <div class="actions d-flex">
                                                <form action="<?php echo e(route('admin.candidature.update',$candidature->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php if($candidature->visibility_candidature == 'hide'): ?>
                                                        <input type="text" name="visibility_candidature" value="show" class="d-none">
                                                        <a class="btn btn-sm bg-danger-light m-1"
                                                        onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur désarchiver votre candidature ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { this.closest('form').submit();return false; }});">
                                                            désarchiver
                                                        </a>
                                                    <?php endif; ?>
                                                </form>

                                                <a class="btn btn-sm bg-danger-light deleteModal m-1" href="javascript:void(0);"
                                                onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre candidature ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.candidature.destroy', $candidature->id)); ?>'; }});">
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

    <?php $__currentLoopData = $candidatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $candidature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Update Service -->
        <div class="modal fade"  id="UpdateModal<?php echo e($key); ?>" tabindex="-1" aria-labelledby="UpdateModal<?php echo e($key); ?>" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UpdateModal<?php echo e($key); ?>">Modifier candidature</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="<?php echo e(route('admin.candidature.update',$candidature->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body row">

                           

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Consulter :</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" <?php if($candidature->consulter_candidature == 'non consulté'): ?> checked <?php endif; ?> value="non consulté">
                                        <label class="form-check-label" for="inlineRadio1">consulté</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" <?php if($candidature->consulter_candidature == 'consulté'): ?> checked <?php endif; ?> value="consulté">
                                        <label class="form-check-label" for="inlineRadio2">non consulté</label>
                                    </div>
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
        <!-- Update Service -->

        <!-- view -->
        <div class="modal fade"  id="viewModal<?php echo e($key); ?>" tabindex="-1" aria-labelledby="UpdateModal<?php echo e($key); ?>" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UpdateModal<?php echo e($key); ?>">Affichage de candidature</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Nom de candidature : <?php echo e($candidature->nom_candidature); ?></label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Prénom de candidature : <?php echo e($candidature->prenom_candidature); ?></label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email de candidature : <a href="mailto:<?php echo e($candidature->email_candidature); ?>"><?php echo e($candidature->email_candidature); ?></a></label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Numéro de téléphone : <?php echo e($candidature->phone_candidature); ?></label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Fichier : <a href="<?php echo e(asset('storage/candidatures/'.$candidature->up_cl_candidature)); ?>">Lettre de motivation</a> et <a href="<?php echo e(asset('storage/candidatures/'.$candidature->cv_candidature)); ?>">CV</a></label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Lettre de motivation </label>
                                <div style="background: lightgray;padding: 10px;"><?php print(nl2br($candidature->cl_candidature)) ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- view -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    <?php $__env->startSection('script'); ?>
        <script>
            $( function() {
                $('.gestionCareer .gestionCandidature').addClass('active');
                $('.gestionCareer').css('display','block');
            });
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-candidatures/candidatures.blade.php ENDPATH**/ ?>