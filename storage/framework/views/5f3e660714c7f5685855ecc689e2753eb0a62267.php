<?php $__env->startSection('page_title' , trans('Show Tasks Reports')); ?>

<?php $__env->startSection('breadcrumb'); ?>


          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('Show Tasks Reports')); ?></h4>
                    </div>

                  



<?php $__env->stopSection(); ?>  



<?php $__env->startSection('content'); ?>
          
    <div class="col-sm-12">
    <div class="white-box">
    
    <div class="table-responsive">
        <table class="table   table-hover color-table table-bordered primary-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th><?php echo e(trans('task')); ?></th>

                    <th><?php echo e(trans('description')); ?></th>

                    <th class="text-nowrap"><?php echo e(trans('action')); ?></th>
                 
                </tr>
            </thead>
            <tbody>

              <?php if($reports->count()): ?>
                  
                <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                               <?php echo e($report->task->title); ?>

                            </td>
                             

                             <td>
                               <?php echo e($report->report); ?>

                            </td>

                            
                        <td class="text-nowrap">


                            <a onclick="$('.main_cat_<?php echo e($report->id); ?>').submit();" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>

                            <?php echo Form::open(['url'=>["deletetaskreports/$report->id" ] , 'class'=>"main_cat_$report->id" ]); ?>


                            <?php echo method_field('DELETE'); ?>

                            <?php echo Form::close(); ?>

                            
                        </td>
                                
                        </tr>
                       
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
            
            <tr>
              <td colspan="7" class="text-center"><?php echo e(trans('no messages')); ?></td>
            </tr>

                <?php endif; ?>
                
            </tbody>
        </table>
        <?php echo e($reports->links()); ?>

    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>