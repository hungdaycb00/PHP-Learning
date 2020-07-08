<?php
$connect = mysqli_connect("localhost", "root", "");
if($result = mysqli_query($connect, "Select * from user1")){
    $rows = mysqli_num_rows($result);
    echo "The table contains $rows rows.<br>";
}
?>