<?php
//function to return age
function check_age($age)
{
	if ($age<13)  
	{
		return "You are a child. <br>";  //if age less then 13 program will end here 
	}
	else if($age>=13 && $age<=17)
	{
		return "You are a Teenager.<br>"; //if age between 13 and 17 program will end here
	}
	else if($age>=18 && $age<=64)
	{
		return "You are an Adult.<br>";  //if age between 18 and 64 then program will end here
	}
	else
	{
		return "You are a senior citizen.<br>"; // if no condition satisfy program will come to this and end here
	}
}


echo check_age(12);
echo check_age(16);
echo check_age(63);
echo check_age(65);

?>