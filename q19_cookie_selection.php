<?php
// Question 19: Create pages for fruits and vegetables and display the selected item in a separate page using cookies.
?>

<!DOCTYPE html>
<html>
<head>
<title>Fruit Selection</title>
</head>
<body>

<h2>Select a Fruit</h2>

<form method="post">

<select name="fruit">
<option>Apple</option>
<option>Mango</option>
<option>Banana</option>
<option>Orange</option>
</select>

<input type="submit" value="Save Selection">

</form>

<?php
if(isset($_POST['fruit']))
{
    setcookie("fruit", $_POST['fruit'], time()+3600);

    echo "<h3>Selected Fruit: " . $_POST['fruit'] . "</h3>";
}
?>

</body>
</html>
