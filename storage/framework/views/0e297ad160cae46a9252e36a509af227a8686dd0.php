<?php $__env->startSection('page_title' , trans('Show Users')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('Show users')); ?></h4> 
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
                                            <th><?php echo e(trans('Name')); ?></th>
 

                                            <th><?php echo e(trans('Photo')); ?></th>

                                            <th><?php echo e(trans('Email')); ?></th>

                                          <th><?php echo e(trans('Phone ')); ?></th>
                                          
                                            
                                            <th><?php echo e(trans('Add date')); ?></th>
                                            <th><?php echo e(trans('Status')); ?></th>
                                            <th class="text-nowrap"><?php echo e(trans('Action')); ?></th>
                                         
                                        </tr>
            </thead>
            <tbody>

            	<?php if($users->count()): ?>
            		  
            		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                                <?php echo e($user->Fname); ?> <?php echo e($user->Lname); ?>

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
                                    <span class="label label-danger"><?php echo e(trans('not_active')); ?></span>
                                <?php else: ?>
                                    <span class="label label-success"><?php echo e(trans('active')); ?></span>  
                                <?php endif; ?>
                            </td>

                            <td class="text-nowrap">
                             

                                <a  href="<?php echo e(route('user.edit' , $user->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            

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