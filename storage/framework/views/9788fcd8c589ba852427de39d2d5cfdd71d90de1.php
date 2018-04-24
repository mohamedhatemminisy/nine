<?php $__env->startSection('page_title' , trans('backend.advices')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.advices')); ?></h4> 
                    </div>     
<?php $__env->stopSection(); ?>  



<?php $__env->startSection('content'); ?>
					
									  <div class="col-sm-12">
                        <div class="white-box">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover color-table primary-table">
                                    <thead>
                                                  <tr>
                                            <th><?php echo e(trans('backend.advice_like')); ?></th>
                                            <th><?php echo e(trans('backend.advice_views')); ?></th>
                                            <th><?php echo e(trans('backend.advice_shares')); ?></th>
                                           
                                         
                                        </tr>

                                    </thead>
   
                                        <tr>
                                                       <td> <?php echo e($likes); ?> </td>
                                                       <td> <?php echo e($views); ?> </td>
                                                       <td> <?php echo e($shares); ?> </td>

                                        </tr>

                                </table>
                            </div>
                        </div>
                    </div>


<?php $__env->stopSection(); ?> 



<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>