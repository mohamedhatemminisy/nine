@extends('frontend.app')


@section('content')
  
  
    <div class="banner">
        <div class="background">
        </div>
        <div class="container banner-content-wrapper">
            <div class="row">
                <div class="col-12 col-xl-7 offset-xl-5  col-lg-8 offset-lg-4 col-md-10 offset-md-1 col-sm-11 offset-sm-1  banner-content">
                    <h2>Our Definition</h2>
                    <p>{{$abouts->defination}}</p>
                </div>
 

            </div>

        </div>
    </div>
    <!-- get our service -->
    <div class="our-services">
        <div class="container">
            <div class="row">
             @foreach($service as $ser)
                <div class="col-sm-6 col-12 col-md-4 our-serv">
                   @php
                   $photos = App\ServiceImage::where('service_id',$ser->id)->take(1)->get();
                   @endphp
                    @foreach($photos as $photo)
                    <img src="{{ asset("uploads/services/$photo->name") }}"" style="width:330px;height: 170px;" alt="">
                    @endforeach
                    <h2><a href="#">{{$ser->name}}</a></h2>
                    <p>{{$ser->description}}</p>
                    
                </div>
              @endforeach
            </div>
        </div>
    </div>
    <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
          
           @foreach($slider as $slid)

                <div class="carousel-item active">
                    <img src="{{ asset("uploads/sliders/$slid->photo") }}" style="width: 1400px" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h5 class="fit-text1">{{$slid->name}}</h5>
                            <p class="fit-text2">{{$slid->description}}</p>
                            <a href="#">More</a>
                        </div>
                    </div>
                 </div>
            @endforeach
 
            @foreach($sliders as $slide)

              <div class="carousel-item">
                    <img src="{{ asset("uploads/sliders/$slide->photo") }}" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <h5>{{$slide->name}}</h5>
                            <p>{{$slide->description}}</p>
                            <a href="#">More</a>
                        </div>
                    </div>
                </div> 
       
            @endforeach
          
           
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="cars">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="car-item">
                        <img src="{{ asset('frontend/assets/img/car-1.png')}}" alt="" class="car-1">
                        <img src="{{ asset('frontend/assets/img/logo.png')}}" alt="" class="cars-logo">
                        <h2>What is Lorem Ipsum</h2>
                        <p>Lorem Ipsum is simply dummy text</p>
                        <a href="#">View Car</a>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="car-item-2">
                        <img src="{{ asset('frontend/assets/img/car-2.png')}}" alt="" class="car-2">
                        <img src="{{ asset('frontend/assets/img/logo.png')}}" alt="" class="cars-logo">
                        <h2>What is Lorem Ipsum</h2>
                        <p>Lorem Ipsum is simply dummy text</p>
                        <a href="#">View Car</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="contact-form" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="form">
                        <h3>Contact us</h3>
          @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                        {!! Form::open(['route'=>['visitorsMessages.store'],'method'=>'POST','class'=>'form-horizontal ','role'=>'form','files'=> true , 'id'=>'add_company']) !!}
                            <label for="Name">Full Name</label>
                            <input type="text" name="name" id="Name" placeholder="Name" class="form-control" required="required">

                            <label for="Email">Email</label>
                            <input type="email" name="email" placeholder="Email" id="Email" class="form-control" required="required">

                            <label for="phone">Phone</label>
                            <input type="number" name="phone" id="phone" placeholder="Phone" class="form-control" required="required">

                            <label for="message">Message</label>
                            <textarea name="message" id="message" placeholder="Message" cols="30" rows="5" class="form-control" required="required"></textarea>
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