<!DOCTYPE html>
<html>
<head>
    <title>Search Result</title>
</head>
<body>
  <div>
    <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2><br><br><br>
  </div>
</body>
</html>

<?php

$path = './My_Books';
$findThisString = $_POST['word'];

$count = 0;
$line = 1;

$dir = dir($path);

// Get next file/dir name in directory
while (false !== ($file = $dir->read()))
{   
    if ($file != '.' && $file != '..')
    {
        // Is this entry a file or directory?
        if (is_file($path . '/' . $file))
        {
            // Its a file, yay! Lets get the file's contents
            $contents = file_get_contents($path . '/' . $file);

            $pattern = preg_quote($findThisString, '/');
            $pattern = "/^.*$pattern.*\$/mi";

            if (preg_match_all($pattern, $contents, $matches, PREG_OFFSET_CAPTURE))
            {
                echo "<h3>Found matches in: " . $file . "</h3>";

                foreach (current($matches) as $match)
                {
                    $matchValue = $match[0];
                    $lineNumber = substr_count(mb_substr($contents, 0, $match[1]), PHP_EOL) + 1;

                    $output = "`<mark>{$matchValue}</mark>` -----> <b>line {$lineNumber}</b><br><br>";

                    echo mb_convert_encoding($output, "HTML-ENTITIES", 'UTF-8');
                }

                echo "<br><br><br>";
            }
            else
            {
                $count++; 
            }
        }
    }
}

if($count == 3)
{
    echo "No match found in any book!";
}

$dir->close();

?>