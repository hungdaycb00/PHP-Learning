<?php

$object = new Subcriber();
$object->name = "Hung";
$object->password = 11111;
$object->phone = 987654789;
$object->email = "QuaCoca@gmail.com";
$object->display();
class User3{
    public $name, $password;
    function save_User(){
        echo "Save User code goes here";
    }
}

class Subcriber extends User3{
    public $phone, $email;
    function display(){
        echo "Name: " . $this->name . "<br>";
        echo "Password: " . $this->password . "<br>";
        echo "Phone: " . $this->phone . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}
?>