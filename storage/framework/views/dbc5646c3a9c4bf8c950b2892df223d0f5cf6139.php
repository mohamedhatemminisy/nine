<?php $__env->startSection('page_title' , trans('social_media.social_media_module')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('social_media.social_media')); ?></h4> 
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
                    <th><?php echo e(trans('social_media.social_name')); ?></th>
                    <th><?php echo e(trans('social_media.social_status')); ?></th>               
                    <th><?php echo e(trans('social_media.social_date_added')); ?></th>
                    <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                 
                </tr>
            </thead>
            <tbody>

            	<?php if($social_media->count()): ?>
            		  
            		<?php $__currentLoopData = $social_media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                                <?php echo e($link->name); ?>

                            </td>
                             
                          
 


                             <td>
                                <?php if($link->status == 'not_active'): ?>
                                    <span class="label label-danger"><?php echo e(trans('backend.not_active')); ?></span>
                                <?php else: ?>
                                    <span class="label label-success"><?php echo e(trans('backend.active')); ?></span>  
                                <?php endif; ?>
                            </td>

                            

                           
                            <td><?php echo e(date('Y-m-d' , strtotime($link->created_at))); ?></td>
                            <td class="text-nowrap">


                              
                               

                               


                                <a  href="<?php echo e(route('social-media.edit' , $link->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.pharmaceutical_edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            

                                 <a onclick="$('.social_form_<?php echo e($link->id); ?>').submit();" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>




                                <?php echo Form::open(['route'=>["social-media.destroy" , $link->id ] , 'class'=>"social_form_$link->id" ]); ?>


                                    <?php echo method_field('DELETE'); ?>




                                <?php echo Form::close(); ?>

                                 
                            </td>
                                
                        </tr>
                       
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
    				
    				<tr>
    					<td colspan="7" class="text-center"><?php echo e(trans('social_media.social_count_zero')); ?></td>
    				</tr>

                <?php endif; ?>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>