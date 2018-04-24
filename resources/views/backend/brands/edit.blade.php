@extends('backend.app')

@section('page_title' , trans('Edit Brand'))

@section('breadcrumb')


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('Edit Brand') }}</h4> 
                    </div>

                  



@endsection  



 

@section('content')

                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13">{{ trans('Edit Brand') }}</p>
                            <div class="row">
                                <div class="col-md-12">
                                {!! Form::model($brands, array('route' => array('brands.update', $brands->id) , 'class'=> 'form-horizontal form-material' , 'files'=>true , 'method'=>'POST'))  !!}
                                        {!! method_field('put') !!}
 

 


                                    <div class="form-group">
                                         <label for="input-file-now" class="col-md-12">{{ trans('Photo') }}</label><br><br>
                                        <div class="col-md-12">
                                            <div class="white-box">


                                                <input type="file" name="logo" id="input-file-now" class="dropify" /> </div>
                                        </div>
                                    </div>



                                            <div class="form-group">
                                                <label for=""> &nbsp; {{ trans('status') }}</label>
                                        <br><br>
                                        <br>                                        

                                             
                                                <div class="col-md-12">
                                               
                                                     <input type="checkbox" name="status" {!! $brands->status == 'active' ? 'checked' : '' !!}  class="js-switch" data-color="#99d683" />

                                                </div>

                                             
                                        </div>
                                        <br>
                                        <br>

                                       <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success">{{ trans('update') }}</button>
                                            </div>
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
                message:         '<div class="dropify-message"><span class="file-icon" /> <p>{{ trans("Photo") }}</p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ trans("Photo") }}</p></div></div></div>',
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



 

    
 


 