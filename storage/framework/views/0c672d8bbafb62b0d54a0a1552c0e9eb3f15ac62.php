
        <?php  
                if(Auth::check()){

                    // user authenticated 
                    $user = Auth::user();

                    $user_name = $user->Name ; 


 
                    $user_id = $user->id ; 
                    $user_image = $user->profileImage; 

                } 
         ?>


        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="
                                                        
                                                            <?php if(count($user_image) ): ?>
                                                                    <?php echo e(asset("uploads/users/$user_image")); ?>

                                                            <?php else: ?>
                                                                <?php echo e(asset('avatars/adminstrator-avatar.png')); ?> 
                                                            <?php endif; ?>
                                                      
                                                     

                         " alt="user-img" class="img-circle"> <span class="hide-menu"><?php echo e($user_name); ?><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">

                            <li><a href='<?php echo e(url("user/profile/$user_id")); ?>'><i class="ti-user"></i><?php echo e(trans('backend.my_profile')); ?></a></li>
                            
                            <li>
                                 <?php echo Form::open(['url'=>'logout' , 'method'=>'POST' , 'id'=>'logout_form']); ?>

                                <a href="javascript:{}" onclick="document.getElementById('logout_form').submit();"><i class="fa fa-power-off"></i> <?php echo e(trans('backend.logout')); ?></a>
                                 <?php echo Form::close(); ?>

                            </li>
                           

                           
                        </ul>
                    </li>



                    <?php  

                        $lang = LaravelLocalization::getCurrentLocale(); 

                     ?>
                    <li>
                        <a href="<?php echo e(url('dashboard')); ?>" class="waves-effect <?php echo e(Request::is("$lang/dashboard") ? 'active' : ''); ?> ">
                            <i class="fa fa-tachometer"></i>
                            <span class="hide-menu"> <?php echo e(trans('backend.dashboard')); ?> </span>
                        </a>

                    </li>




                    
                    <li> 

                        <a href="#" class="waves-effect  <?php echo Request::path() == "$lang/language"   ? 'active' : ''; ?>  
                            <?php echo Request::path() == "$lang/language/create"   ? 'active' : ''; ?>  ">
                            <i class="fa fa-language"></i> 
                            <span class="hide-menu"> <?php echo e(trans('backend.language')); ?> 
                                <span class="fa arrow"></span>  
                            </span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo e(route('language.create')); ?>"><?php echo e(trans('backend.create_language')); ?></a> </li>
                            <li> <a href="<?php echo e(route('language.index')); ?>"><?php echo e(trans('backend.show_languages')); ?></a> </li>
                            
                        </ul>
                    </li>



                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/user"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/user/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu"><?php echo e(trans('backend.users')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('user.create')); ?>"><?php echo e(trans('backend.create_user')); ?></a></li>
                            <li><a href="<?php echo e(route('user.index')); ?>"><?php echo e(trans('backend.show_users')); ?></a></li>
                        </ul>

                     </li>



                      
                   <li>
                        <a href="#" class="waves-effect  "><i   class="fa  fa-sliders"></i> <span class="hide-menu"><?php echo e(trans('about.about_sidebar')); ?><span class="fa arrow"></span> </span></a>
                                       <ul class="nav nav-second-level">
                                        <li><a href="<?php echo e(route('about')); ?>"><?php echo e(trans('about.about')); ?></a></li>
                                           <li><a href='<?php echo e(route("about-photos" , Auth::user()->id )); ?>'><?php echo e(trans('about.about_photos')); ?></a></li>
                                                   </ul>
                    </li>




                      
                   <li ><a href="<?php echo e(route('visitorsMessages.index')); ?>" class="waves-effect  ">
                                            <i   class="fa fa-mail-forward"></i>
                                            <span class="hide-menu"><?php echo e(trans('backend.visitors_messages')); ?></span></a>


                   </li>


              
                   
                </ul>




            </div>
        </div>
        <!-- Left navbar-header end