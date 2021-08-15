<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Scholar.css">  
        <!-- SCRIPT -->
        <script src="/js/Scholar.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="fonts/simple-line-icons/simple-line-icons.min.css">
        <link rel="stylesheet" href="fonts/font-awesome-css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/material-design-icons/material-icon.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">
        

    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  

      <div class="menu">   
        <ul><li>
        <a href="#" style="float:right;margin:0vw 0vw 0vw 0vw;">{{ Auth::user()->student_id }}</a>
        <ul>
        <li><a href="profilestudent">Profile</a></li><br>
        <li><a href="calendar">Calendar</a></li><br>
        <li><a href="scholarshipprograms">Scholarship Programs</a></li><br>
        <li><a href="loginstudent">Log Out</a></li>
        </ul>
        </ul></li>
        </div>

<!-- Page Content -->

<div class="alert" style="font-size:1.5vw;">
  <b>Notice:</b>
  All scholars must upload all necessary files.
</div>


  <div class="columnhome">
    <img class="square" src="/images/apply.jpg" alt="Snow" style="width:70%; margin-left:-2vw;">
  </div>
  <a href="apply"><button type="button" class="homebutton" style="top: 35vw; left: 6vw; height:5vw; width:25vw; font-size:1.8vw;">Apply for TES</button></a>

  <div class="columnhome">
    <img class="square" src="/images/update.jpg" alt="Forest" style="width:70%; margin-left:-17vw;">
    <a href="scholarshipdetails"><button type="button" class="homebutton" style="top: 35vw; left: 37vw; width:25vw; height:5vw; font-size:1.8vw;">Update Scholarship</button></a>
</div>

<div class="columnhome">
    <img class="square" src="/images/upload.jpg" alt="Mountains" style="width:70%; margin-left:61vw; margin-top:-30vw;">
</div>
<a href="upload"><button type="button" class="homebutton" style="top: 35vw; left: 68.8vw; width:25vw; height:5vw; font-size:1.8vw;">Upload Free Higher Education Form</button></a>


</body>
</html>
