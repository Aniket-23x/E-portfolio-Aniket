<?php
// Question 14: Write a program to find the greatest and the smallest element of the given array.
?>

<!DOCTYPE html>
<html>
<head>
<title>Array Min and Max</title>
</head>
<body>

<h2>Find Smallest and Largest Element</h2>

<?php

$numbers = array(12, 45, 7, 23, 89, 34);

$max = max($numbers);
$min = min($numbers);

echo "Array Elements: ";
print_r($numbers);

echo "<br><br>Greatest Number = " . $max;
echo "<br>Smallest Number = " . $min;

?>

</body>
</html>
