<!DOCTYPE html>



<!-- You Are So Fucking Nightmare --> 

<?php   $lang = LaravelLocalization::getCurrentLocale();   ?> 



<html lang="<?php echo e($lang); ?>" dir="<?php echo $lang == 'ar' ? 'rtl':'ltr'; ?>">

 
<head>



    




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('backend/assets/fav.png')); ?>">



    <title><?php echo $__env->yieldContent('page_title'); ?></title>

 
     
    

    <?php if($lang == "ar"): ?>

            <!-- needed for RTL --> 

           <?php echo e(Html::style('backend/assets/plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css')); ?>


    <?php else: ?>
        
            <!-- needed for LTR  -->        
           <?php echo e(Html::style('backend/assets/bootstrap/dist/css/bootstrap.min.css')); ?>

   
           <?php echo e(Html::style('backend/assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')); ?>


    <?php endif; ?>



    <!-- jGrid Tables --> 

   
      <?php echo e(Html::style('backend/assets/plugins/bower_components/jsgrid/dist/jsgrid.min.css')); ?>

   
      <?php echo e(Html::style('backend/assets/plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css')); ?>



    <!-- Switchery --> 
       
         <?php echo e(Html::style('backend/assets/plugins/bower_components/switchery/dist/switchery.min.css')); ?>



    <!-- dropfy --> 
      
     <?php echo e(Html::style('backend/assets/plugins/bower_components/dropify/dist/css/dropify.min.css')); ?>




     <!-- Sweet Alert --> 
     <?php echo e(Html::style('backend/assets/plugins/bower_components/sweetalert/sweetalert.css')); ?>

    




     <!-- summer note  --> 
      <!-- summernotes CSS -->
 
    <?php echo e(Html::style('backend/assets/plugins/bower_components/summernote/dist/summernote.css')); ?>

    

    <!-- Drop zone css --> 
   
    <?php echo e(Html::style('backend/assets/plugins/bower_components/dropzone-master/dist/dropzone.css')); ?>



    <!-- Owl Careousel --> 
    <!--My admin Custom CSS -->
  
    <?php echo e(Html::style('backend/assets/plugins/bower_components/owl.carousel/owl.carousel.min.css')); ?>

 
    <?php echo e(Html::style('backend/assets/plugins/bower_components/owl.carousel/owl.theme.default.css')); ?>




    <!-- custom selects and plus --> 

   
     <?php echo e(Html::style('backend/assets/plugins/bower_components/custom-select/custom-select.css')); ?>

 
     <?php echo e(Html::style('backend/assets/plugins/bower_components/switchery/dist/switchery.min.css')); ?>

    
     <?php echo e(Html::style('backend/assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css')); ?>

    
     <?php echo e(Html::style('backend/assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>

  
     <?php echo e(Html::style('backend/assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')); ?>


    <!-- light box --> 
   
    <?php echo e(Html::style('backend/assets/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css')); ?>


    <!-- Bootstrap Select --> 
   
     <?php echo e(Html::style('backend/assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css')); ?>

  
    <?php echo e(Html::style('backend/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')); ?>

    
    <?php echo e(Html::style('backend/assets/plugins/bower_components/toast-master/css/jquery.toast.css')); ?>

    
    <?php echo e(Html::style('backend/assets/plugins/bower_components/morrisjs/morris.css')); ?>

   
    <?php echo e(Html::style('backend/assets/css/animate.css')); ?>



    <?php echo e(Html::style('backend/assets/css/spinners.css')); ?>

  
    <?php echo e(Html::style("backend/assets/css/style-$lang.css")); ?>

 
    <?php echo e(Html::style('backend/assets/css/colors/blue.css')); ?>


   <link href="<?php echo e(Request::root()); ?>/backend/assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />



    <?php echo $__env->yieldContent('styles'); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">



        