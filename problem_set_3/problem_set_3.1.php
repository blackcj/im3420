<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Exploding Strings: PHP Problem Set 3.1</title><!-- 12fa -->
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Exploding Strings: PHP Problem Set 3.1</h2>
<?php
	// Write a PHP program that displays the first word
	// from the following string:
	$words1 = "magic/quark/quantum/uncertainty";
	$firstarray= explode("/",$words1);
	echo $firstarray[0],"<br />";
	// and the fourth word from the following string:
	$words2 = "closing.locking.opening.lifting.swinging.";
	$secondarray= explode(".",$words2);
	echo $secondarray[3],"<br />";
	// and the last word from the following string:
	$words3 = "boulders:pebbles:minerals:cobbles:rocks";
	$thirdarray= explode(":",$words3);
	echo $thirdarray[4];
?>
<!-- Hint: the explode() function will need to be part of your process -->
<p>Return to the <a href="index.php">Problem Set index</a>.</p>
</body>
</html>