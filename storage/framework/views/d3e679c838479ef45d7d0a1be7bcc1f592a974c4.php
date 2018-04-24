<?php $__env->startSection('page_title' , trans('about.about_module')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('about.about')); ?></h4> 
                    </div>


     
                 


<?php $__env->stopSection(); ?>  


<?php  
    
    $lang = LaravelLocalization::getCurrentLocale(); 
    $laguage = \App\Language::where(['label'=>$lang])->first(); 
    $language_id = $laguage->id ; 
 
 ?>


<?php $__env->startSection('content'); ?>


    
    <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"></h3>
                <p class="text-muted m-b-30 font-13"> <?php echo e(trans('about.about_edit')); ?> </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                       <section class="m-t-40">
                        <div class="sttabs tabs-style-iconbox">

                    <?php echo Form::model( $about ,  ['route'=>['about_update' , $about->id],'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'article_update']); ?>



                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('advert.advert_description_en')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="advert_description_en"
                                                     placeholder="<?php echo e(trans('advert.advert_description_en')); ?>"><?php echo e($about->info_en); ?> </textarea> 
     
                                          </div>
                               </div>


                              <div class="form-group col-md-12">
                                          <label for=""><?php echo e(trans('advert.advert_description_ar')); ?></label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="advert_description_ar"
                                                     placeholder="<?php echo e(trans('advert.advert_description_ar')); ?>"><?php echo e($about->info_ar); ?> </textarea> 
     
                                          </div>
                               </div>


                               <div class="form-group">
                                        <label for=" "> &nbsp; <?php echo e(trans('about.about_status')); ?></label> 
                                           
                                   <div class="col-md-12">
                                        &nbsp; &nbsp; &nbsp;  &nbsp;
                                       <input type="checkbox" name="status" <?php echo $about->status == 'active' ? 'checked':''; ?>  class="js-switch" data-color="#99d683" />
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