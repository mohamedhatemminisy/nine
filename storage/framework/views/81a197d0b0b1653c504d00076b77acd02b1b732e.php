<?php $__env->startSection('page_title' , trans('Service Photos')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('show service photo')); ?></h4> 
                    </div>

                  



<?php $__env->stopSection(); ?>  


<?php $__env->startSection('styles'); ?>


 
<?php $__env->stopSection(); ?>



 

<?php $__env->startSection('content'); ?>
				  
    
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <ul class="nav customtab nav-tabs" role="tablist">
                               
                    
                                
                                <li role="presentation" class="nav-item"><a href="#images" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs"><?php echo e(trans('service photo')); ?></span></a></li>

                         
                            </ul>
                            <div class="tab-content">
                                
 
                                
                                <div class="tab-pane" id="images">
                                     
                                 <div class="col-sm-12">

                                        <div class="white-box">
                                            <h3 class="box-title m-b-0"><?php echo e(trans('service image')); ?></h3>
                                            <div id="image-popups" class="row">
                                                

                                                <?php if(count($photos)): ?>
                                                <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-sm-2">
                                                    <a href="<?php echo e(asset("uploads/services/$photo->name")); ?>" data-effect="mfp-3d-unfold"><img src="<?php echo e(asset("uploads/services/$photo->name")); ?>" class="img-responsive" />
                                                        </a>
                                                        <button  id="any_<?php echo e($photo->id); ?>" onclick="$('.photo_form_<?php echo e($photo->id); ?>').submit();"  class="btn btn-primary btn-sm btn-block text-center" style="margin-top: 5px;"><?php echo e(trans('Delete Image')); ?></button>

                                              <?php echo Form::open(['route'=>["destroy-item-image" , $photo->id ] , 'class'=>"photo_form_$photo->id" ]); ?>


                                        <?php echo method_field('DELETE'); ?>




                                     <?php echo Form::close(); ?>

                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    
                                                    <p class="text-center"><?php echo e(trans('This service has no images')); ?></p>
                                                    
                                                <?php endif; ?>
                                             
                                                 
                                                 
                                                 
                                            </div>
                                        </div>
                                    </div>

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
                message:         '<div class="dropify-message"><span class="file-icon" /> <p><?php echo e(trans("backend.pharmaceutical_select_images")); ?></p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"><?php echo e(trans("backend.pharmaceutical_select_images_note")); ?></p></div></div></div>',
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