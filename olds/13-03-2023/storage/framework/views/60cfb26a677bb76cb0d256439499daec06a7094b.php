   


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front/css/contact.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('frontOffice.partial.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('frontOffice.partial.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
    <div class="container">


        <div class="left-info">

            <h1>Parlez-nous<br>de vous <span>.</span></h1>

            <form action="" class="form">
                <label class="labels" for="">Hi, I'm from&nbsp;&nbsp; </label>
                <input class="put" type="text" placeholder="Company name">&nbsp;&nbsp;
                
                <label class="labels" for=""> and you can call me&nbsp;&nbsp;&nbsp;</label>
                <input class="put" type="text" placeholder="Personal name"><br>
                
                <label class="labels" for="">I was wondering if we could collaborate for a&nbsp;&nbsp;</label>
                <input type="text" class="put"placeholder="Project name">
                <label class="labels" for=""> Project ?</label><br>
                
                <label class="labels" for="">You can connect with me at&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="put" placeholder="Email address">
                
                <label class="labels" for="">&nbsp;&nbsp;&nbsp;&nbsp; Or just give me a call</label><br>
                <input class="put" type="tel" placeholder="Phone number">
                <label class="labels" for="">&nbsp;&nbsp;.</label><br>
                
                <div class="btn-holder">
                    <input onclick="" class="btn" type="button" name="doit" value="Let's do it">
                </div>
            </form>


        </div>

        <div class="right-info">
        
            <p>Parlons <br>de votre <br> projet <span class="dot"></span></p>
        
            <div class="sous-contact">
                <div class="two-a">
                    <a href="tel:212 648 927 820"><span>+212 648 927 820</span></a>
                    <br>
                    <a href="mailto:Contact@Softcactus.ma?subject = subject text"><span>Contact@softcactus.ma</span>
                    </a>
                    <br>
                </div>

                <div class="one-a">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                        class="a3" value="Find" onclick="InitializeMap();">
                        <span>N° 79, Boulevard Derfoufi,<br>
                            6éme étage, appartement 6,<br>
                            Oujda</span></a>
                </div>
            </div>
        </div>



        <div class="left-support">

            <div class="tech">
                <h2>TECHNICAL SUPPORT</h2>
                <div class="tech-info">
                    <div class="phone-mail">
                        
                        <a href="tel:212 637 368 228"><span>+212 637 368 228</span></a>
                        <br>
                        
                        <a href="mailto:oussma.mouhhaje@gmail.com?subject = subject text"><span>oussma.mouhhaje@gmail.com</span>
                        </a>
                        <br>
                    </div>

                    <div class="address">
                        <a target="_blank"
                            href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                            class="a3" value="Find" onclick="InitializeMap();">
                            <span>N° 79, Boulevard Derfoufi<br>
                                6éme étage appat 6<br>
                                Oujda</span></a>
                    </div>
                </div>
            </div>
            

            <div class="jobs">
                <h2>JOBS</h2>
                <div class="tech-info">
                    <div class="phone-mail">
                        <a href="<?php echo e(route('career')); ?>"><span>Available jobs</span></a>
                        <br>
                        <a href="mailto:Jobs@Softcactus.ma?subject = subject text"><span>Jobs@softcactus.ma</span>
                        </a>
                        <br>
                    </div>

                    <div class="address">
                        <a target="_blank"
                            href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                            class="a3" value="Find" onclick="InitializeMap();">
                            <span>N° 79, Boulevard Derfoufi<br>
                                6éme étage appat 6<br>
                                Oujda</span></a>
                    </div>
                </div>

            </div>

        </div>

        <div class="right-support">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.7867749967145!2d-1.9196774237148206!3d34.68533058403652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd786522b2629bc7%3A0xae892dbc9b8b7453!2sSoft%20Cactus!5e0!3m2!1sfr!2sma!4v1669822933241!5m2!1sfr!2sma"
            width="100%"
            height="100%"
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>


    </div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script>


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontOffice.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SoftCactus\resources\views/frontOffice/contact.blade.php ENDPATH**/ ?>