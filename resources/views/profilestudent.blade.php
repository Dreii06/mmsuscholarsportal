<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | Profile</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/Scholar.css">  
        <!-- SCRIPT -->
        <script src="/js/Scholar.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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



        <!--Profile-->


        <br>
  
        <div class="w3-card-4" style="width: 65vw; margin-left:20vw;">
    <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
    <h2 style="color:#fff; font-weight:bolder;">Personal Data Sheet</h2>
    </div>
  
    <form class="w3-container" action="/profilestudent" method="POST" >
        @csrf

    <p> <br>     
    <label class="w3-text-black" style="font-size:1.3vw;"><b>FULL NAME</b></label><br><br>
    <label class="w3-text-black">First Name</label>
    <input class="w3-input w3-border w3-sand" style="width:62vw;" name="first" type="text" placeholder="{{ Auth::user()->first_name }}" required="required"/></p>
   
    <p>      
    <label class="w3-text-black">Middle Name</label>
    <input class="w3-input w3-border w3-sand" name="middle" type="text" placeholder="{{ Auth::user()->middle_name }}" required="required"/></p>

    <p>      
    <label class="w3-text-black">Last Name</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="{{ Auth::user()->last_name }}" required="required"/></p>

    <p>      
    <label class="w3-text-black">Suffix</label>
    <input class="w3-input w3-border w3-sand" name="suffix" type="text" placeholder="{{ Auth::user()->suffix }}"></p><br>


    <p>      
    <label class="w3-text-black">Student ID/Examinee Number</label>
    <input class="w3-input w3-border w3-sand" type="text" placeholder="{{ Auth::user()->student_id }}"></p>
    
    <p>      
    <label class="w3-text-black">Mobile Number</label>
    <input class="w3-input w3-border w3-sand" name="mobile_num" type="text" placeholder="{{ Auth::user()->mobile_num }}"></p>

    <label class="w3-text-black">Sex</label><br>
    <select name="sex" id="room" style="width:100%;"class="inputapp">
        <option selected disable hidden value="{{ Auth::user()->sex }}">{{ Auth::user()->sex }}</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>


    <label class="w3-text-black">College</label><br>
    <select name="college" style="width:100%;" id="college" onchange="myFunction()" class="inputapp">
        <option selected disable hidden value="{{ Auth::user()->college }}">{{ Auth::user()->college }}</option>
        <option value="CAS">CAS</option>
        <option value="COE">COE</option>
        <option value="CBEA">CBEA</option>
        <option value="CHS">CHS</option>
        <option value="CIT">CIT</option>
        <option value="CTE">CTE</option>
        <option value="CASAT">CASAT</option>
        <option value="CAFSD">CAFSD</option>
        </select>


        <label class="w3-text-black">Course</label><br>
    <select name="course" style="width:100%;" id="course" class="inputapp">
    <option selected disable hidden value="{{ Auth::user()->course }}">{{ Auth::user()->course }}</option>
    <!--CAS-->
            <option data-tag="CAS" value="1">AB in Communication</option>
            <option data-tag="CAS" value="2">AB in English Language</option>
            <option data-tag="CAS" value="3">AB in Sociology</option>
            <option data-tag="CAS" value="4">BS in Biology</option>
            <option data-tag="CAS" value="5">BS in Computer Science</option>
            <option data-tag="CAS" value="6">BS in Information Technology</option>
            <option data-tag="CAS" value="7">BS in Mathematics</option>
            <option data-tag="CAS" value="8">BS in Meteorology</option>

    <!--COE-->
            <option data-tag="COE" value="9">BS in Agricultural and Biosystems Engineering</option>
            <option data-tag="COE" value="10">BS in Civil Engineering</option>
            <option data-tag="COE" value="11">BS in Electrical Engineering</option>
            <option data-tag="COE" value="12">BS in Mechanical Engineering</option>
            <option data-tag="COE" value="13">BS in Chemical Engineering</option>
            <option data-tag="COE" value="14">BS in Ceramic Engineering</option>
            <option data-tag="COE" value="15">BS in Computer Engineering</option>
            <option data-tag="COE" value="16">BS in Elect. and Comm. Engineering</option>

    <!--CBEA-->

            <option data-tag="CBEA" value="17">BS in Accountancy</option>
            <option data-tag="CBEA" value="18">BS in Economics</option>
            <option data-tag="CBEA" value="19">BS in Business Administration</option>
            <option data-tag="CBEA" value="20">BS in Cooperative Management</option>
            <option data-tag="CBEA" value="21">BS in Accounting Technology</option>
            <option data-tag="CBEA" value="22">BS in Entrepreneurship</option>
            <option data-tag="CBEA" value="23">BS in Hospitality Management</option>
            <option data-tag="CBEA" value="24">BS in Tourism Management</option>

    <!--CHS-->

            <option data-tag="CHS" value="25">BS in Nursing</option>
            <option data-tag="CHS" value="25">BS in Physical Therapy</option>
            <option data-tag="CHS" value="27">BS in Pharmacy</option>

    <!--CIT-->

            <option data-tag="CIT" value="28">Bachelor in Automotive Technology (Ladder-type)</option>
            <option data-tag="CIT" value="29">BS in Industrial Education</option>
            <option data-tag="CIT" value="30">BS in Industrial Technology</option>

    <!--CTE-->

            <option data-tag="CTE" value="31">Bachelor in Secondary Education</option>
            <option data-tag="CTE"  value="32">Bachelor in Elementary Education</option>

    <!--CASAT-->

            <option data-tag="CASAT" value="33">BS in Marine Biology</option>
            <option data-tag="CASAT" value="34">BS in Fisheries</option>

    <!--CAFSD-->

            <option data-tag="CAFSD" value="35">BS in Agriculture</option>
            <option data-tag="CAFSD" value="36">BS in Forestry</option>
            <option data-tag="CAFSD" value="37">BS in Development Communication</option>
            <option data-tag="CAFSD" value="38">BS in Home Technology</option>
            <option data-tag="CAFSD" value="39">BS in Environmental Science</option>
            <option data-tag="CAFSD" value="40">BS in Agricultural Technology</option>
        </select>

    <label class="w3-text-black">Year Level</label><br>
    <select name="year_level" id="room" style="width:100%;"class="inputapp">
    <option selected disable hidden value="{{ Auth::user()->year_level }}">{{ Auth::user()->year_level }}</option>
            <option value="1st">1st Year</option>
            <option value="2nd">2nd Year</option>
            <option value="3rd">3rd Year</option>
            <option value="4th">4th Year</option>
        </select>


    <p><br>
    <label class="w3-text-black" style="font-size:1.2vw;"><b>ADDRESS</b></label><br><br>
    <label class="w3-text-black">House/Block/Lot No.</label>
    <input class="w3-input w3-border w3-sand" name="house_num" type="text" placeholder="{{ Auth::user()->house_num }}"></p>

    <p>      
    <label class="w3-text-black">Street</label>
    <input class="w3-input w3-border w3-sand" name="street" type="text" placeholder="{{ Auth::user()->street }}"></p>

    <p>      
    <label class="w3-text-black">Brgy.</label>
    <input class="w3-input w3-border w3-sand" name="barangay" type="text" placeholder="{{ Auth::user()->barangay }}"></p>

    <p>      
    <label class="w3-text-black">City/Municipality</label>
    <input class="w3-input w3-border w3-sand" name="city" type="text" placeholder="{{ Auth::user()->city }}"></p>

    <p>      
    <label class="w3-text-black">Province</label>
    <input class="w3-input w3-border w3-sand" name="province" type="text" placeholder="{{ Auth::user()->province }}"></p><br><br>


</div>

<a href="/dashboard"><button type="button" class="greenbutton" style="  margin-top: 2vw; margin-bottom:2vw; margin-right:25vw;margin-left:0vw">CANCEL</button></a>
        <button type="submit" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:2vw;margin-right:12vw;"> UPDATE</button>

    </form>
</body>
</html>