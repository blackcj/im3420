<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Basic Math: PHP Problem Set 1.5</title>
</head>

<body>
<h2>Basic Math: PHP Problem Set 1.5</h2>
<form method="post" />
<input type="post" name="num1" /> times <input type="post" name="num2" />
<input type="submit" value="equals" action='multiply()'/>
<input type="post" name="num3" /> times <input type="post" name="num4" />
<input type="submit" value="equals" />
</form>
<?php
echo ($num1*$num2);
echo ($num3+$num4);

	// Write a PHP program that solves the following math problems:
	//    1. Any number multiplied by any number
	//    2. Any number divided by any number
	//    3. The modulus (remainder) of a division problem
	//    4. Any number plus 25
	// Do not use more than one document (i.e. the "action" must be 
	// in the same script).
?>
</body>
</html>