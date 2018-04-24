<?php $__env->startSection('page_title' , trans('backend.activity')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.activity')); ?></h4> 
                    </div>


<?php $__env->stopSection(); ?>  


<?php $__env->startSection('content'); ?>
					
				 <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"></h3>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                   



                                         <?php echo method_field('put'); ?>


                                    <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('backend.answer_one')); ?></label> 
                                          <div class="input-group">

                                            <input type="text" class="form-control" name="answer_one"
                                                     placeholder="<?php echo e($activityAnswer->name); ?>">
     
                                          </div>
                                      </div>

                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><?php echo e(trans('backend.update')); ?></button>

                              
                                </div>
                            </div>
                        </div>
                    </div>	  

<?php $__env->stopSection(); ?> 




<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>