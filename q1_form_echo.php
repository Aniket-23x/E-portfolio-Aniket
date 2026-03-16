<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    echo "Hello " . $name;
}
?>

<form method="post">
Name: <input type="text" name="name">
<input type="submit">
</form>
