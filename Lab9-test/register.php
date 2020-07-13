<?php
require_once 'conn.php';

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phone']))
    {
        $username = get_post($conn,'username');
        $password= $_POST['password'];
        $fullname = get_post($conn, 'fullname');
        $email = get_post($conn, 'email');
        $phone = get_post($conn, 'phone');
        //$hash = password_hash($password, PASSWORD_DEFAULT);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "insert into user5(username, password, fullname,email,phone) values"."('$username','$hash', '$fullname', '$email', '$phone')";

        $result = $conn->query($query);
        if(!$result) echo "Insert fail!!!";
        header("location: login.html");

    }
function get_post($conn, $var){
    return $conn->real_escape_string($_POST[$var]);
}

?>