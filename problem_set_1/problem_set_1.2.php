<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dates and Times: PHP Problem Set 1.2</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Dates and Times: PHP Problem Set 1.2</h2>
<?php
$my_time=time();
$my_t=getdate(date("U"));
print("$my_t[weekday], $my_t[month] $my_t[mday], $my_t[year],");
echo(date("h:i A") . "<br />");
echo(date("y-m-d")) . ",  ";
echo(date("h:i:s")) . "<br />";
echo(date("y/m/d")) . ",  ";
echo(date("h:i"));

?> 
<!-- Bonus: use PHP to find what day of the week it will be on September 28, 2012 
// Write a PHP program that displays the current date and time
	// using the following formats: 
	// 1. Wednesday, October 11th, 2009, 11:42am
	// 2. 2009-10-07 11:42:39
	// 3. 10/07/2009 21:14
-->
</body>
</html>