<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
</head>
<body>
<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="file" name="image" required>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$imagename = $_FILES['image'] ['name'];
	$tempimgname = $_FILES['image'] ['tmp_name'];
	$con = mysqli_connect('localhost','root','','storeimg');
	 move_uploaded_file($tempimgname, $imagename);
	 $sql= "INSERT INTO `uploadimg`(`image`) VALUES ('$imagename')";
	 $run = mysqli_query($con,$sql);

}

?>