<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Writing Content to a File: PHP Problem Set 2.3</title>
<link rel="stylesheet" type="text/css" href="problems.css" />
</head>

<body>
<h2>Writing Content to a File: PHP Problem Set 2.3</h2>
<form method="post" action="problem_set_2.3.php">
<textarea value="write" name="write" cols="80" rows="15">
</textarea>
<input type="submit" value="send"/>
</form>

<?php

$text = fopen("info.txt", "a+");
$write= $_POST[write];
fwrite($text, $write);

$file= fread($text,filesize("info.txt"));
echo str_replace("\n", "<br />", $file);





// fclose("info.txt");






?>
<!--  HINT: string functions substr, trim, strpos, str_replace (is a find and replace)
// Write a PHP program that collects the input from a textarea, replaces
	// the new lines with break tags, and then adds the content to a line in
	// an external flat file. Display the contents of the flat file 
	// below the form.  -->

<!-- Hint: you will need to combine strings using the ".=" operator -->
<!-- Bonus: maintain the content entered by the user in the form as well -->
<p>Return to the <a href="index.php">Problem Set index</a>.</p>
</body>
</html>