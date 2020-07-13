<?php
setcookie('username', $_POST['username'], time()-3000);
setcookie('password', $_POST['password'], time()-3000);
echo "Delete cookies success!";
echo "<a href='login.html'>Back to Login</a>";
?>