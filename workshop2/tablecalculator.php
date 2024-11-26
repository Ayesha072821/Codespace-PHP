<?php
	$error="";   //variable if there is no input from user
	$table=array("","","","","","","","","","");  //array variable to store the results
	$num=""; //num variable to store the number input from user
	
if($_SERVER["REQUEST_METHOD"]=="POST")   //post method to get user input
{
	
	//check if the user input is empty then store a error msg in variable
	//which will then printed in html
    
	if(empty($_POST["firstNumber"]) ){
		$error="Enter A Number";
	}
	else
	{
		$counter=0;
		$num=$_POST["firstNumber"];
		// if input is not empty calculate the values of table and store 
		//in an array variable which will be printed in html
		
		for ($i=1;$i<=10;$i++)
		{
			
			$table[$counter]= $num." * ".$i." = ".$num*$i."<br>";
			$counter++;
		}
		
		
	}
}




?>


<html>
<body>
<script>
</script>
<form method="POST" >
Enter a Number: <input type="Number" id="firstNumber" name="firstNumber">

<br>
</br>


  <input type="submit" name="submit" value="Submit">
</form>
<h2><?php echo $error;?></h2>
<h2><?php for ($i=0;$i<10;$i++)
		{
			
			echo $table[$i]."<br>";
		}?></h2>


</body>
</html>
