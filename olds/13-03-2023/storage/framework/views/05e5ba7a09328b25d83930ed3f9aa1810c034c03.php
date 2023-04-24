<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front/css/refernecePages.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front/css/scroll.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  

    <main class="container">
       
       <div class="row w-90">
            <div class="left">
                <h2 class="color-text title">Project description<span class="color-2">.</span></h2>
                <div class="text">
                    <p>
                        Here goes a general description about the project, what they do , and what are the problem that  they faced, we can even say their services in general and their goal or the end result that they wanted to reach .
                    </p>
                </div>
            </div>
            <div class="right">
                <h2 class="color-text title">Services we provided<span class="color-2">.</span></h2>
                <div class="list color-text">
                    <ul>
                        <li>Branding</li>
                        <li>Community management</li>
                        <li>Web development</li>
                    </ul>
                </div>
            </div>
       </div>
       <div class="row w-100">
            <div class="banner w-100">
                <img src="<?php echo e(asset('front/img/Cleanco/Banner.png')); ?>" alt="">
            </div>
       </div>
       <div class="row w-100">      
            <div class="space-holder">
                <div class="sticky">
                <div class="horizontal">
                    <section role="feed" class="cards">
                        <article class="sample-card revealer">
                            <img src="<?php echo e(asset('front/img/Cleanco/Cleanco-1.png')); ?>" alt="" >
                        </article>
                        <article class="sample-card revealer">
                            <img src="<?php echo e(asset('front/img/Cleanco/Cleanco-2.png')); ?>" alt="">
                        </article>
                        <article class="sample-card revealer">
                            <img src="<?php echo e(asset('front/img/Cleanco/Cleanco-3.png')); ?>" alt="">
                        </article>
                    </section>
                </div>
                </div>
            </div>
       </div>
       <div class="row w-90 align-items-center justify-content-between">
            <div class="enjoyed">
                <svg xmlns="http://www.w3.org/2000/svg" width="60vw" height="30vw" viewBox="0 0 1200 600">
                    <defs>
                        <style>
                            .a {
                                fill: #00ffc4;
                            }

                            .b {
                                fill: #2f0052;
                                font-size: 190px;   
                            }

                            .b,
                            .c,
                            .d {
                                font-family: SegoeUI-Bold, Segoe UI;
                                font-weight: 700;
                            }

                            .c {
                                fill: #eb00ff;
                                font-size: 162px;
                            }

                            .d {
                                fill: #f8ac00;
                                font-size: 144px;
                                opacity: 0.198;
                            }
                        </style>
                    </defs>
                    <g transform="translate(-57 -3133)" id="Group_1" data-name="Group 1">
                        <circle class="a" cx="261" cy="261" r="261" transform="translate(57 3133)"></circle>
                        <text class="b" transform="translate(150 3530)">
                            <tspan x="0" y="0">Enjoyed</tspan>
                        </text><text class="c" transform="translate(892 3531)">
                            <tspan x="35" y="0">?</tspan>
                        </text><text class="d" transform="translate(487 3685)">
                            <tspan x="0" y="0">go next</tspan>
                        </text>
                    </g>
                </svg>
            </div>
            <div class="next-project">
                <div>
                    <a href="<?php echo e(route('SupMTI')); ?>">
                        <img src="<?php echo e(asset('front/img/SupMTI.png')); ?>" alt="" style="width: 100%;height: 100%;">
                    </a>
                </div>
            </div>
       </div>
    </main>

   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('front/js/scroll.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softcact/public_html/resources/views/frontOffice/refs/Cleanco.blade.php ENDPATH**/ ?>