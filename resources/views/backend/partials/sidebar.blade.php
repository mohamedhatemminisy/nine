
        @php 
                if(Auth::check()){

                    // user authenticated 
                    $user = Auth::user();

                    $user_name = $user->Fname . " " . $user->Lname ; 
                    $userType = $user->role; 
                    $user_id = $user->id ; 
                    $user_image = $user->profileImage; 

                } 
        @endphp


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
                                                        
                            @if(count($user_image) )
                                    {{ asset("uploads/users/$user_image") }}
                            @else
                                {{ asset('avatars/adminstrator-avatar.png') }} 
                            @endif
                                                                      
                         " alt="user-img" class="img-circle"> <span class="hide-menu">{{ $user_name }}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">

                            <li><a href='{{ url("user/profile/$user_id") }}'><i class="ti-user"></i>{{ trans('profile') }}</a></li>
                            
                            <li>
                                 {!! Form::open(['url'=>'logout' , 'method'=>'POST' , 'id'=>'logout_form']) !!}
                                <a href="javascript:{}" onclick="document.getElementById('logout_form').submit();"><i class="fa fa-power-off"></i> {{ trans('logout') }}</a>
                                 {!! Form::close() !!}
                            </li>
                        
                           
                        </ul>
                    </li>



                    @php 

                        $lang = LaravelLocalization::getCurrentLocale(); 

                    @endphp


                    <li>
                        <a href="{{ url('dashboard') }}" class="waves-effect {{ Request::is("$lang/dashboard") ? 'active' : '' }} ">
                            <i class="fa fa-tachometer"></i>
                            <span class="hide-menu"> {{ trans('backend.dashboard') }} </span>
                        </a>

                    </li>
                        {{-- User --}}
                     <li>

                        <a href="#" class="waves-effect  {{Request::path() == "$lang/user"   ? 'active' : ''}}  
                                {{Request::path() == "$lang/user/create"   ? 'active' : ''}} ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu">{{ trans('backend.users') }} 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('user.create') }}">{{ trans('backend.create_user') }}</a></li>
                            <li><a href="{{ route('user.index') }}">{{ trans('backend.show_users') }}</a></li>
                        </ul>

                     </li>
 
                         {{-- slider --}}
                     <li>

                        <a href="#" class="waves-effect  {{Request::path() == "$lang/slider"   ? 'active' : ''}}  
                                {{Request::path() == "$lang/slider/create"   ? 'active' : ''}} ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu">{{ trans('backend.slider') }} 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('slider.create') }}">{{ trans('backend.create_slider') }}</a></li>
                            <li><a href="{{ route('slider.index') }}">{{ trans('backend.show_sliders') }}</a></li>
                        </ul>

                     </li>


                         {{-- gallary --}}
                     <li>

                        <a href="#" class="waves-effect  {{Request::path() == "$lang/gallary"   ? 'active' : ''}}  
                                {{Request::path() == "$lang/gallary/create"   ? 'active' : ''}} ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu">{{ trans('backend.gallary') }} 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('gallary.create') }}">{{ trans('backend.create_gallary') }}</a></li>
                            <li><a href="{{ route('gallary.index') }}">{{ trans('backend.show_gallary') }}</a></li>
                        </ul>

                     </li>



                         {{-- Brands --}}
                     <li>

                        <a href="#" class="waves-effect  {{Request::path() == "$lang/Brands"   ? 'active' : ''}}  
                                {{Request::path() == "$lang/Brands/create"   ? 'active' : ''}} ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu">{{ trans('backend.Brands') }} 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('brands.create') }}">{{ trans('backend.create_brand') }}</a></li>
                            <li><a href="{{ route('brands.index') }}">{{ trans('backend.show_brand') }}</a></li>
                        </ul>

                     </li>

 
                         {{-- Teams --}}
                     <li>

                        <a href="#" class="waves-effect  {{Request::path() == "$lang/Teams"   ? 'active' : ''}}  
                                {{Request::path() == "$lang/Teams/create"   ? 'active' : ''}} ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu">{{ trans('backend.Teams') }} 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('team.create') }}">{{ trans('backend.Create_Team') }}</a></li>
                            <li><a href="{{ route('team.index') }}">{{ trans('backend.Show_Teams') }}</a></li>
                        </ul>

                     </li>

                         {{-- Service --}}
                     <li>

                        <a href="#" class="waves-effect  {{Request::path() == "$lang/Service"   ? 'active' : ''}}  
                                {{Request::path() == "$lang/Service/create"   ? 'active' : ''}} ">
                                <i class="fa  fa-users"></i> 
                                <span class="hide-menu">{{ trans('backend.Services') }} 
                                    <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">
                            <li><a href="{{ route('service.create') }}">{{ trans('backend.Create_Service') }}</a></li>
                            <li><a href="{{ route('service.index') }}">{{ trans('backend.Show_Services') }}</a></li>
                        </ul>

                     </li>

                       {{--visitors messages--}}

  
                     <li>

                        <a href="#" class="waves-effect ">
                            <i class="fa  fa-mail-forward"></i>
                            <span class="hide-menu">{{ trans('backend.Show_messages') }}
                                <span class="fa arrow"></span>
                                </span>
                        </a>

                        <ul class="nav nav-second-level">

                            <li><a href="{{ url('visitorsMessages') }}">{{ trans('backend.Show_messages') }}</a></li>
                        </ul>

                    </li>
                      {{--site Settings--}}
                   <li>
                        <a href="#" class="waves-effect  "><i   class="fa  fa-sliders"></i> <span class="hide-menu">{{  trans('backend.setting') }}<span class="fa arrow"></span> </span></a>
                                       <ul class="nav nav-second-level">
                                        <li><a href="{{route('about')}}">{{  trans('backend.setting') }}</a></li>
                                     
                                                   </ul>
                    </li>

                   
                </ul>


               
                

            </div>
        </div>
        <!-- Left navbar-header end