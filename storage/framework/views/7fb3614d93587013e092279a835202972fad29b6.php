<?php $__env->startSection('page_title' , trans('about.mission')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('about.edit_missions')); ?></h4> 
                    </div>

                  



<?php $__env->stopSection(); ?>  





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>