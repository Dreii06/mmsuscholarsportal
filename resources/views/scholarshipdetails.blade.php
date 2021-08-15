<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal | Scholarship </title>

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
        <li><a href="welcome">Log Out</a></li>
        </ul>
        </ul></li>
        </div>

        <!--Scholarship Details-->

        <div class="w3" style="margin-left:0vw;">
        <div class="w3-container" style="background-color:#E5E4E2; color:#808080; width: 1600vw; ">
        <p style="float:left; font-size:2vw; font-weight:bolder; color:#000;">Update Existing Scholarship</p>
        </div>
    
        <br>
  
  <div class="w3-card-4" style="width: 70vw; height:30vw; margin-left:15vw; margin-top:0vw;">
  <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
  <h2 style="color:#fff; font-size:1.6vw;font-weight:bolder;">Scholarship Details</h2>
  </div>

  <div class="alert" style="font-size:1.5vw;">
  <b>Notice:</b>
  Students cannot terminate if there is no scholarship added.
</div>

  <form class="w3-container" action="/scholarshipdetails" method="POST" ><br>
    @csrf
 
<script type="text/javascript">
    function EnableDisableTextBox(ddlModels) {
        var selectedValue = ddlModels.options[ddlModels.selectedIndex].value;
        var txtOther = document.getElementById("txtOther");
        txtOther.disabled = selectedValue == 33 ? false : true;
        if (!txtOther.disabled) {
            txtOther.focus();
        }
    }
</script>

<label class="w3-text-black" style="font-weight:bolder; font-size:1.4vw;">Scholarship Program</label><br>
<select name="program" id = "ddlModels" style="width:67vw;" onchange = "EnableDisableTextBox(this)">
    <option selected disable hidden value="{{ $scholar->scholarship_program }}">{{ $scholar->scholarship_program }}</option>
    <option value = "1">University Scholar</option>
    <option value = "2">College Scholar</option>
    <option value = "3">Incentive for USC Officers and SC Presidents</option>
    <option value = "4">Training Allowance for Athletes and Artists</option>
    <option value="5">Student Assistanship Program</option>
    <option value="6">Special Program for Employment of Students (SPES)</option>
    <option value="7">ATI Scholarship - Youth in Agriculture and Fisheries Program (YAFP)</option>
    <option value="8">Cash Grant to Medical Students enrolled in State Universities and Colleges (CGMS-SUCs)</option>
    <option value="9">CHED Expanded Grants-in-Aid Program for Poverty Alleviation (ESGPPA)</option>
    <option value="10">CHED FDP II</option>
    <option value="11">CHED K12 Scholarship</option>
    <option value="12">CHED SUC-Tulong Dunong</option>
    <option value="13">CHED Universal Access to Quality Education Tertiary Education (TES2)</option>
    <option value="14">Department of Agriculture-Agricultural Competitiveness Enhancement Fund Grants-in-Aid in Higher Educational (DA-ACEF GIAHEP) Scholarship</option>
    <option value="15">DAR Apayao</option>
    <option value="16">DA BFAR Scholarship</option>
    <option value="17">DOH Pre-Service Scholarship Program</option>
    <option value="18">DOST-Science Education Institute Undergraduate Scholarship/Junior Level Science Scholarship</option>
    <option value="19">Landbank Gawad Patnubay Scholarship Program</option>
    <option value="20">CHED Partylist/SSGP/Congressional/ Senate</option>
    <option value="21">CHED State Scholarship Program (Full/Half Merit)</option>
    <option value="22">CHED SAFE</option>
    <option value="23">CHED Student Financial Assistance Program (STUFAP)</option>
    <option value="24">City Government of Batac Sirib Mannalon</option>
    <option value="25">LGU Scholarships (City of Batac, City of Laoag, Bacarra, Cabugao, Dingras)</option>
    <option value="26">GSIS Scholarship Program</option>
    <option value="27">NCIP Merit-based Scholarship and Educational Assistance Program</option>
    <option value="28">OWWA Scholarship</option>
    <option value="29">Sirib Scholarship (Academic, Youth)</option>
    <option value="30">PBED Step-up Scholarship</option>
    <option value="31">Toyota Motor Philippine Foundation, Inc. Scholarship</option>
    <option value="32">Gokongwei Scholarship Program</option>
    <option value = "33">Other</option>
</select>
<br>
Other(please specify): <br>
<input type="text" id="txtOther" disabled="disabled"> <br>
        <label class="w3-text-black" style="font-weight:bolder; font-size:1.4vw;">Inclusive Year/Semester</label><br>
        <select name="year" id="room" style="width:100%;"class="inputapp">
            <option selected disable hidden value="{{ $scholar->inclusive_year }}">{{ $scholar->inclusive_year }}</option>
            <option value="yearsem1">2024-2025 / Second Semester</option>
            <option value="yearsem2">2024-2025 / First Semester</option>
            <option value="yearsem3">2023-2024 / Second Semester</option>
            <option value="yearsem4">2023-2024 / First Semester</option>
            <option value="yearsem5">2022-2023 / Second Semester</option>
            <option value="yearsem6">2022-2023 / First Semester</option>
            <option value="yearsem7">2021-2022 / Second Semester</option>
            <option value="yearsem8">2021-2022 / First Semester</option>
        </select>
   
    <p>      
    <label class="w3-text-black" style="font-weight:bolder; font-size:1.4vw;">GWA</label>
    <input class="w3-input w3-border w3-sand" name="gwa" type="text" placeholder="{{ $scholar->gwa }}"></p><br>

    <ul>
    <li><label class="w3-text-indigo" style="margin-top:200vw; font-size:1.4vw; font-weight:bolder;"><a href="proof">Upload Proof of Scholarship</a></label></li>
    <li><label class="w3-text-indigo" style="margin-top:200vw; font-size:1.4vw; font-weight:bolder;"><a href="termination">Terminate Scholarship</a></label></li>
    </ul>
   
</div><br>

        <a href="/dashboard"><button type="button" class="greenbutton" style="  margin-top:1vw; margin-right:28vw;margin-left:0vw">CANCEL</button></a>
        <button type="submit" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top:1vw;margin-right:12vw;"> UPDATE</button>
    </form>
</body>
</html>