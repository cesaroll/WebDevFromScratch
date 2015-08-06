<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
    
    include("connection.php");
    
    $getemail = mysqli_real_escape_string($dbc,trim($_POST['getemail']));
    
    mysqli_query($dbc, "DELETE FROM users WHERE email='$getemail' ");
    
    echo "User has been deleted!";
    
} else {
 
    echo "Please Login";
}


?>


<h3>Type email of user to be deleted:</h3>
<form method="post" action="delete.php">
    
    <input type="text" name="getemail">
    <input type="submit" name="submit" value="Delete this User">
</form>