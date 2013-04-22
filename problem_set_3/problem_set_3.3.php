<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Searching Through an Array: PHP Problem Set 3.3</title><!-- 12fa -->
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Searching Through an Array: PHP Problem Set 3.3</h2>
<?php
	// Write a PHP program that explodes $content into an array
	// of words. Loop though the resulting array and count how
	// many times the word 'the' occurs.
	$content = "Alluvial fans occur adjacent to gully mouths along the scarps of the Minnesota River valley. Because these landforms occur after the River Warren ceased to flow, they are younger than 11,000 years before present (YBP) and perhaps younger than 9,200 YBP. The stratigraphy of a fan excavated by the Unimin Corporation near Ottawa, Minnesota reveals a sequence of fluvial and colluvial sediment. Including the modern soil, there are least two well developed paleosols. The presence of developed soils, in association with the other sediments, suggests prolonged periods of both intense erosion, and slope stability. Well documented climate changes during the Holocene in the Midwest may be responsible for destabilizing the slopes and promoting erosion.";
	$wordsarray = explode("\n", $content);
	$wordlength = count($wordsarray);
	for ($i=0; $i < $wordlength ; $i++) { 
		while ( $content == "the") {
			echo 'the';
		}
	}
?>

<p>Return to the <a href="index.php">Problem Set index</a>.</p>
</body>
</html>