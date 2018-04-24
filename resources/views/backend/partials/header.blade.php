<!DOCTYPE html>



<!-- You Are So Fucking Nightmare --> 

@php  $lang = LaravelLocalization::getCurrentLocale();  @endphp 



<html lang="{{ $lang }}" dir="{!! $lang == 'ar' ? 'rtl':'ltr' !!}">

 
<head>



    




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/assets/fav.png') }}">



    <title>@yield('page_title')</title>

 
     
    

    @if($lang == "ar")

            <!-- needed for RTL --> 

           {{ Html::style('backend/assets/plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css') }}

    @else
        
            <!-- needed for LTR  -->        
           {{ Html::style('backend/assets/bootstrap/dist/css/bootstrap.min.css') }}
   
           {{ Html::style('backend/assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css') }}

    @endif



    <!-- jGrid Tables --> 

   
      {{ Html::style('backend/assets/plugins/bower_components/jsgrid/dist/jsgrid.min.css') }}
   
      {{ Html::style('backend/assets/plugins/bower_components/jsgrid/dist/jsgrid-theme.min.css') }}


    <!-- Switchery --> 
       
         {{ Html::style('backend/assets/plugins/bower_components/switchery/dist/switchery.min.css') }}


    <!-- dropfy --> 
      
     {{ Html::style('backend/assets/plugins/bower_components/dropify/dist/css/dropify.min.css') }}



     <!-- Sweet Alert --> 
     {{ Html::style('backend/assets/plugins/bower_components/sweetalert/sweetalert.css') }}
    
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>



     <!-- summer note  --> 
      <!-- summernotes CSS -->
 
    {{ Html::style('backend/assets/plugins/bower_components/summernote/dist/summernote.css') }}
    

    <!-- Drop zone css --> 
   
    {{ Html::style('backend/assets/plugins/bower_components/dropzone-master/dist/dropzone.css') }}


    <!-- Owl Careousel --> 
    <!--My admin Custom CSS -->
  
    {{ Html::style('backend/assets/plugins/bower_components/owl.carousel/owl.carousel.min.css') }}
 
    {{ Html::style('backend/assets/plugins/bower_components/owl.carousel/owl.theme.default.css') }}



    <!-- custom selects and plus --> 

   
     {{ Html::style('backend/assets/plugins/bower_components/custom-select/custom-select.css') }}
 
     {{ Html::style('backend/assets/plugins/bower_components/switchery/dist/switchery.min.css') }}
    
     {{ Html::style('backend/assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}
    
     {{ Html::style('backend/assets/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}
  
     {{ Html::style('backend/assets/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}

    <!-- light box --> 
   
    {{ Html::style('backend/assets/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css') }}

    <!-- Bootstrap Select --> 
   
     {{ Html::style('backend/assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}
  
    {{ Html::style('backend/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}
    
    {{ Html::style('backend/assets/plugins/bower_components/toast-master/css/jquery.toast.css') }}
    
    {{ Html::style('backend/assets/plugins/bower_components/morrisjs/morris.css') }}
   
    {{ Html::style('backend/assets/css/animate.css') }}


    {{ Html::style('backend/assets/css/spinners.css') }}
  
    {{ Html::style("backend/assets/css/style-$lang.css") }}
 
    {{ Html::style('backend/assets/css/colors/blue.css') }}

   <link href="{{Request::root()}}/backend/assets/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />



    @yield('styles')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">



        