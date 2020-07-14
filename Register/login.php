<?php
require_once 'conn.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_errno) die ("Fail Connect!!!");

$query = "Select * from user1";
$result = $conn->query($query);
$rows = $result->num_rows;
for($i = 0; $i < $rows; $i++) {
    $row = $result->fetch_array(MYSQLI_NUM);
    $r0 = $row[0];
    $r1 = $row[1];
    $r2 = $row[2];
    $r3 = $row[3];
    $r4 = $row[4];
    $r5 = $row[5];
    if(isset($_POST['username']) && isset($_POST['password'])){

        $username = get_post($conn, 'username');
        $pass = get_post($conn, 'password');
        if($username == $r1 && $pass == $r2){
            echo "Welcome! " . $r3;
            break;
        }else {
            echo "Invalid username/password";
        }
            echo <<<_end
<br><br>
<a href="login.html">Back
</a>
_end;
            break;

    }
}

function get_post($conn, $var){
    return $conn->real_escape_string($_POST[$var]);

}
$result->close();
$conn->close();
?>