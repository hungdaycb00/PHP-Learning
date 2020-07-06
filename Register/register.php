<?php
require_once 'conn.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_errno) die ("Fail Connect!!!");

//add new user
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phone']))
{

    $username = get_post($conn, 'username');
    $password= get_post($conn, 'password');
    $fullname = get_post($conn, 'fullname');
    $email = get_post($conn, 'email');
    $phone = get_post($conn, 'phone');
    $query = "insert into user1(username, password, fullname,email,phone) values"."('$username','$password', '$fullname', '$email', '$phone')";

    $result = $conn->query($query);
    if(!$result) echo "add fail!!!";
    else echo "Success!!!";
}
function get_post($conn, $var){
    return $conn->real_escape_string($_POST[$var]);
}

?>