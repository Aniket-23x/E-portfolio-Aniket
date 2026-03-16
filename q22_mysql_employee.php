<?php
// Question 22: Create a page to get employee personal information and store it in MySQL database.

$conn = mysqli_connect("localhost","root","","company");
?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Form</title>
</head>
<body>

<h2>Employee Information</h2>

<form method="post">

Name:
<input type="text" name="name" required><br><br>

Email:
<input type="email" name="email" required><br><br>

Salary:
<input type="number" name="salary" required><br><br>

<input type="submit" name="save" value="Save">

</form>

<?php

if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employee(name,email,salary) VALUES('$name','$email','$salary')";

    mysqli_query($conn,$sql);

    echo "<h3>Employee Data Inserted Successfully</h3>";
}

?>

</body>
</html>
