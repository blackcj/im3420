<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Multi-dimensional Arrays: PHP Problem Set 3.2</title><!-- 12fa -->
</head>
<body>	
<h2>Multi-dimensional Arrays: PHP Problem Set 3.2</h2>
<?php
    // Write a PHP program that explodes the following data into a
    // multi-dimensional array called $things. Use the category names 
	// as one of the keys. After organizing the 
	// data, display each category as a table header with each item 
	// listed underneath.
	// Hint: loop through $things to display the items. A nested loop 
	// (i.e. a loop inside another loop) will work best.
	$kitchen = "cup|spoon|bowl|plate|fork|knife";
	$bathroom = "soap|toothbrush|shampoo|brush";
	$garage = "rake|trowel|shovel|car|broom|bike|mower|tools";
//converts string to array	
$kitchen=explode("|",$kitchen);
$bathroom=explode("|",$bathroom);
$garage=explode("|",$garage);
$things=array('Kitchen'=>$kitchen,'Bathroom'=>$bathroom,'Garage'=>$garage);
echo "<table border=\"1\">";
foreach($things as $room=>$value){
	echo"<th>$room</th>";
		foreach($value as $item){
			echo "<td>",$item,"</td>";
	}
}
?>
</table>
<p>Return to the <a href="index.php">Problem Set index</a>.</p>
</body>
</html>