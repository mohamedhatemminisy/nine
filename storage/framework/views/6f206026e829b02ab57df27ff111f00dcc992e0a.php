<?php $__env->startSection('page_title' , trans('backend.news')); ?>
<?php $__env->startSection('breadcrumb'); ?>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <h4 class="page-title"><?php echo e(trans('backend.news')); ?></h4>
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
                        <th><?php echo e(trans('backend.news_name')); ?></th>
                        <th><?php echo e(trans('backend.news_decription')); ?></th>
                        

                        <th><?php echo e(trans('backend.news_image')); ?></th>
                         <th><?php echo e(trans('backend.status')); ?></th>
                        <th><?php echo e(trans('backend.date_added')); ?></th>
                        <th><?php echo e(trans('backend.action')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($news->count()): ?>
                    
                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>

                        <td>
                            <?php echo e($new->name); ?>

                        </td>

                         <td>
                            <?php echo e($new->description); ?>

                        </td>
                                  
                        <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 <?php if(count($new->image) ): ?>
                            <?php echo e(asset("uploads/news/$new->image")); ?>

                            <?php endif; ?>" class="thumb-lg " alt="No Image Uploded"></a>

                            </td>

                          <td>
                                <?php if($new->status == 'not_active'): ?>
                                    <span class="label label-danger"><?php echo e(trans('backend.not_active')); ?></span>
                                <?php else: ?>
                                    <span class="label label-success"><?php echo e(trans('backend.active')); ?></span>  
                                <?php endif; ?>
                            </td>
                        
                        
                        <td><?php echo e(date('Y-m-d' , strtotime($new->created_at))); ?></td>
                        <td class="text-nowrap">

                             <a  href="<?php echo e(route('news.edit' , $new->id)); ?>" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.edit')); ?>"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            
                            <a onclick="$('.main_cat_<?php echo e($new->id); ?>').submit();" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.delete')); ?>"> <i class="fa fa-close text-danger"></i> </a>

                            <?php echo Form::open(['route'=>["news.destroy" , $new->id ] , 'class'=>"main_cat_$new->id" ]); ?>


                            <?php echo method_field('DELETE'); ?>

                            <?php echo Form::close(); ?>

                            
                        </td>
                        
                    </tr>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    
                    <tr>
                        <td colspan="7" class="text-center"><?php echo e(trans('backend.zero')); ?></td>
                    </tr>
                    <?php endif; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>