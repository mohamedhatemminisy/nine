<?php $__env->startSection('page_title' , trans('backend.message')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.message')); ?></h4> 
                    </div>


<?php $__env->stopSection(); ?>  


<?php $__env->startSection('content'); ?>
          
         <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13"> <?php echo e(trans('backend.editing_message')); ?> </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php echo Form::model($messages, array('route' => array('message.update', $messages->id))); ?>

                                         <?php echo method_field('put'); ?>


                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('backend.message')); ?></label>  
                                          <div class="input-group">
                                              <textarea type="text" class="form-control" name="message"
                                                     placeholder="<?php echo e(trans('backend.message')); ?>"><?php echo e($messages->message); ?> </textarea> 
     
                                          </div>
                               </div>  

                                                       <div class="form-group">

                                     <label for=" "> &nbsp;&nbsp;&nbsp; &nbsp; <?php echo e(trans('backend.message_reciver')); ?></label> 
                                    <div class="col-md-12">

                                        <select class="selectpicker m-b-20 m-r-10" name="message_reciver"          data-style="btn-primary btn-outline">

                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                           <option value="<?php echo e($user->id); ?>" 
                                                            <?php echo $user->id == $messages->reciver_id ? 'selected' : ''; ?> data-tokens="ketchup mustard"><?php echo e($user->Fname); ?> <?php echo e($user->Lname); ?></option >
            
                  
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          
                                            
                                        </select>
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