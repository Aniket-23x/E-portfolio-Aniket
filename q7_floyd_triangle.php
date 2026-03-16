<?php
// Question 7: Write a PHP program to generate and display the first n lines of a Floyd triangle.
?>

<!DOCTYPE html>
<html>
<head>
<title>Floyd Triangle</title>
</head>
<body>

<h2>Floyd Triangle</h2>

<?php
$n = 5;
$num = 1;

for($i = 1; $i <= $n; $i++)
{
    for($j = 1; $j <= $i; $j++)
    {
        echo $num . " ";
        $num++;
    }

    echo "<br>";
}
?>

</body>
</html>
