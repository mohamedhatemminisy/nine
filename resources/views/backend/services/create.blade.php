@extends('backend.app')

@section('page_title' , trans('create service'))

@section('breadcrumb')

					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('create service') }}</h4> 
                    </div>

@endsection  


@section('content')
				 
     <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13">{{ trans('create service') }}</p>
                            <div class="row">
                                <div class="col-md-12">
                                     

                                     {!! Form::open( array('route' => array('service.store' ) , 'class'=> 'form-horizontal form-material ' , 'files'=>true , 'method'=>'POST' , 'id'=>'user_form'))  !!}

                                   {{-- user first name --}}
         
                                        <div class="form-group ">
 
                                         <label class="col-md-12">{{ trans('English Name') }}</label>
                                                   

                                            <div class="col-md-12">
 
                                                      <input type="text" placeholder="{{ trans(' English Name') }}" name="name"   class="form-control form-control-line"> 
  
                                            </div>
                                        </div>
                                        
     

         
                                        <div class="form-group ">
 
                                         <label class="col-md-12">{{ trans('Arabic Name') }}</label>
                                                   

                                            <div class="col-md-12">
 
                                                      <input type="text" placeholder="{{ trans(' Arabic Name') }}" name="name_ar"   class="form-control form-control-line"> 
  
                                            </div>
                                        </div>
                                        

                                          <div class="form-group">
                                                <label for="">{{ trans('English description') }}</label>  
                                                <div class="input-group">
                                                    <textarea type="text" class="form-control" name="description"
                                                    placeholder="{{ trans('English description') }}"></textarea> 
           
                                                </div>
                                           </div>  
 

                                          <div class="form-group">
                                                <label for="">{{ trans('Arabic description') }}</label>  
                                                <div class="input-group">
                                                    <textarea type="text" class="form-control" name="description_ar"
                                                    placeholder="{{ trans('Arabic description') }}"></textarea> 
           
                                                </div>
                                           </div>  
 
                            <div class="form-group">
                                         <label for="input-file-now" class="col-md-12">{{ trans('service photo') }}</label>
                                <div class="col-md-12">
                                            <div class="white-box">
                                                
                                                 
                                                <input type="file" name="file[]" multiple id="input-file-now" class="dropify" />
                                             </div>
                                   </div>

                                    </div>
 

                                         <div class="form-group">
                                            <label for="exampleInputEmail1">{{ trans('backend.status') }}</label>
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

    <script>

        jQuery(document).ready(function() {

         $('.dropify').dropify({
            tpl: {
                wrap:            '<div class="dropify-wrapper"></div>',
                loader:          '<div class="dropify-loader"></div>',
                message:         '<div class="dropify-message"><span class="file-icon" /> <p>{{ trans("service image") }}</p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ trans("service image") }}</p></div></div></div>',
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



 

    
 


 