<?php 
$name =  $_POST['name']."<br>";
$email =  $_POST['email'];

$con = mysqli_connect('localhost','root','','insertdb');
$query = "INSERT INTO `userData`(`Name`, `EmailID`) VALUES ('$name','$email')";
$run = mysqli_query($con,$query);
 if($run==true)
 	echo "data insert successfully";
 else
 	echo 'error!';

 ?>
