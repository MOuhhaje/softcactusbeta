
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo e(env('APP_NAME', 'Bio Hygiéne Services')); ?></title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/logo.png')); ?>">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/font-awesome.min.css')); ?>">

		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/style.css')); ?>">

    </head>
    <body>

		<?php echo e($slot); ?>


		<!-- jQuery -->
        <script src="<?php echo e(asset('admin/js/plugins/jquery/jquery.min.js')); ?>"></script>

		<!-- Bootstrap Core JS -->
        <script src="<?php echo e(asset('admin/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>"></script>

		<!-- Custom JS -->
		<script src="<?php echo e(asset('admin/js/script.js')); ?>"></script>

    </body>
</html>
<?php /**PATH /home/softcact/public_html/resources/views/layouts/app-layout.blade.php ENDPATH**/ ?>