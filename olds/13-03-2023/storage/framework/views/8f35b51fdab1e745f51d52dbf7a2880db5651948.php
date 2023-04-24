

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front/css/career.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--==================== sub header ====================-->

    <!--==================== career ====================-->

    <div class="content">
        <div class="job-header color-2">
            <div class="description">
                <h1> 
                    Videographer
                    <span class="dot color-4"></span>
                </h1>
            
                <div class="with-line">
                    <div>
                        <span class="title">City</span>
                        <span class="text">Oujda</span>
                    </div>
                    <div>
                        <span class="title">Type</span>
                        <span class="text">Full time</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="summary">
            <p class="summary-content">
                Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
            </p>
        </div>
        <div class="job-details">
            <div class="job-details-content">
                <div class="job-details-content-item">
                    <div class="job-details-content-item-header">
                        <h2>Skills</h2>
                        
                    </div>
                    <div class="job-details-content-item-body">
                        <ul>
                            <li>Editing beautiful 4K 120p 10-bit footage (using proxies)</li>
                            <li>Editing video content from diverse, visually-stunning locations</li>
                            <li>Collaborating with directors, content editors, photo editors & colorists</li>
                            <li>Creating beautiful, engaging videos that are a pleasure to watch</li>
                        </ul>
                        <p>
                            Of course this can’t all be one-sided, and we believe that we provide one of the best remote working environments in the world.
                        </p>
                        <p>
                            State of the art software to stay connected and organized? We’ve got that.
                        </p>
                        <p>
                            Investing both time and money in your learning to ensure that you continually grow? We do that.
                        </p>
                        <p>
                            Flexible working schedule to ensure that you maintain a healthy work-life balance? Well that’s a no-brainer.
                        </p>
                    </div>
                </div>
                <br>
                
                <div class="job-details-content-item">
                    <div class="job-details-content-item-header">
                        <h2>What’s in it for me?</h2>
                        
                    </div>
                    <div class="job-details-content-item-body">
                        <p>
                            Of course this can’t all be one-sided, and we believe that we provide one of the best remote working environments in the world.
                        </p>
                        <p>
                            State of the art software to stay connected and organized? We’ve got that.
                        </p>
                        <p>
                            Investing both time and money in your learning to ensure that you continually grow? We do that.
                        </p>
                        <p>
                            Flexible working schedule to ensure that you maintain a healthy work-life balance? Well that’s a no-brainer.
                        </p>
                    </div>
                </div>
                <br>
                
                <div class="job-details-content-item">
                    <div class="job-details-content-item-header">
                        <h2>But should you apply?</h2>
                        
                    </div>
                    <div class="job-details-content-item-body">
                        <p>
                            This is not a decision we can make for you, but what we can do is lay out our Purpose, Values and Mission to help you decide for yourself.
                        </p>
                        <p>
                            As a company we believe in honesty and transparency, and once you click the apply button you will have the chance to learn all about us before you decide on whether to submit your application.
                        </p>
                        <p>
                            Hiring the best candidate is very important to us, but equally important is hiring the right candidate. Only apply if you really identify with what you read on the next page.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden-form">
            <div class="form">
                <div >
                    <form id="form">
                        <div class="inputs">
                            <div class="">
                                <input type="text" id="firstname" placeholder="...">
                                <label for="">First Name</label>
                            </div>
                            <div class="">
                                <input type="text" id="lastname" placeholder="...">
                                <label for="">Last Name</label>
                            </div>
                        </div>
                        <div class="input">
                            <div class="">
                                <input type="email" id="email" placeholder="...">
                                <label for="">Email</label>
                            </div>
                        </div>
                        <div class="input">
                            <div class="">
                                <input type="text" class="phone" id="phone" data-inputmask="+(999)999999999" placeholder="...">
                                <label for="">Phone</label>
                            </div>
                        </div>
                        <div class="inputs files">
                            <div class="">
                                <div class="file-input">
                                    <label class="btn-file" for="cv">
                                        Choose 
                                    </label>
                                    <span class="file-name">
                                        No file chosen
                                    </span>
                                </div>
                                <input type="file" id="cv" hidden>
                                <label for="">CV</label>
                            </div>
                            <div class="">
                                <div class="file-input">
                                    <label class="btn-file" for="coverLetter">
                                        Choose 
                                    </label>
                                    <span class="file-name">
                                        No file chosen
                                    </span>
                                </div>
                                <input type="file" id="coverLetter" hidden>
                                <label for="">Cover Letter</label>
                            </div>
                        </div>
                        <div class="input textarea">
                            <div class="">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="submit">
                            <div class="">
                                <input type="submit" id="submit-from" class="btn btn-primary" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="show-from">
            <div class="show-from-btn">
                <span class="btn">
                    Apply Now
                </span>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
    $(document).ready(function(){
        $('.show-from .show-from-btn .btn').click(function(){
            $('.hidden-form').addClass('active');
            $(this).addClass('d-none');
        });
        //on submit form do nothing and close the form
        $('.hidden-form .form form').submit(function(e){
            e.preventDefault();
            $('.hidden-form').removeClass('active');
            $('.show-from .show-from-btn .btn').removeClass('d-none');
        });
        //on chnage input file change the name of the file
        $('.files input').change(function(){
            var fileName = $(this).val().split('\\').pop();
            $(this).parent().find('.file-name').text(fileName);
        });
        $('#phone').mask('+(999)9 9999-9999');
        //not allow user to write in letter in phone input
        $('#phone').on('keypress', function(e){
            if(isNaN(e.key)){
                e.preventDefault();
            }
        });
        //#submit-from , #form
        $('#submit-from').attr('disabled', 'disabled');
        
        var checkFilleds=()=>{
            if($('#firstname').val() == '' || $('#lastname').val() == '' || $('#email').val() == '' || $('#phone').val() == '' || $('#cv').val() == '' || $('#message').val() == ''){
                $('#submit-from').attr('disabled', 'disabled');
            }else{
                $('#submit-from').removeAttr('disabled');
            }
        }
        $('#form').on('keyup', function(){
            checkFilleds();
        });
        $('#cv').on('change', function(){
            checkFilleds();
        });
      

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SoftCactus\resources\views/frontOffice/careerDetails.blade.php ENDPATH**/ ?>