<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>موقع قطرة -- التسجيل </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript,Jquery,php">
    <meta name="description" content="   Ghatra  ">
    <meta name="author" content=" Ghatra  ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="icon" href="{{ asset('frontend/assets/images/logo.png')}}">

    <!-- start css files-->
    {{-- {{ asset('frontend/assets/')}}  --}}
    <link href="{{ asset('frontend/assets/css/bootstrap-arabic.min.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
     <link href="{{ asset('frontend/assets/css/animate.css')}} " rel="stylesheet" type="text/css"/>
     <link href="{{ asset('frontend/assets/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/claender/bootstrap-datepicker3.min.css')}}" /> 
    <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- end css files-->
 
</head>

<body class="body">