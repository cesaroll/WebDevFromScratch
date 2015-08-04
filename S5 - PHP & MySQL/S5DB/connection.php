<?php

/*MySQL Connection */

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "myfirstdatabase";

//Making the connection to the DB

$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("Could not connect to DB<br/>ERROR: ".mysqli_connect_error());

//Set encoding
mysqli_set_charset($dbc, "utf8");

echo "You are connected to ".$dbname." Database";


?>