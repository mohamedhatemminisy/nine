<?php $__env->startSection('page_title' , trans('backend.news')); ?>

<?php $__env->startSection('breadcrumb'); ?>

    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo e(trans('backend.news')); ?></h4>
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
            <p class="text-muted m-b-30 font-13"> <?php echo e(trans('backend.news')); ?> </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <section class="m-t-40">
                        <div class="sttabs tabs-style-iconbox">
 

                            <?php echo Form::model($news , ['route'=>['news.update',$news->id],
                            'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'add_files']); ?>

                            <?php echo method_field('put'); ?>



                                <div class="content-wrap">
                                    


                    <!--  Name -->


                    <div class="form-group col-md-12">
                        <label for="">
                        &nbsp; <?php echo e(trans('backend.news_name')); ?></label>
                        <div class="input-group">


                           &nbsp; &nbsp; &nbsp;
                            <input type="text" class="form-control" name="name"
                                   value="<?php echo e($news->name); ?>"

                                   placeholder="<?php echo e(trans('backend.news_name')); ?>">

                        </div>
                    </div>

                      <!--  Description -->


                    <div class="form-group col-md-12">
                        <label for="">
                        &nbsp; <?php echo e(trans('backend.news_decription')); ?></label>
                        <div class="input-group">


                           &nbsp; &nbsp; &nbsp;
                            <input type="text" class="form-control" name="description"
                                   value="<?php echo e($news->description); ?>"

                                   placeholder="<?php echo e(trans('backend.news_decription')); ?>">

                        </div>
                    </div

                




                     

                                <div class="form-group ">

                                    <label for=" ">  &nbsp; <?php echo e(trans('backend.news_image')); ?></label>
                                    <div class="col-md-12">
                                        <div class="white-box">


                                            <input type="file" id="input-file-now" name="logo" multiple class="dropify" />
                                        </div>
                                    </div>


                                </div>
                                


  

                                  

                                    
                                        <div class="form-group">
                                            <label for=" "> &nbsp; <?php echo e(trans('backend.status')); ?></label>

                                            <div class="col-md-12">
                                                &nbsp; &nbsp; &nbsp;
                                                <input <?php  echo $news->status=='active' ? 'checked':''; ?> type="checkbox" name="status"  class="js-switch" data-color="#99d683" />
                                            </div>

                                        </div>


                                        

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10"><?php echo e(trans('backend.update')); ?></button>
                                            <button type="reset" value="Reset" class="btn btn-inverse waves-effect waves-light"><?php echo e(trans('backend.reset')); ?></button>

                                        </div>
                                    </div>




                                    <?php echo Form::close(); ?>




                                </div>

                                <!-- /tabs -->
                        </div>

                    </section>

                </div>
            </div>
        </div>
    </div>








<?php $__env->stopSection(); ?>




<?php $__env->startSection('scripts'); ?>



    <script>

        jQuery(document).ready(function() {

            $('.dropify').dropify({
                tpl: {
                    wrap:            '<div class="dropify-wrapper"></div>',
                    loader:          '<div class="dropify-loader"></div>',
                    message:         '<div class="dropify-message"><span class="file-icon" /> <p><?php echo e(trans("backend.cat_img")); ?></p></div>',
                    preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"><?php echo e(trans("backend.cat_img")); ?></p></div></div></div>',
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

    <!-- For Switch  -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>