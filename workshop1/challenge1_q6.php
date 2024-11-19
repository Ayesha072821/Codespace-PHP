<?php

$students_result= array(
						"Aarron" => array( "Physics"=>74,"English"=>69,"Maths"=>70),
						"Jamie" => array( "Physics"=>64,"English"=>79,"Maths"=>69),
						"Harry" => array( "Physics"=>55,"English"=>52,"Maths"=>57),


);

echo "Student Results <br><br>";
echo "Physics Result for Aarron : ".$students_result["Aarron"]["Physics"]."%<br>";
echo "English Result for Jamie : ".$students_result["Jamie"]["English"]."%<br>";
echo "Maths Result for Harry : ".$students_result["Harry"]["Maths"]."%<br>";

?>