@extends('backend.app')

@section('page_title' , trans('Show team members'))

@section('breadcrumb')


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('Show team members') }}</h4> 
                    </div>

                  



@endsection  



@section('content')
					
    <div class="col-sm-12">
    <div class="white-box">
    {{-- <h3 class="box-title m-b-0">Bordered Table</h3>
    <p class="text-muted m-b-20">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</p> --}}
    <div class="table-responsive">
        <table class="table" border="2" id="myTable">
            <thead>
                                      <tr>
                                            <th>#</th>
  

                                            <th>{{ trans('career in arabic') }}</th>
                                            <th>{{ trans('career in english') }}</th>
                                            <th>{{ trans('arabic name') }}</th>
                                            <th>{{ trans('english name') }}</th>
                                            <th>{{ trans('arabic description') }}</th>
                                            <th>{{ trans('english description') }}</th>
                                            <th>{{ trans('photo') }}</th>
                                             <th>{{ trans('Status') }}</th>

 
                                            <th class="text-nowrap">{{ trans('Action') }}</th>
                                         
                                        </tr>
            </thead>
            <tbody>

            	@if($teams->count())
            		  
            		@foreach($teams as $team)

                           
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $team->carrer_ar }}</td>
                            <td>{{ $team->career}}</td>
                            <td>{{ $team->name_ar }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->description_ar }}</td>
                            <td>{{ $team->description }}</td>
 


                            <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 @if(count($team->photo) )
                            {{ asset("uploads/teams/$team->photo") }}
                            @endif" class="thumb-lg img-circle" alt="No Image Uploded"></a>
                            </td>
                             
                              <td>
                                @if($team->status == 'not_active')
                                    <span class="label label-danger">{{ trans('not_active') }}</span>
                                @else
                                    <span class="label label-success">{{ trans('active') }}</span>  
                                @endif
                            </td>

                            <td class="text-nowrap">
                             

                                <a  href="{{ route('team.edit' , $team->id) }}" data-toggle="tooltip" data-original-title="{{ trans('edit') }}"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            

                                 <a onclick="$('.social_form_{{ $team->id }}').submit();" data-toggle="tooltip" data-original-title="{{ trans('delete') }}"> <i class="fa fa-close text-danger"></i> </a>




                                {!! Form::open(['route'=>["team.destroy" , $team->id ] , 'class'=>"social_form_$team->id" ]) !!}

                                    {!! method_field('DELETE') !!}



                                {!! Form::close() !!}
                                 
                            </td>
                                
                        </tr>
                           
                       
                     @endforeach
                @else
    				
    				<tr>
    					<td colspan="7" class="text-center">{{ trans('There is no team members') }}</td>
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