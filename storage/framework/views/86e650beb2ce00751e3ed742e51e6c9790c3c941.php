<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?php echo $__env->yieldContent('title','Sports and Recruiting System'); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('img/core-img/favicon.ico')); ?>">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>
<!-- ##### Preloader ##### -->
<div id="preloader">
    <i class="circle-preloader"></i>
</div>
<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <div class="fitness-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="fitnessNav">

                    <!-- Nav brand -->
                    <a href="<?php echo e(url('/home')); ?>" class="nav-brand"><img src="<?php echo e(asset('img/core-img/images.png')); ?> ></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>


                                <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(url('/blog')); ?>">News</a></li>
                                <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
                            </ul>

                            <!-- Call Button -->
                            <a href="#" class="fitness-btn menu-btn ml-30">Call: +254712345678</a>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<?php echo $__env->yieldContent('content'); ?>

<!-- Footer Widget Area -->
<div class="col-12 col-sm-6 col-lg-3">
    <div class="footer-widget-area mb-50">
        <div class="widget-title">
            <h6>Classes</h6>
        </div>

        <nav>
            <ul class="fitness-classes">
                <li><a href="#">Bodybuilding Class</a></li>
                <li><a href="#">Fitness Class</a></li>
                <li><a href="#">Yoga Courses</a></li>
                <li><a href="#">Dumbell Class</a></li>
                <li><a href="#">Spinning Class</a></li>
                <li><a href="#">Kangoo Jump Class</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- Footer Widget Area -->
<div class="col-12 col-sm-6 col-lg-3">
    <div class="footer-widget-area mb-50">
        <div class="widget-title">
            <h6>Contact</h6>
        </div>

        <!-- Single Contact -->
        <div class="single-contact mb-30">
            <span>Address:</span>
            <p>481 Creekside Lane Avila <br>Beach, CA 93424</p>
        </div>

        <!-- Single Contact -->
        <div class="single-contact mb-30">
            <span>Phone:</span>
            <p>+53 345 7953 32453</p>
        </div>

        <!-- Single Contact -->
        <div class="single-contact mb-30">
            <span>Email:</span>
            <p>yourmail@gmail.com</p>
        </div>

    </div>
</div>

</div>
</div>
</div>

<!-- Copywrite Area -->
<div class="bottom-footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </a></p>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo e(asset('js/jquery/jquery-2.2.4.min.js')); ?>"></script>
<!-- Popper js -->
<script src="<?php echo e(asset('js/bootstrap/popper.min.js')); ?>"></script>
<!-- Bootstrap js -->
<script src="<?php echo e(asset('js/bootstrap/bootstrap.min.js')); ?>"></script>
<!-- All Plugins js -->
<script src="<?php echo e(asset('js/plugins/plugins.js')); ?>"></script>
<!-- Active js -->
<script src="<?php echo e(asset('js/active.js')); ?>"></script>
<!-- Live Chat Code :: Start of Tawk.to Script -->
<script>
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5b55ea72df040c3e9e0bdf85/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!-- End of Tawk.to Script -->
</body>

</html>