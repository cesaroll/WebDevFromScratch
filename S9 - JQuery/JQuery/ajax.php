<?php

$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];


$list = array('user'=>$user, 'pass'=>$pass);

$c = json_encode($list);

echo $c;

?>