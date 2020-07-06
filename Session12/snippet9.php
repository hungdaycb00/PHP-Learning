<?php
$num = 0;
while ($num < 5){
    $num++;
    if($num==3){
        echo "Continues the loop<br>";
        continue;
    }
    echo "$num<br>";
}
echo "The loop ends.";
?>