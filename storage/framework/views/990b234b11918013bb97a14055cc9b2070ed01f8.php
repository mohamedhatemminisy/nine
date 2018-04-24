<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>موقع قطرة </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript,Jquery,php">
    <meta name="description" content="   Ghatra  ">
    <meta name="author" content=" Ghatra  ">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <link rel="icon" href="<?php echo e(asset('frontend/assets/images/logo.png')); ?>">

    <!-- start css files-->
    
    <link href="<?php echo e(asset('frontend/assets/css/bootstrap-arabic.min.css')); ?>" rel="stylesheet" type="text/css" />
   <link href="<?php echo e(asset('frontend/assets/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css"/>
     <link href="<?php echo e(asset('frontend/assets/css/animate.css')); ?> " rel="stylesheet" type="text/css"/>
     <link href="<?php echo e(asset('frontend/assets/css/bootstrap-select.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/claender/bootstrap-datepicker3.min.css')); ?>" /> 
    <link href="<?php echo e(asset('frontend/assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- end css files-->
 
</head>

<body>

    <!-- start top menu-->
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-8 search ui-widget">    
                        <input id="tags" type="text" class="form-control search-input" placeholder="ابحث عما تريد " />  
                        <i id="search-btn" class="fa fa-search"></i>  
                </div>
                <div class="social">
                   
                    
                    <?php if(Auth::check()): ?>
                    
                    	<a class="login" href="<?php echo e(url('/dashboard')); ?>"> لوحة التحكم </a>
                    
                    <?php else: ?>
                    	<a class="signup" href="<?php echo e(url('register')); ?>">التسجيل</a>
                    	<a class="login" data-toggle="modal" data-target="#Modal-login"> تسجيل الدخول</a>
                    
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- login modal ----->
          <div id="Modal-login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">تسحيل الدخول  </h4>
      </div>
      <div class="modal-body">
       <?php echo Form::open( array('url' => array('authenticate' ), 'id'=> 'login_form','method'=>'POST')); ?>

                
               
               <div class="form-group">
                     <label  for="email"> ادخل البريد الالكترونى او رقم الجوال  <span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="text" class="form-control" id="txt_user_check" placeholder="ادخل البريد الالكترونى او الجوال" name="txt_user_check" >
                 </div>
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-user"></i>
                 </div>
                     </div>
                 </div>
             
              <div class="form-group">
                     <label  for="text"> كلمه المرور<span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="password" class="form-control" id="password" placeholder="ادخل كلمة المرور" name="password" >
                      </div> 

                      
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-lock"></i>
                 </div>

                 <div class="col-xs-10 " id="login_result">  
                           
                      </div>
                </div>
                 </div>
             <!--
             <div class="hr-span"></div>
             <div class="or"><p>او التسجيل بالجوال</p></div>
             
             <div class="form-group">
                         <label  for="text">رقم الجوال<span>* </span></label>
                         <div class="col-xs-12">
                          <div class="col-xs-10">  
                         <input type="tel" class="form-control" id="text" placeholder="رقم الجوال " name="text">
                     </div>
                     <div class="col-xs-2 form-icon">
                         <i class="fa fa-phone"></i>
                     </div>
                     </div>
                 </div>-->
             
              <button type="submit" class="btn btn-form">تسجىل الدخول </button> 
             <span  class="new"><a href="<?php echo e(url('register')); ?>"> مستخدم جدىد</a></span>
             <div class="rember"><p><a data-toggle="modal" data-target="#Modal-remeber">هل نسيت كلمة المرور</a></p></div>
             
          <?php echo Form::close(); ?>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
      </div>
    </div>
    </div>
</div>
       
    <!-- end login modal -->
    
     <!-- remeber modal ----->
          <div id="Modal-remeber" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">نسيت كلمة المرور    </h4>
      </div>
      <div class="modal-body">
         <form method="action" >
             
               <div class="form-group">
                     <label  for="email"> ادخل البريد الالكترونى او رقم الجوال  <span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="text" class="form-control" id="email" placeholder="  ادخل البريد الالكترونى او الجوال   " name="email" required>
                 </div>
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-user"></i>
                 </div>
                     </div>
                 </div>
                 
              <button type="submit" class="btn btn-form"> ارسال   </button> 
             
          </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
      </div>
    </div>
    </div>
</div>
       
    <!-- end login modal -->

    <!-- end start top menu-->
    <!-- start nav menu -->
   
    <!-- end nav menu -->