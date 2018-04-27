<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<form action="" method="post">
	<table>
		<tr>
			<td>User name :</td><td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password :</td><td><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
	$con = mysqli_connect("localhost","root", "", "regform");
	$count = 0;
	$sql = mysqli_query($con, "SELECT * FROM `registrationpage` WHERE userName ='$_POST[uname]' && password ='$_POST[pwd]'");
	$count = mysqli_num_rows($sql);
	 
	 if ($count>0) {
	 	?>
	 	<script type="text/javascript">
	 		window.location ="welcome.php";
	 	</script>
	 	<?php
	 }
	 else{
	 	?>
	 	<script type="text/javascript">
	 		alert ("incorrect username or password");

	 	</script>
	 	<?php
	 }
	}

?>