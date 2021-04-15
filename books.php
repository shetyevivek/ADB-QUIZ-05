<!DOCTYPE html>
<html>
<head>
	<title>View Book</title>
</head>
<body>
  <div>
    <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2><br><br><br>
  </div>
</body>
</html>

<?php

$name = $_GET['name'];

$filename = "./My_Books/" .$name. ".txt";

$file = fopen($filename, "r");

if($file == false)
{
	echo ("Error in opening file");
	exit();
}

$filesize = filesize($filename);
$filetext = fread($file, $filesize);
fclose($file);

echo "<pre>";
echo mb_convert_encoding($filetext, "HTML-ENTITIES", 'UTF-8');
echo "</pre>";

?>