<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Intelligent Interactive Evaluation For Kids </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript,Jquery,php">
    <meta name="description" content="   SEBAQ  ">
    <meta name="author" content=" SEBAQ  ">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <link rel="icon" href="<?php echo e(asset('frontend/assets/images/logo.png')); ?>" style="text-align: center;">

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

    
    <!-- login modal ----->
          <div id="Modal-login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login Form </h4>
      </div>
      <div class="modal-body">
       <?php echo Form::open( array('url' => array('authenticate' ), 'id'=> 'login_form','method'=>'POST')); ?>

                
               
               <div class="form-group">
                     <label  for="email"> Please Enter Your Email Address  <span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="text" class="form-control" id="txt_user_check" placeholder="Please Enter Your Email Address" name="txt_user_check" >
                 </div>
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-user"></i>
                 </div>
                     </div>
                 </div>
             
              <div class="form-group">
                     <label  for="text"> Password<span>* </span></label>
                     <div class="col-xs-12">
                      <div class="col-xs-10">  
                     <input type="password" class="form-control" id="password" placeholder="Please Enter Your Password" name="password" >
                      </div> 

                      
                 <div class="col-xs-2 form-icon">
                     <i class="fa fa-lock"></i>
                 </div>

                 <div class="col-xs-10 " id="login_result">  
                           
                      </div>
                </div>
                 </div>

             
              <button type="submit" class="btn btn-form">Login </button> 
             
             
          <?php echo Form::close(); ?>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
</div>
       
    <!-- end login modal -->
    
     <!-- remeber modal -->
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