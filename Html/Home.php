<?Php

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("connection.php");
?>

<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="Home.css">
	<title> Online job portal</title>
  </head>
  <body>
       
        <div class="menu">
		   <img src="../image/h.jpg" "#" style="float:left" width="83px" height="54px">
        	<a class="active" href="#">Home</a>
        	<a href="#">Contact Us</a>
			<a href="Homes.html""#" style="float:right">Recruiter</a>
			 <a href="Register.html""#" style="float:right">Register</a>
        	 <a href="Login.html""#" style="float:right">Login</a>
			 <div class="dropdown">
			 <button class="dropbtn">Search Jobs
             <i class="fa fa-caret-down"></i>
             </button>
    <div class="dropdown-content">
      <a href="cities.html""#">Jobs in Top Cities</a>
      <a href="Skill.html""#">Jobs By Skill</a>
      <a href="Course.html""#">Jobs by Course</a>
	  <a href="Designation.html""#">Jobs By Designation</a>
	  <a href="PartTime.html""#">Part Time Jobs</a>
   
	</div>
        </div>	
   </div>
      <div class="fakeimg">
      	<img src="../image/a.jpg" width="100%" height="800px">		
      	<div class="centered">
		<div style="text-align:center"><strong>Your Skill are in Demand</strong></div>
		
		<div class="para">Over 300,000 jobs in 14,000 companies</div>
		<div class="search">
		<form action="" method="post" action="search.php">
		<input type="text" name="title" placeholder="job title,skill" data select type="multiple" data rules id ="01" maxlength="150" tabindex="1" autocomplete="off" required>
		<input type="text" name="text" placeholder="Location" maxlength="150" tabindex="2" autocomplete="off" required>
		<select type="option" name="minexp" tabindex="6">
		<option  value=""  selected="">Experience</option>
		<option value="0">0 Yr</option>
		<option value="1">1 Yr</option>
		<option value="2">2 Yrs</option>
		<option value="3">3 Yrs</option>
		<option value="4">4 Yrs</option>
		<option value="5">5 Yrs</option>
		<option value="6">6 Yrs</option>
		<option value="7">7 Yrs</option>
		<option value="8">8 Yrs</option>
		<option value="9">9 Yrs</option>
		<option value="10">10 Yrs</option>
		</select>
	    <input type="submit" name="submit" value="Search jobs">	
		</form>
      	</div>
		</div>
	 <div class="footer">
	 <h3>&copy; Copyright 2018 HTML.am</h3>

	 </div>
	 
   </body>
</html>   	