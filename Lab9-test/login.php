<?php
session_start();
require_once 'conn.php';
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


    if($username == "" && $password == "")
    {
            echo "Please enter username/password!!!";
    }
    else{
        $query = "Select * from user5 where username ='$username';";
        $result = $conn->query($query);
        $rows = $result->num_rows;
        $row = $result->fetch_array(MYSQLI_NUM);
        $result->close();
        $r3 = $row[3];
        $r2 = $row[2];
        if($rows){
            if(password_verify($password, $row[2])){
                $_SESSION['fullname'] = $r3;
                    echo "Wellcome $row[3]";
                if (($_POST['remember'] == 'Yes' && isset($_POST['remember']))){
                    setcookie("username", $username);
                    setcookie("password", $password);
                    header("location: homepage.php");
                }
            }
        }

        else{
            echo "Invalid password/username";
        }
    }

}

?>