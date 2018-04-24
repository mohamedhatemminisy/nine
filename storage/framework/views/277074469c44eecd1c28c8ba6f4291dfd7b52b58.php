<?php $__env->startSection('page_title' , trans('backend.evaluation')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.show_evaluations')); ?></h4>
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
                    <th><?php echo e(trans('backend.question')); ?></th>
                    <th><?php echo e(trans('backend.acitiy_photo')); ?></th>
                    <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                 
                </tr>
            </thead>
            <tbody>

                <?php if($evaluations->count()): ?>
                      
                    <?php $__currentLoopData = $evaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                               <?php echo e($evaluation->question); ?>

                            </td>
                             
                           <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 <?php if(count($evaluation->image) ): ?>
                            <?php echo e(asset("uploads/evaluation/$evaluation->image")); ?>

                            <?php endif; ?>" class="thumb-lg img-circle" alt="No Image Uploded"></a>
                            </td>

                            <td class="text-nowrap">

                               
                                <a  href="<?php echo e(route('evaluation.edit' , $evaluation->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                
                                <a href="<?php echo e(route('evaluation.show' , $evaluation->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.show')); ?>"> <i class="fa fa-info-circle text-inverse m-r-10"></i> </a>

                                     <a onclick="$('.evaluation_form_<?php echo e($evaluation->id); ?>').submit();"
                                      data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>">
                                       <i class="fa fa-close text-danger"></i> </a>

                                   <?php echo Form::open(['route'=>["evaluation.destroy" , $evaluation->id ] , 'class'=>"evaluation_form_$evaluation->id" ]); ?>


                                   <?php echo method_field('DELETE'); ?>


                                
                                   <?php echo Form::close(); ?>


                                 
                            </td>
                                
                        </tr>
                       
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    
                    <tr>
                        <td colspan="7" class="text-center"><?php echo e(trans('backend.evaluation_no_messages')); ?></td>
                    </tr>

                <?php endif; ?>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>