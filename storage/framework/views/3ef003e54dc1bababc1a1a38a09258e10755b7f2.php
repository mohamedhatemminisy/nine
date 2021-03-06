<?php $__env->startSection('page_title' , trans('about.mission')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('about.show_missions')); ?></h4> 
                    </div>

                  



<?php $__env->stopSection(); ?>  



<?php $__env->startSection('content'); ?>


<div class="col-sm-12">
    <div class="white-box">
    
    <div class="table-responsive">
        <table class="table   table-hover table-bordered color-table primary-table">
            <thead>
                                      <tr>
                                            <th>#</th>
                                           
                                            
                                            <th><?php echo e(trans('about.mission')); ?></th>
                                            <th><?php echo e(trans('about.picture')); ?></th>
                                            <th><?php echo e(trans('backend.status')); ?></th>
                                            <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                                         
                                        </tr>
            </thead>

                                      <tbody>

                                    	<?php if($missions->count()): ?>
                                    		<?php  $counter = 1 ;  ?> 
                                    		<?php $__currentLoopData = $missions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
		                                        <tr>
		                                            <td><?php echo e($counter); ?></td>
		                                                  
                                                       <td>   <?php $__currentLoopData = $mission->description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $description): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($description->mission); ?></br><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </td>
                   
                                                            <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 <?php if(count($mission->Photo) ): ?>
                            <?php echo e(asset("uploads/mission/$mission->Photo")); ?>

                            <?php endif; ?>" class="thumb-lg img-circle" alt="No Image Uploded"></a>
                            </td>                                                                                        
                                                
                               <td>
                                <?php if($mission->status == 'not_active'): ?>
                                    <span class="label label-danger"><?php echo e(trans('backend.not_active')); ?></span>
                                <?php else: ?>
                                    <span class="label label-success"><?php echo e(trans('backend.active')); ?></span>  
                                <?php endif; ?>
                            </td>
		                   
		                            <td class=“text-nowrap”>
                                 
                                   <a  href="<?php echo e(route('mission.edit' , $mission->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                 


                                     <a onclick="$('.mission_form_<?php echo e($mission->id); ?>').submit();"
                                      data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>">
                                       <i class="fa fa-close text-danger"></i> </a>

                                   <?php echo Form::open(['route'=>["mission.destroy" , $mission->id ] , 'class'=>"mission_form_$mission->id" ]); ?>


                                   <?php echo method_field('DELETE'); ?>


                                
                                   <?php echo Form::close(); ?>


                               </td>
		                                        </tr>
		                                        <?php  $counter++ ;  ?> 
		                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
											
											<tr>
												<td colspan="6" class="text-center"><?php echo e(trans('about.mission_count_zero')); ?></td>
											</tr>

                                        <?php endif; ?>
                                        
                                    </tbody>

        </table>
    </div>
    </div>
    </div>


<?php $__env->stopSection(); ?> 

<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>