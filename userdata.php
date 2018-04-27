<h1 align="center">
<?php 
session_start();
if(isset($_SESSION["uname"])){
	
echo "Welcome ". $_SESSION["uname"]." ";
}

else
echo "you are not login"
?>	
</h1>
<h2>
	<a href="logout.php">logout</a>
</h2>
