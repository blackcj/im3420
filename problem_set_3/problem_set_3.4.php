<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sorting Arrays: PHP Problem Set 3.4</title><!-- 12fa -->
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Sorting Arrays: PHP Problem Set 3.4</h2>
<?php
	// Write a PHP program that displays the values of the array
	// 1) in their original order,
	// 2) sorted alphabetically and 
	// 3) (bonus) in reverse order.
	// Each listing of the values must be in an HTML ordered list.
	$items = array('Mercury','Venus','Earth','Mars','Jupiter','Saturn','Uranus','Neptune','Pluto');
sort($items);
$ilength=count($items);
for($i=0;$i<$ilength;$i++)
   {
   echo $items[$i];
   echo "<br>";
   }
?>
<!-- Bonus: also display the items in reverse -->
<p>Return to the <a href="index.php">Problem Set index</a>.</p>
</body>
</html>