<?php
if (isset($_POST['submit'])) {
	$con = mysqli_connect("localhost","root","","jikeshmeher");
	$pswd = md5($_POST['pwd']) ;
	$cpswd = md5($_POST['pwd2']);
	$res= mysqli_query($con,"INSERT INTO `regtable`(`firstname`, `lastname`, `address`, `birthday`, `email`, `username`, `password`,`cpassword`, `gender`, `contactno`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[bday]','$_POST[email]','$_POST[uname]','$pswd','$cpswd','$_POST[gender]','$_POST[contactno]')");
}
?>
<?php
$pwd = $_POST['pwd'];
$cpwd = $_POST['pwd2'];
if (!($pwd===$cpwd)) {
	echo "password not matched";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
	
</head>
<body style="background-image: url(bgimg.jpg);">
<form action=" " method="post">
	<div style="margin-left: 50%; width: 500px; height: 450px; border :3px solid; margin-top: 100px; border-radius: 5px; font-size: 20px; font-family: anadalus;">
	<h2 align="center">create a new account </h2>
	<table align="center" style=" padding: 20px;">
		<tr>
			<td>First Name : </td><td><input type="text" name="fname" required pattern="^[A-Za-z]+" autofocus placeholder="Enter firstname"></td>
		</tr>
		<tr>
			<td>Last Name : </td><td><input type="text" name="lname" required pattern="^[A-Za-z]+" placeholder="Enter Lastname"></td>
		</tr>
		<tr>
			<td>Address : </td><td><input type="text" name="address" required placeholder="Enter Address"></td>
		</tr>
		<tr>
			<td>Birthday : </td><td><input type="date" name="bday" required ></td>
		</tr>
		<tr>
			<td>Email : </td><td><input type="email" name="email" required placeholder="Enter Email"></td>
		</tr>
		<tr>
			<td>Username : </td><td><input type="text" name="uname" required pattern="^[A-Za-z0-9]+" placeholder="Enter username"></td>
		</tr>
		<tr>
			<td>New password : </td><td><input type="password" name="pwd" required pattern="^[A-Za-z0-9]+" placeholder="Enter password"></td>
		</tr>
		<tr>
			<td>Confirm password : </td><td><input type="password" name="pwd2" required pattern="^[A-Za-z0-9]+" placeholder="Enter confirm password"></td>
		</tr>
		<tr>
			<td>Gender : </td><td>Male<input type="radio" name="gender" value="male" required>Female<input type="radio" name="gender" value="female" required></td>
		</tr>
		<tr>
			<td>Contact No : </td><td><input type="tel" name="contactno" required placeholder="Enter phone no."></td>
		</tr>
		<tr>
			<td align="center" colspan="5" style="padding: 10px;"><input type="submit" name="submit" value="Create Account" title="New user register here"> </td>
		</tr>

	</table>
	</div>
</form>
</body>
</html>

