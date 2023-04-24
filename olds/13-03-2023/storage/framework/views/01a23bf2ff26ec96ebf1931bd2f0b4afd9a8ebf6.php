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
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.client')); ?>" style="color: #6C757D">Gestion des clients</a></li>
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">Nouveau client</a></li>
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

            <div class="col-lg-9 col-sm-12  mb-lg-5">
                <table class="table table-borderless align-content-center">
                    <form action="<?php echo e(route('admin.client.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <tr>
                        <th class="col-4">Intitulé de client :</th>
                        <td class="col-8"><input type="text" name="intitule_client" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Email de client :</th>
                        <td><input type="email" name="email_client" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>ICE de client :</th>
                        <td><input type="text" name="lce_client" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="15"></td>
                    </tr>
                    <tr>
                        <th>Adresse de client :</th>
                        <td><input type="text" name="adresse_client" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Numéro de téléphone :</th>
                        <td><input type="text" name="phone_client" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                    </tr>
                    <tr>
                        <th>Année engagement de client :</th>
                        <td><input type="text" name="annee_engagement_client" class="form-control" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                    </tr>
                    <tr>
                        <th>Description de client :</th>
                        <td><textarea name="desc_client" class="desc_client" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <th>Description de client version eng:</th>
                        <td><textarea name="desc_client_en" class="desc_client" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <button type="submit" class="btn btn-primary">Valider</button>
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
                $('.gestionClient').addClass('active');

                $('.desc_client').summernote({
                    toolbar: [
                        ['font',['bold', 'underline', 'clear','ul']]
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
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-clients/add-client.blade.php ENDPATH**/ ?>