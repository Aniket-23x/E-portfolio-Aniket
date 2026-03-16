// q4 Find the greatest number among three numbers ? 

<html>
<head>
    <title>Greatest Number</title>
</head>
<body>

<h2>Find Greatest Number</h2>

<form method="post">
    Number 1: <input type="number" name="num1" required><br><br>
    Number 2: <input type="number" name="num2" required><br><br>
    Number 3: <input type="number" name="num3" required><br><br>
    <input type="submit" value="Find">
</form>

<?php
if(isset($_POST['num1'])){

    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $_POST['num3'];

    if($a >= $b && $a >= $c)
        $max = $a;
    elseif($b >= $a && $b >= $c)
        $max = $b;
    else
        $max = $c;

    echo "<h3>Greatest Number is: $max</h3>";
}
?>

</body>
</html>
