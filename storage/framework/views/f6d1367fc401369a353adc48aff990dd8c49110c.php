<?php $__env->startSection('page_title' , trans('Show tasks')); ?>

<?php $__env->startSection('breadcrumb'); ?>


          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('Show tasks')); ?></h4>
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
                    <th><?php echo e(trans('title')); ?></th>

                    <th><?php echo e(trans('description')); ?></th>
                  
                    <th><?php echo e(trans('from')); ?></th>
                    <th><?php echo e(trans('to')); ?></th>
                    <th><?php echo e(trans('status')); ?></th>
                    <th><?php echo e(trans('task owner')); ?></th>
                    <th class="text-nowrap"><?php echo e(trans('action')); ?></th>
                 
                </tr>
            </thead>
            <tbody>

              <?php if($tasks->count()): ?>
                  
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                               <?php echo e($task->title); ?>

                            </td>
                             

                             <td>
                               <?php echo e($task->descripton); ?>

                            </td>

                            <td>
                               <?php echo e($task->from); ?>

                            </td>

                            <td>
                               <?php echo e($task->to); ?>

                            </td>

                             <td>
                                <?php if($task->status == 'waiting'): ?>
                                    <span class="label label-danger"><?php echo e(trans('waiting')); ?></span>
                                <?php else: ?>
                                    <span class="label label-success"><?php echo e(trans('compeleted')); ?></span>  
                                <?php endif; ?>
                            </td>
                            
                            <td><?php echo e($task->user->Fname); ?></td>
                        <td class="text-nowrap">


                            <a onclick="$('.main_cat_<?php echo e($task->id); ?>').submit();" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>

                            <?php echo Form::open(['url'=>["deletetask/$task->id" ] , 'class'=>"main_cat_$task->id" ]); ?>


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
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>