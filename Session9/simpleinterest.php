<?php
$p = $_GET['n1text'];
$r = $_GET['n2text'];
$n = $_GET['n3text'];
$si = ($p * $r * $n)/100;
echo "The calculated simp interest is $si";
?>