<?php
// Question 6: Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line without hyphen at start and end.
?>

<!DOCTYPE html>
<html>
<head>
<title>Numbers with Hyphen</title>
</head>
<body>

<h2>Display Numbers</h2>

<?php
for($i = 1; $i <= 10; $i++)
{
    if($i < 10)
        echo $i . "-";
    else
        echo $i;
}
?>

</body>
</html>
