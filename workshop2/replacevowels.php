<?php
//using str_replace function to replace vowels with X
function replaceVowelsWitkX($parameter)
{
	$Vowels=array("a","e","i","o","u","A","E","I","O","U");
	$replacedString=str_replace($Vowels,"X", $parameter);
	return $replacedString;
}
echo replaceVowelsWitkX("My name is Ayesha Yousaf");

?>