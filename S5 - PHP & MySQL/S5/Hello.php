<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
  
    <h1>Hello this is my first PHP file!</h1>      
    
    Code Output: <br/>
    
<?php

    echo "Hello World!<br/>";

    # Escaping characters

    print 'Hola "Mundo"!<br/>';
    print "Checa el \"dato\"<br/>";
    echo 'I\'m a developer<br/>';
    
    #  Comment
    // Comment
    /* Comment 
    */

    # Script PHP
    # Created in Aug/02/2015
    # By Cesar Lopez
    # This script is for educational purpose

    # Variables:

    # Strings

    $name = "Cesar";
    echo "Hi my name is ".$name."!<br/>";

    $lastName = " Lopez";
    $name .= $lastName;

    echo "My full name is ".$name."!<br/>";

    # Integers

    $num = 3 + 3;
    echo "<br/><br/>3 + 3 = ".$num;
        
    # Floating point
    $num = 3.14;
    echo "<br/>Round 3.14 = ".round($num);
    
    $num = 34454354657657875678;
    echo "<br/>Unformatted: ".$num."  formatted: ".number_format($num)."<br/>";
    
    # Constants
    define('USERNAME', 'Cesar Lopez');
    echo USERNAME;
    echo "<br/>PHP Version: ".PHP_VERSION;
    echo "<br/>OS: ".PHP_OS;


    # Arrays

    $names = array("Denise", "Jocelyn", "Almendrita", "Nicole", "Cesar");
    echo "<br/><br/>Arrays:<br/>".$names[0];

    # Associative Arrays
    $employees = array("CEO"=>"Cesar", "CFO"=>"Denise", "COO"=>"Jocelyn");
    echo "<br/><br/>Associative Array:<br/>".$employees["CEO"]."<br/>";

    # Foreach
    echo "<br/>For Each loop:<br/>";
    foreach($names as $value) {
        echo "<br/>".$value;
    }

    echo "<br/>Display key as well:<br/><br/>";
    foreach($names as $key => $value) {
        echo $key." : ".$value."<br/>";
    }

    echo "<br/>Display key as well in associative array:<br/><br/>";
    foreach($employees as $key => $value) {
        echo $key." : ".$value."<br/>";
    }

    # Multidimensional Arrays
    $cities = array("Miami", "Madrid", "Paris", "London", "Berlin");

    $data = array("names" => $names, "cities" => $cities);

    echo "<br/>";
    echo $data["cities"][2];

    $data2 = array("data" => $data);

    echo "<br/>";
    echo $data2["data"]["names"][3];


?>

    </body>
</html>   
