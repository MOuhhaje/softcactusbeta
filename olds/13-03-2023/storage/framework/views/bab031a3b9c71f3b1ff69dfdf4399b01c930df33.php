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
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('admin.service')); ?>" style="color: #6C757D">Gestion des services</a></li>
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">Modification de service</a></li>
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
                    <form action="<?php echo e(route('admin.service.update',$service->id)); ?>" method="POST"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <tr>
                        <th>Nom de service :</th>
                        <td><input type="text" name="sub_name_service" class="form-control" value="<?php echo e($service->sub_name_service); ?>"></td>
                    </tr>
                    <tr>
                        <th style="width: 280px">Nom de service version en :</th>
                        <td><input type="text" name="name_service" class="form-control" value="<?php echo e($service->name_service); ?>"></td>
                    </tr>
                    <tr>
                        <th>Description de service :</th>
                        <td>
                            <textarea name="desc_service" class="desc_offre" cols="30" rows="10"><?php echo e($service->desc_service); ?></textarea>
                    </tr>
                    <tr>
                        <th>Description de service version en :</th>
                        <td>
                            <textarea name="desc_service_en" class="desc_offre" cols="30" rows="10"><?php echo e($service->desc_service_en); ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>Color de service :</th>
                        <td><input type="color" name="color_service" class="form-control" value="<?php echo e($service->color_service); ?>"></td>
                    </tr>
                    <tr>
                        <td>Image de service</td>
                        <th colspan="2" style="display: flex; justify-content: center;align-items: center;">
                            <img src="<?php echo e(asset('storage/services/'.$service->img_service)); ?>" class="col-12" style="max-height: 300px" alt="">
                        </th>
                    </tr>
                    <tr>
                        <th>Image service :</th>
                        <td><input type="file" name="img_service" class="form-control"></td>
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
                $('.gestionService').addClass('active');

                $('.desc_offre').summernote({
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
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-services/edit-service.blade.php ENDPATH**/ ?>