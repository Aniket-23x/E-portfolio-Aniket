<?php
// Question 20: Create pages for fruits with rates and quantity, calculate subtotal & total and display using cookies.
?>

<!DOCTYPE html>
<html>
<head>
<title>Fruit Billing</title>
</head>
<body>

<h2>Fruit Billing</h2>

<form method="post">

Fruit:
<select name="fruit">
<option value="50">Apple</option>
<option value="30">Banana</option>
<option value="80">Mango</option>
</select>

<br><br>

Quantity:
<input type="number" name="qty" required>

<br><br>

<input type="submit" value="Calculate">

</form>

<?php
if(isset($_POST['qty']))
{
    $price = $_POST['fruit'];
    $qty = $_POST['qty'];

    $subtotal = $price * $qty;

    setcookie("subtotal", $subtotal, time()+3600);

    echo "<h3>Subtotal = $subtotal</h3>";
}
?>

</body>
</html>
