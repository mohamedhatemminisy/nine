@extends('backend.app')

@section('page_title' , trans('Visitor Message'))

@section('breadcrumb')


          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('Visitor Message') }}</h4>
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
                    <th>{{ trans('Name') }}</th>
                    <th>{{ trans('Email') }}</th>

                    <th>{{ trans('Phone') }}</th>
                  
                    <th>{{ trans('Message') }}</th>
                    <th>{{ trans('Send sencie') }}</th>
                    <th class="text-nowrap">{{ trans('action') }}</th>
                 
                </tr>
            </thead>
            <tbody>

              @if($contacts->count())
                  
                @foreach($contacts as $visitorsMessage)

                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $visitorsMessage->name }}</td>
                            <td>{{ $visitorsMessage->email }}</td>
                            <td>{{ $visitorsMessage->phone }}</td>
                            <td>{{ $visitorsMessage->message }}</td>
 

    
   


                            <td class="text-right">  {{Carbon\Carbon::parse("$visitorsMessage->created_at")->diffForHumans() }}</td>
                        <td class="text-nowrap">


                            <a onclick="$('.main_cat_{{ $visitorsMessage->id }}').submit();" data-toggle="tooltip" data-original-title="{{ trans('backend.delete') }}"> <i class="fa fa-close text-danger"></i> </a>

                            {!! Form::open(['url'=>["visitorsMessagesdelete/$visitorsMessage->id" ] , 'class'=>"main_cat_$visitorsMessage->id" ]) !!}

                            {!! method_field('DELETE') !!}
                            {!! Form::close() !!}
                            
                        </td>
                                
                        </tr>
                       
                     @endforeach
                @else
            
            <tr>
              <td colspan="7" class="text-center">{{ trans('no_messages') }}</td>
            </tr>

                @endif
                
            </tbody>
        </table>
    </div>
    </div>
    </div>

@endsection 


 




{{--  --}}