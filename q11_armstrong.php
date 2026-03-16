<?php
// Question 11: Write a program to check whether the given number is Armstrong or not.
?>

<!DOCTYPE html>
<html>
<head>
<title>Armstrong Number</title>
</head>
<body>

<h2>Check Armstrong Number</h2>

<form method="post">
Enter Number:
<input type="number" name="number" required>
<input type="submit" value="Check">
</form>

<?php
if(isset($_POST['number']))
{
    $num = $_POST['number'];
    $sum = 0;
    $temp = $num;

    while($temp > 0)
    {
        $digit = $temp % 10;
        $sum += $digit * $digit * $digit;
        $temp = (int)($temp / 10);
    }

    if($sum == $num)
        echo "<h3>$num is an Armstrong Number</h3>";
    else
        echo "<h3>$num is NOT an Armstrong Number</h3>";
}
?>

</body>
</html>
