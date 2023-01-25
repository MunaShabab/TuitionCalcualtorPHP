<?php
	$argHours=$_REQUEST["hours"];
	$argRate=$_REQUEST["rate"];
	
	if($argHours<13){
	$tuition=$argRate * $argHours;
	print ("$tuition");
	}
	else if($argHours>=13 && $argHours<=18)
	{
	$tuition=$argRate * 13;
	print ("$tuition");
	}
	else if($argHours>18)
	{
	$tuition=$argRate*($argHours-5);
	print ("$tuition");
	}
		
		
?>