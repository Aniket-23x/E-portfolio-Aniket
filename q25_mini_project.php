<?php
// Question 25: Create your own web page using session, database and date concepts.

session_start();

$conn = mysqli_connect("localhost","root","","test");

$date = date("Y-m-d");

$_SESSION['username'] = "Admin";

?>

<!DOCTYPE html>
<html>
<head>
<title>Mini Project Page</title>
</head>
<body>

<h2>Welcome Page</h2>

<?php

echo "Welcome " . $_SESSION['username'] . "<br><br>";

echo "Today's Date: " . $date . "<br><br>";

echo "Database Connected Successfully";

?>

</body>
</html>
