<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($conn,"select * from admin where admin_id='$admin_id' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$admin_id;
	}
}
if (isset($_SESSION["login"]))
{
echo "<br><br><br><br><br><h1 align=center>Hye you are sucessfully login as Admin!!!</h1>";
echo "<center><a href=retrieve.php>click here to redirect</a></center>";
exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="container-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form name="form1" method="post">
					<span class="login100-form-title">
						Admin Login
					</span>
   <label for="uname">Admin ID</label><br>
   <input type="text" id="loginid2" name="admin_id"><br><br>

   <label for="pwd">Password</label><br>
   <input type="password" id="pass2" name="pass"><br><br>
   <input name="submit" type="submit" id="submit" value="Login"><br>
<p><font color = "#95A5A6"> user </font><a href="login.php"><font color = "black"> Login as USER</font></a></p>
<?php
		  if(isset($found))
		  {
		  	echo '<p class="w3-center w3-text-red"><mark>Invalid user id or password</mark><br><br><a href="inconvinence.php"><font color = "black"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp QUIT</font><a></p>';
		  }
		  ?>
				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/login_main.js"></script>

</body>
</html>