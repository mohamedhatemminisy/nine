<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello, world!</title>
    
 
    <!-- start css files-->
    {{-- {{ asset('frontend/assets/')}}  --}}
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
     <link href="{{ asset('frontend/assets/css/slick.css')}} " rel="stylesheet" type="text/css"/>
     <link href="{{ asset('frontend/assets/css/main.css')}} " rel="stylesheet" type="text/css"/>
     <!-- end css files-->
 
</head>

<body>

  <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right">
                    <a href="{{$header->Facebook}}" target="_blank" class="social-top"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="{{$header->twiter}}" target="_blank" class="social-top"><i class="fa fa-twitter fa-fw"></i></a>
                    <a href="{{$header->instgram}}" target="_blank" class="social-top"><i class="fa fa-instagram fa-fw"></i></a>
                    <a href="{{$header->google_plus}}" target="_blank" class="social-top"><i class="fa fa-google-plus fa-fw"></i></a>
                </div>
            </div>
        </div>
    </div>

        <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3">
                    <h1 class="logo"><a href="/"><img src="{{ asset('frontend/assets/img/logo.png')}}" alt=""></a></h1>
                </div>
                <div class="col-6 col-md-8  col-lg-9">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-collaps"><i class="fa fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url("/about_us") }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url("/services") }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link contact-bag" href="{{ url("/contact_seccion")}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>