<?php
// Question 9: Fetch two values and perform arithmetic operations based on user selection using a select box.
?>

<!DOCTYPE html>
<html>
<head>
<title>Arithmetic Operations</title>
</head>
<body>

<h2>Calculator</h2>

<form method="post">

Number 1:
<input type="number" name="num1" required><br><br>

Number 2:
<input type="number" name="num2" required><br><br>

Operation:
<select name="operation">
<option value="add">Addition</option>
<option value="sub">Subtraction</option>
<option value="mul">Multiplication</option>
<option value="div">Division</option>
</select>

<br><br>

<input type="submit" name="calculate" value="Calculate">

</form>

<?php
if(isset($_POST['calculate']))
{
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['operation'];

    switch($op)
    {
        case "add":
            $result = $a + $b;
            break;

        case "sub":
            $result = $a - $b;
            break;

        case "mul":
            $result = $a * $b;
            break;

        case "div":
            $result = $a / $b;
            break;
    }

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
