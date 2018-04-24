@extends('frontend.app')


@section('content')

    <div class="banner">
        <div class="background about-banner">
        </div>
        <div class="container banner-content-wrapper">
            <div class="row">
                <div class="col-12 text-center logo-banner">
                    <img src="{{ asset('frontend/assets/img/logo-banner.png')}}" alt="">
                </div>
            </div>

        </div>
    </div>
 


    <div class="our-services our-history">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="our-history-title">Our history <span class="border-our-history"></span></h2>
                <p class="our-history-paragraph">{{$header->history}}</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-12 col-md-4 our-hist">
                    <h2><a href="#">Our Description</a></h2>
                    <p>{{$header->description}}</p>
                </div>
                <div class="col-sm-12 col-12 col-md-4 our-hist">
                    <img src="{{ asset('frontend/assets/img/car-our-histroy.png')}}" alt="">
                </div>
                <div class="col-sm-12 col-12 col-md-4 our-hist">
                    <h2><a href="#">Our Defination</a></h2>
                    <p>{{$header->defination}} </p>
                </div>
            </div>
            <div class="col-12 text-center brands-slider">
                <h2>Brands</h2>
                <p>Some Featuered Brands</p>
            </div>
            <div class="col-10 col-sm-12 slider-brands">
                <div class="inner-slider-brands">
                	@foreach($brands as $brand)
                    <img src="{{ asset("uploads/brands/$brand->photo") }}" alt="">
                    @endforeach

                </div>
                <a href="#" class="arrow-brands arrow-brands-right"> <i class="fa fa-angle-right"></i></a>
                <a href="#" class="arrow-brands arrow-brands-left"> <i class="fa fa-angle-left"></i></a>
            </div>
        </div>
    </div>



        <div class="company-team our-history">
        <div class="container">
            <div class="col-12 text-center">
                <h2 class="our-history-title">Company Team<span class="border-our-history"></span></h2>
            </div>
            <div class="content-company-team">
                <div class="row">
                  @foreach($members as $member)
                    <div class="col-md-4 col-sm-6 col-12 company-team-card">
                        <div class="card">
                            <div class="img-top">
                                <img class="card-img-top" src="{{ asset("uploads/teams/$member->photo") }}" style="width: 335px;height: 260px;" alt="Card image cap">
                                <span class="slogan-img"><img src="{{ asset("uploads/teams/$member->photo") }}" alt=""></span>
                            </div>
                            <div class="card-body">
                                <h5>{{$member->career}}</h5>
                                <h2 class="card-title">{{$member->name}}</h2>
                                <p class="card-text">{{$member->description}}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach


                </div>
            </div>
        </div>
    </div>





 @endsection