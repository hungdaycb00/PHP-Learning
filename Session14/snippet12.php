<?php
function HRA($basic){
    $hra = 0.25*$basic;
    return $hra;
}
$b = HRA(20000);
echo "The HRA is: ";
echo $b;
?>