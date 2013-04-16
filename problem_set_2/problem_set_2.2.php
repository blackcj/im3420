<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Reading a File into an Array: PHP Problem Set 2.2</title><!-- 12sp -->
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Reading a File into an Array: PHP Problem Set 2.2</h2>
<?php
/*
$text= fopen("set2-2.txt", "r");
$stuff= fread($text,filesize("set2-2.txt"));
$lines= explode("\n", $stuff);
*/
$lines= file("set2-2.txt");

for($i=31; $i < 133; $i++)
{
	echo $i+1,' ', $lines[$i], "<br />\n";
}

?>
<?php
	// Write a PHP program that reads the file set2-2.txt 
	// into an array and displays lines 32–132 
	// preceded by line numbers.
	// The text is from
	// http://www.gutenberg.org/cache/epub/35/pg35.txt

?>
<!-- Hint: use the file function to create the array -->
<pre>
<!-- Display the content here -->
</pre>
<p>Return to the <a href="index.php">Problem Set index</a>.</p>
</body>
</html>