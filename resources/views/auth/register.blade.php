@extends('auth.app')


@section('content')


@php 
    


    $lang = LaravelLocalization::getCurrentLocale(); 

    $language = \App\Language::where(['label'=>$lang])->first(); 

    $language_id = $language->id ; 


@endphp

	
	<section class="form">
        <div class="form-transparent">
    <div class="container">
      
           <div class="row center-form">
                <div class="col-sm-4">
                     <div class="select">
                        <label>من فضلك قم بإختيار التخصص</label>
                        <select class="form-control selectpicker" id="specialization" name="specialization" >
                             
                        
                        <option value="hospital" >مستشفى </option>
                        <option value="medicalSupplies">مستلزمات طبية</option>
                        <option value="pharmacy">صيدلية</option>
                        <option value="pharmaCompany"> شركات ادوية</option>
                        <option value="doctor">طبيب  </option>         
                      </select>
                    </div>
                </div>

                <div class="col-sm-4">
                </div>

                <div class="col-sm-4">
                        
                        <a href="{{ url('/') }}" class="btn btn-form back-btn">الرجوع الى الصفحة الرئيسية</a>

                </div>
           </div>
           <h4>قم بملىء البيانات المطلوبة</h4>
            {!! Form::open( array('url' => array('register' ), 'class'=>'bounceIn all-form' , 'data-wow-duration'=>'2s' , 'data-wow-offset'=>'0' , 'id'=> 'register_form','method'=>'POST'))  !!}
           {{-- <form method="post"  class="bounceIn all-form" data-wow-duration="2s" data-wow-offset="0">    --}}
              <div class="row">
                 <div class="col-sm-6">
                  <div class="form-group">
                     <label  for="text">اسم الجهة <span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">
                     <input type="text" class="form-control" id="propertyName" placeholder="ادخل اسم الجهة "  name="propertyName" >
                 </div>
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-building-o"></i>
                 </div>
                     </div>
                 </div>



                 <div class="form-group">
                         <label  for="text">رقم الجوال<span>* </span></label>
                         <div class="col-xs-12">
                          <div class="col-xs-10">  
                         <input type="tel" class="form-control" id="mobileNumber" placeholder="رقم الجوال " name="mobileNumber" >
                     </div>
                     <div class="col-xs-2 form-icon">
                         <i class="fa fa-phone"></i>
                     </div>
                     </div>
                 </div>

                 <div class="form-group">
                     <label  for="email">ادخل البريد الالكترونى  <span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="email" class="form-control" id="email" placeholder="  ادخل البريد الالكترونى  " name="email" >
                 </div>
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-envelope"></i>
                 </div>
                     </div>
                 </div>
                  

                 <div class="form-group">
                     <label  for="text"> ادخل الموقع الالكترونى<span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="text" class="form-control" id="website" placeholder="  ادخل الموقع الالكترونى   " name="website" >
                 </div>
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-link"></i>
                 </div>
                </div>
                 </div>
                     
                 <div class="form-group">
                     <label  for="email">اسم الفرع <span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="text" class="form-control" id="branchName" placeholder="  اسم الفرع  " name="branchName" >
                 </div>
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-location-arrow"></i>
                 </div>
                     </div>
                 </div>     

                 <div class="form-group">
                     <label  for="text"> كلمه المرور<span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="text" class="form-control" id="password" placeholder=" ادخل كلمة المرور   " name="password" >
                 </div>
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-lock"></i>
                 </div>
                </div>
                 </div>              
                 </div>
            
                <div class="col-sm-6">
                   


                 <div class="form-group">
                         <label  for="text">رقم السجل التجارى او الرخصة  <span>* </span></label>
                         <div class="col-xs-12">
                          <div class="col-xs-10">  
                         <input type="tel" class="form-control" id="businessRecordNumber" placeholder="رقم السجل التجارى او الرخصة " name="businessRecordNumber" >
                     </div>
                     <div class="col-xs-2 form-icon">
                         <i class="fa fa-calendar"></i>
                     </div>
                     </div>
                 </div>

                
                  

                 <div class="form-group">
                     <label  for="text">اسم الشخص المسئول<span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="text" class="form-control" id="headPersonName" placeholder="  اسم الشخص المسئول  " name="headPersonName" >
                 </div>
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-user"></i>
                 </div>
                </div>
                 </div>

                 <div class="form-group">
                     <label  for="text"> الموقع الجغرافى<span>* </span></label>
                     <div id="form-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.3825759325855!2d46.764290885515386!3d24.748068655849018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0190b5c28373%3A0xacb2e6aa8de87608!2z2KrYt9mI2YrYsSDYp9mE2LDZg9mK2Kkg2YTZhNin2KrYtdin2YTYp9iqINmI2KrZgtmG2YrYqSDYp9mE2YXYudmE2YjZhdin2Ko!5e0!3m2!1sar!2seg!4v1506567881629" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                         
                     </div>
                     <div class="col-xs-12">
                      <div class="col-xs-5">
                      <label > خط الطول</label> 
                     <input type="number" class="form-control" id="longitude" placeholder=" خط الطول  " name="longitude">
                 </div>
                 <div class="col-xs-5">
                    <label> خط العرض</label> 
                     <input type="number" class="form-control" id="latitude" placeholder=" خط العرض   " name="latitude">
                 </div>
                  
                </div>
                 </div>

                 <button type="submit" class="btn btn-form">ارسل بياناتك المسجلة</button>              
                 </div>


                
            </div><!-- end of row-->
            <br>
             <div class="form-group" id="register_result">

					

            </div>
           

            
           {{-- </form> --}}
           {!! Form::close() !!}
           <!-- end all form -->
         
       @endsection 







