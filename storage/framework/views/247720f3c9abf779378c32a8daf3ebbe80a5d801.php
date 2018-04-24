


<?php $__env->startSection('content'); ?>

    <div class="banner">
        <div class="background about-banner">
        </div>
        <div class="container banner-content-wrapper">
            <div class="row">
                <div class="col-12 text-center logo-banner">
                    <img src="<?php echo e(asset('frontend/assets/img/logo-banner.png')); ?>" alt="">
                </div>
            </div>

        </div>
    </div>
 


    <div class="our-services our-history">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="our-history-title">Our history <span class="border-our-history"></span></h2>
                <p class="our-history-paragraph"><?php echo e($header->history); ?></p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-12 col-md-4 our-hist">
                    <h2><a href="#">Our Description</a></h2>
                    <p><?php echo e($header->description); ?></p>
                </div>
                <div class="col-sm-12 col-12 col-md-4 our-hist">
                    <img src="<?php echo e(asset('frontend/assets/img/car-our-histroy.png')); ?>" alt="">
                </div>
                <div class="col-sm-12 col-12 col-md-4 our-hist">
                    <h2><a href="#">Our Defination</a></h2>
                    <p><?php echo e($header->defination); ?> </p>
                </div>
            </div>
            <div class="col-12 text-center brands-slider">
                <h2>Brands</h2>
                <p>Some Featuered Brands</p>
            </div>
            <div class="col-10 col-sm-12 slider-brands">
                <div class="inner-slider-brands">
                	<?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset("uploads/brands/$brand->photo")); ?>" alt="">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <a href="#" class="arrow-brands arrow-brands-right"> <i class="fa fa-angle-right"></i></a>
                <a href="#" class="arrow-brands arrow-brands-left"> <i class="fa fa-angle-left"></i></a>
            </div>
        </div>
    </div>



        <div class="company-team our-history">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="our-history-title">Company Team<span class="border-our-history"></span></h2>
            </div>
            <div class="content-company-team">
                <div class="row">
                  <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6 col-12 company-team-card">
                        <div class="card">
                            <div class="img-top">
                                <img class="card-img-top" src="<?php echo e(asset("uploads/teams/$member->photo")); ?>" style="width: 335px;height: 260px;" alt="Card image cap">
                                <span class="slogan-img"><img src="<?php echo e(asset("uploads/teams/$member->photo")); ?>" alt=""></span>
                            </div>
                            <div class="card-body">
                                <h5><?php echo e($member->career); ?></h5>
                                <h2 class="card-title"><?php echo e($member->name); ?></h2>
                                <p class="card-text"><?php echo e($member->description); ?></p>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </div>
    </div>





 <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>