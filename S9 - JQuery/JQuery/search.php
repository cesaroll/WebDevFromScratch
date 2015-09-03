<?php

$q = $_GET['term'];

$dbc = mysqli_connect("localhost", "root", "", "webdev") OR die("Could not connect to DB<br/>ERROR: ".mysqli_connect_error());
//Set encoding
mysqli_set_charset($dbc, "utf8");


$query = "SELECT name FROM states WHERE name LIKE '$q%' ";

$reader = mysqli_query($dbc, $query);

$data = array();

while($row = mysqli_fetch_array($reader)) { 
    $data[] = array('value' => $row['name']);    
}


echo json_encode($data);

?>