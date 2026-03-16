<?php
// Question 18: Get username & password from user. If username is 'admin' and password is 'godsgift' show welcome message otherwise show error and redirect to login page.
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
<body>

<h2>Login</h2>

<form method="post">

Username:
<input type="text" name="username" required><br><br>

Password:
<input type="password" name="password" required><br><br>

<input type="submit" value="Login">

</form>

<?php
if(isset($_POST['username']))
{
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "godsgift")
    {
        echo "<h3>Welcome Admin</h3>";
    }
    else
    {
        echo "<h3>Invalid Login! Redirecting...</h3>";
        header("refresh:3;url=q18_login_validation.php");
    }
}
?>

</body>
</html>
