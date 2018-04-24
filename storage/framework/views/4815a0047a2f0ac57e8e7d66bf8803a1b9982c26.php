<?php $__env->startSection('page_title' , trans('advert.adverts')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('advert.show_adverts')); ?></h4> 
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
                                           <th><?php echo e(trans('advert.advert_title_ar')); ?></th>
                                            <th><?php echo e(trans('advert.advert_title_en')); ?></th>

                                            <th><?php echo e(trans('advert.advert_long')); ?></th>
                                            <th><?php echo e(trans('advert.advert_alita')); ?></th>
                                            <th><?php echo e(trans('advert.advert_address_ar')); ?></th>
                                            <th><?php echo e(trans('advert.advert_address_en')); ?></th>
                                            <th><?php echo e(trans('advert.advert_choise_type')); ?></th>
                                            <th><?php echo e(trans('advert.advert_added_by')); ?></th>

                                            <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                                         
                                        </tr>
            </thead>

                                      <tbody>

                                    	<?php if($adverts->count()): ?>
                                    		<?php  $counter = 1 ;  ?> 
                                    		<?php $__currentLoopData = $adverts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
		                                        <tr>
		                                            <td><?php echo e($counter); ?></td>
		                                                  
                                                       <td> <?php echo e($advert->title_ar); ?>  </td>
                                                       <td> <?php echo e($advert->title_en); ?>  </td>
                                                       <td> <?php echo e($advert->longitude); ?>  </td>
                                                       <td> <?php echo e($advert->latitude); ?>  </td>                   
                                                       <td> <?php echo e($advert->address_ar); ?>  </td>
                                                      
                                                        <td> <?php echo e($advert->address_en); ?>  </td>
                             <td>
                                <?php if($advert->advtype == '0'): ?>
                                    <span class="label label-danger"><?php echo e(trans('advert.sale')); ?></span>
                                <?php else: ?>
                                    <span class="label label-success"><?php echo e(trans('advert.rent')); ?></span>  
                                <?php endif; ?>
                            </td>

                                                 <td> <?php echo e($advert->user->Fname); ?> <?php echo e($advert->user->Lname); ?>  </td>

		                   
		                            <td class=“text-nowrap”>
                                 
                                   <a  href="<?php echo e(route('adverts.edit' , $advert->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                       <a href="<?php echo e(route('adverts.show' , $advert->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.show')); ?>"> <i class="fa fa-info-circle text-inverse m-r-10"></i> </a>

                                 

                                     <a onclick="$('.adverts_form_<?php echo e($advert->id); ?>').submit();"
                                      data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>">
                                       <i class="fa fa-close text-danger"></i> </a>

                                   <?php echo Form::open(['route'=>["adverts.destroy" , $advert->id ] , 'class'=>"adverts_form_$advert->id" ]); ?>


                                   <?php echo method_field('DELETE'); ?>


                                
                                   <?php echo Form::close(); ?>


                               </td>
		                                        </tr>
		                                        <?php  $counter++ ;  ?> 
		                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
											
											<tr>
												<td colspan="20" class="text-center"><?php echo e(trans('advert.advert_count_zero')); ?></td>
											</tr>

                                        <?php endif; ?>
                                        
                                    </tbody>

        </table>
    </div>
    </div>
    </div>



<?php $__env->stopSection(); ?> 


<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>