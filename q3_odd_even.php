//Check whether number is odd or even


<html>
<head>
    <title>Odd or Even</title>
</head>
<body>

<h2>Check Odd or Even</h2>

<form method="post">
    Enter Number: <input type="number" name="number" required>
    <input type="submit" value="Check">
</form>

<?php
if(isset($_POST['number'])){

    $num = $_POST['number'];

    if($num % 2 == 0)
        echo "<h3>$num is Even</h3>";
    else
        echo "<h3>$num is Odd</h3>";
}
?>

</body>
</html>
