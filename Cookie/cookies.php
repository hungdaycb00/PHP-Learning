<!DOCTYPE html>
<html>
<head>
    <title>Using Cookies</title>
</head>
<body>
<p>The first time this page loads no cookies should have been set and the message below should
show that cookie with the name <b>test</b> has the value <i>false</i>(meaning it is not set).</p>
<p>But then a value is assigned to the cookie <b>test</b>. To see this new cookie's value click Reload.</p>

<?php
$test ='false';
if(isset($_COOKIE['test'])) $test = $_COOKIE['test'];
echo "<p><b>The value of the cookie 'test' is: $test</b></p>";
setcookie('test', 'I loe cookies');

//set the cookies
setcookie("cookie[three]", 'cookiethree');
setcookie("cookie[two]", 'cookietwo');
setcookie("cookie[1]", 'cookieone');

//after the page reloads print them out
if(isset($_COOKIE['cookie'])){
    foreach ($_COOKIE['cookie'] as $name => $value){
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br/>\n";
    }
}
?>

</body>
</html>