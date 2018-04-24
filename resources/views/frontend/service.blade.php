@extends('frontend.app')


@section('content')
  

    <div class="banner banner-inside-pages">
        <div class="banner-content-wrapper">
            <div id="carouselExampleIndicators" class="carousel slide slider-services" data-ride="carousel">
            @foreach ($service as $serve)
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                   @php
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(1)->get();
                   @endphp

                       @foreach($photos as $photo)
                            <img class="d-block w-100" src="{{ asset("uploads/services/$photo->name") }}" alt="First slide">
                       @endforeach
                            </div>
                   @php
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(2)->skip(1)->get();
                   @endphp

                        @foreach($photos as $photo)
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset("uploads/services/$photo->name") }}" alt="Second slide">
                            </div>
                        @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="fa fa-angle-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="fa fa-angle-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="col-md-6 col-12 services-content">
                        <h2>{{$serve->name}}</h2>
                        <p>{{$serve->description}}.</p>
                        <a href="#">Get Service</a>
                        <div class="clearfix"></div>
                        <div class="controll-slider">
                            <ol class="carousel-indicators">
                   @php
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(1)->get();
                   @endphp
                          @foreach($photos as $photo)
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                    <img class="d-block w-100" src="{{ asset("uploads/services/$photo->name") }}" alt="First slide">
                                </li>
                          @endforeach
                   @php
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(1)->skip(1)->get();
                   @endphp
                          @foreach($photos as $photo)
                                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                    <img class="d-block w-100" src="{{ asset("uploads/services/$photo->name") }}" alt="First slide">
                                </li>
                           @endforeach

                   @php
                   $photos = App\ServiceImage::where('service_id',$serve->id)->take(1)->skip(2)->get();
                   @endphp
                           @foreach($photos as $photo)
                                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                    <img class="d-block w-100" src="{{ asset("uploads/services/$photo->name") }}" alt="First slide">
                                </li>
                            @endforeach
                            </ol>
                        </div>
                        
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>





    <div class="our-services">
        <div class="container">
            <div class="row">

            @foreach($services as $service)
                <div class="col-sm-6 col-12 col-md-4 our-serv">
               @php
               $photos = App\ServiceImage::where('service_id',$service->id)->take(1)->get();
               @endphp
                  @foreach($photos as $photo)
                    <img src="{{ asset("uploads/services/$photo->name") }}" alt="">
                  @endforeach
                    <h2><a href="#">{{$service->name}}</a></h2>
                    <p>{{$service->description}}</p>
                </div>
            @endforeach


            </div>
        </div>
    </div>
	
	


   
    <div class="contact-form" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form">
                        <h3>Contact us</h3>
                        {!! Form::open(['route'=>['visitorsMessages.store'],'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'add_company']) !!}
                            <label for="Name">Full Name</label>
                            <input type="text" name="name" id="Name" class="form-control" required="required">

                            <label for="Email">Email</label>
                            <input type="email" name="email" id="Email" class="form-control" required="required">

                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required="required">

                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" required="required"></textarea>
                            <input type="submit" value="Submit" class="submit-contact-form">
                        </form>
                    </div>

                </div>
                <div class="col-12 col-lg-6 information-contact">
                    <img src="{{ asset('frontend/assets/img/logo.png')}}" alt="">
                    <h3>About Us</h3>
                    <p>{{$header->about}}</p>
                </div>
            </div>
        </div>
    </div>
  

 @endsection