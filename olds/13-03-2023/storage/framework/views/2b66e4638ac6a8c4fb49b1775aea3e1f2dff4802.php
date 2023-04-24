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
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('admin.client')); ?>" style="color: #6C757D">Gestion des clients</a></li>
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">details de client</a></li>
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
                    <div class="alert alert-warning alert-danger fade show" role="alert">
                        <?php echo e($error); ?>

                        <button type="button" class="close"></button>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>


            <div class="col-12 mb-lg-5">
                <table class="table table-borderless">
                    <tr>
                        <th class="col-4">Intitulé de client :</th>
                        <td class="col-8"><?php echo e($client->intitule_client); ?></td>
                    </tr>
                    <tr>
                        <th>Email de client :</th>
                        <td><a target="_blank" href="mailto:<?php echo e($client->email_client); ?>" style="color:#474648"><?php echo e($client->email_client); ?></a></td>
                    </tr>
                    <tr>
                        <th>ICE de client :</th>
                        <td><?php echo e($client->lce_client); ?></td>
                    </tr>
                    <tr>
                        <th>Adresse de client :</th>
                        <td><?php echo e($client->adresse_client); ?></td>
                    </tr>
                    <tr>
                        <th>Numéro de téléphone :</th>
                        <td><a target="_blank" href="tel:<?php echo e($client->phone_client); ?>" style="color:#474648"><?php echo e($client->phone_client); ?></a></td>
                    </tr>
                    <tr>
                        <th>Année engagement de client :</th>
                        <td><?php echo e($client->annee_engagement_client); ?></td>
                    </tr>
                    <tr>
                        <th>Description de client :</th>
                        <td>
                            <?php
                                $client->desc_client = preg_replace('/class=".*?"/', '', $client->desc_client);
                                $client->desc_client = preg_replace('/style=".*?"/', '', $client->desc_client);
                                $client->desc_client = str_replace([ '<o:p>','</o:p>','<div>','<p>','<p >','</p>','</div>'],['','','','','',''],$client->desc_client);
                                print(nl2br( $client->desc_client))
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Description de client version en:</th>
                        <td>
                            <?php
                                $client->desc_client_en = preg_replace('/class=".*?"/', '', $client->desc_client_en);
                                $client->desc_client_en = preg_replace('/style=".*?"/', '', $client->desc_client_en);
                                $client->desc_client_en = str_replace([ '<o:p>','</o:p>','<div>','<p>','<p >','</p>','</div>'],['','','','','',''],$client->desc_client_en);
                                print(nl2br( $client->desc_client_en))
                            ?>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>


    <?php $__env->startSection('script'); ?>
        <script>
            $( function() {
                $('.gestionClient').addClass('active');
            });
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-clients/details-client.blade.php ENDPATH**/ ?>