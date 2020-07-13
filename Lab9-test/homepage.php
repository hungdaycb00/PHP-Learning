<?php
session_start();

if(isset($_SESSION['fullname'])){
    echo "Welcome " .$_SESSION['fullname'];
}
//if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
//    $logcookieName = $_COOKIE['username'];
//    $logcookiePass  = $_COOKIE['password'];
//    echo "Welcome user: $logcookieName!!!";
//    echo "Password: $logcookiePass!!!";
//    echo "<br><a href='deletecookie.php'>Delete Cookies</a>";
//}
 else echo "Don't have any Cookies here!!!";

?>