<?php $__env->startSection('page_title' , trans('backend.create_user')); ?>

<?php $__env->startSection('breadcrumb'); ?>

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.create_user')); ?></h4> 
                    </div>

<?php $__env->stopSection(); ?>  


<?php $__env->startSection('content'); ?>
				 
     <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13"><?php echo e(trans('backend.user_note')); ?></p>
                            <div class="row">
                                <div class="col-md-12">
                                     

                                     <?php echo Form::open( array('route' => array('user.store' ) , 'class'=> 'form-horizontal form-material ' , 'files'=>true , 'method'=>'POST' , 'id'=>'user_form')); ?>


                                   
         
                                        <div class="form-group ">
 
                                         <label class="col-md-12"><?php echo e(trans('backend.FirstName')); ?></label>
                                                   

                                            <div class="col-md-12">
 
                                                      <input type="text" placeholder="<?php echo e(trans('backend.FirstName')); ?>" name="FirstName"   class="form-control form-control-line"> 
  
                                            </div>
                                        </div>
                                        

                                         <div class="form-group ">
 
                                         <label class="col-md-12"><?php echo e(trans('backend.LastName')); ?></label>
                                                   

                                            <div class="col-md-12">
 
                                                      <input type="text" placeholder="<?php echo e(trans('backend.LastName')); ?>" name="LastName"   class="form-control form-control-line"> 
  
                                            </div>
                                        </div>
                    


                                        <div class="form-group">
                                            <label class="col-md-12"><?php echo e(trans('backend.user_mobile_number')); ?></label>
                                            <div class="col-md-12">

                                                <input type="text" placeholder="<?php echo e(trans('backend.user_mobile_number')); ?>" name="user_mobile_number"   class="form-control form-control-line">  

                                            </div>
                                        </div>



                                         <div class="form-group ">
 
                                         <label class="col-md-12"><?php echo e(trans('backend.address')); ?></label>
                                                   

                                            <div class="col-md-12">
 
                                                      <input type="text" placeholder="<?php echo e(trans('backend.address')); ?>" name="address"   class="form-control form-control-line"> 
  
                                            </div>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label class="col-md-12"><?php echo e(trans('backend.user_email')); ?></label>
                                            <div class="col-md-12">
                                                <input type="email" placeholder="<?php echo e(trans('backend.user_email')); ?>" name="user_email"   class="form-control form-control-line"> </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-12"><?php echo e(trans('backend.user_password')); ?></label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.user_password')); ?>" name="user_password"   class="form-control form-control-line"> </div>
                                        </div>

                                    <div class="form-group">
                                         <label for="input-file-now" class="col-md-12"><?php echo e(trans('backend.user_logo')); ?></label>
                                <div class="col-md-12">
                                            <div class="white-box">
                                                
                                                 
                                                <input type="file" name="logo" id="input-file-now" class="dropify" />
                                             </div>
                                   </div>

                                    </div>
 

                                         <div class="form-group">
                                            <label for="exampleInputEmail1"><?php echo e(trans('backend.status')); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                               &nbsp; &nbsp; &nbsp; &nbsp;
                                               <input type="checkbox" name="user_status" checked class="js-switch" data-color="#99d683" />

                                            </div>
                                        </div>


                                        <div class="form-group m-b-40">
                                                


                                            <button type="submit" id="submit" class="btn btn-info btn-circle btn-lg"  data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.add')); ?>"><i class="fa fa-check"></i> </button>

                                            <button type="reset" class="btn btn-warning btn-circle btn-lg" data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.reset')); ?>"><i class="fa fa-times"></i> </button>

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
                message:         '<div class="dropify-message"><span class="file-icon" /> <p><?php echo e(trans("اضف صورة")); ?></p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"><?php echo e(trans("اضف صورة")); ?></p></div></div></div>',
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