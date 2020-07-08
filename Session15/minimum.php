<?php
$a = array($_GET['num1'], $_GET['num2'], $_GET['num3']);

function getMinNum(array $a){

    echo min($a);
}
getMinNum($a);
?>