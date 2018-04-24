<?php $__env->startSection('page_title' , trans('backend.evaluation_rate')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.evaluation_rate')); ?></h4> 
                    </div>


<?php $__env->stopSection(); ?>  


<?php $__env->startSection('content'); ?>
					
				 <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13"> <?php echo e(trans('backend.editing_evaluation_rate')); ?> </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                   

                                   <?php echo Form::model( $evaluationGrades ,  ['route'=>['evaluation_rate.update' , $evaluationGrades->id ] , 'method'=>'POST' , 'files'=>True ]); ?>


                                         <?php echo method_field('put'); ?>


                                  <div class="form-group">

                                     <label for=" "> &nbsp;&nbsp;&nbsp; &nbsp; <?php echo e(trans('backend.choice_child')); ?></label> 
                                    <div class="col-md-12">

                                        <select class="selectpicker m-b-20 m-r-10" name="adv_type"          data-style="btn-primary btn-outline">

                                            <?php $__currentLoopData = $child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <option value="<?php echo e($ch->id); ?>" 
                                                    <?php echo $ch->id == $evaluationGrades->child_id ? 'selected' : ''; ?> data-tokens="ketchup mustard"><?php echo e($ch->name); ?></option >
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          
                                            
                                        </select>
                                    </div>
                               </div>    


                                <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('backend.child_status')); ?></label>  
                                          <div class="input-group">

                                              <input type="text" class="form-control" name="child_status"  value="<?php echo e($evaluationGrades->grade); ?>"
                                                     placeholder="<?php echo e(trans('backend.child_status')); ?>">
     
                                          </div>
                               </div>

                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('backend.advice_status_description')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" name="status_description"
                                                     placeholder="<?php echo e(trans('backend.advice_status_description')); ?>"> <?php echo e($evaluationGrades->description); ?></textarea> 
     
                                          </div>
                               </div>






                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><?php echo e(trans('backend.update')); ?></button>

                                    <?php echo Form::close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>	  

<?php $__env->stopSection(); ?> 



<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>