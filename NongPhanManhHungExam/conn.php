<?php
$hn = 'localhost';
$un = 'root';
$pw = '';
$db = 'users';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_errno) die("Connect SQL Fail!!!");
?>