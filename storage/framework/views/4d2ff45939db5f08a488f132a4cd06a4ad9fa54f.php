<?php $__env->startSection('page_title' , trans('backend.evaluation')); ?>

<?php $__env->startSection('breadcrumb'); ?>


          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.show_evaluation_info')); ?></h4> 
                    </div>

                  

 

<?php $__env->stopSection(); ?>  


<?php $__env->startSection('styles'); ?>


 
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
          
    
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <ul class="nav customtab nav-tabs" role="tablist">
                               
                                <li role="presentation" class="nav-item"><a href="#answers" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs"><?php echo e(trans('backend.question_answers')); ?></span></a></li>
                                


 
                            </ul>
                            <div class="tab-content">
                                

                        <div class="tab-pane active" id="answers">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12 b-r"> <strong><?php echo e(trans('backend.question_answers')); ?></strong>
                                            <br>
                                                <?php if(count($answers)): ?>
                                                <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-sm-2">
                                                 <?php echo e($answer->name); ?>

                                                        <button  id="any_<?php echo e($answer->id); ?>" onclick="$('.answer_form_<?php echo e($answer->id); ?>').submit();"  class="btn btn-primary btn-sm btn-block text-center" style="margin-top: 5px;"><?php echo e(trans('backend.answer_delete')); ?></button>

                                              <?php echo Form::open(['route'=>["destroy-answer-image" , $answer->id ] , 'class'=>"answer_form_$answer->id" ]); ?>


                                                    <?php echo method_field('DELETE'); ?>




                                                 <?php echo Form::close(); ?>



                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php else: ?>
                                                    
                                                    <p class="text-center"><?php echo e(trans('backend.activity_answer_count_zero')); ?></p>
                                                    
                                                <?php endif; ?>                                      
                                            
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