<?php 
$con = mysqli_connect('localhost','root','','insertdb');


function showdata(){
	global $con;

	$query = "SELECT * FROM `userdata`";
	$run =mysqli_query($con,$query);

	if($run==true){
		while ( $data = mysqli_fetch_assoc($run)) {

		echo "<pre>";
		print_r($data);

		}

	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Retrive data</title>
</head>
<body>
<?php showdata(); ?>
</body>
</html>