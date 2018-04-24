<?php $__env->startSection('page_title' , trans('backend.language_module')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.language_module')); ?></h4> 
                    </div>

                  



<?php $__env->stopSection(); ?>  



<?php $__env->startSection('content'); ?>
					
					  <div class="col-sm-12">
                        <div class="white-box">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover color-table primary-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo e(trans('backend.language_name')); ?></th>
                                            <th><?php echo e(trans('backend.language_status')); ?></th>
                                            <th><?php echo e(trans('backend.language_label')); ?></th>
                                            <th><?php echo e(trans('backend.language_added_date')); ?></th>
                                            <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php if($languages->count()): ?>
                                    		<?php  $counter = 1 ;  ?> 
                                    		<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                                        <tr>
		                                            <td><?php echo e($counter); ?></td>
		                                            <td><?php echo e($language->name); ?></td>
		                                             
		                                            <td>
		                                            	<?php if($language->status == '0'): ?>
															<span class="label label-danger"><?php echo e(trans('backend.not_active')); ?></span>
		                                            	<?php else: ?>
															<span class="label label-success"><?php echo e(trans('backend.active')); ?></span>	
		                                            	<?php endif; ?>
		                                            </td>
		                                            <td><?php echo e($language->label); ?></td>
		                                            <td><?php echo e(date('Y-m-d' , strtotime($language->created_at))); ?></td>
		                                            <td class="text-nowrap">
		                                                <a href="<?php echo e(route('language.edit' , $language->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
		                                                <a href="#" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>
                                                         
		                                            </td>
		                                        </tr>
		                                        <?php  $counter++ ;  ?> 
		                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
											
											<tr>
												<td colspan="6" class="text-center"><?php echo e(trans('backend.language_count_zero')); ?></td>
											</tr>

                                        <?php endif; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>