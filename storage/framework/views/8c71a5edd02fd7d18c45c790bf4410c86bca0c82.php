<?php $__env->startSection('page_title' , trans('backend.advices')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.advices')); ?></h4> 
                    </div>


<?php $__env->stopSection(); ?>  


<?php $__env->startSection('content'); ?>
          
         <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13"> <?php echo e(trans('backend.editing_advices')); ?> </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    
                                <?php echo Form::model( $advice ,  ['route'=>['advices.update' , $advice->id ] , 'method'=>'POST' , 'files'=>True ]); ?>


                                         <?php echo method_field('put'); ?>


                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('backend.advice_title')); ?></label> 
                                          <div class="input-group">

                                              <input type="text" class="form-control" name="advice_title"
                                                     placeholder="<?php echo e($advice->name); ?>">
     
                                          </div>
                               </div>

                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('backend.advice_description')); ?></label>  
                                          <div class="input-group">
                                          <textarea type="text" class="form-control" name="advice_description"
                                                     placeholder="<?php echo e(trans('backend.advice_description')); ?>"><?php echo e($advice->description); ?> </textarea> 
     
                                          </div>
                               </div>  


                             <div class="form-group ">    
                                <label for=" ">  &nbsp;  <?php echo e(trans('backend.advice_photo')); ?></label> 
                                    <div class="col-md-12">
                                        <div class="white-box">     
                                            <input type="file" id="input-file-now" name="file" class="dropify" /> 
                                        </div>
                                    </div>
                              </div>
                                        
                                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><?php echo e(trans('backend.update')); ?></button>

                                    <?php echo Form::close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>    

<?php $__env->stopSection(); ?> 




<?php $__env->startSection('content'); ?>



<?php $__env->stopSection(); ?> 


<?php $__env->startSection('scripts'); ?>

    <!-- For Switch  --> 
    <script>

        jQuery(document).ready(function() {

         $('.dropify').dropify({
            tpl: {
                wrap:            '<div class="dropify-wrapper"></div>',
                loader:          '<div class="dropify-loader"></div>',
                message:         '<div class="dropify-message"><span class="file-icon" /> <p><?php echo e(trans("backend.advice_photo")); ?></p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"><?php echo e(trans("backendbackend.advice_photo")); ?></p></div></div></div>',
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