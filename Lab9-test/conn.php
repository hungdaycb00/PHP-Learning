<?php
$hn = "localhost";
$un = 'root';
$pw = '';
$db = 'register';
$conn = new mysqli($hn,$un, $pw, $db);
if($conn->connect_errno) die("Connect sql Fail!!!");
?>