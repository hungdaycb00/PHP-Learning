<?php
$A = $_GET['num1text'];
$B = $_GET['num2text'];
function multiple($A, $B){
    $C = $A * $B;
    echo "The multiplication of $A and $B: $C";
}
multiple($A, $B);
?>