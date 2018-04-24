
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

<?php if($userType == 'admin'): ?>

                    <li>
                        <a href="<?php echo e(url('dashboard')); ?>" class="waves-effect <?php echo e(Request::is("$lang/dashboard") ? 'active' : ''); ?> ">
                            <i class="fa fa-tachometer"></i>
                            <span class="hide-menu"> <?php echo e(trans('backend.dashboard')); ?> </span>
                        </a>

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

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/advices"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/advices/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-line-chart"></i> 
                                <span class="hide-menu"><?php echo e(trans('backend.advices')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('advices.create')); ?>"><?php echo e(trans('backend.create_advice')); ?></a></li>
                            <li><a href="<?php echo e(route('advices.index')); ?>"><?php echo e(trans('backend.show_advices')); ?></a></li>
                        </ul>

                     </li>
                     
                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/child"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/child/create"   ? 'active' : ''); ?> ">
                                <i class="fa fa-child"></i> 
                                <span class="hide-menu"><?php echo e(trans('child.child')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('child.index')); ?>"><?php echo e(trans('child.show_children')); ?></a></li>
                        </ul>

                     </li>



                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/activity"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/activity/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-trophy "></i> 
                                <span class="hide-menu"><?php echo e(trans('backend.activity')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('activity.create')); ?>"><?php echo e(trans('backend.create_activity')); ?></a></li>
                            <li><a href="<?php echo e(route('activity.index')); ?>"><?php echo e(trans('backend.show_activities')); ?></a></li>
                        </ul>

                     </li>
                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/child_answers"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/child_answers/create"   ? 'active' : ''); ?> ">
                                <i class="fa fa-hand-o-right"></i> 
                                <span class="hide-menu"><?php echo e(trans('child.child_answers')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('child_answers.index')); ?>"><?php echo e(trans('child.show_child_answers')); ?></a></li>
                        </ul>

                     </li>
                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/activity_rate"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/activity_rate/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-star-half-o"></i> 
                                <span class="hide-menu"><?php echo e(trans('backend.activity_rate')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('activity_rate.create')); ?>"><?php echo e(trans('backend.create_activity_rate')); ?></a></li>
                            <li><a href="<?php echo e(route('activity_rate.index')); ?>"><?php echo e(trans('backend.show_activity_rates')); ?></a></li>
                        </ul>

                     </li>

                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/evaluation"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/evaluation/create"   ? 'active' : ''); ?> ">
                                <i class="fa fa-money "></i> 
                                <span class="hide-menu"><?php echo e(trans('backend.evaluation')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('evaluation.create')); ?>"><?php echo e(trans('backend.create_evaluation')); ?></a></li>
                            <li><a href="<?php echo e(route('evaluation.index')); ?>"><?php echo e(trans('backend.show_evaluations')); ?></a></li>
                        </ul>

                     </li>
                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/evaluation_answers"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/evaluation_answers/create"   ? 'active' : ''); ?> ">
                                <i class="fa fa-odnoklassniki"></i> 
                                <span class="hide-menu"><?php echo e(trans('child.evaluation_answers')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('evaluation_answers.index')); ?>"><?php echo e(trans('child.show_evaluation_answers')); ?></a></li>
                        </ul>

                     </li>

                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/evaluation_rate"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/evaluation_rate/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-star-half-o"></i> 
                                <span class="hide-menu"><?php echo e(trans('backend.evaluation_rate')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('evaluation_rate.create')); ?>"><?php echo e(trans('backend.create_evaluation_rate')); ?></a></li>
                            <li><a href="<?php echo e(route('evaluation_rate.index')); ?>"><?php echo e(trans('backend.show_evaluation_rate')); ?></a></li>
                        </ul>

                     </li>


                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/message"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/message/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-commenting"></i> 
                                <span class="hide-menu"><?php echo e(trans('backend.message')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('message.create')); ?>"><?php echo e(trans('backend.create_message')); ?></a></li>
                            <li><a href="<?php echo e(route('message.index')); ?>"><?php echo e(trans('backend.show_messages')); ?></a></li>
                        </ul>

                     </li>

                      
                   <li ><a href="<?php echo e(route('visitorsMessages.index')); ?>" class="waves-effect  ">
                                            <i   class="fa fa-mail-forward"></i>
                                            <span class="hide-menu"><?php echo e(trans('backend.visitors_messages')); ?></span></a>


                   </li>

 
                      
                   <li>
                        <a href="#" class="waves-effect  "><i   class="fa  fa-sliders"></i> <span class="hide-menu"><?php echo e(trans('about.about_sidebar')); ?><span class="fa arrow"></span> </span></a>
                                       <ul class="nav nav-second-level">
                                        <li><a href="<?php echo e(route('about')); ?>"><?php echo e(trans('about.about')); ?></a></li>
                                     
                                                   </ul>
                    </li>

                   
                </ul>

  <?php elseif($userType == 'teacher'): ?>
                    <li>
                        <a href="<?php echo e(url('dashboard')); ?>" class="waves-effect <?php echo e(Request::is("$lang/dashboard") ? 'active' : ''); ?> ">
                            <i class="fa fa-tachometer"></i>
                            <span class="hide-menu"> <?php echo e(trans('backend.dashboard')); ?> </span>
                        </a>

                    </li>


                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/activity"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/activity/create"   ? 'active' : ''); ?> ">
                                <i class="fa  fa-trophy "></i> 
                                <span class="hide-menu"><?php echo e(trans('backend.activity')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('activity.create')); ?>"><?php echo e(trans('backend.create_activity')); ?></a></li>
                            <li><a href="<?php echo e(route('activity.index')); ?>"><?php echo e(trans('backend.show_activities')); ?></a></li>
                        </ul>

                     </li>

                        
                     <li>

                        <a href="#" class="waves-effect  <?php echo e(Request::path() == "$lang/evaluation"   ? 'active' : ''); ?>  
                                <?php echo e(Request::path() == "$lang/evaluation/create"   ? 'active' : ''); ?> ">
                                <i class="fa fa-money "></i> 
                                <span class="hide-menu"><?php echo e(trans('backend.evaluation')); ?> 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo e(route('evaluation.create')); ?>"><?php echo e(trans('backend.create_evaluation')); ?></a></li>
                            <li><a href="<?php echo e(route('evaluation.index')); ?>"><?php echo e(trans('backend.show_evaluations')); ?></a></li>
                        </ul>

                     </li>

                    <?php else: ?>
                            <li><a href='<?php echo e(url("user/profile/$user_id")); ?>'><i class="ti-user"></i><?php echo e(trans('backend.my_profile')); ?></a></li>
                    <?php endif; ?>

            </div>
        </div>
        <!-- Left navbar-header end