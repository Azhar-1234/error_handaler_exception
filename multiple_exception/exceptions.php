<?php
	class customExceptions extends Exception
	{
		public function errorMsg()
		{
			$errormsg = 'The Email address: '.$this->getMessage().' Online '.$this->getLine().
						'  Name '.$this->getFile().',is invalide.';
			return $errormsg;
		}
	}
	$email = 'azhar123@@mail.com';
	try
	{
		if (filter_var($email,FILTER_VALIDATE_EMAIL)===false)
		{
			throw new customExceptions($email);
		}
		try
		{
			if (strpos($email, 'gmail')!==false)
			{
				throw new Exception("$email faul key");	
			}
		}
		catch(Exception $e)
		{
			echo "<p style='color:blue'>".$e->getMessage()."</p>";
		}
	}
	catch(customExceptions $e)
	{
		echo "<p style='color:red'>".$e->errorMsg()."</p>";
	}
