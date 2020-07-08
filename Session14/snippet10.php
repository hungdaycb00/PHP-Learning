<?php
function increment(&$num, $increment = 1){
    $num += $increment;
}
$num = 4;
increment($num);
increment($num, 3);
echo $num;
increment($num, 3);
?>