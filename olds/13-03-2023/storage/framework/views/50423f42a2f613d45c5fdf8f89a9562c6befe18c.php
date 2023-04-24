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
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('admin.member')); ?>" style="color: #6C757D">Gestion de la team</a></li>
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">details de membre</a></li>
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
                    <div class="alert alert-warning alert-danger fade show" role="alert"><?php echo e($error); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>


            <div class="col-12 mb-lg-5">
                <table class="table table-borderless">
                    <tr>
                        <th style="width: 280px">Nom et prénom de membre :</th>
                        <td>
                            <h2 class="table-avatar">
                                <a href="javascript::void(0)" class="avatar avatar-lg mr-2">
                                    <img class="avatar-img rounded-right rounded-left rounded-top" style="border-bottom: 4px solid <?php echo e($member->color_member); ?>" src="<?php echo e(asset('storage/members/'.  $member->img_member )); ?>" alt="User Image"></span>
                                </a>
                                <a href="javascript::void(0)"><?php echo e($member->nom_member .' '. $member->prenom_member); ?></a>
                            </h2>
                        </td>
                    </tr>
                    <tr>
                        <th>Email de membre :</th>
                        <td><a style="color:#474648" target="_blank" href="mailto:<?php echo e($member->email_member); ?>"><?php echo e($member->email_member); ?></a></td>
                    </tr>
                    <tr>
                        <th>CIN de membre :</th>
                        <td><?php echo e($member->cin_member); ?></td>
                    </tr>
                    <tr>
                        <th>intitulé du poste:</th>
                        <td><?php echo e($member->intitule_poste); ?></td>
                    </tr>
                    <tr>
                        <th>Date de naissance de membre :</th>
                        <td><?php echo e($member->date_naissance_member); ?></td>
                    </tr>
                    <tr>
                        <th>Adresse de membre :</th>
                        <td><?php echo e(substr($member->adresse_member,0,80).'...'); ?></td>
                    </tr>
                    <tr>
                        <th>Numéro de téléphone :</th>
                        <td><a style="color:#474648"  target="_blank" href="tel:<?php echo e($member->phone_member); ?>"><?php echo e($member->phone_member); ?></a></td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

  
    <?php $__env->startSection('script'); ?>
        <script>
            $( function() {
                $('.gestionTeam').addClass('active');
            });
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-de-la-team/details-team.blade.php ENDPATH**/ ?>