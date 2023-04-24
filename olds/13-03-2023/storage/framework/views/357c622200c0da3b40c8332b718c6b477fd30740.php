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
        <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assets/css/contact.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assets/css/map/leaflet.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assets/css/map/MarkerCluster.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('assets/css/map/MarkerCluster.Default.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/toastify/toastify.min.css')); ?>">
    <?php $__env->stopSection(); ?>

    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> <?php $__env->startSection('langue'); ?> <a href="<?php echo e(route('contact.showbylang','fr')); ?>">EN</a><?php $__env->stopSection(); ?>
    <?php else: ?> <?php $__env->startSection('langue'); ?><a href="<?php echo e(route('contact.showbylang','en')); ?>">FR</a><?php $__env->stopSection(); ?>    <?php endif; ?>

    <div class="row contact">
        <div class="col-lg-8 col-sm-12 left">
            <h1>
                <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> 
                <p>Time to talk</p>
                <p>
                    about you<span style="color: #C508C5">.</span>
                </p>
                <?php else: ?>
                <p>Parlez-nous</p>
                <p>
                    de vous  <span style="color: #C508C5">.</span>
                </p>
                <?php endif; ?>
            </h1>
          
            <form action="<?php echo e(route('contact/store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> 
                    <p>
                        <p class="first-item">
                            Hi, I'm from <input type="text" name='companyName' id='nameCompany' placeholder="company name"  title="company name">
                            <span class="br"></span>
                            and you can call me <input type="text" name="personalName" id="personalname" title="Personal name" placeholder="Personal name">
                        </p>
                        <p>
                            I was wondering if we could  <span class="br"></span> collaborate for a
                            <select name="projectName" id="projectname">
                                <option value="Creativity">Creativity</option>
                                <option value="Web development">Web development</option>
                                <option value="Community management">Community management</option>
                            </select>
                            Project?
                        </p>
                        <p>
                            You can connect with me at <input type="email" name="adresseEmail" id="email" placeholder="Email address" title="Email adresse"><span class="br"></span>
                            Or just give me a call
                        </p>
                        <p class="phone">
                            <input type="tel" name="phoneNumber" id="phonenumber" placeholder="Phone number" title="Phone number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>.
                        </p>
                    </p>
                    <button type="submit" class="btn btn-primary rounded" id="contact-btn" style="background-color: #9100D8;;color: white;border: none" disabled>
                        Let's do it
                    </button>
                <?php else: ?>
                    <p>
                        <p class="first-item" style="margin-bottom: 15px">
                            je viens de  <input type="text" name='companyName' id='nameCompany' placeholder="Nom d'entreprise" style="width: 200px">
                            <span class="br"></span>
                            je suis <input type="text" name="personalName" id="personalname" title="Personal name" placeholder="nom complet" style="width: 170px">.
                        </p>
                        <p style="margin-bottom: 15px">
                            Je me demandais si nous pourrons collaborer avec vous <span class="br"></span> en réalisant notre projet   
                            <select name="projectName" id="projectname" class="projectname" style="margin-top: 10px">
                                <option value="Branding">Branding</option>
                                <option value="Développement Web">Développement Web</option>
                                <option value="Community management">Community management</option>
                            </select>. <span class="brr"></span>
                            Vous pouvez me joindre à <input type="email" name="adresseEmail" id="email" placeholder="Adresse e-mail" title="Email adresse" style="width:185px;">.<span class="br"></span>
                        </p>
                        <p style="margin-bottom: 15px">
                            Numéro de téléphone <input type="tel" name="phoneNumber" id="phonenumber" placeholder="Numéro de téléphone" title="Phone number" style="width: 215px" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>.
                        </p>
                    </p>
                    <button type="submit" class="btn btn-primary rounded" id="contact-btn" style="background-color: #9100D8;;color: white;border: none" disabled>
                        Faire le premier pas
                    </button>
                <?php endif; ?>
              
            </form>
        </div>
        <div class="col-lg-4 col-sm-12 right">
            <h1>
                <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> 
                <p>
                    Give us
                </p>
                <p>
                    a call<span style="color: #FFBB00">.</span>
                </p>
                <?php else: ?>
                <p style="line-height: 30px">
                    Parlons 
                </p>
                <p style="line-height: 30px">
                    de votre
                </p>
                <p style="line-height: 30px">
                    projet <span style="color: #FFBB00">.</span>
                </p>
                <?php endif; ?>
            </h1>
            <p class="contact-content">
                <p>
                    <a href="tel:+212 648927820" target="_blank">+212 648 927 820</a>
                </p>
                <p style="margin-top: -10px">
                    <a href="mailto:Contact@softcactus.ma"  target="_blank">Contact@softcactus.ma</a><br>
                </p>
                <p class="address" style="margin-top: -30px">
                    <a href="https://www.google.com/maps/place/Soft+Cactus/@34.6852166,-1.9178356,18.15z/data=!4m5!3m4!1s0xd786522b2629bc7:0xae892dbc9b8b7453!8m2!3d34.6853812!4d-1.9170241"  target="_blank">
                        <br> N° 79, Boulevard Derfoufi,
                        <br> 6éme étage appartement 6,
                        <br> Oujda
                    </a>
                </p>
            </p>
        </div>
    </div>

    <div class="row contact-footer">
        <div class="col-lg-8  col-md-12  col-sm-12 contact-footer-left row">
            <div class="col-lg-6 col-sm-12">
                <h5>
                    TECHNICAL SUPPORT
                </h5>
                <ul>
                    <li>
                        <a href="tel:+212 700-175035" target="_blank">+212 700 175 035</a><br>
                    </li>
                    <li>
                        <a href="mailto:Contact@softcactus.ma"  target="_blank">Contact@softcactus.ma</a><br>
                    </li>
                    <li>
                        <a href="https://www.google.com/maps/place/Soft+Cactus/@34.6852166,-1.9178356,18.15z/data=!4m5!3m4!1s0xd786522b2629bc7:0xae892dbc9b8b7453!8m2!3d34.6853812!4d-1.9170241"  target="_blank">
                            <span>N° 79, Boulevard Derfoufi, </span>
                            <br>   <span>6éme étage appartement 6,</span>
                            <br>   <span>Oujda</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6  col-sm-12">
                <h5>
                    JOBS
                </h5>
                <ul>
                    <li>
                        <a href="<?php echo e(route('career',$lang->name_langue)); ?>"> Available jobs</a>
                    </li>
                    <li><a href="mailto: Job@softcactus.ma"> Job@softcactus.ma</a></li>
                    <li>
                        <a href="https://www.google.com/maps/place/Soft+Cactus/@34.6852166,-1.9178356,18.15z/data=!4m5!3m4!1s0xd786522b2629bc7:0xae892dbc9b8b7453!8m2!3d34.6853812!4d-1.9170241"  target="_blank">
                            <span>N° 79,  Boulevard Derfoufi, </span>
                            <br>   <span>6éme étage appartement 6,</span>
                            <br>   <span>Oujda</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 contact-footer-right row">
            <div id="carte" class="col-lg-12"></div>
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
        <script src="<?php echo e(asset('assets/js/map/leaflet.js')); ?>" ></script>
        <script src="<?php echo e(asset('assets/js/map/leaflet.markercluster.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/map/map.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/contact.js')); ?>"></script>
        <script>
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
<?php /**PATH /home/softcact/public_html/resources/views/client/contact.blade.php ENDPATH**/ ?>