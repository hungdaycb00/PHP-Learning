<?php
require_once 'conn.php';

if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "insert into customer values ('', '$fullname', '$email', '$username', '$password')";
    $result = $conn->query($query);
    if(!$result) die("Query is fail!!!");
    else{
        setcookie('username', $username);
        setcookie('fullname', $fullname);
        header("location: welcome.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>

    </style>
</head>

<body>
<h1>Register</h1>
<div class="center">

</div>
<form action="register.php" method="post">
    Fullname <br><input type="text" name="fullname"><br>
    Email <br> <input type="email" name="email"><br>
    Username <br><input type="text" name="username"><br>
    Password <br><input type="password" name="password"><br><br>
    <input type="submit" value="Register">
</form>
</body>
</html>
