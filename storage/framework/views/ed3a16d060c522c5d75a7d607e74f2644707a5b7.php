<?php $__env->startSection('page_title' , trans('visitorsMessages.visitors_messages')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('visitorsMessages.visitors_messages')); ?></h4>
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
                    <th><?php echo e(trans('visitorsMessages.name')); ?></th>

                    <th><?php echo e(trans('visitorsMessages.subject')); ?></th>
                    <th><?php echo e(trans('visitorsMessages.email')); ?></th>
                  
                    <th><?php echo e(trans('visitorsMessages.message')); ?></th>
                    <th><?php echo e(trans('backend.date_added')); ?></th>
                    <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                 
                </tr>
            </thead>
            <tbody>

            	<?php if($visitorsMessages->count()): ?>
            		  
            		<?php $__currentLoopData = $visitorsMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitorsMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                               <?php echo e($visitorsMessage->name); ?>

                            </td>
                             

                             <td>
                               <?php echo e($visitorsMessage->subject); ?>

                            </td>

                            <td>
                               <?php echo e($visitorsMessage->email); ?>

                            </td>

                            <td>
                              <?php echo e($visitorsMessage->description); ?>

                            </td>
                           
                            <td><?php echo e(date('Y-m-d' , strtotime($visitorsMessage->created_at))); ?></td>
                            <td class="text-nowrap">
                               

                                <a  href="<?php echo e(route('visitorsMessages.show' , $visitorsMessage->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('visitorsMessages.show_message')); ?>"> <i class="fa fa-info-circle text-inverse m-r-10"></i> </a>


                                 <a onclick="$('.visitorsMessages_form_<?php echo e($visitorsMessage->id); ?>').submit();" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>




                                <?php echo Form::open(['route'=>["visitorsMessages.destroy" , $visitorsMessage->id ] , 'class'=>"visitorsMessages_form_$visitorsMessage->id" ]); ?>


                                    <?php echo method_field('DELETE'); ?>




                                <?php echo Form::close(); ?>

                                 
                            </td>
                                
                        </tr>
                       
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
    				
    				<tr>
    					<td colspan="7" class="text-center"><?php echo e(trans('visitorsMessages.no_messages')); ?></td>
    				</tr>

                <?php endif; ?>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>