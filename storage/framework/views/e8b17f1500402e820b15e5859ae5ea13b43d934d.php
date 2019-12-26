<?php $__env->startSection('content'); ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Forms - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="icon" href="<?php echo e(url('public/assets/img/icon.ico')); ?>" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="<?php echo e(url('public/assets/js/plugin/webfont/webfont.min.js')); ?> "></script>
    <script>
        WebFont.load({
            google: {"families": ["Lato:300,400,700,900"]},
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['public/assets/css/fonts.min.css']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo e(url('public/assets/css/bootstrap.min.css')); ?> ">
    <link rel="stylesheet" href="<?php echo e(url('public/assets/css/atlantis.min.css')); ?> ">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?php echo e(url('public/assets/css/demo.css')); ?>">
</head>
<body data-background-color="dark">
<div class="wrapper sidebar_minimize">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark2">

            <a href="index.html" class="logo">
                <img src=" <?php echo e(url('public/assets/img/logo.svg')); ?>" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
            <div class="container-fluid">


            </div>
        </nav>
        <!-- End Navbar -->
    </div>
    <!-- Sidebar -->

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Form Elements</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">

                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <form method="POST" action="<?php echo e(route('login')); ?>">
                                            <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="email2">Email Address</label>
                                            <input input id="email"
                                                   type="email"
                                                   class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                                   name="email" value="<?php echo e(old('email')); ?>" required autofocus
                                                   placeholder="Enter Email">
                                            <small id="emailHelp2" class="form-text text-muted">We'll never share your
                                                email with anyone else.</small>
                                        </div>
                                        <div class="form-group">

                                            <label for="password">Password</label>
                                            <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">Agree with terms and conditions</span>
                                            </label>
                                        </div>
                                        <div class="card-action">

                                            <button type="submit" class="btn btn-success">
                                                <?php echo e(__('Login')); ?>

                                            </button>

                                        </div>
                                        </form>
                                    </div>

                                    <div class="col-6 col-sm-4">
                                    </div>
                                    <div class="col-md-6 col-lg-4">


                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

        <!-- Custom template | don't include it in your project! -->

        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo e(url('public/assets/js/core/jquery.3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(url('public/assets/js/core/popper.min.js')); ?> "></script>
    <script src="<?php echo e(url('public/assets/js/core/bootstrap.min.js')); ?>"></script>
    <!-- jQuery UI -->
    <script src=" <?php echo e(url('public/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?> "></script>

    <script src="<?php echo e(url('public/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?php echo e(url('public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?>"></script>
    <!-- Atlantis JS -->
    <script src="<?php echo e(url('public/assets/js/atlantis.min.js')); ?>"></script>
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="<?php echo e(url('public/assets/js/setting-demo2.js')); ?>"></script>
</body>
</html>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sellnews-php-2/Development/practicals/pms.local/resources/views/auth/login.blade.php ENDPATH**/ ?>