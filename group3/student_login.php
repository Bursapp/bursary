<?php
require("connection.php");
     session_start();
?>
<?php


if (isset($_POST['login_btn'])) {
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $password = md5($password);
    $sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['email'] = $email;
        header("location:welcome.php");
     } 
     else{
        $_SESSION['message'] = "username/password combination incorrect";
     }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!-- jQuery library -->

</head>
<body style="background: url(image/books1.jpg); background-size:cover; background-repeat: no-repeat;">
<div class="container">

<div class="col-md-12">
	<div>
    <h1><?php $_SESSION['message']; ?></h1>

			<form class="form_log" action="student_login.php" method="post">
			<center><h1 style="color:#fff;">LOGIN</h1></center>
    <input type="email" class="form-control" id="email" placeholder="Email address:">
    <br>
    <input type="password" class="form-control" placeholder="Password:" name="password">
    <br>
  <input type="submit" name="login_btn" value="login" class="btn btn-success" style="width: 100%;">
</form>

</div>
		</div>

    </div>


</div> 
</div>







<!-- script -->
<script src="js/jquery-3.2.1.slim.min.js "></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>