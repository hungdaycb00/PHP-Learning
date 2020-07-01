<?php
$a = $_GET['NAME'];
if($a > 60){
    echo "Congrats! ";
    echo "You have got Grade 1.";
}
else if($a < 60 and $a > 40){
    echo "Congrats!";
    echo "You have got Grade 2.";
}
else{
    echo "Sorry. you have failed.";
}
?>