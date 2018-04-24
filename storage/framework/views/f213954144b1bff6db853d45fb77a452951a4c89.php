<?php $__env->startSection('page_title' , trans('social_media.social_media_create')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('social_media.social_media_create')); ?></h4> 
                    </div>

                  



<?php $__env->stopSection(); ?>  


<?php  
    
    $lang = LaravelLocalization::getCurrentLocale(); 

    $laguage = \App\Language::where(['label'=>$lang])->first(); 


    $language_id = $laguage->id ; 

    


 ?> 
 

<?php $__env->startSection('content'); ?>
				 
     <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13"><?php echo e(trans('social_media.social_note')); ?></p>
                            <div class="row">
                                <div class="col-md-12">
                                     


                                    <?php echo Form::open([ 'route'=>'social-media.store', 'class'=>'floating-labels' ]); ?>


                                   
                                         
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input3" required name="social_name"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input3"><?php echo e(trans('social_media.social_name')); ?></label>
                                        </div>
                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input4" required name="social_icon"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input4"><?php echo e(trans('social_media.social_icon')); ?></label>  
                                        </div> 



                                        <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input5" required name="social_url"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input5"><?php echo e(trans('social_media.social_url')); ?></label>  
                                        </div>

                                        

                                        


                                         <div class="form-group m-b-40">
                                               
                                                <label for="input7">   <?php echo e(trans('social_media.social_status')); ?></label> 

                                          </div>


                                          <br>
                                          <br>
                                          
                                         <div class="form-group m-b-40">

                                            
                                           
                                               
                                                 
                                                   <input type="checkbox" name="status" checked id="input7" class="js-switch" data-color="#99d683" />
                                                   <br>
                                                   <br>
                                                   

                                            

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
                message:         '<div class="dropify-message"><span class="file-icon" /> <p><?php echo e(trans("department.select_images")); ?></p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"><?php echo e(trans("article.select_images")); ?></p></div></div></div>',
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