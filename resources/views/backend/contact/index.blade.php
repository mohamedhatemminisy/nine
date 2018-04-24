@extends('backend.app')

@section('page_title' , trans('visitorsMessages.visitors_messages'))

@section('breadcrumb')


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('visitorsMessages.visitors_messages') }}</h4>
                    </div>

                  



@endsection  



@section('content')
					
    <div class="col-sm-12">
    <div class="white-box">
    {{-- <h3 class="box-title m-b-0">Bordered Table</h3>
    <p class="text-muted m-b-20">Add<code>.table-bordered</code>for borders on all sides of the table and cells.</p> --}}
    <div class="table-responsive">
        <table class="table   table-hover color-table table-bordered primary-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ trans('visitorsMessages.name') }}</th>

                    <th>{{ trans('visitorsMessages.phone') }}</th>
                  
                    <th>{{ trans('visitorsMessages.message') }}</th>
                    <th>{{ trans('backend.date_added') }}</th>
                    <th class="text-nowrap">{{ trans('backend.action') }}</th>
                 
                </tr>
            </thead>
            <tbody>

            	@if($contact->count())
            		  
            		@foreach($contact as $visitorsMessage)

                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                               {{$visitorsMessage->name}}
                            </td>
                             

                             <td>
                               {{$visitorsMessage->phone}}
                            </td>

                            <td>
                               {{$visitorsMessage->msg}}
                            </td>

                            <td>{{ date('Y-m-d' , strtotime($visitorsMessage->created_at)) }}</td>
                            <td class="text-nowrap">
                               

                            
                                     <a onclick="$('.type_form_{{ $visitorsMessage->id }}').submit();"
                                      data-toggle="tooltip" data-original-title="{{ trans('backend.delete') }}">
                                       <i class="fa fa-close text-danger"></i> </a>

                                   {!! Form::open(['route'=>["visitorsMessages.destroy" , $visitorsMessage->id ] , 'class'=>"type_form_$visitorsMessage->id" ]) !!}

                                   {!! method_field('DELETE') !!}

                                
                                   {!! Form::close() !!}

                                 
                            </td>
                                
                        </tr>
                       
                     @endforeach
                @else
    				
    				<tr>
    					<td colspan="7" class="text-center">{{ trans('visitorsMessages.no_messages') }}</td>
    				</tr>

                @endif
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

@endsection 


 




{{--  --}}