@extends('backend.app')

@section('page_title' , trans('Show Users'))

@section('breadcrumb')


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('Show users') }}</h4> 
                    </div>

                  




@endsection  



@section('content')
					
    <div class="col-sm-12">
    <div class="white-box">
    <div class="table-responsive">
        <table class="table" border="2" id="myTable">
            <thead>
                                      <tr>
                                            <th>#</th>
                                            <th>{{ trans('Name') }}</th>
 

                                            <th>{{ trans('Photo') }}</th>

                                            <th>{{ trans('Email') }}</th>

                                          <th>{{ trans('Phone ') }}</th>
                                          
                                            
                                            <th>{{ trans('Add date') }}</th>
                                            <th>{{ trans('Status') }}</th>
                                            <th class="text-nowrap">{{ trans('Action') }}</th>
                                         
                                        </tr>
            </thead>
            <tbody>

            	@if($users->count())
            		  
            		@foreach($users as $user)

                           
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                {{ $user->Fname }} {{ $user->Lname }}
                            </td>


                            <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 @if(count($user->profileImage) )
                            {{ asset("uploads/users/$user->profileImage") }}
                            @endif" class="thumb-lg img-circle" alt="No Image Uploded"></a>
                            </td>
                             
                           <td>

                                {{ $user->email }}
                            </td>
                            
                              <td>
                                {{ $user->phoneNumber }}
                            </td>
                           
  
                            <td>{{ date('Y-m-d' , strtotime($user->created_at)) }}</td>


                             <td>
                                @if($user->isActive == 'not_active')
                                    <span class="label label-danger">{{ trans('not_active') }}</span>
                                @else
                                    <span class="label label-success">{{ trans('active') }}</span>  
                                @endif
                            </td>

                            <td class="text-nowrap">
                             

                                <a  href="{{ route('user.edit' , $user->id) }}" data-toggle="tooltip" data-original-title="{{ trans('backend.edit') }}"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            

                                 <a onclick="$('.social_form_{{ $user->id }}').submit();" data-toggle="tooltip" data-original-title="{{ trans('backend.delete') }}"> <i class="fa fa-close text-danger"></i> </a>




                                {!! Form::open(['route'=>["user.destroy" , $user->id ] , 'class'=>"social_form_$user->id" ]) !!}

                                    {!! method_field('DELETE') !!}



                                {!! Form::close() !!}
                                 
                            </td>
                                
                        </tr>
                           
                       
                     @endforeach
                @else
    				
    				<tr>
    					<td colspan="7" class="text-center">{{ trans('social_media.social_count_zero') }}</td>
    				</tr>

                @endif
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

@endsection 

@section('scripts')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
 
 <script>
     $(document).ready(function(){
        $('#myTable').DataTable();
     });
 </script>

@endsection 


{{--  --}}