<?php $__env->startSection('page_title' , trans('تعليقات الاعلان')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('عرض التعليقات')); ?></h4> 
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
                                           
                                            <th><?php echo e(trans('التعليق')); ?></th>
                                            <th><?php echo e(trans('صاحب الخبر')); ?></th>
                                            <th><?php echo e(trans('الخبر')); ?></th>
                                            <th class="text-nowrap"><?php echo e(trans('backend.action')); ?></th>
                                         
                                        </tr>
            </thead>

                                      <tbody>

                                        <?php if($comments->count()): ?>
                                            <?php  $counter = 1 ;  ?> 
                                            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
                                                <tr>
                                                    <td><?php echo e($counter); ?></td>
                                                          
                                                       <td> <?php echo e($comment->comment); ?>  </td>
                                                       <td>  <?php echo e($comment->user->Fname); ?> <?php echo e($comment->user->Lname); ?>  </td>  

                             <td>
                                    <?php echo e($comment->advert->name); ?>

                           
                            </td>


                           
                                    <td class=“text-nowrap”>

                                     <a onclick="$('.comment_form_<?php echo e($comment->id); ?>').submit();"
                                      data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>">
                                       <i class="fa fa-close text-danger"></i> </a>

                                   <?php echo Form::open(['route'=>["comments.destroy" , $comment->id ] , 'class'=>"comment_form_$comment->id" ]); ?>


                                   <?php echo method_field('DELETE'); ?>


                                
                                   <?php echo Form::close(); ?>


                               </td>
                                                </tr>
                                                <?php  $counter++ ;  ?> 
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            
                                            <tr>
                                                <td colspan="6" class="text-center"><?php echo e(trans('لم يتم اضافة تعليقات')); ?></td>
                                            </tr>

                                        <?php endif; ?>
                                        
                                    </tbody>

        </table>
    </div>
    </div>
    </div>



<?php $__env->stopSection(); ?> 


<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>