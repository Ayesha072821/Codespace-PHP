<?php
//defining variables that we need to use
	$error="";
	$num1="";
	$num2="";
	$sum="";
	$subtraction="";
	$multiplication="";
	$division="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
		// if input is empty store msg in error variable and print in html
	if(empty($_POST["firstNumber"]) || empty($_POST["secondNumber"])){
		$error="Both Numbers is Required";
	}
	else
	{
		//if input not empty
		//store numbers in variables and calculate all operations 
		//and store them in variables.
		//these variables will be used in htm to print the result
		$num1=$_POST["firstNumber"];
		$num2=$_POST["secondNumber"];
		$subtraction= "Subtraction of both numbers is : " .($num1-$num2);
		$sum="Sum of both numbers is :" .($num1+$num2);
		$multiplication="Multiplication of both numbers is : ". ($num1*$num2);
		$division="Division of both numbers is : " .($num1/$num2);
		
		
	}
}




?>


<html>
<body>
<script>
</script>
<form method="POST" >
First Number: <input type="Number" id="firstNumber" name="firstNumber">

</br>
</br>
Second Number: <input type="Number" id="secondNumber"name="secondNumber"> 
<br>
</br>


  <input type="submit" name="submit" value="Submit">
</form>
<h2><?php echo $error;?></h2>
<h2><?php echo $sum;?></h2>
<h2><?php echo $subtraction;?></h2>
<h2><?php echo $multiplication;?></h2>
<h2><?php echo $division;?></h2>

</body>
</html>
