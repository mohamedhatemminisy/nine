@extends('backend.app')

@section('page_title' , trans('create brand'))

@section('breadcrumb')

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('create brand') }}</h4> 
                    </div>

@endsection  


@section('content')
				 
     <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13">{{ trans('create brand') }}</p>
                            <div class="row">
                                <div class="col-md-12">
                                     

                                     {!! Form::open( array('route' => array('brands.store' ) , 'class'=> 'form-horizontal form-material ' , 'files'=>true , 'method'=>'POST' , 'id'=>'user_form'))  !!}
 



                                   {{--  photo --}}

                            <div class="form-group">
                                         <label for="input-file-now" class="col-md-12">{{ trans('photo') }}</label>
                                <div class="col-md-12">
                                            <div class="white-box">
                                                
                                                 
                                                <input type="file" name="logo" id="input-file-now" class="dropify" />
                                             </div>
                                   </div>

                                    </div>
 

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">{{ trans('status') }}</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                               &nbsp; &nbsp; &nbsp; &nbsp;
                                               <input type="checkbox" name="status" checked class="js-switch" data-color="#99d683" />

                                            </div>
                                        </div>


                                        <div class="form-group m-b-40">
                                                


                                            <button type="submit" id="submit" class="btn btn-info btn-circle btn-lg"  data-toggle="tooltip" data-original-title="{{ trans('Add') }}"><i class="fa fa-check"></i> </button>

                                            <button type="reset" class="btn btn-warning btn-circle btn-lg" data-toggle="tooltip" data-original-title="{{ trans('Reset') }}"><i class="fa fa-times"></i> </button>

                                        </div>
                                       

                                         
                                        


                                        {!! Form::close() !!}
                               




                                </div>
                            </div>
                        </div>
                    </div>

@endsection 


@section('scripts')

    <!-- For Switch  --> 
    <script>

        jQuery(document).ready(function() {

         $('.dropify').dropify({
            tpl: {
                wrap:            '<div class="dropify-wrapper"></div>',
                loader:          '<div class="dropify-loader"></div>',
                message:         '<div class="dropify-message"><span class="file-icon" /> <p>{{ trans("Add Image") }}</p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ trans("Add Image") }}</p></div></div></div>',
                filename:        '<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p>',
                clearButton:     '<button type="button" class="dropify-clear">{{ trans("backend.remove") }}</button>',
                errorLine:       '<p class="dropify-error"></p>',
                errorsContainer: '<div class="dropify-errors-container"><ul></ul></div>'
            }
        });


        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });

        }); 

        </script>




        
 

@endsection 



 

    
 


 