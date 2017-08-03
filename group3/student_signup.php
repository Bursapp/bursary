<?php
require("connection.php");
  session_start();
?>

<?php

if (isset($_POST['register_btn'])) { 

$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);

      $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);

            $email=mysqli_real_escape_string($conn,$_POST['email']);

                    $password=mysqli_real_escape_string($conn,$_POST['password']);

                            $password2=mysqli_real_escape_string($conn,$_POST['password2']);


if ($password==$password2)
 {
  
  $password=md5($password);//hash password


//insert into database

       $sql="INSERT INTO signup(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')";
 
 $result=mysqli_query($conn,$sql);

        $SESSION['message']='welcome';

           $SESSION['firstname']=$firstname;

      header('location:welcome.php'); 

}
else{
  echo "wrong user combination";
  header('location:student_signup.php');
}

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>signup form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <style>
     body{
      background: #353a40;
     }
     .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: transparent;
    background-image: none;
    border: 1px solid #33b5e5;
    color: #fff;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.btn-default {
    color: #fff;
    background-color: transparent;
    border-color: #33b5e5;
}
buttons.less:14
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
h2{
  width: 100%;
margin: 50px auto 0px;
color:#fff;
background: #33b5e5;
text-align: center;
border:1px solid #B0C4DE;
border-bottom: none;
border-radius: 10px 10px 0px 0px;
padding: 20px;
}
   </style>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-12">


  <h2>SIGN-UP BURSERY FORM</h2>
  <div class="row">
<div class="col-md-12">
 <center><img src="image/light.png" alt="light" class="img-responsive"></center>
 </div>
 </div>
<div style="padding-bottom: 20px;">
  <form style="position: relative;top:40px;bottom:20px;" class="form_log" method="post" action="student_signup.php" name="std_up" onsubmit="return validate();">
  
   
  <input type="text" id="firstname" class="form-control" placeholder="Enter firstname" name="firstname" class="form_log"/>

<br>
  <input type="text" id="lastname" class="form-control" placeholder="Enter lastname" name="lastname"/>
<br>
    
  
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  

      <br>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
  <br>
      
        <input type='password' id="password2" placeholder="Confirm password" name="password2" class="form-control">
<br>
 
<input type="submit" name="register_btn" class="btn btn-primary btn-lg" value="sign up" style="width: 100%;" />
  </form>
  <br> <br>
  
  </div>
</div>
</div>
<script>
  function validate() {
 var fname=document.std_up.firstname.value;
 var lname=document.std_up.lastname.value;
 var password=document.std_up.password.value;
 if (fname=="") {
  alert('please enter firstname');
  return false;
 }
 if (lname=="") {
   alert('please enter lastname');
  return false;
 }
 if (email=="") {
   alert('please enter email');
  return false;
 }
 if (password=="") {
   alert('please enter password');
  return false;
 }
 return true;
  }
</script>
</div>












<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>