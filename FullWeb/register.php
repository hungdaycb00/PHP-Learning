<?php
require_once 'login.php';


//insert value
if(isset($_POST['forename']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['password']))
{
    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "insert into users values('$forename', '$surname', '$username', '$password');";
    $result = $conn->query($query);
    if(!$result) die('insert fall');
    echo "Wellcom $username";
    echo "<br><a href='logout.php'>LogOut</a>";
}

?>
