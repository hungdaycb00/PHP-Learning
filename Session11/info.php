<?php
$myname = $_POST['myname'];
$myage = $_POST['myage'];
if($myname == "")
{
    echo "Please enter your name";
}
else{
    if($myage ==""){
        echo $myname;
        echo ", you did not enter your age!";
    }
    else{
        echo "Hi ";
        echo $myname . " ." . "Your age is " . $myage . ".";
    }
}
?>