<?php
// Question 8: Accept a number from 1-10 and print numbers from 1-10 except the given number using continue.
?>

<!DOCTYPE html>
<html>
<head>
<title>Continue Example</title>
</head>
<body>

<h2>Skip Number</h2>

<form method="post">
Enter a number (1-10):
<input type="number" name="skip" min="1" max="10" required>
<input type="submit" value="Submit">
</form>

<?php
if(isset($_POST['skip']))
{
    $skip = $_POST['skip'];

    for($i = 1; $i <= 10; $i++)
    {
        if($i == $skip)
            continue;

        echo $i . " ";
    }
}
?>

</body>
</html>
