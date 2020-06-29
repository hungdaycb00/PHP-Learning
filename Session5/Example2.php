<?php
$object = new User1(1,"hung");

class User1{

    function __construct($id, $name)
    {
        echo $id . "  " . $name;
    }
}
?>