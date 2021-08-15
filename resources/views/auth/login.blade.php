<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Scholar.css">  
        <!-- SCRIPT -->
        <script src="/js/Scholar.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="icon" href="/images/mmsu logo.png">
    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:8vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <h4>MMSU SCHOLAR'S PORTAL</h4>
        </div>
    
        <!--Login-->

        <div class="logincontainer">
            <div class="wrapper">
            <div class="title"><span>Student Login</span></div>
          <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="row">
           
            <input type="text" name="email" placeholder="Student ID/Examinee No">
          </div>
          <div class="row">
           
            <input type="password" name="password" placeholder="Password">
          </div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" style="color:white;"/>
          <div class="signup-link">Not a member? <a href="register">{{ __('Register') }}</a></div>
          <div class="row button"> <br>
          <button type="submit" class="btnlogin">{{ __('Log in') }}</button>
          </div>
      </div>
    </div>
            
  
    </body>
</html>
