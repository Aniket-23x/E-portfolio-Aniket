<?php
// Question 17: Create a registration page in HTML and display the entered information using PHP.
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post">

Name:
<input type="text" name="name" required><br><br>

Email:
<input type="email" name="email" required><br><br>

Age:
<input type="number" name="age" required><br><br>

<input type="submit" value="Register">

</form>

<?php
if(isset($_POST['name']))
{
    echo "<h3>Entered Information</h3>";

    echo "Name: " . $_POST['name'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Age: " . $_POST['age'];
}
?>

</body>
</html>
