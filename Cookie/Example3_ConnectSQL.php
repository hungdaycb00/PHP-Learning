<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);

if($conn->connect_error) die("Connect to SQL error");
$query = "Create table users(
    forename varchar (32) not null,
    surname varchar (32) not null,
    username varchar (32) not null unique ,
    password varchar (32) not null
)";

    $result = $conn->query($query);
    if(!$result) die("Execute query Error");
    $forename = 'Nong';
    $surname = 'Phan';
    $username = 'hungnpm';
    $password = '123456';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    add_user($conn, $forename, $username, $username, $hash);


    $forename = 'Phan111111';
    $surname = 'Manh';
    $username = 'test1111';
    $password = '123456';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    add_user($conn, $forename, $username, $username, $hash);

    function add_user($conn, $fn, $sn, $un, $pw ){
        $stmt = $conn->prepare('Insert into users values(?,?,?,?)');
        $stmt->bind_param('ssss', $fn, $sn, $un, $pw);
        $stmt->execute();
        $stmt->close();
    }
?>