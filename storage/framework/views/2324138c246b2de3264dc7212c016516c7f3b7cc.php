<?php $__env->startSection('page_title' , trans('visitorsMessages.message')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('visitorsMessages.message')); ?></h4>
                    </div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('styles'); ?>



<?php $__env->stopSection(); ?>



<?php 

    $lang = LaravelLocalization::getCurrentLocale();
    $laguage = \App\Language::where(['label'=>$lang])->first();
    $language_id = $laguage->id ;



    // dd($language_id);


 ?>


<?php $__env->startSection('content'); ?>

                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <ul class="nav customtab nav-tabs" role="tablist">

                                <li role="presentation" class="nav-item"><a href="#info" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs"><?php echo e(trans('visitorsMessages.message')); ?></span></a></li>

                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane active" id="info">

                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong><?php echo e(trans('visitorsMessages.subject')); ?></strong>
                                            <br>
                                            <p class="text-muted">
                                              <?php echo e($visitorsMessage->subject); ?>

                                            </p>
                                        </div>

                                    </div>
                                    <hr>

                <div class="tab-content">

                                <div class="tab-pane active" id="info">

                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong><?php echo e(trans('visitorsMessages.email')); ?></strong>
                                            <br>
                                            <p class="text-muted">
                                              <?php echo e($visitorsMessage->email); ?>

                                            </p>
                                        </div>

                                    </div>
                                    <hr>

                            <div class="tab-content">

                                <div class="tab-pane active" id="info">

                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong><?php echo e(trans('visitorsMessages.message')); ?></strong>
                                            <br>
                                            <p class="text-muted">
                                              <?php echo e($visitorsMessage->description); ?>

                                            </p>
                                        </div>

                                    </div>
                                    <hr>

                            <div class="tab-content">

                                <div class="tab-pane active" id="info">

                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r"> <strong><?php echo e(trans('backend.date_added')); ?></strong>
                                            <br>
                                            <p class="text-muted">
                                              <?php echo e(date('Y-m-d' , strtotime($visitorsMessage->created_at))); ?>

                                            </p>
                                        </div>
                  <div class="col-md-3 col-xs-6 b-r">


                                 <a  href="showReply/<?php echo e($visitorsMessage->id); ?>"  class="btn btn-success"> <?php echo e(trans('visitorsMessages.reply')); ?> </a>


                                        </div>

                                    </div>
                                    <hr>



                                </div>


                    </div>


                </div>
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