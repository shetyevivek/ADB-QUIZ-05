<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADB - Assignment 05</title>
</head>
<body>
  <div>
    <h2>Student ID : 1001821620<br>Name : Vivek Vishwanath Shetye</h2><br><br><br>
  </div>

  <div>
    <form action="result.php" method="post">
      <p>
        <label for="Name">Enter text to find:</label>
        <input type="text" name="word">
      </p>
      <p>
        <input type="submit" name="Submit" value="Search">
      </p>
    </form>
  </div><br><br>

  <div>
  	<h3>Click below to view books!</h3>
  	<a href="books.php?name=Book1">Book1.txt</a><br>
  	<a href="books.php?name=Book2">Book2.txt</a><br>
  	<a href="books.php?name=Book3">Book3.txt</a>
  </div>
</body>
</html>