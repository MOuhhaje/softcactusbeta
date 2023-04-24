<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front/css/refernecePages.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front/css/scroll.css')); ?>">
    <style>
        .text-1 {
            font-size: 100px;
            text-align: center;
            font-weight: 700;
        }
        .text-2 {
            font-size: 70px;
            text-align: center;
            font-weight: 600;
        }
        .text-1,.text-2 {
            color: var(--color_5);
        }
    </style>
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
                <img src="<?php echo e(asset('front/img/Chandelles/Banner.png')); ?>" alt="">
            </div>
       </div>
       <div class="row w-100">
            <div class="space-holder">
                <div class="sticky">
                  <div class="horizontal">
                    <section role="feed" class="cards">
                      <article class="sample-card revealer">
                        <img src="<?php echo e(asset('front/img/Chandelles/variations.png')); ?>" alt="" >
                      </article>
                      <article class="sample-card revealer">
                        <img src="<?php echo e(asset('front/img/Chandelles/Quote.png')); ?>" alt="">
                      </article>
                    </section>
                  </div>
                </div>
            </div>
       </div>
       
       <div class="row w-100 align-items-center justify-content-between">
            <div class="hover-over-words" style="width:100%;">
               
                <div class="text-1">
                    Enjoyed ?
                </div>
                <div class="text-2">
                    go next
                </div>
                   
            </div>
       </div>
    </main>

   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('front/js/scroll.js')); ?>"></script>
    <script>
    
            // $('.hover-over-words').css('cursor','none');
            $('.hover-over-words').parent().css('cursor','none');
            $('.hover-over-words').parent().css('position','relative');
            //overflow: hidden;
            $('.hover-over-words').parent().css('overflow','hidden');


            const cursorCircle = document.createElement('div');
            $('.hover-over-words').parent().append(cursorCircle);
            const moveCursor = (e) => {
                const clientX = e.clientX - cursorCircle.offsetWidth / 2;
                const clientY = e.clientY-300 - cursorCircle.offsetHeight / 2;
                //if clientX is less than 0 then make it 0
                //if clientX is greater than window.innerWidth then make it window.innerWidth
                //if clientY is less than 0 then make it 0
                //if clientY is greater than window.innerHeight then make it window.innerHeight
                if (clientX < 0) {
                    cursorCircle.style.left = 0;
                } else if (clientX > window.innerWidth) {
                    cursorCircle.style.left = window.innerWidth + 'px';
                } else {
                    cursorCircle.style.left = clientX + 'px';
                }
                if (clientY < 0) {
                    cursorCircle.style.top = 0;
                } else if (clientY > window.innerHeight) {
                    cursorCircle.style.top = window.innerHeight + 'px';
                } else {
                    cursorCircle.style.top = clientY + 'px';
                }

            }
            cursorCircle.classList.add('cursor');
            // make the cursor with css 
            cursorCircle.style.width = '160px';
            cursorCircle.style.height = '160px';
            cursorCircle.style.borderRadius = '50%';
            cursorCircle.style.backgroundColor = 'var(--color_5)';
            cursorCircle.style.position = 'absolute';
            
            $('.hover-over-words').parent().on('mousemove', moveCursor);

    
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softcact/public_html/resources/views/frontOffice/refs/Chandelles.blade.php ENDPATH**/ ?>