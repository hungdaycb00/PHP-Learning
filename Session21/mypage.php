<?php
session_start();
$myname = $_SESSION['myname'];

?>
<HTML>
<body>
welcome <?php
echo $myname
?>
to MyPage.com <br>
</body>
</HTML>
