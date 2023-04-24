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
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/contact.css')); ?>">
    <?php $__env->stopSection(); ?>

    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-7 col-auto">
                <h3 class="page-title">Bonjour SOFT CACTUS !</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Tableau de bord</a></li>
                    <li class="breadcrumb-item active">Gestion des demandes</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-12">

            <div class="col-md-12">
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
            </div>
            <!-- Recent Orders -->

            <div class="col-12 mb-lg-5">
                <table class="datatable table table-hover table-center ">
                    <thead>
                        <tr>
                            <td>#</td>
                            <th>Nom de l'entreprise </th>
                            <th>Nom de projet </th>
                            <th>Nom Complet</th>
                            <th>Email adresse</th>
                            <th>Numéro de téléphone</th>
                            <th>status</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr>
                                <td> <a href="<?php echo e(route('admin.contact.show',$item->id)); ?>" style="color:#474648"><?php echo e($key + 1); ?></a></td>
                                <td> <a href="<?php echo e(route('admin.contact.show',$item->id)); ?>" style="color:#474648"><?php echo e($item->companyName); ?></a></td>
                                <td> <a href="<?php echo e(route('admin.contact.show',$item->id)); ?>" style="color:#333"><?php echo e($item->projectName); ?></a></td>
                                <td> <a href="<?php echo e(route('admin.contact.show',$item->id)); ?>" style="color:#474648">  <?php echo e($item->personalName); ?></a></td>
                                <td> <a href=" mailto:<?php echo e($item->email_contact); ?>" style="color:#474648"> <?php echo e($item->adresseEmail); ?></a> </td>
                                <td> <a href="<?php echo e(route('admin.contact.show',$item->id)); ?>" style="color:#474648"><?php echo e($item->phoneNumber); ?></a></td>
                                <td> <a href="<?php echo e(route('admin.contact.show',$item->id)); ?>" style="color:#474648"> <?php echo e($item->status); ?></a> </td>
                                <td>
                                    <a class="btn btn-sm bg-danger-light deleteModal" href="javascript:void(0);"
                                    onclick=" Swal.fire({ title: ' <span style=\'color:black\'>Êtes-vous  sur de supprimer votre demande ?  </span> ',background: 'lightgray',color:'black', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) {window.location.href = '<?php echo e(route('admin.contact.destroy',$item->id)); ?>'; }});">
                                    <i class="fe fe-trash"></i> Supprimer
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                </table>
            </div>
        </div>
    </div>


    <?php $__env->startSection('script'); ?>
        <script>
            $( function() {
                $('.contacts').addClass('active');
            });
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-demandes/demande.blade.php ENDPATH**/ ?>