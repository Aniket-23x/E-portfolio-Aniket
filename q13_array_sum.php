<?php
// Question 13: Write a program to find out the sum of the array.
?>

<!DOCTYPE html>
<html>
<head>
<title>Array Sum</title>
</head>
<body>

<h2>Sum of Array Elements</h2>

<?php

$numbers = array(10, 20, 30, 40, 50);
$sum = 0;

foreach($numbers as $num)
{
    $sum += $num;
}

echo "Array Elements: ";
print_r($numbers);

echo "<br><br>Total Sum = " . $sum;

?>

</body>
</html>
