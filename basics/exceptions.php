<?php
	function checkNum($number)
	{
		if ($number<=0) {
			throw new exception("provide a positive number");
		}
		return $number/2;
	}
	try
	{
		echo checkNum(-3);
	}
	catch(exception $e)
	{
		echo "catch exception is here ";
		echo "<span style='color:red'>Message:<b>".$e->getMessage()."<br> Line Number: ".$e->getLine()." File Name ".$e->getFile()."<br Project Code: >".$e->getCode()."</b></span>";
	}