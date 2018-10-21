<?php $__env->startSection('content'); ?>
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo e(url('img/bg-img/scouts.jpg')); ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Welcome &amp; to our Page</h2>
                                <p data-animation="fadeInUp" data-delay="400ms"></p>
                                <a href="<?php echo e(url('auth/login')); ?>" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Get a membership</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo e(url('img/bg-img/scouts.jpg')); ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Scout Recruitment</h2>
                                <p data-animation="fadeInUp" data-delay="400ms"></p>
                                <a href="<?php echo e(url('auth/login')); ?>" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Get a membership</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php echo e(url('img/bg-img/scouts.jpg')); ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Player Management</h2>
                                <p data-animation="fadeInUp" data-delay="400ms"></p>
                                <a href="<?php echo e(url('auth/login')); ?>" class="btn fitness-btn wel-btn" data-animation="fadeInUp" data-delay="700ms">Get a membership</a>s
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
    <!-- ##### Fitness Adds Area Start ##### -->
    <div class="fitness-adds-area">
        <div class="container">
            <div class="row">

                <!-- Single Add Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-add-area mt-100">
                        <a href="#"><img src="<?php echo e(asset('img/bg-img/add1.gif')); ?>" alt=""></a>
                    </div>
                </div>

                <!-- Single Add Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-add-area mt-100">
                        <a href="#"><img src="<?php echo e(asset('img/bg-img/add2.png')); ?>" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div><br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>