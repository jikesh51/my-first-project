<!DOCTYPE html>
<html>
<head>
	<title>Demonstration of calculator</title>
</head>
<body>
	<form>
		Enter the first number : <input type="text" name="num1" placeholder="number 1" style="margin: 10px;"><br>
		Enter the second number : <input type="text" name="num2" placeholder="number 2" style="margin: 10px;"> <br>
		<select style="margin-left: 30px;" name="operator">
			<option> add </option>
			<option> subtract </option>
			<option> multiply </option>
			<option> devide </option>
                        <option> modulous </option>
		</select>
		<button name="submit" value="submit">calculate</button>

	</form>
		<h1>the ans is :</h1>
		<?php
                if(isset($_GET['submit'])){
                $result1 = $_GET['num1'];
                $result2 = $_GET['num2'];
                $operator = $_GET['operator'];
                switch ($operator){
                    case "add":
                        echo $result1+$result2;
                        break;
                    case "subtract":
                        echo $result1-$result2;
                        break;
                    case "multiply":
                        echo $result1*$result2;
                        break;
                    case "devide":
                        echo $result1/$result2;
                        break;
                    case "modulous":
                        echo $result1%$result2;
                        break;
                }
                }
                ?>


</body>
</html>
