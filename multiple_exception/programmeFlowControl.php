<?php
	$animals = ['cow','moina','tiya'];
	try 
	{
		foreach ($animals as $animal) 
		{
			if ($animal=='moina') 
			{
				throw new Exception("Its a moina bird");
			}	

		}	
	} 
	catch (Exception $e) {
		echo $e->getMessage();
	}