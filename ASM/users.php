<?php
require_once 'conn.php';
session_start();
if(isset($_POST['Admin'])&& isset($_POST['password'])){
    $username = $_POST['Admin'];
    $password = $_POST['password'];

    header('location: managerWeb.php');
    $query = "Select * from users where username = '$username';";
    $result = $conn->query($query);
    $rows = $result->num_rows;
    if($rows){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
    }
    $result->close();
}
?>