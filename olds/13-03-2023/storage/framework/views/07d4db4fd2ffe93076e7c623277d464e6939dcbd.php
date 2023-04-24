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
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/about.css')); ?>">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <?php $__env->stopSection(); ?>

    <?php echo $__env->make('component.urls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> <?php $__env->startSection('langue'); ?> <a href="<?php echo e(route('about.lang','Fr')); ?>">EN</a><?php $__env->stopSection(); ?>
    <?php else: ?> <?php $__env->startSection('langue'); ?><a href="<?php echo e(route('about.lang','En')); ?>">FR</a><?php $__env->stopSection(); ?>    <?php endif; ?>

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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
            <li class="breadcrumb-item " aria-current="page"  style="color: lightgray">
                <a href="<?php echo e(route('welcome.lang',$lang->name_langue)); ?>">
                    Home
                </a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript::void(0);">Who are we</a>
            </li>
            <?php else: ?>
            <li class="breadcrumb-item " aria-current="page"  style="color: lightgray">
                <a href="<?php echo e(route('welcome.lang',$lang->name_langue)); ?>">
                    Accueil
                </a>
            </li>
            <li class="breadcrumb-item active">
                <a href="javascript::void(0);">Qui sommes-nous</a>
            </li>
            <?php endif; ?>
        </ol>
    </nav>

    <div class="row about">
        <div class="col-lg-6 col-md-12 col-sm-12 first">
            <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> <img src="<?php echo e(asset('assets/img/about.png')); ?>" alt="image" loading="lazy">
            <?php else: ?>  <img src="<?php echo e(asset('assets/img/about-fr.png')); ?>" alt="image" loading="lazy"> <?php endif; ?>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 last">
            <div class="first">
                <?php print(nl2br($about->desc_about))?>
            </div>
            <div>
                <?php print(nl2br($about->sub_desc_about))?>
            </div>
        </div>
    </div>

    <?php if($about->valeurs->count() > 0): ?>
        <h1 class="titles"><?php echo e($about->title_valeur); ?> <span style="background-color: #BA00FF"></span></h1>

        <div class="slick sliders">
            <?php $__currentLoopData = $about->valeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $valeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="background: #2F0052">
                    <div class="tr row" >
                        <div class="first col-6 ">
                            <h1 style="font-weight: 900">
                                <?php if(($key + 1) < 10): ?> <?php echo e('0'.$key +1); ?> <?php else: ?> <?php echo e($key + 1); ?> <?php endif; ?>
                            </h1>
                            <p class="col-lg-8 col-sm-12 col-md-12">
                                <?php print(nl2br($valeur->text_valeur)) ?>
                            </p>
                        </div>
                        <div class="col-6">
                            <img src="<?php echo e(asset('storage/about/valeurs/'. $valeur->img_valeur )); ?>" class="col-12" style="object-fit: cover">
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <?php if($about->histoires->count() > 0): ?>
        <h1 class="titles"><?php echo e($about->title_histoire); ?> <span></span></h1>

        <div class="story">
            <div class="col-12 para">
                <?php $__currentLoopData = $about->histoires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $histoire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p id="p<?php echo e(substr( $histoire->year_histoire,2,4)); ?>" class="col-12 histoire<?php echo e($key); ?>">
                        
                    </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="numbers">
                <div class="years">
                    20
                </div>
                <div class="second nextslick">
                    <?php $__currentLoopData = $histoires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $histoire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div  class="div<?php echo e(substr( $histoire->year_histoire,2,4)); ?>" style="background:#C508C5;color:white"><?php echo e(substr( $histoire->year_histoire,2,4)); ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="others"></div>
        </div>
    <?php endif; ?>

    <h1 class="titles bg-transparent"><?php echo e($about->title_team); ?> <span style="background-color: #EB00FF"></span></h1>

    <div class="teams row" style="margin-bottom: 100px">
        <div class="col-lg-6 col-sm-12 frst">
           <p>
                <?php print(nl2br($about->desc_team))?>
           </p>
        </div>
        <div class="col-lg-6 col-sm-12 p-0 d-flex justify-center">
            <div class="d-flex justify-content-center"   style="z-index: 1">
                <div style="width: 40%">
                    <div class="swiper mySwiper ">
                        <div class="swiper-wrapper" style="z-index: 1">
                        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('storage/members/'. $member->img_member)); ?>"  class="swiper-slide" style="object-position: top"/>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="counters row" style="background-image: url('<?php echo e(asset('assets/img/bg-counter.png')); ?>')">
        <?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
            <div class="col-4">
                <p>Experience</p>
                <h1><?php echo e($about->experience_count); ?><span>years</span></h1>
            </div>
            <div class="col-4">
                <p>Team members</p>
                <h1><?php echo e($about->team_count); ?></h1>
            </div>
            <div class="col-4">
                <p>Our Prjects</p>
                <h1>+<?php echo e($about->project_count); ?></h1>
            </div>
        <?php else: ?>
            <div class="col-4">
                <p>Expérience</p>
                <h1><?php echo e($about->experience_count); ?><span>years</span></h1>
            </div>
            <div class="col-4">
                <p>Membres d'équipes</p>
                <h1><?php echo e($about->team_count); ?></h1>
            </div>
            <div class="col-4">
                <p>Nos Projets</p>
                <h1>+<?php echo e($about->project_count); ?></h1>
            </div>
        <?php endif; ?>
    </div>

    <?php $__env->startSection('body'); ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        $(function(){
            $('.slick').slick({
            autoplay: true,
            autoplaySpeed: 1000,
            prevArrow: $('.prev'),
            nextArrow: $('.next')
        });

        $('.sliders > div').hide();
        // $('.story div.numbers div.nextslick').hide();

        setTimeout(() => {
            $('.sliders > div').show();
        }, 10);

        setTimeout(() => {
            $('.story div.numbers div.nextslick').show();
        }, 1);

        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            cubeEffect: {
                shadow: true,
                slideShadows: false,
                shadowOffset: 20,
                shadowScale: 0.94,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });

        $('.nextslick').slick({
            infinite:true,
            dots: true,
            vertical: true,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: $('.prevv'),
            nextArrow: $('.nextt'),
            appendDots:$('.others'),
        });

        <?php $__currentLoopData = $about->histoires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $histoire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        $('.histoire<?php echo e($key); ?>').html('<marquee direction="right" scrollamount="3" loop="infinite"><?php echo e($histoire->text_histoire); ?></marquee>');
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        $('.nextslick').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            <?php $__currentLoopData = $about->histoires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $histoire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                $('.histoire<?php echo e($key); ?>').html('<marquee direction="right" scrollamount="2" loop="infinite"><?php echo e($histoire->text_histoire); ?></marquee>');
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        });

        setInterval(function(){
            <?php $__currentLoopData = $about->histoires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $histoire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                if($('.div<?php echo e(substr( $histoire->year_histoire,2,4)); ?>').hasClass('slick-active')){
                    <?php $__currentLoopData = $about->histoires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if( $histoire->id  ==  $item->id): ?> $('#<?php echo e(substr( $histoire->year_histoire,2,4)); ?>').show(); <?php else: ?>
                        $('#p<?php echo e(substr( $histoire->year_histoire,2,4)); ?>').hide(); <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                };
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            if($('.div18').hasClass('slick-active')){
                $('#p18').show(); $('#p19').hide(); $('#p20').hide(); $('#p21').hide(); $('#p22').hide();
            }
            if($('.div19').hasClass('slick-active')){  $('#p18').hide(); $('#p19').show(); $('#p20').hide(); $('#p21').hide(); $('#p22').hide(); }
            if($('.div20').hasClass('slick-active')){  $('#p18').hide(); $('#p19').hide(); $('#p20').show(); $('#p21').hide(); $('#p22').hide(); }
            if($('.div21').hasClass('slick-active')){  $('#p18').hide(); $('#p19').hide(); $('#p20').hide(); $('#p21').show(); $('#p22').hide(); }
            if($('.div22').hasClass('slick-active')){  $('#p18').hide(); $('#p19').hide(); $('#p20').hide(); $('#p21').hide(); $('#p22').show(); }
        }, 0);
        $('#p18').show(); $('#p19').hide(); $('#p20').hide(); $('#p21').hide(); $('#p22').hide();

        $(".others ul li button").each(function (index, oneOption) {
            let x = $(this).attr("aria-controls");
            let vas  = $(this).text('20'+$('#'+ x).text());
        });


    });

      </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/client/about.blade.php ENDPATH**/ ?>