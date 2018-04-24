
        <?php  
                if(Auth::check()){

                    // user authenticated 
                    $user = Auth::user();

                    $user_name = $user->Fname . " " . $user->Lname ; 
                    $userType = $user->role; 
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

                            <li><a href='<?php echo e(url("user/profile/$user_id")); ?>'><i class="ti-user"></i><?php echo e(trans('profile')); ?></a></li>
                            
                            <li>
                                 <?php echo Form::open(['url'=>'logout' , 'method'=>'POST' , 'id'=>'logout_form']); ?>

                                <a href="javascript:{}" onclick="document.getElementById('logout_form').submit();"><i class="fa fa-power-off"></i> <?php echo e(trans('logout')); ?></a>
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
                            <span class="hide-menu"> <?php echo e(trans('Dashboard')); ?> </span>
                        </a>

                    </li>
                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/user"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/user/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu"><?php echo e(trans('Users')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('user.create')); ?>"><?php echo e(trans('Create User')); ?></a></li>
                            <li><a href="<?php echo e(route('user.index')); ?>"><?php echo e(trans('Show Users')); ?></a></li>
                        </ul>

                     </li>
 
                         
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/slider"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/slider/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu"><?php echo e(trans('slider')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('slider.create')); ?>"><?php echo e(trans('Create slider')); ?></a></li>
                            <li><a href="<?php echo e(route('slider.index')); ?>"><?php echo e(trans('Show sliders')); ?></a></li>
                        </ul>

                     </li>


                         
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/Brands"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/Brands/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu"><?php echo e(trans('Brands')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('brands.create')); ?>"><?php echo e(trans('Create Brand')); ?></a></li>
                            <li><a href="<?php echo e(route('brands.index')); ?>"><?php echo e(trans('Show Brands')); ?></a></li>
                        </ul>

                     </li>

 
                         
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/Teams"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/Teams/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu"><?php echo e(trans('Teams')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('team.create')); ?>"><?php echo e(trans('Create Team')); ?></a></li>
                            <li><a href="<?php echo e(route('team.index')); ?>"><?php echo e(trans('Show Teams')); ?></a></li>
                        </ul>

                     </li>

                         
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/Service"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/Service/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu"><?php echo e(trans('Services')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('service.create')); ?>"><?php echo e(trans('Create Service')); ?></a></li>
                            <li><a href="<?php echo e(route('service.index')); ?>"><?php echo e(trans('Show Services')); ?></a></li>
                        </ul>

                     </li>

                       

  
                     <li>

                        <a href="#" class="waves-effect ">
                            <i class="fa  fa-mail-forward"></i>
                            <span class="hide-menu"><?php echo e(trans(' visitors messages ')); ?>

                                <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">

                            <li><a href="<?php echo e(url('visitorsMessages')); ?>"><?php echo e(trans('Show visitors messages')); ?></a></li>
                        </ul>

                    </li>
                      
                   <li>
                        <a href="#" class="waves-effect  "><i   class="fa  fa-sliders"></i> <span class="hide-menu"><?php echo e(trans('Settings')); ?><span class="fa arrow"></span> </span></a>
                                       <ul class="nav nav-second-level">
                                        <li><a href="<?php echo e(route('about')); ?>"><?php echo e(trans('About Us')); ?></a></li>
                                     
                                                   </ul>
                    </li>

                   
                </ul>


               
                

            </div>
        </div>
        <!-- Left navbar-header end