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
                            <nav>
                                <ul>
                                      <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="#<?php echo e($language->label); ?>"  ><span> &nbsp;<?php echo e(strtoupper($language->label)); ?></span></a></li>
                                  
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </ul>
                            </nav>
                    <?php echo Form::model( $about ,  ['route'=>['about_update' , $about->id],'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'article_update']); ?>

                                `
                                <?php echo method_field('put'); ?>

                                <div class="content-wrap">
                                <?php $__currentLoopData = $about->description; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $description): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    
                                <section class="<?php echo e($loop->iteration == 1 ? 'active' : ''); ?>" id="<?php echo e($description->language->label); ?>">



                                      <div class="form-group">
                                        <label for=""><?php echo e(trans('about.about_name')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="name_<?php echo e($description->language->label); ?>" id="name_<?php echo e($description->language->label); ?>" placeholder="<?php echo e(trans('about.about_name')); ?>" value="<?php echo e($description->sitename); ?>"> 
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for=""><?php echo e(trans('about.about_description')); ?></label>
                                        <div class="input-group">
                                            
                                        

                                             <textarea id="about_us" name="about_description_<?php echo e($description->language->label); ?>" placeholder="<?php echo e(trans('about.about_description')); ?>"  ><?php echo e($description->about_us); ?></textarea>
                                        </div>
                                    </div>

 
                                     <div class="form-group">
                                        <label for=""><?php echo e(trans('about.about_overview')); ?></label>
                                        <div class="input-group">
                                            
                                        

                                             <textarea id="overview" name="about_overview_<?php echo e($description->language->label); ?>" placeholder="<?php echo e(trans('about.about_overview')); ?>"  ><?php echo e($description->overview); ?></textarea>
                                        </div>
                                    </div>
    
                                     <div class="form-group">
                                        <label for=""><?php echo e(trans('about.about_phliosophy')); ?></label>
                                        <div class="input-group">
                                            
                                        

                                             <textarea id="phliosophy" name="about_phliosophy_<?php echo e($description->language->label); ?>" placeholder="<?php echo e(trans('about.about_phliosophy')); ?>"  ><?php echo e($description->phliosophy); ?></textarea>
                                        </div>
                                    </div>   
                                     <div class="form-group">
                                        <label for=""><?php echo e(trans('about.about_vision')); ?></label>
                                        <div class="input-group">
                                            
                                        

                                             <textarea id="vision" name="about_vision_<?php echo e($description->language->label); ?>" placeholder="<?php echo e(trans('about.about_vision')); ?>"  ><?php echo e($description->vision); ?></textarea>
                                        </div>
                                    </div>   

                                </section>
                                    

                                    

                                <!-- /content -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                                </div>







                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.telephone_one')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="telephone_one"  placeholder="<?php echo e(trans('about.telephone_one')); ?>" value="<?php echo e($about->telephone_one); ?>"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.telephone_two')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="telephone_two"  placeholder="<?php echo e(trans('about.telephone_two')); ?>" value="<?php echo e($about->telephone_two); ?>"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.Email_one')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="Email_one"  placeholder="<?php echo e(trans('about.Email_one')); ?>" value="<?php echo e($about->Email_one); ?>"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.Email_two')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="Email_two"  placeholder="<?php echo e(trans('about.Email_two')); ?>" value="<?php echo e($about->Email_two); ?>"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.HeadOffice')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="HeadOffice"  placeholder="<?php echo e(trans('about.HeadOffice')); ?>" value="<?php echo e($about->HeadOffice); ?>"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.facebook')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="facebook"  placeholder="<?php echo e(trans('about.facebook')); ?>" value="<?php echo e($about->Facebook); ?>"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.Linked')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="Linked"  placeholder="<?php echo e(trans('about.Linked')); ?>" value="<?php echo e($about->Linked); ?>"> 
                                        </div>
                                </div>


                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.insta')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="insta"  placeholder="<?php echo e(trans('about.insta')); ?>" value="<?php echo e($about->Insta); ?>"> 
                                        </div>
                                </div>


                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.twitter')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="twitter"  placeholder="<?php echo e(trans('about.twitter')); ?>" value="<?php echo e($about->Twitter); ?>"> 
                                        </div>
                                </div>

                                 <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.longitude')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="longitude"  placeholder="<?php echo e(trans('about.longitude')); ?>" value="<?php echo e($about->longitude); ?>"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;<?php echo e(trans('about.latitude')); ?></label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="latitude"  placeholder="<?php echo e(trans('about.latitude')); ?>" value="<?php echo e($about->latitude); ?>"> 
                                        </div>
                                </div>
                    

                                 <div class="form-group">
                                        <label for=" "> &nbsp; <?php echo e(trans('about.about_status')); ?></label> 
                                           
                                   <div class="col-md-12">
                                        &nbsp; &nbsp; &nbsp;  &nbsp;
                                       <input type="checkbox" name="status" <?php echo $about->status == 'active' ? 'checked':''; ?>  class="js-switch" data-color="#99d683" />
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