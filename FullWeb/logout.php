<?php

$hour = time() - 3600 *24 * 30;
setcookie('username', "", $hour);
setcookie('password', "", $hour);
Header("Location:Login.html");
?>