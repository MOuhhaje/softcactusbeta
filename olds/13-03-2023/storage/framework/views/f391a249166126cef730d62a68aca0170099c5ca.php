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
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">Gestion des clients</a></li>
                </ul>
            </div>
            <div class="col-5">
                <a href="<?php echo e(route('admin.client.create')); ?>" class="btn btn-primary mx-2 float-right mt-2">Nouveau Client</a>
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

            <div class="client">
                <div class="clientd-body">
                    <div class="table-responsive">
                        <table class="datatable table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Intitulé de client</th>
                                    <th>Adresse de client</th>
                                    <th>Email de client</th>
                                    <th>Phone de client</th>
                                    <th>ICE de client</th>
                                    <th>Année de l'engagement</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.client.show',$client->id)); ?>"><?php echo e($key + 1); ?></a></td>
                                        <td  style="width: 10px;"><a style="color:#474648" href="<?php echo e(route('admin.client.show',$client->id)); ?>" ><?php echo e(substr($client->intitule_client,0,30).'...'); ?></a></td>
                                        <td>
                                            <a style="color:#474648" href="<?php echo e(route('admin.client.show',$client->id)); ?>" >
                                                <?php
                                                   print(substr(nl2br($client->adresse_client),0,30).'...')
                                                ?>
                                            </a>
                                        </td>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.client.show',$client->id)); ?>"><?php echo e($client->email_client); ?></a></td>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.client.show',$client->id)); ?>"><?php echo e($client->phone_client); ?></a></td>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.client.show',$client->id)); ?>"><?php echo e($client->lce_client); ?></a></td>
                                        <td><a style="color:#474648" href="<?php echo e(route('admin.client.show',$client->id)); ?>"><?php echo e($client->annee_engagement_client); ?></a></td>
                                        <td>
                                            <div class="actions">
                                                <a class="btn btn-sm bg-success-light"  href="<?php echo e(route('admin.client.edit',$client->id)); ?>" class="btn btn-primary mx-2 ">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>

                                                <a class="btn btn-sm bg-danger-light deleteModal" href="javascript:void(0);"
                                                    onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre client ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.client.destroy', $client->id)); ?>'; }});">
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

    <?php $__env->startSection('script'); ?>
        <!-- include summernote css/js -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $( function() {
                $('.gestionClient').addClass('active');

                $('.desc_client').summernote({
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
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-clients/client.blade.php ENDPATH**/ ?>