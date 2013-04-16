<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Basic Logic: PHP Problem Set 1.4</title>
</head>

<body>
<h2>Basic Logic: PHP Problem Set 1.4</h2>
<form method="post" name="age">
How old are you?<input type=text name="age" id="age"/>

<input type="submit" value="submit" action=$submit />
</form>
<?php

if (is_numeric("$age")) {
	if($age>12)	{
		echo "Allowed";
	}
	if($age<13){
		echo "denied";
	}}
	else {
		echo "invalid age";
	}
	// Write a PHP program that asks for the users age. After pressing
	// submit, respond with the word "Allowed" if the age is > 12 or 
	// with the word "Denied" if the age is < 13. Finally, respond with
	// "Invalid age" if the age entered is not numeric. Do not use more 
	// than one document (i.e. the "action" must be in the same script).
?>
</body>
</html>