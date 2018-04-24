@php 
                if(Auth::check()){

                    // user authenticated 
                    $user = Auth::user(); 

                    $user_name = $user->Name ; 
 
                    $user_id = $user->id ; 
                    $user_image = $user->profileImage; 

                } 
        @endphp 




@php 

    $lang = LaravelLocalization::getCurrentLocale(); 

@endphp
<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                    <a class="logo" href="#"><b>
                            {{-- <img src="{{ asset('backend/assets/plugins/images/eliteadmin-logo.png') }}" alt="Gooooo" /> --}}
                            <img src="{{ asset('backend/assets/logo.png') }}" alt="Gooooo" />
                        </b><span class="hidden-xs">

                            {{-- <img src="{{ asset('backend/assets/plugins/images/eliteadmin-text.png') }}" alt="home" /> --}}

                            <img src='{{ asset("backend/assets/logo-text-$lang.png") }}' alt="home" />
                        </span>
                    </a>
                </div>
 
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">  
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>


 
                    <li class="dropdown"> 


                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="fa fa-language"></i>
                            {{-- <div class="notify"><span class="heartbit"></span><span class="point"></span></div> --}}
                        </a>

                            <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                                
                                

                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>

                                        

                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    <img width="20px"  src='{{ asset("backend/assets/$localeCode-flag.png") }}' alt="">
                                                        {{ $properties['native'] }}
                                        </a>



                                    </li>
                                @endforeach


                            </ul>
                     
                    </li>







            
                    <li class="dropdown">
                                                    

                                                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="
                                                                 
                                                            @if(count($user_image) )
                                                                    {{ asset("uploads/users/$user_image") }}
                                                            @else
                                                                {{ asset('avatars/adminstrator-avatar.png') }}
                                                            @endif
                                                        
                                                            
                                                         " alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ $user_name }}</b> </a>

                                    <ul class="dropdown-menu dropdown-user animated flipInY">
                                        <li><a href='{{ url("user/profile/$user->id") }}'><i class="ti-user"></i> {{ trans('backend.my_profile') }}</a></li>
                                        
                                        
                                        <li role="separator" class="divider"></li>
                                        
                                        <li>

                                               <a href="javascript:{}" onclick="document.getElementById('logout_form').submit();"><i class="fa fa-power-off">  </i> {{ trans('backend.logout') }} 
                                                </a>

                                              {!! Form::open(['url'=>'logout' , 'method'=>'POST' , 'id'=>'logout_form']) !!}
                                               
                                              {!! Form::close() !!}

                                        </li>
                                    </ul>

                                 
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
