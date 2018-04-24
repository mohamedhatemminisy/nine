<?php $__env->startSection('page_title' , trans('backend.user_profile')); ?>

<?php $__env->startSection('breadcrumb'); ?>


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo e(trans('backend.user_profile')); ?></h4>
                    </div>





<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


                 <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg">
                                <img width="100%" alt="user" src="  <?php echo e(asset('avatars/bg.jpg')); ?>">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">

                                            <img src="
                                                            <?php if(count($user->profileImage) ): ?>
                                                                    <?php echo e(asset("uploads/users/$user->profileImage")); ?>

                                                            <?php else: ?>
                                                                <?php echo e(asset('avatars/adminstrator-avatar.png')); ?>

                                                            <?php endif; ?>
                                                       " class="thumb-lg img-circle" alt="img"></a>
                                          </div>
                                </div>
                            </div>
                            <div class="user-btm-box">





                                    <div class="col-md-4 col-sm-4 text-center">
                                        <p class="text-black"><?php echo e(trans('backend.user_mobile_number')); ?> &nbsp; <i class="ti-mobile text-purple"></i></p>
                                        <h5><?php echo e($user->mobileNumber); ?></h5>
                                    </div>
                                    <div class="col-md-4 col-sm-4 text-center">
                                        <p class="text-black"> <?php echo e(trans('backend.status')); ?>  &nbsp;<i class=" fa fa-info-circle text-purple"></i></p>
                                        <h5>
                                            <?php if($user->isActive == 'not_active'): ?>
                                                <span class="label label-danger"><?php echo e(trans('backend.not_active')); ?></span>
                                            <?php else: ?>
                                                <span class="label label-success"><?php echo e(trans('backend.active')); ?></span>
                                            <?php endif; ?>
                                        </h5>
                                    </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <ul class="nav customtab nav-tabs" role="tablist">

                                <li role="presentation" class="nav-item"><a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs"><?php echo e(trans('backend.user_profile_info')); ?></span></a></li>

                                <li role="presentation" class="nav-item"><a href="#settings" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs"><?php echo e(trans('backend.user_profile_setting')); ?></span></a></li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane active" id="profile">
                                    <div class="row">


                                            <div class="col-md-3 col-xs-6 b-r"> <strong><?php echo e(trans('backend.FirstName')); ?></strong>
                                                <br>
                                                <p class="text-muted"><?php echo e($user->Fname); ?></p>
                                            </div>

                                            <div class="col-md-3 col-xs-6 b-r"> <strong><?php echo e(trans('backend.LastName')); ?></strong>
                                                <br>
                                                <p class="text-muted"><?php echo e($user->Lname); ?></p>
                                            </div>



                              

                                        <div class="col-md-3 col-xs-6 b-r"> <strong><?php echo e(trans('backend.user_website')); ?></strong>
                                            <br>
                                            <p class="text-muted"><?php echo e($user->email); ?></p>
                                        </div>

                                        <div class="col-md-3 col-xs-6 b-r"> <strong><?php echo e(trans('backend.user_phone_number')); ?></strong>
                                            <br>
                                            <p class="text-muted"><?php echo e($user->phoneNumber); ?></p>
                                        </div>


                                    </div>
                                    <hr>
                                </div>


                                <div class="tab-pane" id="settings">
                                    <?php echo Form::model($user, array('route' => array('user.update', $user->id) , 'class'=> 'form-horizontal form-material' , 'files'=>true , 'method'=>'POST')); ?>

                                        <?php echo method_field('put'); ?>




                                        <div class="form-group ">
                                            <label class="col-md-12"><?php echo e(trans('backend.FirstName')); ?></label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.FirstName')); ?>" name="FirstName" value="<?php echo e($user->Fname); ?>" class="form-control form-control-line"> </div>
                                        </div>

                                           <div class="form-group ">
                                            <label class="col-md-12"><?php echo e(trans('backend.LastName')); ?></label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.LastName')); ?>" name="LastName" value="<?php echo e($user->Lname); ?>" class="form-control form-control-line"> </div>
                                        </div>

                                             <div class="form-group ">
                                            <label class="col-md-12"><?php echo e(trans('backend.user_phone_number')); ?></label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.user_phone_number')); ?>" name="user_mobile_number" value="<?php echo e($user->phoneNumber); ?>" class="form-control form-control-line"> </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-12"><?php echo e(trans('backend.user_password')); ?></label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.user_password')); ?>" name="user_password" value="" class="form-control form-control-line"> </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-12"><?php echo e(trans('backend.user_email')); ?></label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="<?php echo e(trans('backend.user_email')); ?>" name="user_email" value="<?php echo e($user->email); ?>" class="form-control form-control-line"> </div>
                                        </div>



                                    <div class="form-group">
                                         <label for="input-file-now" class="col-md-12"><?php echo e(trans('backend.user_logo')); ?></label>
                                        <div class="col-md-12">
                                            <div class="white-box">


                                                <input type="file" name="logo" id="input-file-now" class="dropify" /> </div>
                                        </div>
                                    </div>

                                            <div class="form-group">
                                                <label for=""> &nbsp; <?php echo e(trans('backend.status')); ?></label>
                                        <br><br>
                                        <br>                                        

                                             
                                                <div class="col-md-12">
                                               
                                                     <input type="checkbox" name="status" <?php echo $user->isActive == 'active' ? 'checked' : ''; ?>  class="js-switch" data-color="#99d683" />

                                                </div>

                                             
                                        </div>


                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success"><?php echo e(trans('backend.update')); ?></button>
                                            </div>
                                        </div>



                                    <?php echo Form::close(); ?>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>



         <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify({
            tpl: {
                wrap:            '<div class="dropify-wrapper"></div>',
                loader:          '<div class="dropify-loader"></div>',
                message:         '<div class="dropify-message"><span class="file-icon" /> <p><?php echo e(trans("backend.select_file")); ?></p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message"><?php echo e(trans("backend.select_file_note")); ?></p></div></div></div>',
                filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                clearButton:     '<button type="button" class="dropify-clear"><?php echo e(trans("backend.remove")); ?></button>',
                errorLine:       '<p class="dropify-error"></p>',
                errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
            }
        });
        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Delete',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        // Used events
        var drEvent = $('#input-file-events').dropify();
        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });
        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });
        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>


     <script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
    });

    </script>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>