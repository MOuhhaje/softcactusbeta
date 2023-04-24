<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title><?php echo e(env('APP_NAME', 'Bio Hygiéne Services')); ?></title>

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/logo.png')); ?>">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <link rel="stylesheet" href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/datatables/jquery.dataTables.css')); ?>">

        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/font-awesome.min.css')); ?>">

        <!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/feathericon.min.css')); ?>">

        <!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('admin/css/sweetalert.css')); ?>">

            <?php echo $__env->yieldContent('head'); ?>
    </head>
    <body>

        <!-- Main Wrapper -->
        <div class="main-wrapper">

            <!-- Header -->
            <div class="header">

                <!-- Logo -->
                <div class="header-left">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="logo">
                        <img src="<?php echo e(asset('assets/img/logo-complet.png')); ?>" alt="Logo">
                    </a>
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="logo logo-small">
                        <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="Logo">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Mobile Menu Toggle -->
                <a class="mobile_btn" id="mobile_btn">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- /Mobile Menu Toggle -->

                <!-- Header Right Menu -->
                <ul class="nav user-menu">
                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="user-img">
                                Soft Cactus
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="user-header">
                                <div class="user-text">
                                    <h6>Soft Cactus</h6>
                                    
                                </div>
                            </div>
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>

                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"> Logout</a>
                            </form>
                        </div>
                    </li>
                    <!-- /User Menu -->
                </ul>
                <!-- /Header Right Menu -->

            </div>
            <!-- /Header -->

           <!-- Sidebar -->
           <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        
                        <li class="dashboard">
                            <a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fe fe-home"></i> <span style="font-size: 12px">Tableau de bord</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript::void(0)"><img src="<?php echo e(asset('admin/img/activities.svg')); ?>" width="20px">
                                <span style="font-size: 12px" style="font-size: small;padding-top: 5px">Gestion de la page cariére</span>
                                <span style="font-size: 12px" class="menu-arrow small"></span>
                            </a>
                            <ul style="display: none;" class="gestionCareer">
                                
                                    <li class="gestionOffre"><a href="<?php echo e(route('admin.offre')); ?>"><span style="font-size: 12px" style="font-size: small;padding-top: 5px">Gestion des offres</span></a></li>
                                    <li class="gestionCandidature"><a href="<?php echo e(route('admin.candidature')); ?>"><span style="font-size: 12px" style="font-size: small;padding-top: 5px">Gestion des candidatures</span></a></li>
                            </ul>
                        </li>
                        <li class="gestionTeam">
                            <a href="<?php echo e(route('admin.member')); ?>"><img src="<?php echo e(asset('admin/img/references.svg')); ?>" width="20px">  <span style="font-size: 12px">Gestion de la team</span></a>
                        </li>
                        <li class="gestionClient">
                            <a href="<?php echo e(route('admin.client')); ?>"><img src="<?php echo e(asset('admin/img/references.svg')); ?>" width="20px">  <span style="font-size: 12px">Gestion des clients</span></a>
                        </li>
                        <li class="gestionService">
                            <a href="<?php echo e(route('admin.service')); ?>"><img src="<?php echo e(asset('admin/img/references.svg')); ?>" width="20px">  <span style="font-size: 12px">Gestion des services</span></a>
                        </li>
                        <li class="gestionHomepage">
                            <a href="<?php echo e(route('admin.homepage')); ?>"><img src="<?php echo e(asset('admin/img/references.svg')); ?>" width="20px">  <span style="font-size: 12px">Gestion de home page</span></a>
                        </li>
                        <li class="gestionReferences">
                            <a href="<?php echo e(route('admin.reference')); ?>"><img src="<?php echo e(asset('admin/img/references.svg')); ?>" width="20px">  <span style="font-size: 12px">Gestion des références</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript::void(0)"><img src="<?php echo e(asset('admin/img/references.svg')); ?>" width="20px">
                                <span style="font-size: 12px">Gestion des blogs</span>
                                <span style="font-size: 12px" class="menu-arrow small"></span>
                            </a>
                            

                            <ul style="display: none;" class="gestionBlog">
                                
                                    <li class="gestionBlog1"><a href="<?php echo e(route('admin.blog.show',1)); ?>"><span style="font-size: 12px" style="font-size: small;padding-top: 5px">Gestion des actualités</span></a></li>
                                    <li class="gestionBlog2"><a href="<?php echo e(route('admin.blog.show',2)); ?>"><span style="font-size: 12px" style="font-size: small;padding-top: 5px">Gestion des protips</span></a></li>
                                    <li class="gestionBlog3"><a href="<?php echo e(route('admin.blog.show',3)); ?>"><span style="font-size: 12px" style="font-size: small;padding-top: 5px">Gestion des idées</span></a></li>
                            </ul>
                        </li>
                        <li class="gestionAbout">
                            <a href="<?php echo e(route('admin.about')); ?>"><img src="<?php echo e(asset('admin/img/references.svg')); ?>" width="20px"><span style="font-size: 11px">Gestion de page Qui somme-nous</span></a>
                        </li>
                        <li class="contacts">
                            <a href="<?php echo e(route('admin.contact')); ?>"><img src="<?php echo e(asset('admin/img/demandes.svg')); ?>" width="20px">  <span style="font-size: 12px">Gestion des demandes</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
                    <?php echo e($slot); ?>

                </div>
            </div>
            <!-- /Page Wrapper -->

        </div>
        <!-- /Main Wrapper -->

        <!-- jQuery -->
        <script src="<?php echo e(asset('admin/js/plugins/jquery/jquery.min.js')); ?>"></script>

        <!-- Bootstrap Core JS -->
        <script src="<?php echo e(asset('admin/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/plugins/datatables/jquery.dataTables.js')); ?>"></script>

        <!-- Slimscroll JS -->
        <script src="<?php echo e(asset('admin/js/plugins/slimsroll/jquery.slimscroll.min.js')); ?>"></script>

        <!-- Custom JS -->
        <script  src="<?php echo e(asset('admin/js/script.js')); ?>"></script>
        <script src="<?php echo e(asset('admin/js/sweetalert.min.js')); ?>"></script>

        <?php echo $__env->yieldContent('script'); ?>

    </body>
</html>
<?php /**PATH /home/softcact/public_html/resources/views/layouts/admin-layout.blade.php ENDPATH**/ ?>