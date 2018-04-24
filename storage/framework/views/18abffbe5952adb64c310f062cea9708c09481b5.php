<?php $__env->startSection('page_title' , trans('Edit service')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('Edit service')); ?></h4> 
                    </div>

                  



<?php $__env->stopSection(); ?>  



 

<?php $__env->startSection('content'); ?>

                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13"><?php echo e(trans('Edit service')); ?></p>
                            <div class="row">
                                <div class="col-md-12">
                                <?php echo Form::model($service, array('route' => array('service.update', $service->id) , 'class'=> 'form-horizontal form-material' , 'files'=>true , 'method'=>'POST')); ?>

                                        <?php echo method_field('put'); ?>


                                        <div class="form-group ">
                                            <label class="col-md-12"><?php echo e(trans('member Name')); ?></label><br><br>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('service Name')); ?>" name="Name" value="<?php echo e($service->name); ?>" class="form-control form-control-line"> </div>
                                        </div><br><br>

                  

                               <div class="form-group">
                                          <label for=""><?php echo e(trans('description')); ?></label>  
                                          <div class="input-group">
                                          <textarea type="text" class="form-control" name="description"
                                                     placeholder="<?php echo e(trans('description')); ?>"><?php echo e($service->description); ?> </textarea> 
     
                                          </div>
                               </div>  
                            
 


                                <div class="form-group ">
                                    
                                    <label for=" ">  &nbsp; <?php echo e(trans('add photo')); ?></label> 
                                    <div class="col-md-12">
                                        <div class="white-box">
                                             
                                            
                                            <input type="file" id="input-file-now" name="file[]" multiple class="dropify" /> 
                                        </div>
                                    </div>


                                </div>



                                            <div class="form-group">
                                                <label for=""> &nbsp; <?php echo e(trans('backend.status')); ?></label> <br><br><br>                                        
                                                <div class="col-md-12">
                                               
                                                     <input type="checkbox" name="status" <?php echo $service->status == 'active' ? 'checked' : ''; ?>  class="js-switch" data-color="#99d683" />

                                                </div>
                                            </div><br><br>


                                       <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success"><?php echo e(trans('update')); ?></button>
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
                message:         '<div class="dropify-message"><span class="file-icon" /> <p><?php echo e(trans("Photo")); ?></p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"><?php echo e(trans("Photo")); ?></p></div></div></div>',
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