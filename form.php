<?php

if(isset($_POST['submit'])) {
    echo "hello";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Verificate</title>
    <script>
        function validateForm() {
            var regex = new RegExp("^[a-zA-Z ]+$");
            var x = document.forms["Form"]["name"].value;
            if (x == null || x == "") {
                alert("Name must not be blank");
                return false;
            } else if (!regex.test(x)) {
                alert("Name contains invalid characters (letters and spaces only!)");
                return false;
            } else {
                return true;
            }
        }</script>
</head>>
<body>
<form action="form.php" name="Form" onsubmit="return validateForm()" method="post">

    <input type="text" name="name" placeholder="Enter name">Name</input>
    <input type="email" name="email" placeholder="Enter email">Email</input>><br>
    <input type="number" name="age" placeholder="Enter age">Age</input><br>
    <input type="submit" name="submit">Submit</input>

</form>
</body>>
</html>>
