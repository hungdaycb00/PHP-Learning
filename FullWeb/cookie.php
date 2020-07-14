<?php
$val1 = $_GET['username'];
$val2 = $_GET['password'];

setcookie('username', $val1);

if($val1 == ""){
    echo "Please enter the name!";
    echo <<<_end
<pre>
<a href="Login.html">Back</a>
</pre>
_end;
}
else if($val2 == ""){
    echo "Please enter the password!";
    echo <<<_end
<pre>
<a href="Login.html">Back</a>
</pre>
_end;
}

?>