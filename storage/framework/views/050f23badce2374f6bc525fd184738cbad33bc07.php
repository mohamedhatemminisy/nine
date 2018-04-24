<?php  
                if(Auth::check()){

                    // user authenticated 
                    $user = Auth::user(); 

                    $user_name = $user->Name ; 
 
                    $user_id = $user->id ; 
                    $user_image = $user->profileImage; 

                } 
         ?> 




<?php  

    $lang = LaravelLocalization::getCurrentLocale(); 

 ?>
<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="#"><b>
                            
                            <img src="<?php echo e(asset('backend/assets/logo.png')); ?>" alt="Gooooo" />
                        </b><span class="hidden-xs">

                            

                            <img src='<?php echo e(asset("backend/assets/logo-text-$lang.png")); ?>' alt="home" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">  
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>


 
                    <li class="dropdown"> 



                            <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                                
                                

                                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>

                                        

                                        <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                                    <img width="20px"  src='<?php echo e(asset("backend/assets/$localeCode-flag.png")); ?>' alt="">
                                                        <?php echo e($properties['native']); ?>

                                        </a>



                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </ul>
                     
                    </li>







            
                    <li class="dropdown">
                                                    

                                                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="
                                                                 
                                                            <?php if(count($user_image) ): ?>
                                                                    <?php echo e(asset("uploads/users/$user_image")); ?>

                                                            <?php else: ?>
                                                                <?php echo e(asset('avatars/adminstrator-avatar.png')); ?>

                                                            <?php endif; ?>
                                                        
                                                            
                                                         " alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo e($user_name); ?></b> </a>

                                    <ul class="dropdown-menu dropdown-user animated flipInY">
                                        <li><a href='<?php echo e(url("user/profile/$user->id")); ?>'><i class="ti-user"></i> <?php echo e(trans('backend.my_profile')); ?></a></li>
                                        
                                        
                                        <li role="separator" class="divider"></li>
                                        
                                        <li>

                                               <a href="javascript:{}" onclick="document.getElementById('logout_form').submit();"><i class="fa fa-power-off">  </i> <?php echo e(trans('backend.logout')); ?> 
                                                </a>

                                              <?php echo Form::open(['url'=>'logout' , 'method'=>'POST' , 'id'=>'logout_form']); ?>

                                               
                                              <?php echo Form::close(); ?>


                                        </li>
                                    </ul>

                                 
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
