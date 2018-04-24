
  
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h2>Description</h2>
                    <p><?php echo e($header ->description); ?></p>
                    <div class="row">
                        <div class="col-md-6 col-12 map-footer"><img src="<?php echo e(asset('frontend/assets/img/Image 1.png')); ?>" alt=""></div>
                        <div class="col-md-6 col-12 social-footer">
                            <a href="/">
                                <img src="<?php echo e(asset('frontend/assets/img/logo.png')); ?>" alt="">
                            </a>
                            <a href="<?php echo e($header ->Facebook); ?>" target="_blank" class="social-top mar-left"><i class="fa fa-facebook fa-fw"></i></a>
                            <a href="<?php echo e($header ->twiter); ?>" target="_blank" class="social-top"><i class="fa fa-twitter fa-fw"></i></a>
                            <a href="<?php echo e($header ->instgram); ?>" target="_blank" class="social-top"><i class="fa fa-instagram fa-fw"></i></a>
                            <a href="<?php echo e($header ->google_plus); ?>" target="_blank" class="social-top"><i class="fa fa-google-plus fa-fw"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 info-address">
                    <div class="col-12">
                        <h3>
                            <span><i class="fa fa-map-marker"></i></span>
                            Head Office
                        </h3>
                        <p><?php echo e($header ->offic_one); ?></p>
                    </div>
                    <div class="col-12">
                        <h3>
                            <span><i class="fa fa-map-marker"></i></span>
                            Head Office
                        </h3>
                        <p><?php echo e($header ->offic_two); ?></p>
                    </div>
                    <div class="col-12">
                        <h3>
                            <span><i class="fa fa-envelope-o"></i></span>
                            Email
                        </h3>
                        <p><?php echo e($header ->email); ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="social-banner">
            <a href="<?php echo e($header->Facebook); ?>" class="facebook-banner" target="_blank" data-text="Facebook"><i class="fa fa-facebook fa-fw"></i></a>
            <a href="<?php echo e($header->twiter); ?>" class="twitter-banner" target="_blank" data-text="Twitter"><i class="fa fa-twitter fa-fw"></i></a>
            <a href="<?php echo e($header->instgram); ?>" class="instegram-banner" target="_blank" data-text="Instegram"><i class="fa fa-instagram fa-fw"></i></a>
            <a href="<?php echo e($header->google_plus); ?>" class="google-plus-banner" target="_blank" data-text="Google Plus"><i class="fa fa-google-plus fa-fw"></i></a>
    </div>
         <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo e(asset('frontend/assets/js/jquery.min.js')); ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo e(asset('frontend/assets/js/jquery.min.js')); ?>" type="text/javascript"></script>
        <script src="<?php echo e(asset('frontend/assets/js/popper.min.js')); ?>" type="text/javascript"></script>
      <script src="<?php echo e(asset('frontend/assets/js/bootstrap.min.js')); ?>"></script>
      <script src="<?php echo e(asset('frontend/assets/js/slick.js')); ?>"></script>
      <script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>
    
    </body>
</html>