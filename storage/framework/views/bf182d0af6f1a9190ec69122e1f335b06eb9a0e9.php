<?php $__env->startSection('page_title' , trans('about.mission')); ?>

<?php $__env->startSection('breadcrumb'); ?>


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('about.edit_missions')); ?></h4> 
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
                  <p class="text-muted m-b-30 font-13"> <?php echo e(trans('about.edit_missions')); ?> </p>
                  <div class="row">
                      <div class="col-sm-12 col-xs-12">
                         <section class="m-t-40">



                          <div class="sttabs tabs-style-iconbox">
                              <nav>
                                  <ul>
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <li><a href="#<?php echo e($language->label); ?>"  ><span> &nbsp;<?php echo e(strtoupper($language->label)); ?></span></a></li>
                                     
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                  </ul>
                              </nav>


                           <?php echo Form::model($mission , ['route'=>['mission.update',$mission->id], 'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'add_files']); ?>

                                   <?php echo method_field('put'); ?>



                                  
                                  <div class="content-wrap">

                                     <?php $__currentLoopData = $mission->description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $description): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <section class="<?php echo e($loop->iteration == 1 ? 'active' : ''); ?>" id="<?php echo e($description->language->label); ?>">


                                        <!-- name field-->                             

                                      <div class="form-group<?php echo e($errors->has("mission_$language->label") ? ' has-error' : ''); ?>">
                                          <label for=""><?php echo e(trans('about.mission')); ?></label>
                                          <div class="input-group">

                                              <input type="text" class="form-control" name="mission_<?php echo e($description->language->label); ?>" value="<?php echo e($description->mission); ?>"    placeholder="<?php echo e(trans('about.mission')); ?>">
                                              <?php if($errors->has("mission_$language->label")): ?>
                                                    <span class="help-block with-errors">

                                                   <ul class="list-unstyled"><li><?php echo e($errors->first("mission_$language->label")); ?></li></ul>
                                                 </span>
                                                 <?php endif; ?>
                                          </div>
                                      </div>




                                  </section>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </div>
                                  <!-- /content -->
                              
                                   <div class="form-group">
                                          <label for=" "> &nbsp; <?php echo e(trans('backend.status')); ?></label>

                                             <div class="col-md-12">
                                              &nbsp; &nbsp; &nbsp;
                                             <input <?php  echo $mission->status=='active' ? 'checked':''; ?> type="checkbox" name="status"  class="js-switch" data-color="#99d683" />
                                              </div>

                                 </div>



                                <div class="form-group ">
                                    
                                    <label for=" ">  &nbsp;   <?php echo e(trans('about.about_photos')); ?></label>
                                    <div class="col-md-12">
                                        <div class="white-box">
                                             
                                            
                                            <input type="file" id="input-file-now" name="file[]" multiple class="dropify" /> 
                                        </div>
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