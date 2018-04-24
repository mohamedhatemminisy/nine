@extends('backend.app')

@section('page_title' , trans('Show gallary'))

@section('breadcrumb')


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('Show gallary') }}</h4> 
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
                                            <th>{{ trans('English name') }}</th>
                                            <th>{{ trans('Arabic name') }}</th>
                                            <th>{{ trans('English description') }}</th>
                                            <th>{{ trans('Arabic description') }}</th>
                                            <th>{{ trans('photo') }}</th>
                                            <th>{{ trans('Status') }}</th>
                                            <th class="text-nowrap">{{ trans('Action') }}</th>
                                         
                                        </tr>
            </thead>
            <tbody>

            	@if($gallary->count())
            		  
            		@foreach($gallary as $slider)

                           
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                {{ $slider->name_en }}
                            </td>
                            <td>
                                {{ $slider->name_ar }}
                            </td>

                           <td>

                                {{ $slider->description_en }}
                            </td>
                             <td>

                                {{ $slider->description_ar }}
                            </td>
                          <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 @if(count($slider->photo) )
                            {{ asset("uploads/gallary/$slider->photo") }}
                            @endif" class="thumb-lg img-circle" alt="No Image Uploded"></a>
                            </td>

                             <td>
                                @if($slider->status == 'not_active')
                                    <span class="label label-danger">{{ trans('not_active') }}</span>
                                @else
                                    <span class="label label-success">{{ trans('active') }}</span>  
                                @endif
                            </td>

                            <td class="text-nowrap">
                             

                                <a  href="{{ route('gallary.edit' , $slider->id) }}" data-toggle="tooltip" data-original-title="{{ trans('backend.edit') }}"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            

                                 <a onclick="$('.social_form_{{ $slider->id }}').submit();" data-toggle="tooltip" data-original-title="{{ trans('backend.delete') }}"> <i class="fa fa-close text-danger"></i> </a>

                                      


                                {!! Form::open(['route'=>["gallary.destroy" , $slider->id ] , 'class'=>"social_form_$slider->id" ]) !!}

                                    {!! method_field('DELETE') !!}



                                {!! Form::close() !!}
                                 
                            </td>
                                
                        </tr>
                           
                       
                     @endforeach
                @else
    				
    				<tr>
    					<td colspan="10" class="text-center">{{ trans('No gallary') }}</td>
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