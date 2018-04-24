


<?php $__env->startSection('content'); ?>
  

    <div class="banner banner-inside-pages">
        <div class="banner-content-wrapper">
            <div id="carouselExampleIndicators" class="carousel slide slider-services" data-ride="carousel">
            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                   <?php 
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(1)->get();
                    ?>

                       <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img class="d-block w-100" src="<?php echo e(asset("uploads/services/$photo->name")); ?>" alt="First slide">
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                   <?php 
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(2)->skip(1)->get();
                    ?>

                        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="<?php echo e(asset("uploads/services/$photo->name")); ?>" alt="Second slide">
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="col-md-6 col-12 services-content">
                        <h2><?php echo e($serve->name); ?></h2>
                        <p><?php echo e($serve->description); ?>.</p>
                        <a href="#">Get Service</a>
                        <div class="clearfix"></div>
                        <div class="controll-slider">
                            <ol class="carousel-indicators">
                   <?php 
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(1)->get();
                    ?>
                          <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                    <img class="d-block w-100" src="<?php echo e(asset("uploads/services/$photo->name")); ?>" alt="First slide">
                                </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <?php 
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(1)->skip(1)->get();
                    ?>
                          <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                    <img class="d-block w-100" src="<?php echo e(asset("uploads/services/$photo->name")); ?>" alt="First slide">
                                </li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   <?php 
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(1)->skip(2)->get();
                    ?>
                           <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                    <img class="d-block w-100" src="<?php echo e(asset("uploads/services/$photo->name")); ?>" alt="First slide">
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ol>
                        </div>
                        
                    </div>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>





    <div class="our-services">
        <div class="container">
            <div class="row">

            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-12 col-md-4 our-serv">
               <?php 
               $photos = App\ServiceImage::where('service_id',$service->id)->take(1)->get();
                ?>
                  <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset("uploads/services/$photo->name")); ?>" alt="">
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h2><a href="#"><?php echo e($service->name); ?></a></h2>
                    <p><?php echo e($service->description); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </div>
	
	


   
    <div class="contact-form" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form">
                        <h3>Contact us</h3>
                        <?php echo Form::open(['route'=>['visitorsMessages.store'],'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'add_company']); ?>

                            <label for="Name">Full Name</label>
                            <input type="text" name="name" id="Name" class="form-control" required="required">

                            <label for="Email">Email</label>
                            <input type="email" name="email" id="Email" class="form-control" required="required">

                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required="required">

                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" required="required"></textarea>
                            <input type="submit" value="Submit" class="submit-contact-form">
                        </form>
                    </div>

                </div>
                <div class="col-12 col-lg-6 information-contact">
                    <img src="<?php echo e(asset('frontend/assets/img/logo.png')); ?>" alt="">
                    <h3>About Us</h3>
                    <p><?php echo e($header->about); ?></p>
                </div>
            </div>
        </div>
    </div>
  

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>