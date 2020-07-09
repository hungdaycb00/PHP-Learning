<?php
$username = "hungnpm";
$password = "123456";
$ConnUser = $_SERVER['PHP_AUTH_USER'];
$ConnPw = $_SERVER['PHP_AUTH_PW'];
if(isset($ConnUser) && isset($ConnPw))
{
    if($ConnUser === $username && $ConnPw ===$password)
        echo "You are now logged in";
    else
        die("Invalid username/password combination");
}
else
{
    header('WWW-Authenticate: Basic realm ="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die("Please enter your username and password");
}
?>