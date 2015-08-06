<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include("connection.php");

    //Security functions
    $login_email = mysqli_real_escape_string($dbc, trim($_POST["login_email"]));
    $login_password = mysqli_real_escape_string($dbc, trim($_POST["login_password"]));

    $reader = mysqli_query($dbc, "SELECT * from users WHERE email='$login_email' AND password='$login_password' ");
    $numrows = mysqli_num_rows($reader);

    if($numrows > 0) {

        $row = mysqli_fetch_array($reader);
        
        $fname = $row["first_name"];
        
        echo "<p>Welcome ".$fname.", to'll be redirected to control panel in 4 seconds...</p>";
        header('Refresh: 4; URL=output.php');

    } else {
        echo "<p>User/Password incorrect. Go back to <a href='index.php'>login</a> </p>";
        echo "<p>If you are not registered please register <a href='userform.php'>here.</a></p>";
    }
}

?>

