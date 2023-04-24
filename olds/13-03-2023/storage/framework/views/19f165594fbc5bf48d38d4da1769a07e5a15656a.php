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
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">Modification de membre</a></li>
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

            <div class="col-12 mb-lg-5">
                <table class="table table-borderless">
                    <form action="<?php echo e(route('admin.member.update',$member->id)); ?>" method="POST"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <tr>
                        <th style="width: 250px">Nom de membre :</th>
                        <td><input type="text" name="nom_member" class="form-control" value="<?php echo e($member->nom_member); ?>"></td>
                    </tr>
                    <tr>
                        <th>Prénom de membre :</th>
                        <td><input type="text" name="prenom_member" class="form-control" value="<?php echo e($member->prenom_member); ?>"></td>
                    </tr>
                    <tr>
                        <th>Email de membre :</th>
                        <td><input type="text" name="email_member" class="form-control" value="<?php echo e($member->email_member); ?>"></td>
                    </tr>
                    <tr>
                        <th>CIN de membre :</th>
                        <td><input type="text" name="cin_member" class="form-control" value="<?php echo e($member->cin_member); ?>"></td>
                    </tr>
                    <tr>
                        <th>intitulé du poste:</th>
                        <td><input type="text" name="intitule_poste" class="form-control" value="<?php echo e($member->intitule_poste); ?>"></td>
                    </tr>
                    <tr>
                        <th>Date de naissance de membre :</th>
                        <td><input type="date" name="date_naissance_member" class="form-control" value="<?php echo e($member->date_naissance_member); ?>"></td>
                    </tr>
                    <tr>
                        <th>Adresse de membre :</th>
                        <td><input type="text" name="adresse_member" class="form-control" value="<?php echo e($member->adresse_member); ?>"></td>
                    </tr>
                    <tr>
                        <th>Numéro de téléphone :</th>
                        <td><input type="text" name="phone_member" class="form-control" value="<?php echo e($member->phone_member); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                    </tr>
                    <tr>
                        <th>Color membre :</th>
                        <td>
                            <div style="padding: 10px;background: white;border-radius: 10px; width: 65px;display: flex;align-items: center">
                                <div class="border_color_offre" style="background: <?php echo e($member->color_member); ?>;width: 30px; height: 30px;margin: 5px;border-radius:10px;"></div>
                                <input type="color" value="<?php echo e($member->color_member); ?>" id="border_color_offre" class="border_color_offre d-none" name="color_member" style="width: 30px;height: 30px;border: none;"> 
                                <span onclick="$('#colors').show();$('#right').hide();$('#bottom').show();" id="right" style="cursor: pointer"><i class="fa fa-chevron-right" style="font-size: 11px;"></i></span> 
                                <span onclick="$('#colors').hide();$('#right').show();$('#bottom').hide();" id="bottom" style="cursor: pointer;display: none;"><i class="fa fa-chevron-down" style="font-size: 11px;"></i></span> 
                            </div>
                            <div  id="colors" style="display: none;">
                                <div style="justify-content: center;align-items: center;width: 100px;height: 100px;border-radius: 10px" class="d-flex gap-1 bg-white d-none">
                                    <div>
                                        <div onclick="$('.border_color_offre').val('#C508C5');$('.border_color_offre').css('background','#C508C5');$('#colors').hide();$('#right').show();$('#bottom').hide();" style="background: #C508C5;width: 30px; height: 30px;margin: 5px;border-radius:10px;"></div>
                                        <div onclick="$('.border_color_offre').val('#2F0052');$('.border_color_offre').css('background','#2F0052');$('#colors').hide();$('#right').show();$('#bottom').hide();" style="background: #2F0052;width: 30px; height: 30px;margin: 5px;border-radius:10px;"></div>
                                    </div>
                                    <div>
                                        <div onclick="$('.border_color_offre').val('#00FFC2');$('.border_color_offre').css('background','#00FFC2');$('#colors').hide();$('#right').show();$('#bottom').hide();" style="background: #00FFC2;width: 30px; height: 30px;margin: 5px;border-radius:10px;"></div>
                                        <div onclick="$('.border_color_offre').val('#F8AC00');$('.border_color_offre').css('background','#F8AC00');$('#colors').hide();$('#right').show();$('#bottom').hide();" style="background: #F8AC00;width: 30px; height: 30px;margin: 5px;border-radius:10px;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>Image de membre :</th>
                        <td><input type="file" name="img_member" class="form-control"></td>
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
                $('.gestionTeam').addClass('active');

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
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-de-la-team/edit-team.blade.php ENDPATH**/ ?>