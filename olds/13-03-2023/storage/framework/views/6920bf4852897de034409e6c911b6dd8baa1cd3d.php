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
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

        <style>
            table ul{
                list-style-image: url('<?php echo e(asset("assets/img/liststyle.png")); ?>');
            }
            table ul li {
                margin: 5px 0;
            }

            #sorta  {
                display: flex;
                gap: 0 50px ;
            }

            #sorta li img{
                object-fit: fill;
                object-position: center;
            }

        </style>
    <?php $__env->stopSection(); ?>

      <!-- Page Header -->
      <div class="page-header">
        <div class="row">
            <div class="col-sm-7 col-auto">
                <h3 class="page-title">Bonjour SOFT CACTUS !</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Tableau de bord</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('admin.reference')); ?>" style="color: #6C757D">Gestion des références</a></li>
                    <li class="breadcrumb-item active"><a href="javascript::void(0);" style="color: #6C757D">Modification de la référence</a></li>
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

            <div class="col-8">
                <form action="<?php echo e(route('admin.reference.update',$reference->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <table class="table table-borderless ">
                        <tr>
                            <th style="width: 250px;vertical-align: middle">Service :</th>
                            <td>
                                <select name="service_id" class="form-control" id="service">
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($service->id); ?>" <?php if($service->id == $reference->service_id): ?> selected <?php endif; ?>> <?php echo e($service->sub_name_service); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th  style="vertical-align: middle">Intitulé de la référence :</th>
                            <td>
                                <select name="client_id" id="client" class="form-control" onchange="if(this.value == 'Nouveau client') {  window.open('<?php echo e(route('admin.client.create')); ?>', '_blank'); }">
                                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($reference->client_id ==  $client->id): ?><option value="<?php echo e($client->id); ?>" selected><?php echo e($client->intitule_client); ?></option>
                                    <?php else: ?> <option value="<?php echo e($client->id); ?>"><?php echo e($client->intitule_client); ?></option><?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <option value="Nouveau client">Nouveau client</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <th  style="vertical-align: middle">Position Image :</th>
                            <td>
                                <div class="alert alert-success" style="display: none" id="success-alert">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    <strong>Success!</strong>
                                    <span id="body_lert"></span>
                                 </div>
                                <ul style="list-style: none;" id="sorta">
                                    <li class="small_banner" id="small_banner">
                                        <div>
                                            <a href="javascript::void(0)" class="avatar avatar-lg mr-2"  style="color: #333">
                                                <img class="avatar-img rounded-right rounded-left rounded-top"  src="<?php echo e(asset('storage/references/'.$reference->small_banner_reference )); ?>" id="small_img" class="col-12">
                                            </a>
                                            <p>
                                                Small Banner
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <a href="javascript::void(0)" class="avatar avatar-lg mr-2"  style="color: #333">
                                                <img  class="avatar-img rounded-right rounded-left rounded-top" src="<?php echo e(asset('storage/references/'.$reference->long_banner_reference )); ?>" id="long_img" class="col-12">
                                            </a>
                                            <br>
                                            Long Banner
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th  style="vertical-align: middle">Cover Image :</th>
                            <td>
                                <input type="file" name="cover_reference[]" id="cover_reference" style="padding: 30px;" onchange="if(this.files.length == 2) { $('#msg').html(''); $('#msg').css('padding','0');}else{ $('#msg').html('cover doit étre egual 2 image'); $('#msg').css('padding','5px'); this.value = ''}" maxlength="2" multiple>
                                <p class="alert-danger" id="msg"></p>
                            </td>
                        </tr>
                        <tr> <th colspan="2" class="text-center">Slider</th> </tr>
                        <tr class="imgs">
                            <td></td>
                            <td>
                                <ul id="draggable" colspan="2" class="col-12 list-unstyled">
                                    <?php $__currentLoopData = $imageReferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="my-3" id="<?php echo e($item->id); ?>">
                                            <img src="<?php echo e(asset('storage/references/'.$item->img_reference)); ?>" style="max-height: 150px"  class="col-12">
                                            <a class="btn btn-sm bg-danger ml-3 mt-1"  href="javascript:void(0);"
                                                onclick=" Swal.fire({ title: '<span style=\'color:black\'>Êtes-vous sur de supprimer votre image de la référence ?  </span> ',background: 'lightgray', iconHtml: '<img src=\'<?php echo e(asset('admin/img/warning.svg')); ?>\' width=\'100px\'>', customClass: { icon: 'no-border'},showCancelButton: true,confirmButtonColor: 'green',cancelButtonColor: 'red',confirmButtonText: 'Oui',cancelButtonText: 'Annuler'}).then((result) => { if (result.isConfirmed) { window.location.href = '<?php echo e(route('admin.reference.image.destroy', $item->id)); ?> '; }} );">
                                                <i class="fe fe-trash"></i> Supprimer
                                            </a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                            </td>
                        </tr>
                        <tr>
                            <th  style="vertical-align: middle">Images slider :</th>
                            <td>
                                <input type="file" name="img_reference[]" id="imgs_reference"  style="padding: 30px;" multiple>
                            </td>
                        </tr>
                        <tr>
                            <th  style="padding: 15px 0">Services que nous avons fournis version fr:</th>
                            <td>
                                <textarea name="desc_reference" class="form-control desc_reference" cols="30" rows="10"><?php echo e($reference->desc_reference); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th  style="padding: 15px 0">Services que nous avons fournis version en:</th>
                            <td>
                                <textarea name="desc_reference_en" class="form-control desc_reference_en" cols="30" rows="10"><?php echo e($reference->desc_reference_en); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th  style="vertical-align: middle"></th>
                            <td>
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <?php $__env->startSection('script'); ?>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

        <script>
            $( function() {
                $('.gestionReferences').addClass('active');
                $('.more_data').hide();
                $('.desc_reference').summernote({
                    toolbar: [
                        ['font',['bold', 'underline', 'clear','ul']]
                    ]
                });

                $('.desc_reference_en').summernote({
                    toolbar: [
                        ['font',['bold', 'underline', 'clear','ul']]
                    ]
                });

                $( "#draggable" ).sortable({
                    items: 'li',
                    stop: function(event, ui) {
                        index = ui.item.index()+1;
                        // alert( ui.item.attr("id") +' '+ ( ui.item.index()+1));
                        $("#draggable li").each(function(index, value) {
                            $.ajax({
                                url: "<?php echo e(route('admin.reference.image.update','')); ?>/"+$(this).attr('id'),
                                type: 'Post',
                                data: {
                                    order_image: index+1,
                                    _token:'<?php echo e(csrf_token()); ?>'
                                },
                                dataType: 'json',
                                success: function(res) {},
                            });
                        });
                    }
                });

                $( "#sorta" ).sortable({
                    items: 'li',
                    stop: function(event, ui) {
                        index = ui.item.index()+1;
                        $("#sorta li").each(function(index, value) {
                            if(value.id == 'small_banner'){
                                $.ajax({
                                    url: "<?php echo e(url('/admin/gestion-des-references/change-position')); ?>/<?php echo e($reference->id); ?>/position/"+index,
                                    type: 'Get',
                                    data: {
                                        _token:'<?php echo e(csrf_token()); ?>'
                                    },
                                    dataType: 'json',
                                    success: function(res) {
                                        $('#body_lert').html(res.status);
                                        $("#success-alert").show();
                                        window.setTimeout(function () {
                                            $("#success-alert").alert('close');
                                        }, 2000);
                                        location.reload();
                                    },
                                });
                            }
                        });
                    }
                });

                // $('#client').on('change',function(){
                //     $.ajax({
                //         url: "<?php echo e(route('admin.reference.client.show','')); ?>/"+$('#client').val(),
                //         type: 'GET',
                //         dataType: 'json', // added data type
                //         success: function(res) {
                //             $('#more_data').html('<tr><th class="col-4">Intitulé de client :</th><td class="col-8">'+
                //                 res.intitule_client+'</td></tr><tr><th>Email de client :</th>'+
                //             '<td>'+res.email_client+'</td></tr>'+'<tr><th>ICE de client :</th><td>'+res.lce_client+'</td></tr><tr><th>Adresse de client :</th><td>'+
                //             res.adresse_client+ '</td></tr><tr><th>Numéro de téléphone :</th><td>'+ res.phone_client +'</td></tr><tr><th>Année engagement de client :</th>'+
                //             '<td>'+ res.annee_engagement_client +'</td></tr>');
                //             $('.more_data').show();
                //         }
                //     });
                // });

                $ ('#client').select2({ maximumInputLength: 20 });
            });
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/admin/gestion-des-references/add-reference.blade.php ENDPATH**/ ?>