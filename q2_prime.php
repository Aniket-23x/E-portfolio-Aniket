// Q2 Check whether a number is prime or not ?

<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Check</title>
</head>
<body>

<h2>Check Prime Number</h2>

<form method="post">
    Enter Number: <input type="number" name="number" required>
    <input type="submit" value="Check">
</form>

<?php
if(isset($_POST['number'])) {

    $num = $_POST['number'];
    $isPrime = true;

    if($num <= 1){
        $isPrime = false;
    }

    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            $isPrime = false;
            break;
        }
    }

    if($isPrime)
        echo "<h3>$num is a Prime Number</h3>";
    else
        echo "<h3>$num is NOT a Prime Number</h3>";
}
?>

</body>
</html>
