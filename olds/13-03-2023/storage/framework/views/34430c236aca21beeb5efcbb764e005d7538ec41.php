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
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/slick.min.css')); ?>" />
    <?php $__env->stopSection(); ?>

    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> <?php $__env->startSection('langue'); ?> <a href="<?php echo e(route('welcome.lang','fr')); ?>">EN</a><?php $__env->stopSection(); ?>
    <?php else: ?> <?php $__env->startSection('langue'); ?><a href="<?php echo e(route('welcome.lang','en')); ?>">FR</a><?php $__env->stopSection(); ?>    <?php endif; ?>



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


    <div class="p-0 m-0 cont">
        <div class="head row">
            <div class="col-lg-6 col-md-12 col-sm-12"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 m-0 p-0" >
                <h6>SOFT CACTUS</h6>
                <h2>
                    <p>
                        YOU ARE
                    </p>
                    <p>
                        NOT ALONE <span  style="color: #6428B4">.</span>
                    </p>
                </h2>
                <div>
                    <p>
                        <?php
                            print(nl2br($homepage->desc_slogan))
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="scroll-head">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="122" viewBox="0 0 28 122" >
                    <g id="Groupe_7" data-name="Groupe 7" transform="translate(-28 -895)">
                        <text id="scroll" transform="translate(49 947) rotate(-90)" fill="white" font-size="20" font-family="Poppins-Light, Poppins" font-weight="300"><tspan x="0" y="0">scroll</tspan></text>
                        <g id="Groupe_6" data-name="Groupe 6" transform="translate(3 -15)" >
                            <path id="Polygone_1" data-name="Polygone 1" d="M5,0l5,10H0Z" transform="translate(45 1032) rotate(180)" fill="white"/>
                            <path id="Tracé_3" data-name="Tracé 3" d="M1388,1031.065V972.746" transform="translate(-1348)" fill="none" stroke="white" stroke-width="1"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>

    <div class="service" id="ourwork">
        <div class="row ourwork">
            <h1>
                <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
                    Our work<span style="color: #9100D8">.</span>
                <?php else: ?>
                    Nos services<span style="color: #9100D8">.</span>
                <?php endif; ?>
            </h1>
        </div>
        <div class="row what">
            <div class="col-lg-6 col-md-12 first">
                <h1>
                    <p>
                        <?php print(nl2br($homepage->solution)) ?>
                    </p>

                </h1>
            </div>
            <div class="col-lg-6 col-md-12 last">
                <div>
                    <?php
                        print(nl2br($homepage->desc_solution))
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="offers">
        <div class="row">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <h1><a href="<?php echo e(route('service.show',['lang' => $lang->name_langue,'service' => strtolower(str_replace(' ','-',$service->name_service))])); ?>"><?php echo e($service->sub_name_service); ?></a></h1>
                    <p style="border-color: <?php echo e($service->color_service); ?>">
                        <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
                        <?php
                            print (nl2br(substr($service->desc_service_en,0,150). '...'));
                        ?>
                        <br>
                        <a href="<?php echo e(route('service.show',['lang' => $lang->name_langue,'service' => strtolower(str_replace(' ','-',$service->name_service))])); ?>" style="color: #C508C5">see more</a>
                        <?php else: ?>
                        <?php
                            print (nl2br(substr($service->desc_service,0,150). '...'));
                        ?>
                        <br>
                        <a href="<?php echo e(route('service.show',['lang' => $lang->name_langue,'service' => strtolower(str_replace(' ','-',$service->name_service))])); ?>" style="color: #C508C5">lire plus</a>
                        <?php endif; ?>
                    </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="slider">
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $service->references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="chandelles">
                <a href="<?php echo e(route('reference.show',['lang' => $lang->name_langue,'reference' => $reference->id])); ?>">
                    <img src="<?php echo e(asset('storage/references/'. $reference->long_banner_reference)); ?>" alt="<?php echo e('long_banner_'.$reference->id); ?>" loading="lazy">
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="team">
        <div class="row ourteam">
            <h1>
                <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
                    <a href="javascript::void(0)">Our team<span style="color: #9100D8">.</span></a>
                <?php else: ?>
                    <a href="javascript::void(0)">Notre team<span style="color: #9100D8">.</span></a>
                <?php endif; ?>
            </h1>
        </div>
       <div class="row body">
            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4" >
                    <div class="profile" style="border-color:<?php echo e($team->color_member); ?>" align='center'>
                        <img src="<?php echo e(asset('storage/members/'.$team->img_member)); ?>" class="col-12" style="border-radius: 10px 10px 0 0;" loading="lazy" alt="<?php echo e($team->prenom_member .' '. $team->nom_member); ?>">
                    </div>
                    <div class="title">
                        <h3><?php echo e($team->prenom_member .' '. $team->nom_member); ?></h3>
                        <p><?php echo e($team->intitule_poste); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4"></div>
        </div>
    </div>

    <div class="chatbox-svg">
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 69 69" >
            <g id="Groupe_2" data-name="Groupe 2" transform="translate(-1213.461 -738.461)">
            <circle id="Ellipse_1" data-name="Ellipse 1" cx="34.5" cy="34.5" r="34.5" transform="translate(1213.461 738.461)" fill="#131313"/>
            <path id="Union_1" data-name="Union 1" d="M18.848,23.108H8a8,8,0,0,1-8-8V8A8,8,0,0,1,8,0H21.68a8,8,0,0,1,8,8v7.107a7.973,7.973,0,0,1-2.268,5.58l2.23,8.343Z" transform="translate(1232.101 760.68)" fill="#fff"/>
            </g>
        </svg>
    </div>

    <?php $__env->startSection('body'); ?>
    <script type="text/javascript" src='<?php echo e(asset("assets/js/slick.min.js")); ?>'></script>
    <script type="text/javascript">
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 1000,
            prevArrow:'',
            nextArrow:'',
        });
    //Producted By Mouftakir Aiman

    </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/client/welcome.blade.php ENDPATH**/ ?>