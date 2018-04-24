<?php $__env->startSection('page_title' , trans('رسائل الزوار')); ?>

<?php $__env->startSection('breadcrumb'); ?>


          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('رسائل الزوار')); ?></h4>
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
                    <th><?php echo e(trans('اسم الشخص')); ?></th>

                    <th><?php echo e(trans('هاتف الشخص')); ?></th>
                  
                    <th><?php echo e(trans('الرسالة')); ?></th>
                    <th><?php echo e(trans('تاريخ الارسال')); ?></th>
                    <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                 
                </tr>
            </thead>
            <tbody>

              <?php if($contacts->count()): ?>
                  
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visitorsMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td>
                               <?php echo e($visitorsMessage->sender->Fname); ?>

                            </td>
                             

                             <td>
                               <?php echo e($visitorsMessage->sender->phoneNumber); ?>

                            </td>

                            <td>
                               <?php echo e($visitorsMessage->message); ?>

                            </td>


                            <td class="text-right">  <?php echo e(Carbon\Carbon::parse("$visitorsMessage->created_at")->diffForHumans()); ?></td>
                        <td class="text-nowrap">


                            <a onclick="$('.main_cat_<?php echo e($visitorsMessage->id); ?>').submit();" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>

                            <?php echo Form::open(['url'=>["visitorsMessagesdelete/$visitorsMessage->id" ] , 'class'=>"main_cat_$visitorsMessage->id" ]); ?>


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