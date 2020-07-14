<?php
$hn = 'localhost';
$un = 'root';
$pw = '';
$db = 'publications';
$conn = new mysqli($hn,$un, $pw, $db);
if($conn->connect_errno) die("connect Error");
?>