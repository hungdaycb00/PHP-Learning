<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_COOKIE['username'])){
    setcookie('username', $_POST['username'], time()-3000);
    setcookie('password', $_POST['password'], time()-3000);
    echo "Delete cookies success!";
}
if (isset($_SESSION['fullname'])){
    session_destroy();
    echo "Delete cookies success!";
}


echo "<a href='login.html'>Back to Login</a>";
?>