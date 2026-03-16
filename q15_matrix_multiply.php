<?php
// Question 15: Write a program to multiply a user given number with the given matrix.
?>

<!DOCTYPE html>
<html>
<head>
<title>Matrix Multiplication</title>
</head>
<body>

<h2>Multiply Matrix with Number</h2>

<form method="post">
Enter Number:
<input type="number" name="num" required>
<input type="submit" value="Multiply">
</form>

<?php

$matrix = [
    [1, 2],
    [3, 4]
];

if(isset($_POST['num']))
{
    $num = $_POST['num'];

    echo "<h3>Result Matrix</h3>";

    for($i = 0; $i < 2; $i++)
    {
        for($j = 0; $j < 2; $j++)
        {
            echo $matrix[$i][$j] * $num . " ";
        }

        echo "<br>";
    }
}

?>

</body>
</html>
