<?php
require_once 'conn.php';
 $conn = new mysqli($hn, $un, $pw, $db);

 // delete the values with isbn
if(isset($_POST['delete']) && isset($_POST['isbn'])){
    $isbn = get_post($conn, 'isbn');
    $query = "delete from customers where isbn = '$isbn'";
    $result = $conn->query($query);
    if(!$result) echo "fail delete";

}
//add the values
if(isset($_POST['name']) && isset($_POST['isbn'])){
    $name = get_post($conn, 'name');
    $isbn = get_post($conn, 'isbn');
    $query = "Insert into customers " . "values('$name','$isbn')";
    $result = $conn->query($query);
    if(!$result) echo "fails";

}
echo <<<_end
<pre>
<form action="testConnect.php" method="post">
Name <input type="text" name="name">
ISBN <input type="text" name="isbn">
<input type="submit" value="Add values">
</form>
</pre>
_end;


//get the values of customers
$query = "Select * from customers";
$result = $conn->query($query);
$rows = $result->num_rows;
for($i = 0; $i < $rows; $i++){
    $row = $result->fetch_array(MYSQLI_NUM);
    $r0 = $row[0];
    $r1 = $row[1];

    echo <<<_end
<pre>
Name: $r0
ISBN: $r1
</pre>
<form action="testConnect.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="isbn" value="$r1">
<input type="submit" value="Delete value">
</form>
_end;

}
function get_post($conn, $var){
    return $conn->real_escape_string($_POST[$var]);
}

?>