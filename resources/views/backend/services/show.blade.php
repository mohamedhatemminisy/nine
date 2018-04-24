@extends('backend.app')

@section('page_title' , trans('Service Photos'))

@section('breadcrumb')


					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('show service photo') }}</h4> 
                    </div>

                  



@endsection  


@section('styles')


 
@endsection



 

@section('content')
				  
    
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <ul class="nav customtab nav-tabs" role="tablist">
                               
                    
                                
                                <li role="presentation" class="nav-item"><a href="#images" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">{{ trans('service photo') }}</span></a></li>

                         
                            </ul>
                            <div class="tab-content">
                                
 
                                
                                <div class="tab-pane" id="images">
                                     
                                 <div class="col-sm-12">

                                        <div class="white-box">
                                            <h3 class="box-title m-b-0">{{ trans('service image') }}</h3>
                                            <div id="image-popups" class="row">
                                                

                                                @if(count($photos))
                                                @foreach($photos as $photo)
                                                <div class="col-sm-2">
                                                    <a href="{{ asset("uploads/services/$photo->name") }}" data-effect="mfp-3d-unfold"><img src="{{ asset("uploads/services/$photo->name") }}" class="img-responsive" />
                                                        </a>
                                                        <button  id="any_{{ $photo->id }}" onclick="$('.photo_form_{{ $photo->id }}').submit();"  class="btn btn-primary btn-sm btn-block text-center" style="margin-top: 5px;">{{ trans('Delete Image') }}</button>

                                              {!! Form::open(['route'=>["destroy-item-image" , $photo->id ] , 'class'=>"photo_form_$photo->id" ]) !!}

                                        {!! method_field('DELETE') !!}



                                     {!! Form::close() !!}
                                                </div>
                                                @endforeach
                                                @else
                                                    
                                                    <p class="text-center">{{ trans('This service has no images') }}</p>
                                                    
                                                @endif
                                             
                                                 
                                                 
                                                 
                                            </div>
                                        </div>
                                    </div>

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
                message:         '<div class="dropify-message"><span class="file-icon" /> <p>{{ trans("backend.pharmaceutical_select_images") }}</p></div>',
                preview:         '<div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-infos-message">{{ trans("backend.pharmaceutical_select_images_note") }}</p></div></div></div>',
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


 