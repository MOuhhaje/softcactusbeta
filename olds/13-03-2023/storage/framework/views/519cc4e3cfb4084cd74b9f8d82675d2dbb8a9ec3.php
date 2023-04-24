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
                    <li class="breadcrumb-item"><a href="javascript::void(0)">Gestion de home page</a></li>
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
                <table class="table table-borderless">
                    <?php $__currentLoopData = $homepages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $homepage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form action="<?php echo e(route('admin.homepage.update',$homepage->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <tr>
                            <th  style="width: 180px"> Slogan </th>
                            <td><input type="text" name="slogan" class="form-control" value="<?php print(nl2br($homepage->slogan))?>"></td>
                        </tr>
                        <tr>
                            <th>Description slogan </th>
                            <td><textarea name="desc_slogan" class="desc_slogan form-control" cols="30" rows="10"><?php print(nl2br($homepage->desc_slogan))?></textarea></td>
                        </tr>
                        <tr>
                            <th>Solution</th>
                            <td><textarea name="solution" class="desc_solution form-control" cols="30" rows="10"><?php print(nl2br($homepage->solution))?></textarea></td>
                       
                        </tr>
                        <tr>
                            <th>Description solution</th>
                            <td><textarea name="desc_solution" class="desc_solution form-control" cols="30" rows="10"><?php print(nl2br($homepage->desc_solution))?></textarea></td>
                        </tr>
                        <tr>
                            <th>Langue :</th>
                            <td><?php if($homepage->langue->name_langue == 'fr' ): ?> Français <?php else: ?> anglais <?php endif; ?></td>
                        </tr>
                        <?php if($homepages->count() == $key+1): ?>
                        <tr >
                        <?php else: ?>
                        <tr style='border-bottom:10px solid black;'>
                        <?php endif; ?>
                            <th></th>
                            <td>
                                <button type="submit" class="btn btn-primary homepageValid" id="homepageValid">Valider</button>
                            </td>
                        </tr>
                    </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>

  
    
    <?php $__env->startSection('script'); ?>
        <!-- include summernote css/js -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $( function() {
                $('.gestionHomepage').addClass('active');
                
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
<?php /**PATH /home/softcact/public_html/resources/views/admin/homepage.blade.php ENDPATH**/ ?>