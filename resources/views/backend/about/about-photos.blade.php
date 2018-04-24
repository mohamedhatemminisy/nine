@extends('backend.app')

@section('page_title' , trans('about.about_photos'))


@section('breadcrumb')


                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ trans('about.about_photos') }}</h4> 
                    </div>
@endsection  


@section('content')


    
                     <div class="col-sm-12">
                         <div class="white-box">
                            <h3 class="box-title m-b-0">{{ trans('about.about_photos') }}</h3>

                        </div>
                        <div class="white-box">
                            <div id="image-popups" class="row">
                                

                                @if(count($photos))
                                @foreach($photos as $photo)
                                <div class="col-sm-4">
                                    

                                    <a href="{{ asset("uploads/about/$photo->Photo") }}" data-effect="mfp-3d-unfold">

                                        <img src="{{ asset("uploads/about/$photo->Photo") }}" class="img-responsive" />
                                    
                                    </a>

                            
                                    <button  id="any_{{ $photo->id }}" onclick="$('.photo_form_{{ $photo->id }}').submit();"  class="btn btn-primary btn-sm btn-block text-center" style="margin-top: 5px;">{{ trans('about.about_delete') }}</button>

                                     {!! Form::open(['route'=>["destroy-image" , $photo->id ] , 'class'=>"photo_form_$photo->id" ]) !!}

                                        {!! method_field('DELETE') !!}



                                     {!! Form::close() !!}



                                </div>
                                @endforeach
                                @else
                                    
                                    <p class="text-center">{{ trans('about.about_photos_zero') }}</p>
                                    
                                @endif
                             
                                 
                                 
                                 
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