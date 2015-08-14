<?php 

$name = $_GET['name'];
$password = $_GET['pass'];

if($name && $password){
    
    $dbc = mysqli_connect("localhost", "root", "", "myfirstdatabase") or die("Problem with connection!");
    mysqli_set_charset($dbc, "utf8");
    
    $query = "SELECT 1 FROM users WHERE email = '$name' AND password = '$password'";
    $rdr = mysqli_query($dbc, $query);
    if(mysqli_num_rows($rdr) > 0) {
        echo "You are in!";   
    }else {
        echo "Incorrect user/password";   
    }
    
}else {
 
    echo "You have to type user and password";
}

?>