<?php $__env->startSection('css'); ?>
    
    <link href="<?php echo e(asset('front/css/blog.css')); ?>" rel="stylesheet"/>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <section class="content">
        <div class="blog-header bottom-line color-text">
            <div class="header">
                <span class="color-text">What's new <span class="color-2">?</span>
            </div>
            <div class="sub__blog-header">
                <ul class="toggles">
                    <li id="News" >
                        News
                    </li>
                    <li id="Protips">
                        Protips
                    </li>
                    <li id="Ideas" class="active">
                        Ideas
                    </li>
                </ul>
            </div>
        </div>
        <section class="News ">
            <div class="card">
                <div class="card-img bg-color-4">  
                </div>
                <div class="card-body">
                    <div>
                        <div class="card-type">
                            <span>News</span>
                        </div>
                        <div class="card-title">
                            <h3>
                                <span>Here goes a title for an article</span>
                            </h3>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                            </p>
                        </div>
                        <div class="card-link">
                            <a href="#" class="btn btn-primary">
                                <span class="link">see more
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-img bg-color-3">  
                </div>
                <div class="card-body">
                    <div>
                        <div class="card-type">
                            <span>News</span>
                        </div>
                        <div class="card-title">
                            <h3>
                                <span>Here goes a title for an article</span>
                            </h3>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                            </p>
                        </div>
                        <div class="card-link">
                            <a href="#" class="btn btn-primary">
                                <span class="link">see more
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-img bg-color-2">  
                </div>
                <div class="card-body">
                    <div>
                        <div class="card-type">
                            <span>News</span>
                        </div>
                        <div class="card-title">
                            <h3>
                                <span>Here goes a title for an article</span>
                            </h3>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                            </p>
                        </div>
                        <div class="card-link">
                            <a href="#" class="btn btn-primary">
                                <span class="link">see more
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-img bg-color-1">  
                </div>
                <div class="card-body">
                    <div>
                        <div class="card-type">
                            <span>News</span>
                        </div>
                        <div class="card-title">
                            <h3>
                                <span>Here goes a title for an article</span>
                            </h3>
                        </div>
                        <div class="card-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                            </p>
                        </div>
                        <div class="card-link">
                            <a href="#" class="btn btn-primary">
                                <span class="link">see more
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
           
            
            
            <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            
        </section>
        <section class="Protips ">

            <div class="column">
                <div class="row even">
                    <div class="video">
                        <a class="play-btn" href="#"></a>
                    </div>
                    
                    <div class="card-protips bg-color-4 text-color-light">
                        <div class="card-body">
                            <div class="card-type">
                                <span>Protips</span>
                            </div>
                            <div class="card-title">
                                <h3>
                                    <span>Here goes a title for an article</span>
                                </h3>
                            </div>
                            <div class="card-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row odd">
                    <div class="video">
                        <div class="play-btn">
                            <div class="play-btn__icon"></div>
                        </div>
                    </div>
                    
                    <div class="card-protips bg-color-2 text-color-dark">
                        <div class="card-body">
                            <div class="card-type">
                                <span>Protips</span>
                            </div>
                            <div class="card-title">
                                <h3>
                                    <span>Here goes a title for an article</span>
                                </h3>
                            </div>
                            <div class="card-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row even">
                    <div class="video">
                        <div class="play-btn">
                            <div class="play-btn__icon"></div>
                        </div>
                    </div>
                    
                    <div class="card-protips bg-color-3 text-color-light">
                        <div class="card-body">
                            <div class="card-type">
                                <span>Protips</span>
                            </div>
                            <div class="card-title">
                                <h3>
                                    <span>Here goes a title for an article</span>
                                </h3>
                            </div>
                            <div class="card-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos fuga quasi error nam ipsam delectus quos optio, doloribus officia ducimus voluptas autem corrupti, vero eaque eos quas! Deserunt, aut ullam?
                                </p>
                            </div>
                        </div> 
                    </div>
                </div>
               
                
            </div>

           
           <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
              
        </section>
        <section class="Ideas active">
            <div class="idea-container">
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">
                        
                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">

                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">

                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">

                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="idea-card">
                    <div class="idea-img bg-color-2">

                    </div>
                    <div class="idea-slug">
                        <p>
                            Lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>









    



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        //.toggles 
        const li = $('.toggles li');
        //on click li add class active
        li.on('click', function () {
            li.removeClass('active');
            $(this).addClass('active');
            //get attr id
            const id = $(this).attr('id');
            //find section with class id
            const section = $('.' + id);
            //remove class active from section
            $('section').removeClass('active');
            //add class active to section
            section.addClass('active');
        });

    </script>



















    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/stackblur-canvas/2.5.0/stackblur.min.js" integrity="sha512-W5pl1mdnRnOONc8pHMFi5xyBNNNHo6N7Q2psPRHWMPR47VyO6F/sL1G5PpRLBcsd9QL+WfDa0J9mEsGoxQH+RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script>
        var gsap = gsap || {};
        var StackBlur = StackBlur || {};
    </script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/softcact/public_html/resources/views/frontOffice/blog.blade.php ENDPATH**/ ?>