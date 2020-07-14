<?php
if(isset($_COOKIE['mycookie']))
{
    $logcookie =$_COOKIE['mycookie'];
    echo "Welcome $logcookie";
    echo "<br><a href='logout.php'>LogOut</a>";
}
?>