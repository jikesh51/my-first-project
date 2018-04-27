<html>
<head>
<title>Registration || Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form action="" method="post">
	<div style="border: 1px solid; height: 250px; width: 400px; margin-left:30%;" align="center"> 
<table style="margin-top: 30px;">
<tr>
<td>Enter First Name</td><td><input type="text" name="fname" required pattern="^[A-Za-z]+" autofocus=""></td>
</tr>
<tr>
<td>Enter Last Name</td><td><input type="text" name="lname" required pattern="^[A-Za-z]+"></td>
</tr>
<tr>
<td>Enter Username</td><td><input type="text" name="uname" required pattern="^[A-Za-z0-9]+"></td>
</tr>
<tr>
<td>User Password</td><td><input type="password" name="pwd" required pattern="^[A-Za-z0-9]+" title=" enter only [A-Za-z0-9]"></td>
</tr>
<tr>
	<td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</div> 

</body>
</html>
<?php
if (isset($_POST['submit'])) {

	$con = mysqli_connect("localhost","root", "", "regform");
	$res = mysqli_query($con, "INSERT INTO `registrationpage`(`firstName`, `lastName`, `userName`, `password`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[uname]','$_POST[pwd]')");
}
?>