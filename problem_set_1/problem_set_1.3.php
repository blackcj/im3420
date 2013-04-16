<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Combining Strings: PHP Problem Set 1.3</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Combining Strings: PHP Problem Set 1.3</h2>
<form method="post" />
noun:<input type="post" name="word1" /> <br />
verb:<input type="post" name="word2" /> <br />
place:<input type="post" name="word3" /> <br />
action:<input type="post" name="word4" /> <br />
verb:<input type="post" name="word5" /> <br />
<input type="submit" value="get sentence">
</form>
<?php

	echo $_POST["word1"]." ".$_POST["word2"]." ".$_POST["word3"]." ".$_POST["word4"]." ".$_POST["word5"];

	// Write a PHP program that displays five words from text fields.
	// Display them one after another separated by spaces with a period
	// at the end on the same page after the form when pressing submit.
	// Do not use more than one document (i.e. the "action" must be in
	// the same script).
?>
<!-- Hint: you will need to combine strings using the ".=" operator -->
<!-- Bonus: maintain the content entered by the user in the form as well -->
</body>
</html>