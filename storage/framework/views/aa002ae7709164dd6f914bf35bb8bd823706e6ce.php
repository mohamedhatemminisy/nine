<?php $__env->startSection('page_title' , trans('الاخبار')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('اضافة خبر')); ?></h4> 
                    </div>


<?php $__env->stopSection(); ?>  


<?php $__env->startSection('content'); ?>


  <div class="col-sm-12">
              <div class="white-box">
                  <h3 class="box-title m-b-0"></h3>
                  <p class="text-muted m-b-30 font-13"> <?php echo e(trans('اضافة خبر')); ?> </p>
                  <div class="row">
                      <div class="col-sm-12 col-xs-12">
                         <section class="m-t-40">
                          <div class="sttabs tabs-style-iconbox">

                      <?php echo Form::open(['route'=>['advices.store'],'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'add_option']); ?>

                                  
                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('عنوان الخبر')); ?></label> 
                                          <div class="input-group">

                                              <input type="text" class="form-control" name="advice_title"
                                                     placeholder="<?php echo e(trans('عنوان الخبر')); ?>">
     
                                          </div>
                               </div>


                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('وصف الخبر')); ?></label>  
                                          <div class="input-group">
                                              <textarea type="text" class="form-control" name="advice_description"
                                                     placeholder="<?php echo e(trans('وصف الخبر')); ?>"> </textarea> 
     
                                          </div>
                               </div>   


                             <div class="form-group ">    
                                <label for=" ">  &nbsp;  <?php echo e(trans('صورة الخبر')); ?></label> 
                                    <div class="col-md-12">
                                        <div class="white-box">     
                                            <input type="file" id="input-file-now" name="file" class="dropify" /> 
                                        </div>
                                    </div>
                              </div>


                                         <div class="form-group">
                                            <label for="exampleInputEmail1"> &nbsp; &nbsp; &nbsp;<?php echo e(trans('اضافة الخبر الي')); ?></label>
                                            <p>  الاخبار العاجلة &nbsp;&nbsp;&nbsp; &nbsp; الاكثر قراءة</p>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                               &nbsp; &nbsp; &nbsp; &nbsp;
                                               <input type="checkbox" name="news_type" checked class="js-switch" data-color="#99d683" />

                                            </div>
                                        </div>
 

                                 <div class="form-group">
                                       <div class="col-md-12">
                                      <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><?php echo e(trans('backend.add')); ?></button>
                                      <button type="reset" class="btn btn-inverse waves-effect waves-light"><?php echo e(trans('backend.reset')); ?></button>

                                  </div>
                                  </div>



                                  <?php echo Form::close(); ?>

                     

                          </div>
                          <!-- /tabs -->
                      </section>
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