<?php $__env->startSection('page_title' , trans('backend.user_module')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.user_module')); ?></h4> 
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
                                            <th><?php echo e(trans('backend.user_head_person')); ?></th>
                                            <th><?php echo e(trans('backend.user_photo')); ?></th>

                                            <th><?php echo e(trans('backend.user_email')); ?></th>

                                          <th><?php echo e(trans('backend.user_mobile_number')); ?></th>

                                          
                                            
                                            <th><?php echo e(trans('backend.user_added_date')); ?></th>
                                            <th><?php echo e(trans('backend.status')); ?></th>
                                            <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                                         
                                        </tr>
            </thead>
            <tbody>

            	<?php if($users->count()): ?>
            		  
            		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                                <?php echo e($user->Fname); ?>

                            </td>
                            <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 <?php if(count($user->profileImage) ): ?>
                            <?php echo e(asset("uploads/users/$user->profileImage")); ?>

                            <?php endif; ?>" class="thumb-lg img-circle" alt="No Image Uploded"></a>
                            </td>
                             
                           <td>

                                <?php echo e($user->email); ?>

                            </td>
                            
                              <td>
                                <?php echo e($user->phoneNumber); ?>

                            </td>
                           
                            <td><?php echo e(date('Y-m-d' , strtotime($user->created_at))); ?></td>


                             <td>
                                <?php if($user->isActive == 'not_active'): ?>
                                    <span class="label label-danger"><?php echo e(trans('backend.not_active')); ?></span>
                                <?php else: ?>
                                    <span class="label label-success"><?php echo e(trans('backend.active')); ?></span>  
                                <?php endif; ?>
                            </td>

                            <td class="text-nowrap">
                             

                                <a  href="<?php echo e(route('user.edit' , $user->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.pharmaceutical_edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            

                                 <a onclick="$('.social_form_<?php echo e($user->id); ?>').submit();" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>




                                <?php echo Form::open(['route'=>["user.destroy" , $user->id ] , 'class'=>"social_form_$user->id" ]); ?>


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