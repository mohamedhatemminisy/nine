<?php $__env->startSection('page_title' , trans('الاخبار')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('عرض الاخبار')); ?></h4>
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
                    <th><?php echo e(trans('عنوان الخبر')); ?></th>
                    <th><?php echo e(trans('وصف الخبر')); ?></th>
                    <th><?php echo e(trans('مضيف الخبر')); ?></th>
                    <th><?php echo e(trans('صورة الخبر')); ?></th>
                    <th><?php echo e(trans('اضافة الخبر الي')); ?></th>

                    <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                 
                </tr>
            </thead>
            <tbody>

            	<?php if($advices->count()): ?>
            		  
            		<?php $__currentLoopData = $advices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                               <?php echo e($advice->name); ?>

                            </td>
                            <td>
                               <?php echo e($advice->description); ?>

                            </td>
                            <td>
                               <?php echo e($advice->user->Fname); ?>

                            </td>
                           <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 <?php if(count($advice->image) ): ?>
                            <?php echo e(asset("uploads/advice/$advice->image")); ?>

                            <?php endif; ?>" class="thumb-lg img-circle" alt="No Image Uploded"></a>
                            </td>


                             <td>
                                <?php if($advice->type == 'Urgent'): ?>
                                    <span class="label label-danger"><?php echo e(trans('خبر عاجل')); ?></span>
                                <?php else: ?>
                                    <span class="label label-success"><?php echo e(trans('الاكثر قراءة')); ?></span>  
                                <?php endif; ?>
                            </td>

                            <td class="text-nowrap">

                               
                                <a  href="<?php echo e(route('advices.edit' , $advice->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            
                               <a href="<?php echo e(route('advices.show' , $advice->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.show')); ?>"> <i class="fa fa-info-circle text-inverse m-r-10"></i> </a>

                            
                               
                                     <a onclick="$('.advice_form_<?php echo e($advice->id); ?>').submit();"
                                      data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>">
                                       <i class="fa fa-close text-danger"></i> </a>

                                   <?php echo Form::open(['route'=>["advices.destroy" , $advice->id ] , 'class'=>"advice_form_$advice->id" ]); ?>


                                   <?php echo method_field('DELETE'); ?>


                                
                                   <?php echo Form::close(); ?>


                                 
                            </td>
                                
                        </tr>
                       
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
    				
    				<tr>
    					<td colspan="7" class="text-center"><?php echo e(trans('لم يتم اضافة اخبار')); ?></td>
    				</tr>

                <?php endif; ?>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?> 


 





<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>