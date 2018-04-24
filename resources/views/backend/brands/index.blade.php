@extends('backend.app')

@section('page_title' , trans('Show Brands'))

@section('breadcrumb')


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('Show Brands') }}</h4> 
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
  

                                            <th>{{ trans('Photo') }}</th>
                                             <th>{{ trans('Status') }}</th>

 
                                            <th class="text-nowrap">{{ trans('Action') }}</th>
                                         
                                        </tr>
            </thead>
            <tbody>

            	@if($brands->count())
            		  
            		@foreach($brands as $brand)

                           
                        <tr>
                            <td>{{ $loop->iteration }}</td>
 


                            <td>

                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)">
                                            
                                            <img src="
                                 @if(count($brand->photo) )
                            {{ asset("uploads/brands/$brand->photo") }}
                            @endif" class="thumb-lg img-circle" alt="No Image Uploded"></a>
                            </td>
                             
                              <td>
                                @if($brand->status == 'not_active')
                                    <span class="label label-danger">{{ trans('not_active') }}</span>
                                @else
                                    <span class="label label-success">{{ trans('active') }}</span>  
                                @endif
                            </td>

                            <td class="text-nowrap">
                             

                                <a  href="{{ route('brands.edit' , $brand->id) }}" data-toggle="tooltip" data-original-title="{{ trans('edit') }}"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                            

                                 <a onclick="$('.social_form_{{ $brand->id }}').submit();" data-toggle="tooltip" data-original-title="{{ trans('delete') }}"> <i class="fa fa-close text-danger"></i> </a>




                                {!! Form::open(['route'=>["brands.destroy" , $brand->id ] , 'class'=>"social_form_$brand->id" ]) !!}

                                    {!! method_field('DELETE') !!}



                                {!! Form::close() !!}
                                 
                            </td>
                                
                        </tr>
                           
                       
                     @endforeach
                @else
    				
    				<tr>
    					<td colspan="7" class="text-center">{{ trans('There is no brands') }}</td>
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