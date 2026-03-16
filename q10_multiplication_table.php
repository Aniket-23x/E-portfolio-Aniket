<?php
// Question 10: Print the multiplication table of the number entered by the user.
?>

<!DOCTYPE html>
<html>
<head>
<title>Multiplication Table</title>
</head>
<body>

<h2>Multiplication Table</h2>

<form method="post">
Enter Number:
<input type="number" name="number" required>
<input type="submit" value="Show Table">
</form>

<?php
if(isset($_POST['number']))
{
    $num = $_POST['number'];

    echo "<h3>Table of $num</h3>";

    for($i = 1; $i <= 10; $i++)
    {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>

</body>
</html>
