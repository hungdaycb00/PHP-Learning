<?php
session_start();
require_once 'login.php';
if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
}
    $query = "select * from users where username = '$username' and password = '$password';";
    $result = $conn ->query($query);
    if(!$result) die("fail!!!");
    $rows = $result->num_rows;
    if(!$rows) {
        echo "Invalid value!";
    }
    else{
            if($_POST['remember'] == 'Yes')
            {
                setcookie('mycookie', $username);
                header('Location:homepage.php');
            }
            else if($_COOKIE['mycookie'] == $username){
                header('Location:homepage.php');

            }
            else{
                echo "Wellcome $username";
            }
        }

?>