<?php
// Question 21: Create the login web page using session.

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Session Login</title>
</head>
<body>

<h2>Login using Session</h2>

<form method="post">

Username:
<input type="text" name="username" required><br><br>

Password:
<input type="password" name="password" required><br><br>

<input type="submit" name="login" value="Login">

</form>

<?php
if(isset($_POST['login']))
{
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "123")
    {
        $_SESSION['user'] = $user;
        echo "<h3>Login Successful. Welcome ".$_SESSION['user']."</h3>";
    }
    else
    {
        echo "<h3>Invalid Login</h3>";
    }
}
?>

</body>
</html>
