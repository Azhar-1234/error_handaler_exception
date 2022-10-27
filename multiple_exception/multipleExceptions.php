<?php
	// $email = 'azhar@gmail.com';
	function blue_default_handaler($exception)
	{
		echo "<p style='color:blue'>".$exception->getMessage()."</p>";
	}
	function red_default_handaler($exception)
	{
		echo "<p style='color:red'>".$exception->getMessage()."</p>";
	}
	set_exception_handler('red_default_handaler');
	if (!isset($email)) {
		throw new Exception("no email set");
		
	}
