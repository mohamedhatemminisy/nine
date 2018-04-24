<?php $__env->startSection('page_title' , trans('advert.advert_type')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('advert.show_advert_types')); ?></h4> 
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
                                           
                                            <th><?php echo e(trans('advert.type_name_en')); ?></th>
                                            <th><?php echo e(trans('advert.type_name_ar')); ?></th>
                                            <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                                         
                                        </tr>
            </thead>

                                      <tbody>

                                    	<?php if($type->count()): ?>
                                    		<?php  $counter = 1 ;  ?> 
                                    		<?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
		                                        <tr>
		                                            <td><?php echo e($counter); ?></td>
		                                                  
                                                       <td> <?php echo e($ty->name_en); ?>  </td>
                                                      
                                                        <td> <?php echo e($ty->name_ar); ?>  </td>                   


		                   
		                            <td class=“text-nowrap”>
                                 
                                   <a  href="<?php echo e(route('advType.edit' , $ty->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                 


                                     <a onclick="$('.type_form_<?php echo e($ty->id); ?>').submit();"
                                      data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>">
                                       <i class="fa fa-close text-danger"></i> </a>

                                   <?php echo Form::open(['route'=>["advType.destroy" , $ty->id ] , 'class'=>"type_form_$ty->id" ]); ?>


                                   <?php echo method_field('DELETE'); ?>


                                
                                   <?php echo Form::close(); ?>


                               </td>
		                                        </tr>
		                                        <?php  $counter++ ;  ?> 
		                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
											
											<tr>
												<td colspan="6" class="text-center"><?php echo e(trans('advert.advert_count_zero')); ?></td>
											</tr>

                                        <?php endif; ?>
                                        
                                    </tbody>

        </table>
    </div>
    </div>
    </div>



<?php $__env->stopSection(); ?> 


<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>