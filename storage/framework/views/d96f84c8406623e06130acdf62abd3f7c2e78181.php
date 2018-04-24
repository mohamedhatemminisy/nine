<?php $__env->startSection('page_title' , trans('backend.user_module')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.user_module')); ?></h4> 
                    </div>

                  



<?php $__env->stopSection(); ?>  



 

<?php $__env->startSection('content'); ?>

                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13"><?php echo e(trans('backend.user_note')); ?></p>
                            <div class="row">
                                <div class="col-md-12">
                                <?php echo Form::model($user, array('route' => array('user.update', $user->id) , 'class'=> 'form-horizontal form-material' , 'files'=>true , 'method'=>'POST')); ?>

                                        <?php echo method_field('put'); ?>


                                        <div class="form-group ">
                                            <label class="col-md-12"><?php echo e(trans('backend.FirstName')); ?></label><br><br>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.FirstName')); ?>" name="FirstName" value="<?php echo e($user->Fname); ?>" class="form-control form-control-line"> </div>
                                        </div><br><br>

                                          <div class="form-group ">
                                            <label class="col-md-12"><?php echo e(trans('backend.LastName')); ?></label><br><br>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.LastName')); ?>" name="LastName" value="<?php echo e($user->Lname); ?>" class="form-control form-control-line"> </div>
                                        </div><br><br>

                                             <div class="form-group ">
                                            <label class="col-md-12"><?php echo e(trans('backend.user_phone_number')); ?></label><br><br>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.user_phone_number')); ?>" name="user_mobile_number" value="<?php echo e($user->phoneNumber); ?>" class="form-control form-control-line"> </div>
                                        </div><br><br>


                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <h3 class="box-title m-b-0"><?php echo e(trans('backend.select_user_type')); ?></h3>

                                     <select name="user_type" id="user_type" class="form-control form-control-line"  >


                                            <option value="admin"   ><?php echo e(trans('backend.admin')); ?></option>

                                            <option value="teacher"  ><?php echo e(trans('backend.teacher')); ?></option>


                                        </select>


                                </div>
                            </div><br>
                            

                                        <div class="form-group">
                                            <label class="col-md-12"><?php echo e(trans('backend.user_password')); ?></label><br><br>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.user_password')); ?>" name="user_password" value="" class="form-control form-control-line"> </div><br><br>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-12"><?php echo e(trans('backend.user_email')); ?></label><br><br>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.user_email')); ?>" name="user_email" value="<?php echo e($user->email); ?>" class="form-control form-control-line"> </div><br><br>
                                        </div>



                                    <div class="form-group">
                                         <label for="input-file-now" class="col-md-12"><?php echo e(trans('backend.user_logo')); ?></label><br><br>
                                        <div class="col-md-12">
                                            <div class="white-box">


                                                <input type="file" name="logo" id="input-file-now" class="dropify" /> </div>
                                        </div>
                                    </div>



                                            <div class="form-group">
                                                <label for=""> &nbsp; <?php echo e(trans('backend.status')); ?></label>
                                        <br><br>
                                        <br>                                        

                                             
                                                <div class="col-md-12">
                                               
                                                     <input type="checkbox" name="status" <?php echo $user->isActive == 'active' ? 'checked' : ''; ?>  class="js-switch" data-color="#99d683" />

                                                </div>

                                             
                                        </div>
                                        <br>
                                        <br>

                                       <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success"><?php echo e(trans('backend.update')); ?></button>
                                            </div>
                                        </div>




                                     <?php echo Form::close(); ?>


                                </div>
                            </div>
                        </div>
                    </div>
                 

<?php $__env->stopSection(); ?> 


 
<?php $__env->startSection('scripts'); ?>

    <!-- For Switch  --> 
    <script>

        jQuery(document).ready(function() {

         $('.dropify').dropify({
            tpl: {
                wrap:            '<div class="dropify-wrapper"></div>',
                loader:          '<div class="dropify-loader"></div>',
                message:         '<div class="dropify-message"><span class="file-icon" /> <p><?php echo e(trans("article.select_images")); ?></p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"><?php echo e(trans("article.select_images_note")); ?></p></div></div></div>',
                filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                clearButton:     '<button type="button" class="dropify-clear"><?php echo e(trans("backend.remove")); ?></button>',
                errorLine:       '<p class="dropify-error"></p>',
                errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
            }
        });


        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });

        }); 

        </script>




        
 

<?php $__env->stopSection(); ?> 



 

    
 


 
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>