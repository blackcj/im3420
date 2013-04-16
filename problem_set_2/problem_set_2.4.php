<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Maintaining the State of a Select List: PHP Problem Set 2.4</title>
</head>

<body>
<h2>Maintaining the State of a Select List: PHP Problem Set 2.4</h2>
<form method="post" action="problem_set_2.4.php">
<select name="states" value="states">



<?php
$state_list = array("Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","District Of Columbia","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming");

foreach ($state_list as $state)
{
if($_POST[states]==$state){
	
	echo "<option value=\"$state\" selected=\"selected\">".$state.'</option>';
	}
else {
	echo "<option value=\"$state\">".$state.'</option>';
}
}
?>
</select>
<input type="submit" value="submit" />
</form>
<?
echo $_POST[states];
?>
<!-- Hint: you'll need an if statement inside a loop
// Write a PHP program that preserves the state of a select list. 
	// Use the array below to create the list with a loop. Compare the
	// values in the loop to the value selected by the user to maintain
	// the state of the list after submitting the form. Use the 
	// selected="true" attribute in the option that contains 
	// the selected value.
 -->
<p>Return to the <a href="index.php">Problem Set index</a>.</p>
</body>
</html>