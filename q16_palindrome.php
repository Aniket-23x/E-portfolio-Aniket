<?php
// Question 16: Write a program to check whether the given string is a palindrome or not (Eg: Malayalam).
?>

<!DOCTYPE html>
<html>
<head>
<title>Palindrome Check</title>
</head>
<body>

<h2>Check Palindrome String</h2>

<form method="post">
Enter String:
<input type="text" name="text" required>
<input type="submit" value="Check">
</form>

<?php
if(isset($_POST['text']))
{
    $str = strtolower($_POST['text']);
    $rev = strrev($str);

    if($str == $rev)
        echo "<h3>$str is a Palindrome</h3>";
    else
        echo "<h3>$str is NOT a Palindrome</h3>";
}
?>

</body>
</html>
