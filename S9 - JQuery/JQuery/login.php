<?php

$name = $_POST['phpname'];
$pass = $_POST['phppass'];

if($name && $pass){
    echo "It works!";
} else{
 
    echo "You have to provide name and password!";
}

?>