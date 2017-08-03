<?php
require("connection.php")
?>
<?php
if (isset($_POST['btn_submit'])) {
	 $org_name=ucfirst(mysqli_real_escape_string($conn,$_POST['org_name']));
	 
	  $query="INSERT INTO org_tbl(org_name)values('$org_name')";
	 
	 $result=mysqli_query($conn,$query);

	 
	 header("location:app.php");
	}
	if(isset($_GET['deleteid'])){
		$id=$_GET['deleteid'];
		$query="DELETE FROM org_tbl WHERE id=$id";
	 
	 $result=mysqli_query($conn,$query);
	  header("location:organisation.php");
	}
	?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background: url(image/books1.jpg); background-size:cover; background-repeat: no-repeat;">
<div class="container">
<div class="container">
<div class="col-md-12">
<center><h1 style="color: #fff;">Organisations</h1></center>
	<form action="organisation.php" method="post" name="org_form" onsubmit="return validate();">

<fieldset><label ><span style="color: #fff;">Choose organisation</span></label>
 	<select name="org_name" class="form-control form_log" style="background:#353a40; ">
<option value="Rattansi Education Fund"><span style="color:  #33b5e5;">Rattansi Education Fund</span></option>
<option value="The Rockefeller Foundation">The Rockefeller Foundation</option>
<option value="Aga Khan Foundation">Aga Khan Foundation</option>
<option value="Prof Muriuki">Prof Muriuki</option>
<option value="Gandhi Smarak Nidhi">Gandhi Smarak Nidhi</option>
<option value="DAAD">DAAD</option>

</select>
</fieldset>
<br>
<br>
<input type="submit" name="btn_submit" class="btn btn-primary" style="width: 100%;">
</form>
<!--<center><a href="app.php" name="btn_submit" class="btn btn-primary"style="width: 100%;" >Apply</a> </center>-->
</div>


</div>
</div>
<!-- script -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
