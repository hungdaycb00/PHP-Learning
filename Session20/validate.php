<?php
$val1 = $_GET['logname'];
$val2 = $_GET['pass'];
setcookie("logname", $val1);
if($val1 == ""){
    echo "Please enter the name!";
    echo "<a href='infomation.html'>Back</a>";
}
elseif ($val2 ==""){
    echo "Please enter the password!";
    echo "<a href='infomation.html'>Back</a>";

}
else{
    header("Location: homepage.php");
}
?>