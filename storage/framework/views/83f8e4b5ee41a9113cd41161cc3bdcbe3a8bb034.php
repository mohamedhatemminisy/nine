<?php $__env->startSection('page_title' , trans('About Us')); ?>

<?php $__env->startSection('breadcrumb'); ?>

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('About Us')); ?></h4> 
                    </div>

<?php $__env->stopSection(); ?>  

<?php $__env->startSection('content'); ?>

    <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"></h3>
                <p class="text-muted m-b-30 font-13"> <?php echo e(trans('Edit About')); ?> </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                       <section class="m-t-40">
                        <div class="sttabs tabs-style-iconbox">

                    <?php echo Form::model( $about ,  ['route'=>['about_update' , $about->id],'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'article_update']); ?>



                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;<?php echo e(trans('Facebook')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="facebook"  placeholder="<?php echo e(trans('Facebook')); ?>" value="<?php echo e($about->Facebook); ?>"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;<?php echo e(trans('twiter')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="twiter"  placeholder="<?php echo e(trans('twiter')); ?>" value="<?php echo e($about->twiter); ?>"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;<?php echo e(trans('instgram')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="instgram"  placeholder="<?php echo e(trans('instgram')); ?>" value="<?php echo e($about->instgram); ?>"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;<?php echo e(trans('google_plus')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="google_plus"  placeholder="<?php echo e(trans('google_plus')); ?>" value="<?php echo e($about->google_plus); ?>"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;<?php echo e(trans('offic one')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="offic_one"  placeholder="<?php echo e(trans('offic one')); ?>" value="<?php echo e($about->offic_one); ?>"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;<?php echo e(trans('offic two')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="offic_two"  placeholder="<?php echo e(trans('offic two')); ?>" value="<?php echo e($about->offic_two); ?>"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;<?php echo e(trans('email')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="email"  placeholder="<?php echo e(trans('email')); ?>" value="<?php echo e($about->email); ?>"> 
                                        </div>
                                </div>

                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('About Us in english')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="about"
                                                     placeholder="<?php echo e(trans('About Us in english')); ?>"><?php echo e($about->about); ?> </textarea> 
     
                                          </div>
                               </div>


                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('About Us In Arabic')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="about_ar"
                                                     placeholder="<?php echo e(trans('About Us In Arabic')); ?>"><?php echo e($about->about_ar); ?> </textarea> 
     
                                          </div>
                               </div>




                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('English content')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="conten"
                                                     placeholder="<?php echo e(trans('English content')); ?>"><?php echo e($about->conten); ?> </textarea> 
     
                                          </div>
                               </div>
                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('Arabic content')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="content_ar"
                                                     placeholder="<?php echo e(trans('Arabic content')); ?>"><?php echo e($about->content_ar); ?> </textarea> 
     
                                          </div>
                               </div>

                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('English history')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="history"
                                                     placeholder="<?php echo e(trans('English history')); ?>"><?php echo e($about->history); ?> </textarea> 
     
                                          </div>
                               </div>

                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('Arabic history')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="history_ar"
                                                     placeholder="<?php echo e(trans('Arabic history')); ?>"><?php echo e($about->history_ar); ?> </textarea> 
     
                                          </div>
                               </div>

                                <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('English description')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="description"
                                                     placeholder="<?php echo e(trans('English description')); ?>"><?php echo e($about->description); ?> </textarea> 
     
                                          </div>
                               </div>   


                                <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('Arabic description')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="description_ar"
                                                     placeholder="<?php echo e(trans('Arabic description')); ?>"><?php echo e($about->description_ar); ?> </textarea> 
     
                                          </div>
                               </div>   

                                <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('English defination')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="defination"
                                                     placeholder="<?php echo e(trans('English defination')); ?>"><?php echo e($about->defination); ?> </textarea> 
     
                                          </div>
                               </div> 


                                <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('Arabic defination')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="defenation_ar"
                                                     placeholder="<?php echo e(trans('Arabic defination')); ?>"><?php echo e($about->defenation_ar); ?> </textarea> 
     
                                          </div>
                               </div> 

                                <?php echo method_field('put'); ?>

                  


                               <div class="form-group">
                                     <div class="col-md-12">
                                     
                                    <button type="submit" id="submit" class="btn btn-info btn-circle btn-lg"  data-toggle="tooltip" data-original-title="<?php echo e(trans('backend.update')); ?>"><i class="fa fa-check"></i> </button>

                                    
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


<?php $__env->startSection('scripts'); ?>


    <!-- For Switch  --> 
    <script>

        jQuery(document).ready(function() {

         $('.dropify').dropify({
            tpl: {
                wrap:            '<div class="dropify-wrapper"></div>',
                loader:          '<div class="dropify-loader"></div>',
                message:         '<div class="dropify-message"><span class="file-icon" /> <p><?php echo e(trans("about.select_images")); ?></p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"><?php echo e(trans("about.select_images_note")); ?></p></div></div></div>',
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