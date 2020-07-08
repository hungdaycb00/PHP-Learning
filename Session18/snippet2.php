<?php
$dbname = 'mysql';
if(!mysqli_connect('127.0.0.1', 'root', '')){
    echo "could not connect to mysql";
    exit();
}
    $sql = "Show tables from $dbname";
$connect = mysqli_connect('127.0.0.1', 'root', '');
$result = mysqli_query($connect, $sql);
if(!$result)
    $result = mysqli_query($sql);
echo "The tables: <br>";

if(!$result){
    echo "DB error";
    exit();
}
while ($row = mysqli_fetch_row($result)){
    echo "Tabke: {$row[0]} <br>";
}
?>