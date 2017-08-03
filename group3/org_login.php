<?php
require("connection.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body style="">
<div class="container">

<div class="col-md-12" style="border-radius: 10px;background: lightgrey;min-height:500px;">
<center><h1>Admin</h1></center>
	<form action="org_login.php" method="POST" name="register_form"  >
<label>Username</label>
 <input type="text" class="form-control" name="username" ><br>
 <label>Password</label>
<input type="password" name="password" value="" class="form-control" style="width: 100%;" /><br>

<a href=""></a>
<input type="submit" name="login_btn" value="login" />
</form>

</div>



</div>
<!-- script -->
<script src="js/jquery-3.2.1.slim.min"></script>
<script src="js/bootsrap.min.js"></script>
</body>
</html>
