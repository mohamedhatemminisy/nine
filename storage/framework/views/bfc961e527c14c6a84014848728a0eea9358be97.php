<?php $__env->startSection('page_title' , trans('Show Brands')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('Show Brands')); ?></h4> 
                    </div>

                  



<?php $__env->stopSection(); ?>  



<?php $__env->startSection('content'); ?>
					
    <div class="col-sm-12">
    <div class="white-box">
    
    <div class="table-responsive">
        <table class="table" border="2" id="myTable">
            <thead>
                                      <tr>
                                            <th>#</th>
  

                                            <th><?php echo e(trans('Photo')); ?></th>
                                             <th><?php echo e(trans('Status')); ?></th>

 
                                            <th class="text-nowrap"><?php echo e(trans('Action')); ?></th>
                                         
                                        </tr>
            </thead>
            <tbody>

            	<?php if($brands->count()): ?>
            		  
            		<?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
 


                            <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 <?php if(count($brand->photo) ): ?>
                            <?php echo e(asset("uploads/brands/$brand->photo")); ?>

                            <?php endif; ?>" class="thumb-lg img-circle" alt="No Image Uploded"></a>
                            </td>
                             
                              <td>
                                <?php if($brand->status == 'not_active'): ?>
                                    <span class="label label-danger"><?php echo e(trans('not_active')); ?></span>
                                <?php else: ?>
                                    <span class="label label-success"><?php echo e(trans('active')); ?></span>  
                                <?php endif; ?>
                            </td>

                            <td class="text-nowrap">
                             

                                <a  href="<?php echo e(route('brands.edit' , $brand->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            

                                 <a onclick="$('.social_form_<?php echo e($brand->id); ?>').submit();" data-toggle="tooltip" data-original-title="<?php echo e(trans('delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>




                                <?php echo Form::open(['route'=>["brands.destroy" , $brand->id ] , 'class'=>"social_form_$brand->id" ]); ?>


                                    <?php echo method_field('DELETE'); ?>




                                <?php echo Form::close(); ?>

                                 
                            </td>
                                
                        </tr>
                           
                       
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
    				
    				<tr>
    					<td colspan="7" class="text-center"><?php echo e(trans('There is no brands')); ?></td>
    				</tr>

                <?php endif; ?>
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

<?php $__env->stopSection(); ?> 


<?php $__env->startSection('scripts'); ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
 
 <script>
     $(document).ready(function(){
        $('#myTable').DataTable();
     });
 </script>

<?php $__env->stopSection(); ?> 




<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>