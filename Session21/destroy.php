<?php
session_start();
$myname = $_SESSION['myname'];
session_unset();
session_destroy();
?>
<HTML>
<body>
<a href="mypage.php">Homepage of MyPage.com</a>
</body>
</HTML>
