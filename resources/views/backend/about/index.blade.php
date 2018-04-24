@extends('backend.app')

@section('page_title' , trans('About Us'))

@section('breadcrumb')

                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('About Us') }}</h4> 
                    </div>

@endsection  

@section('content')

    <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"></h3>
                <p class="text-muted m-b-30 font-13"> {{ trans('Edit About') }} </p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                       <section class="m-t-40">
                        <div class="sttabs tabs-style-iconbox">

                    {!! Form::model( $about ,  ['route'=>['about_update' , $about->id],'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'article_update']) !!}


                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;{{ trans('Facebook') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="facebook"  placeholder="{{ trans('Facebook') }}" value="{{ $about->Facebook }}"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;{{ trans('twiter') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="twiter"  placeholder="{{ trans('twiter') }}" value="{{ $about->twiter }}"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;{{ trans('instgram') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="instgram"  placeholder="{{ trans('instgram') }}" value="{{ $about->instgram }}"> 
                                        </div>
                                </div>

                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;{{ trans('google_plus') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="google_plus"  placeholder="{{ trans('google_plus') }}" value="{{ $about->google_plus }}"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;{{ trans('offic one') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="offic_one"  placeholder="{{ trans('offic one') }}" value="{{ $about->offic_one }}"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;{{ trans('offic two') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="offic_two"  placeholder="{{ trans('offic two') }}" value="{{ $about->offic_two }}"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="">&nbsp;&nbsp;&nbsp;{{ trans('email') }}</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa  fa-square"></i></div>
                                            <input type="text" class="form-control" name="email"  placeholder="{{ trans('email') }}" value="{{ $about->email }}"> 
                                        </div>
                                </div>

                              <div class="form-group col-md-12">
                                          <label for="">{{ trans('About Us in english') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="about"
                                                     placeholder="{{ trans('About Us in english') }}">{{$about->about}} </textarea> 
     
                                          </div>
                               </div>


                              <div class="form-group col-md-12">
                                          <label for="">{{ trans('About Us In Arabic') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="about_ar"
                                                     placeholder="{{ trans('About Us In Arabic') }}">{{$about->about_ar}} </textarea> 
     
                                          </div>
                               </div>




                              <div class="form-group col-md-12">
                                          <label for="">{{ trans('English content') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="conten"
                                                     placeholder="{{ trans('English content') }}">{{$about->conten}} </textarea> 
     
                                          </div>
                               </div>
                              <div class="form-group col-md-12">
                                          <label for="">{{ trans('Arabic content') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="content_ar"
                                                     placeholder="{{ trans('Arabic content') }}">{{$about->content_ar}} </textarea> 
     
                                          </div>
                               </div>

                              <div class="form-group col-md-12">
                                          <label for="">{{ trans('English history') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="history"
                                                     placeholder="{{ trans('English history') }}">{{$about->history}} </textarea> 
     
                                          </div>
                               </div>

                              <div class="form-group col-md-12">
                                          <label for="">{{ trans('Arabic history') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="history_ar"
                                                     placeholder="{{ trans('Arabic history') }}">{{$about->history_ar}} </textarea> 
     
                                          </div>
                               </div>

                                <div class="form-group col-md-12">
                                          <label for="">{{ trans('English description') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="description"
                                                     placeholder="{{ trans('English description') }}">{{$about->description}} </textarea> 
     
                                          </div>
                               </div>   


                                <div class="form-group col-md-12">
                                          <label for="">{{ trans('Arabic description') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="description_ar"
                                                     placeholder="{{ trans('Arabic description') }}">{{$about->description_ar}} </textarea> 
     
                                          </div>
                               </div>   

                                <div class="form-group col-md-12">
                                          <label for="">{{ trans('English defination') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="defination"
                                                     placeholder="{{ trans('English defination') }}">{{$about->defination}} </textarea> 
     
                                          </div>
                               </div> 


                                <div class="form-group col-md-12">
                                          <label for="">{{ trans('Arabic defination') }}</label>  
                                          <div class="input-group">

                                              <textarea type="text" class="form-control" " name="defenation_ar"
                                                     placeholder="{{ trans('Arabic defination') }}">{{$about->defenation_ar}} </textarea> 
     
                                          </div>
                               </div> 

                                {!! method_field('put') !!}
                  


                               <div class="form-group">
                                     <div class="col-md-12">
                                     
                                    <button type="submit" id="submit" class="btn btn-info btn-circle btn-lg"  data-toggle="tooltip" data-original-title="{{ trans('backend.update') }}"><i class="fa fa-check"></i> </button>

                                    
                                </div>
                                </div>

                                

                                {!! Form::close() !!}


                                
                        </div>
                        <!-- /tabs -->
                    </section>
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
                message:         '<div class="dropify-message"><span class="file-icon" /> <p>{{ trans("about.select_images") }}</p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ trans("about.select_images_note") }}</p></div></div></div>',
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