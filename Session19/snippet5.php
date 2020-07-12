<?php

$cookieval = $_COOKIE['uname'];
?>
<HTML>
<body>
<?php
if(isset($cookieval)){
    echo "Welcome $cookieval";
}
else{
    echo "You need to log in";
}
?>
</body>
</HTML>
