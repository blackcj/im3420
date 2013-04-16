<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Loops in Forms: PHP Problem Set 2.1</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Loops in Forms: PHP Problem Set 2.1</h2>

<form action="" name="form" method="post">Month
<select name="month" value="month">

<?php
for ($month=1; $month<=12; $month++)
  {
 echo 
"<option value=$month>".$month.'</option>';
  }
   ?>
   </select>
   Day
<select name="day" value="day">
<?php
for ($day=1; $day<=32; $day++)
  {
 echo 
"<option value=$day>".$day.'</option>';
  }
   ?>
</select>
 
   
Year
	<select name="year" value="">
<?php
for ($year=1990; $year<=2012; $year++)
  {
 echo 
"<option value=$year>".$year.'</option>';
  }
   ?>
	</select>
	<input name="" type="submit" />
  </form>
 
<?php 
if ($year>=1990)
{
	  echo $_POST[month]."/"; 
	  echo $_POST[day]."/";
	  echo $_POST[year];
}
else
{
	echo "please select month, date and year";
}
?>  
    <?php
	// Write a PHP program that displays user selectable numerical dates in 
	// a group of three lists titled Month, Day and Year. The year 
	// should range from 1900 to the current year. On submit,
	// concatenate the date and display it below the lists.
?>
<!-- Hint: use loops! -->
<p>Return to the <a href="index.php">Problem Set index</a>.</p>
</body>
</html>