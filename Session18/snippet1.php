<?php
$conn = mysqli_connect('localhost', 'root','', 'register');
$mysqli_db = mysqli_select_db($conn, "register");
if(!$mysqli_db){
    die ("Connection failed");
}
else{
    echo "Wellcom!";
}
?>