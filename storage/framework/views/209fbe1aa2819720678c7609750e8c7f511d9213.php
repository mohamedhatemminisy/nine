<?php $__env->startSection('page_title' , trans('child.child_answers')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('child.show_child_answers')); ?></h4>
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
                    <th><?php echo e(trans('child.child_name')); ?></th>
                    <th><?php echo e(trans('child.question')); ?></th>
                    <th><?php echo e(trans('child.answer')); ?></th>
                    <th><?php echo e(trans('child.senice')); ?></th>
                    <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                 
                </tr>
            </thead>
            <tbody>

            	<?php if($evaluations->count()): ?>
            		  
            		<?php $__currentLoopData = $evaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                               <?php echo e($evaluation->child->name); ?> 
                            </td>
                             

                             <td>
                             	<?php echo e($evaluation->question->question); ?> 
                            </td>

                            <td>
                            	<?php echo e($evaluation->answer->name); ?> 
                            </td>
                             <td class="text-right">  <?php echo e(Carbon\Carbon::parse("$evaluation->created_at")->diffForHumans()); ?></td>
                            <td class="text-nowrap">
                               
                            
                                     <a onclick="$('.message_form_<?php echo e($evaluation->id); ?>').submit();"
                                      data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>">
                                       <i class="fa fa-close text-danger"></i> </a>

                                   <?php echo Form::open(['route'=>["evaluation_answers.destroy" , $evaluation->id ] , 'class'=>"message_form_$evaluation->id" ]); ?>


                                   <?php echo method_field('DELETE'); ?>


                                
                                   <?php echo Form::close(); ?>


                                 
                            </td>
                                
                        </tr>
                       
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
    				
    				<tr>
    					<td colspan="7" class="text-center"><?php echo e(trans('child.evaluation_no_messages')); ?></td>
    				</tr>

                <?php endif; ?>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>