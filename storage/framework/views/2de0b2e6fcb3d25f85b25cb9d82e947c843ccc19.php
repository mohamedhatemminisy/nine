<?php $__env->startSection('page_title' , trans('backend.language_module')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.language_module')); ?></h4> 
                    </div>

                  



<?php $__env->stopSection(); ?>  



<?php $__env->startSection('content'); ?>
					
				 <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13"> <?php echo e(trans('backend.adding_language')); ?> </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <?php echo Form::open(['route'=>'language.store' , 'id'=>'lang_form_add']); ?>

                                   
                                        <div class="form-group">
                                            <label for="exampleInputuname"><?php echo e(trans('backend.language_name')); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                                <input type="text" class="form-control" name="lang_name" id="lang_name" placeholder="<?php echo e(trans('backend.language_name')); ?>"> </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputpwd1"><?php echo e(trans('backend.language_label')); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                                

                
                                                <input type="text" class="form-control" name="lang_label" id="lang_label" placeholder="<?php echo e(trans('backend.language_label')); ?>"> 


                                            </div>
 

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo e(trans('backend.language_status')); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                               
                                               &nbsp; &nbsp; &nbsp; &nbsp;
                                               <input type="checkbox" name="lang_status" checked class="js-switch" data-color="#99d683" />

                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><?php echo e(trans('backend.add')); ?></button>
                                        <button type="reset" class="btn btn-inverse waves-effect waves-light"><?php echo e(trans('backend.reset')); ?></button>
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
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });

        }); 

        </script>

<?php $__env->stopSection(); ?> 


 
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>