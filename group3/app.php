<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Application form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body style="background: url(image/books1.jpg);">
<div class="container" >
	<div class="row" style="border-radius: 10px;background: background: #63C8E3;">
		<div class="col-md-12" style="padding-bottom: 20px;">
		<center><h2>Students Application Form</h2></center>
			<form class="form form_log">
			<h4>Personal Profile</h4>
			
				<input type="text" name="Firstname" class="form-control" placeholder="firstname">
				<br>
				<input type="text" name="Lastname" class="form-control"  placeholder="Lastname">
			     <br>
				<input type="text" name="Phonenumber" class="form-control"  placeholder="Phonenumber">
				<br>
				<input type="text" name="Emailaddress" class="form-control" placeholder="Email address" >
				<br>
				<input type="text" name="Postaladress" class="form-control" placeholder="Postal address">
				<br>
				<input type="text" name="Code" class="form-control" placeholder="Code">
			    <br>
				<input type="Date" name="D.O.B" class="form-control"  placeholder="D.O.B">
				<br>
				<input type="text" name="Residence" class="form-control"  placeholder="Residence">
				<span  style="color:#fff;">Gender:</span><br>
				<input type="radio" name="gender" value="male"><span style="color:#fff;"> Male</span><br>
                <input type="radio" name="gender" value="female"><span style="color:#fff;">Female</span> <br>
                <input type="radio" name="gender" value="other"><span style="color:#fff;"> Other</span><br>
                
				<input type="text" name="Idnumber" class="form-control" placeholder="Idnumber">
				<br>
				
				<input type="text" name="School" class="form-control"  placeholder="School" >
				<br>
				<input type="radio" name="Education" value="Primary" > <span style="color:#fff;">Primary</span><br>
                <input type="radio" name="Education" value="Seconday" ><span style="color:#fff;"> Secondary</span><br>
                <input type="radio" name="Education" value="College" ><span  style="color:#fff;"> College</span><br>
                <input type="radio" name="Education" value="University" ><span style="color:#fff;"> University </span><br><br>
              
                <textarea  rows="7" cols="50" name="comment" style="width:100%; background-color: rgba(0,0,0,.075); color:#fff;" placeholder="leave a comment" ></textarea> <br><br>
               
			</form>
			<a href="#"><button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Submit</button></a>
		</div>
	</div>
</div>



<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>