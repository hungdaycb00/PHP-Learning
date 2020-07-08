<?php
$b = $_GET['numtext1'];
function DA(&$a){
    $B = 0.1 * $a;
    echo "<br>Your salary is $a USD";
    echo "<br>Dearness Allowance is $B USD";
}
DA($b);
?>