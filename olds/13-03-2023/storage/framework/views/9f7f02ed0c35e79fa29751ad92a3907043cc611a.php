<?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
<?php $__env->startSection('menu-mobile'); ?>
    <li>
        <a href="<?php echo e(route('welcome.lang',$lang->name_langue)); ?>">Home</a>
    </li>
    <li>
        <a href="<?php echo e(route('welcome.lang',$lang->name_langue).'#ourwork'); ?>">Our Work</a>
    </li>
    <li>
        <a href="<?php echo e(route('about.lang',$lang->name_langue)); ?>">About</a>
    </li>
    <li>
        <a href="<?php echo e(route('blog',$lang->name_langue)); ?>">Blog</a>
    </li>
    <li>
        <a href="<?php echo e(route('contact.showbylang',$lang->name_langue)); ?>">Contact</a>
    </li>
<?php $__env->stopSection(); ?>
<?php else: ?>
<?php $__env->startSection('menu-mobile'); ?>
    <li>
        
        <a href="<?php echo e(route('welcome.lang',$lang->name_langue)); ?>" style="font-size: 23px;font-weight: 600">Accueil</a>

    </li>
    <li>
        <a href="<?php echo e(route('welcome.lang',$lang->name_langue).'#ourwork'); ?>" style="font-size: 23px;font-weight: 600">Nos services</a>
    </li>
    <li>
        <a href="<?php echo e(route('about.lang',$lang->name_langue)); ?>" style="font-size: 23px;font-weight: 600">À propos</a>
    </li>
    <li>
        <a href="<?php echo e(route('blog',$lang->name_langue)); ?>" style="font-size: 23px;font-weight: 600">Blog</a>
    </li>
    <li>
        <a href="<?php echo e(route('contact.showbylang',$lang->name_langue)); ?>" style="font-size: 23px;font-weight: 600">Contact</a>
    </li>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?>
<?php $__env->startSection('menu'); ?>
    <li>
        <a href="<?php echo e(route('welcome.lang',$lang->name_langue).'#ourwork'); ?>">Our Work</a>
    </li>
    <li>
        <a href="<?php echo e(route('about.lang',$lang->name_langue)); ?>">About</a>
    </li>
    <li class="logoMenu">
        <a href="<?php echo e(route('welcome.lang',$lang->name_langue)); ?>">
            <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="softCactus" loading="lazy" >
        </a>
    </li>
    <li>
        <a href="<?php echo e(route('blog',$lang->name_langue)); ?>">Blog</a>
    </li>
    <li>
        <a href="<?php echo e(route('contact.showbylang',$lang->name_langue)); ?>">Contact</a>
    </li>
<?php $__env->stopSection(); ?>
<?php else: ?>
<?php $__env->startSection('menu'); ?>
    <li>
        <a href="<?php echo e(route('welcome.lang',$lang->name_langue).'#ourwork'); ?>">Nos services</a>
    </li>
    <li>
        <a href="<?php echo e(route('about.lang',$lang->name_langue)); ?>">À propos</a>
    </li>
    <li class="logoMenu">
        <a href="<?php echo e(route('welcome.lang',$lang->name_langue)); ?>">
            <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="softCactus" loading="lazy">
        </a>
    </li>
    <li>
        <a href="<?php echo e(route('blog',$lang->name_langue)); ?>">Blog</a>
    </li>
    <li>
        <a href="<?php echo e(route('contact.showbylang',$lang->name_langue)); ?>">Contact</a>
    </li>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php if($lang->name_langue == 'EN' || $lang->name_langue == 'en' || $lang->name_langue == 'En' || $lang->name_langue == 'eN'): ?> <?php $__env->startSection('link_home'); ?> href="<?php echo e(route('welcome.lang', $lang->name_langue)); ?>" <?php $__env->stopSection(); ?>
<?php else: ?>  <?php $__env->startSection('link_home'); ?> href="<?php echo e(route('welcome.lang', $lang->name_langue)); ?>" <?php $__env->stopSection(); ?>    <?php endif; ?>
<?php /**PATH /home/softcact/public_html/resources/views/component/urls.blade.php ENDPATH**/ ?>