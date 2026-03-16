<?php
// Question 12: Write a program to display fruit names and their values within a table.
?>

<!DOCTYPE html>
<html>
<head>
<title>Fruit Table</title>
</head>
<body>

<h2>Fruit List</h2>

<?php

$fruits = array("Apple", "Banana", "Mango", "Orange", "Grapes");

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Fruit Name</th></tr>";

foreach($fruits as $fruit)
{
    echo "<tr><td>$fruit</td></tr>";
}

echo "</table>";

?>

</body>
</html>
