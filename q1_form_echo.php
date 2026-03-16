// 1. Create a simple HTML form and accept the user name and display the name through PHP echo


<html>
<head>
    <title>Display Name</title>
</head>
<body>

<h2>Enter Your Name</h2>

<form method="post">
    Name: <input type="text" name="username" required>
    <input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['username'])) {
    $name = $_POST['username'];
    echo "<h3>Hello, " . $name . "!</h3>";
}
?>

</body>
</html>
