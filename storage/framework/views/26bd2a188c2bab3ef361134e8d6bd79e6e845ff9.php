

<?php $__env->startSection('page_title' , trans('Dashboard')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					 
                  



<?php $__env->stopSection(); ?>  



<?php $__env->startSection('content'); ?>



<!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">

          <h1 class="mt-5">
           Welcome To NINETY NINE Dashboard    
         </h1>

        </div>
      </div>
    </div>
					
					 

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>