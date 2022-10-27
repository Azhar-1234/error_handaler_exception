<?php
	class customExecption extends Exception
	{
		public function errorMessage(){
			$errorMsg = "The Email address ".$this->getMessage()." on line ".$this->getLine()." on File: ".$this->getFile().",is invalide";
			return $errorMsg;
		}
	}
	$email = "azhar@gmail@com";
	try
	{
		if (filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE) {
			throw new customExecption($email);
			
		}
	}
	catch(customExecption $e)
	{
		echo "<p style='color:red'>".$e->errorMessage()."</p>";
	}