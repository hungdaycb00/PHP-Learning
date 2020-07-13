<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if(isset($_SESSION['fullname'])){
    echo "Welcome " .$_SESSION['fullname'];
    echo "<br><a href='deletecookie.php'>Delete Session</a>";
}
else if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
    $logcookieName = $_COOKIE['username'];
    $logcookiePass  = $_COOKIE['password'];
    echo "Welcome user: $logcookieName!!!";
    echo "Password: $logcookiePass!!!";
    echo "<br><a href='deletecookie.php'>Delete Cookies</a>";
}
 else echo "Don't have any Cookies here!!!";

?>