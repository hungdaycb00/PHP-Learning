<?php
function test1(){
    if ("10" == 10){
        echo "YES";
    }
    else{
        echo "No";
    }
}
function test2(){
    if ("10" === 10){
        echo "YES";
    }
    else{
        echo "No";
    }
}
test1(); echo "<br>";
test2();
?>