<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('head'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/details-career.css')); ?>">
    <?php $__env->stopSection(); ?>

    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> <?php $__env->startSection('langue'); ?> <a href="<?php echo e(route('offre.show',['lang' => 'fr','offre' => strtolower(str_replace(' ','-',$offre->name_offre))])); ?>">EN</a><?php $__env->stopSection(); ?>
    <?php else: ?> <?php $__env->startSection('langue'); ?><a href="<?php echo e(route('offre.show',['lang' =>'en','offre' => strtolower(str_replace(' ','-',$offre->name_offre))])); ?>">FR</a><?php $__env->stopSection(); ?>    <?php endif; ?>


    <div class="detaits w-100">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('contact.showbylang',$lang->name_langue)); ?>">Contact</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="<?php echo e(route('career',$lang->name_langue)); ?>" class="cr_li">Careers</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="javascript::void(0);" class="cr_li"><?php echo e($offre->name_offre); ?></a>
                </li>
            </ol>
        </nav>
        <div class="info">   
            <h1><?php echo e($offre->name_offre); ?> <span style="background-color: <?php echo e($offre->border_color_offre); ?>"></span></h1>

            <div>
                <table>
                    <tr>
                        <td>City</td>
                        <td class="md">:</td>
                        <td> <?php echo e($offre->ville_offre); ?> </td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td class="md">:</td>
                        <td> 
                            <?php echo e($offre->type_offre); ?>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="infoDetails"> 
        <div>
            <?php
                print(nl2br($offre->desc_offre));
            ?>
        </div>

        <div class="link">
            <form action="<?php echo e(route('candidature.store')); ?>" style="width: 80%" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row my-2">
                    <div class="col-6">
                        <input type="text" name="nom_candidature" id='nom' class="form-control" style="background: white;border: 1px solid #9100D8;padding: 10px 20px;margin: 5px 0;"
                         <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> placeholder="FirstName*" <?php else: ?> placeholder="Nom*" <?php endif; ?> >
                    </div>
                    <div class="col-6">
                        <input type="text" name="prenom_candidature" id="prenom" class="form-control" style="background: white;border: 1px solid #9100D8;padding: 10px 20px;margin: 5px 0;"
                        <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> placeholder="LastName*" <?php else: ?> placeholder="Prenom*" <?php endif; ?> >
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-12">
                        <input type="email" name="email_candidature" id="email" class="form-control" style="background: white;border: 1px solid #9100D8;padding: 10px 20px;margin: 5px 0;" placeholder="Email *">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-12">
                        <input type="text" name="phone_candidature" id="phone"  placeholder="Phone *" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" style="background: white;border: 1px solid #9100D8;padding: 10px 20px;margin: 5px 0;">
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload CV <span style="color: red">*</span></label>
                            <input type="file" class="form-control" name="cv_candidature" id="cv" style="border: 1px solid #9100D8;padding: 10px 20px;margin: 5px 0;">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload cover letter</label>
                            <input type="file" class="form-control" name="up_cl_candidature" id="upload_cover_letter" style="border: 1px solid #9100D8;padding: 10px 20px;margin: 5px 0;">
                        </div>
                    </div>
                </div>

                <input type="text" name="offre_id" value="<?php echo e($offre->id); ?>" class="d-none">

                <div class="row my-2">
                    <div class="col-12">
                        <textarea name="cl_candidature" id="cover_letter" class="form-control" cols="30" rows="7" 
                        <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>  
                        placeholder="Cover letter" <?php else: ?> placeholder="lettre de motivation" <?php endif; ?>  style="background: white;border: 1px solid #9100D8;padding: 10px 20px;margin: 5px 0;"></textarea>
                    </div> 
                </div>

                <input type="text" name="offre_id" class="d-none" value="<?php echo e($offre->id); ?>">

                <div style="margin: 30px 0">
                    <div class="col-12">
                    <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> 
                    <button id="send" disabled class="py-2 px-4" style="background-color: rgb(145, 0, 216,0.9);opacity: 0.5;padding: 10px 20px;margin: 5px 0;padding: 10px 20px;margin: 5px 0;border: none;border-radius: 5px;color: white">
                        Send
                    </button>
                    <?php else: ?>
                    <button id="send" disabled class="py-2 px-4" style="background-color: rgb(145, 0, 216,0.9);opacity: 0.5;padding: 10px 20px;margin: 5px 0;padding: 10px 20px;margin: 5px 0;border: none;border-radius: 5px;color: white">
                        Envoyer
                    </button>
                    <?php endif; ?>
                    </div>
                </div>

            </form>
            <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> 
                <a href="javascript::void(0)" id="Apply">Apply</a>
            <?php else: ?>
            <a href="javascript::void(0)" id="Apply">Postuler</a>
            <?php endif; ?>
        </div>

    </div>


    <?php $__env->startSection('body'); ?>
    <?php if(session('status')): ?>
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 2000;" >
            <div class="toast align-items-center" id="message" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000" data-bs-autohide="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <?php echo e(session('status')); ?>

                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close" onclick="$('.toast').hide();"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(count($errors) > 0): ?>
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 2000;" >
            <div class="toast align-items-center" id="errors" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000" data-bs-autohide="true">
                <div class="d-flex">
                    <div class="toast-body alert-danger">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($error); ?> <br> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close" onclick="$('.toast').hide();"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>
  
    <script>
        $(function(){
            <?php if(count($errors) > 0): ?>
                $('#errors').show();
                window.setTimeout(() => {
                        $('#errors').hide();
                }, 3000);   
            <?php endif; ?>


            $('#Apply').on('click',function(){
                $('.infoDetails form').css('display','block');
                $('#Apply').css('display','none');
                let nom = $('#nom');
                let prenom = $('#prenom');
                let email = $('#email');
                let phone = $('#phone');
                let cv = $('#cv');
                let upload_cover_letter = $('#upload_cover_letter');
                let cover_letter = $('#cover_letter');
                
                nom.on('change',function(){
                    if(nom.val() != '' && prenom.val() != '' && email.val() != '' && phone.val() != '' && cv.val() != '' && (upload_cover_letter.val() != '' || cover_letter.val() != '') ) { 
                        $('#send').css('opacity','1');
                        $('#send').prop("disabled",false);
                    }else{
                        $('#send').css('opacity','0.5');
                        $('#send').prop("disabled",true);
                    }
                }); 

                prenom.on('change',function(){
                    if(nom.val() != '' && prenom.val() != '' && email.val() != '' && phone.val() != '' && cv.val() != '' && (upload_cover_letter.val() != '' || cover_letter.val() != '') ) { 
                        $('#send').css('opacity','1');
                        $('#send').prop("disabled",false);
                    }else{
                        $('#send').css('opacity','0.5');
                        $('#send').prop("disabled",true);
                    }
                }); 

                nom.on('change',function(){
                    if(nom.val() != '' && prenom.val() != '' && email.val() != '' && phone.val() != '' && cv.val() != '' && (upload_cover_letter.val() != '' || cover_letter.val() != '') ) { 
                        $('#send').css('opacity','1');
                        $('#send').prop("disabled",false);
                    }else{
                        $('#send').css('opacity','0.5');
                        $('#send').prop("disabled",true);
                    }
                }); 

                email.on('change',function(){
                    if(nom.val() != '' && prenom.val() != '' && email.val() != '' && phone.val() != '' && cv.val() != '' && (upload_cover_letter.val() != '' || cover_letter.val() != '') ) { 
                        $('#send').css('opacity','1');
                        $('#send').prop("disabled",false);
                    }else{
                        $('#send').css('opacity','0.5');
                        $('#send').prop("disabled",true);
                    }
                }); 

                phone.on('change',function(){
                    if(nom.val() != '' && prenom.val() != '' && email.val() != '' && phone.val() != '' && cv.val() != '' && (upload_cover_letter.val() != '' || cover_letter.val() != '') ) { 
                        $('#send').css('opacity','1');
                        $('#send').prop("disabled",false);
                    }else{
                        $('#send').css('opacity','0.5');
                        $('#send').prop("disabled",true);
                    }
                }); 

                cv.on('change',function(){
                    if(nom.val() != '' && prenom.val() != '' && email.val() != '' && phone.val() != '' && cv.val() != '' && (upload_cover_letter.val() != '' || cover_letter.val() != '') ) { 
                        $('#send').css('opacity','1');
                        $('#send').prop("disabled",false);
                    }else{
                        $('#send').css('opacity','0.5');
                        $('#send').prop("disabled",true);
                    }
                }); 

                upload_cover_letter.on('change',function(){
                    if(nom.val() != '' && prenom.val() != '' && email.val() != '' && phone.val() != '' && cv.val() != '' && upload_cover_letter.val() != '' ) { 
                        $('#send').css('opacity','1');
                        $('#send').prop("disabled",false);
                    }else{
                        $('#send').css('opacity','0.5');
                        $('#send').prop("disabled",true);
                    }
                }); 

                cover_letter.on('change',function(){
                    if(nom.val() != '' && prenom.val() != '' && email.val() != '' && phone.val() != '' && cv.val() != '' && cover_letter.val() != '') { 
                        $('#send').css('opacity','1');
                        $('#send').prop("disabled",false);
                    }else{
                        $('#send').css('opacity','0.5');
                        $('#send').prop("disabled",true);
                    }
                }); 
            });
        });
        <?php if(session('status')): ?>
            $('#message').show();
            window.setTimeout(() => {
                    $('#message').hide();
            }, 3000);   
        <?php endif; ?>
    </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/client/details-career.blade.php ENDPATH**/ ?>