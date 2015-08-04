<?php
    
    if( "Cesar" == "Cesar" && 3 < 4 && 4 == 5) {
        echo "Condition is true";
    } else {
     
        echo "Consition is NOT true";
    }

    $name = "";

    echo "<br/>";
    if($name) {
        echo "Name is NOT empty";
    } else {
        echo "Name is empty";   
    }

    # For Loop
    for($i = 0; $i < 10; $i++) {
        echo "<br/> Value is: ".$i;
    }
    
    echo "<br/><br/>";

    # While Loop
    $i = 0;
    while($i < 10 ) {
        echo $i++;   
    }

    # Switch
    
    $name = "Cesar";
    echo "<br/><br/>";
switch($name) {
    case "Cesar":
        echo "Hello ".$name;
        break;
    case "Edgar":
        echo "You are not Cesar";
        break;
    default:
        echo "Who are you?";
}

?>