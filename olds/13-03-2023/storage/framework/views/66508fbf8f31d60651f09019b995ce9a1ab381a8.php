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
                    <li class="breadcrumb-item active"><a href="javascript::void(0)">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="javascript::void(0)">Gestion de qui sommes-nous la page qui sommes-nous</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->


    <div class="row">
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

            <div class="row">
                <?php $__currentLoopData = $abouts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-10 mb-lg-6">

                    <table class="table table-borderless">
                        <form action="<?php echo e(route('admin.about.update',$about->id)); ?>" method="POST"  enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <tr>
                                <td colspan="2">
                                    <h1 class="text-center" style="padding: 50px 20px;font-size: xx-large;">
                                        <?php if($about->langue->name_langue == 'fr'): ?> Français <?php else: ?> Anglais <?php endif; ?>
                                    </h1>
                                </td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Description de qui sommes-nous </th>
                                <?php else: ?>  <th  style="width: 180px">  Description de who are we </th> <?php endif; ?>
                                <td><textarea name="desc_about" class="desc_slogan form-control" cols="30" rows="10"><?php print(nl2br($about->desc_about))?></textarea></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Sous description de qui sommes-nous </th>
                                <?php else: ?>  <th  style="width: 180px">  sub description of who are we </th> <?php endif; ?>
                                <td><textarea name="sub_desc_about" class="desc_slogan form-control" cols="30" rows="10"><?php print(nl2br($about->sub_desc_about))?></textarea></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Image de qui sommes-nous </th>
                                <?php else: ?>  <th  style="width: 180px">  Image of who are we </th> <?php endif; ?>
                                <td>
                                    <input type="file" name="img_about">
                                </td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Titre de valeur </th>
                                <?php else: ?>  <th  style="width: 180px">  title of value</th> <?php endif; ?>
                                <td><input type="text" name="title_valeur" class="form-control" value="<?php echo e($about->title_valeur); ?>"></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  sliders de valeur </th>
                                <?php else: ?>  <th  style="width: 180px">  sliders of value </th> <?php endif; ?>
                                <td>
                                    <table>
                                        <tr>
                                            <?php if($about->langue->name_langue == 'fr' ): ?>
                                            <th>#</th>
                                            <th>Image de values</th>
                                            <th>Description de values</th>
                                            <th></th>
                                            <?php else: ?>
                                            <th>#</th>
                                            <th>Image of value</th>
                                            <th>Description of value</th>
                                            <th></th>
                                            <?php endif; ?>
                                        </tr>
                                        <?php $__currentLoopData = $about->valeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $valeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($key + 1); ?></th>
                                            <th><img src="<?php echo e(asset('storage/about/valeurs/'.$valeur->img_valeur)); ?>" width="150px"></th>
                                            <th><?php print(nl2br($valeur->text_valeur)) ?></th>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a class="btn btn-sm bg-success-light my-1"  href="javascript:void(0);" class="btn btn-primary mx-2 " data-toggle="modal" data-target="#valeur<?php echo e($valeur->id); ?>">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>

                                                <a class="btn btn-sm bg-danger-light deleteModal  my-1" href="javascript:void(0);"
                                                    onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre valeur ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.valeur.destroy', $valeur->id)); ?> '; }} );">
                                                    <i class="fe fe-trash"></i> Supprimer
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </td>
                            </tr>
                            
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Titre de Histoire </th>
                                <?php else: ?>  <th  style="width: 180px">  History title </th> <?php endif; ?>
                                <td><input type="text" name="title_histoire" class="form-control" value="<?php echo e($about->title_histoire); ?>"></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  sliders de Histoire </th>
                                <?php else: ?>  <th  style="width: 180px">  sliders of Histoire </th> <?php endif; ?>
                                <td>
                                    <table>
                                        <tr>
                                            <?php if($about->langue->name_langue == 'fr' ): ?>
                                            <th>#</th>
                                            <th>Description</th>
                                            <th>Année</th>
                                            <?php else: ?>
                                            <th>#</th>
                                            <th>description</th>
                                            <th>year</th>
                                            <th></th>
                                            <?php endif; ?>
                                        </tr>
                                        <?php $__currentLoopData = $about->histoires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $histoire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($key + 1); ?></td>
                                            <td><?php print(nl2br($histoire->text_histoire)) ?></td>
                                            <td><?php echo e($histoire->year_histoire); ?></td>
                                            <td>
                                                <td>
                                                    <a class="btn btn-sm bg-success-light my-1"  href="javascript:void(0);" class="btn btn-primary mx-2 " data-toggle="modal" data-target="#histoire<?php echo e($histoire->id); ?>">
                                                        <i class="fe fe-pencil"></i> Edit
                                                    </a>


                                                    <a class="btn btn-sm bg-danger-light deleteModal" href="javascript:void(0);"
                                                        onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre histoire ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.histoire.destroy', $histoire->id)); ?> '; }} );">
                                                        <i class="fe fe-trash"></i> Supprimer
                                                    </a>
                                                </td>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </td>
                            </tr>
                              <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Année de histoire </th>
                                <?php else: ?>  <th  style="width: 180px">   Year of histoire </th> <?php endif; ?>
                                <td><input type="text" name="year_histoire" class="form-control" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Description de histoire </th>
                                <?php else: ?>  <th  style="width: 180px">   Description de histoire </th> <?php endif; ?>
                                <td><textarea name="text_histoire" class="form-control" cols="5" rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Titre de team </th>
                                <?php else: ?>  <th  style="width: 180px">  Team title</th> <?php endif; ?>
                                <td><input type="text" name="title_team" class="form-control" value="<?php echo e($about->title_team); ?>"></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Description de la team</th>
                                <?php else: ?>  <th  style="width: 180px">  Description of the team</th> <?php endif; ?>
                                <td><textarea name="desc_team" class="desc_slogan form-control" cols="30" rows="10"><?php print(nl2br($about->desc_team))?></textarea></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Expérience </th>
                                <?php else: ?>  <th  style="width: 180px">  Experience</th> <?php endif; ?>
                                <td><input type="text" name="experience_count" class="form-control" value="<?php echo e($about->experience_count); ?>"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>  Membres d'équipes </th>
                                <?php else: ?>  <th  style="width: 180px">  Team members </th> <?php endif; ?>
                                <td><input type="text" name="team_count" class="form-control" value="<?php echo e($about->team_count); ?>" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                            </tr>
                            <tr>
                                <?php if($about->langue->name_langue == 'fr' ): ?> <th  style="width: 180px">  Nos Projets </th>
                                <?php else: ?>  <th  style="width: 180px">  Our projects </th> <?php endif; ?>
                                <td><input type="text" name="project_count" class="form-control" value="<?php echo e($about->project_count); ?>" maxlength="4" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                            </tr>
                            <tr >
                                <th></th>
                                <td>
                                    <button type="submit" class="btn btn-primary aboutValid" id="aboutValid">Valider</button>
                                </td>
                            </tr>
                        </form>
                    </table>
                </div>

                <?php $__currentLoopData = $about->valeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $valeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Update Service -->
                    <div class="modal fade" id="valeur<?php echo e($valeur->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="acc_title">Modifier Valeur</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="<?php echo e(route('admin.valeur.update',$valeur->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>description de la valeur <span class="text-danger">*</span></label>
                                                    <textarea name="text_valeur" class="desc_slogan"><?php print(nl2br($valeur->text_valeur)) ?></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Image  de la valeur <span class="text-danger">*</span></label>
                                                    <input type="file" name="img_valeur" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer" >
                                        <button type="button" class="btn" style="background:green;color:white;"
                                        onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de modifier cette Histoire ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { this.form.submit(); }});">Valider</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Update Service -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $about->histoires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $histoire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Update Service -->
                    <div class="modal fade" id="histoire<?php echo e($histoire->id); ?>" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-fullscreen-lg-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="acc_title">Modifier Histoire</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="<?php echo e(route('admin.histoire.update',$histoire->id)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>description de de l'hitoire <span class="text-danger">*</span></label>
                                                    <textarea name="text_histoire" class="form-control"><?php print(nl2br($histoire->text_histoire)) ?></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Année de l'hitoire <span class="text-danger">*</span></label>
                                                    <input type="text" name="year_histoire" class="form-control" value="<?php echo e($histoire->year_histoire); ?>">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer" >
                                        <button type="button" class="btn" style="background:green;color:white;" onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de modifier cette valeur ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { this.form.submit(); }});">Valider</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Update Service -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>






    <?php $__env->startSection('script'); ?>
        <!-- include summernote css/js -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $( function() {
                $('.gestionAbout').addClass('active');

                $('.desc_slogan').summernote({
                    toolbar: [
                        ['font',['bold', 'underline', 'clear','ul']]
                    ]
                });

                $('.desc_solution').summernote({
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
<?php /**PATH /home/softcact/public_html/resources/views/admin/about.blade.php ENDPATH**/ ?>