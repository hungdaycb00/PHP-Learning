<?php
$to = "recient@example.com";
$from = "hungcb1994@gmail.com";
$subject = "Test e-mail";
$body = "This is an example for showing the usage of the mail() function.";
$send = mail($to, $subject, $body, $from);
if($send){
    echo "Mail sent to $to address!!!";
}
else{
    echo "Mail could not be sent to $to address!!!";
}
?>