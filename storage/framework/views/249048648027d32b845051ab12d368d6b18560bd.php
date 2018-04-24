<?php $__env->startSection('page_title' , trans('backend.dashboard_module')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					 
                  



<?php $__env->stopSection(); ?>  
 <?php 

    $lang = LaravelLocalization::getCurrentLocale();

    $laguage = \App\Language::where(['label'=>$lang])->first();


    $language_id = $laguage->id ;




 ?>


<?php $__env->startSection('content'); ?>



<!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">

          <h1 class="mt-5">

            <?php if($lang == "en"): ?>

           Welcome To Dashboard =>  [ <?php echo e(Auth::user()->Fname); ?> ] 

           <?php elseif($lang == "ar"): ?>

           مرحبا بك في لوحه التحكم  [ <?php echo e(Auth::user()->Fname); ?> ] 


           <?php endif; ?> 

         </h1>
         


     
                 
           
        </div>
      </div>
    </div>
					
					 

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>