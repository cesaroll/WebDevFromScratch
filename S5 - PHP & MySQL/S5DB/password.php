<?php

//Verify form is submitting

if($_SERVER["REQUEST_METHOD"] == "POST") {
 
    //Connect DB
    include("connection.php");
    
    //Create Array of errors
    $errors = array();
    
    //Check for email address
    if(empty($_POST["email"])) {
        $errors[] = "Enter email";   
    } else {
     
        $email = mysqli_real_escape_string($dbc, trim($_POST["email"]));
    }
    
    //Check for password
    if(empty($_POST["pass"])) {
        $errors[] = "Enter current password";   
    } else {
     
        $pass = mysqli_real_escape_string($dbc, trim($_POST["pass"]));
    }
    
    //Check for new password
    if(!empty($_POST["newpass"])) {
        
        if($_POST["newpass1"] != $_POST["newpass"]) {
            
            $errors[] = "New and confirmed passwords do not match!";   
            
        } else {            
            $newpass = mysqli_real_escape_string($dbc, trim($_POST["newpass"]));
        }        
    } else {     
        $errors[] = "Enter new password";   
    }
    
    
    //If no errors check current email and password exist in DB
    if(empty($errors)) {
     
        $query = "SELECT id FROM users WHERE email='$email' AND password='$pass' ";
        $reader = mysqli_query($dbc, $query);
        $count = mysqli_num_rows($reader);
        
        //Get user id
        if($count >= 1) {
            $row = mysqli_fetch_array($reader, MYSQLI_NUM);
            
            //Make update Query
            $updtqry = "UPDATE users SET password='$newpass' WHERE id='$row[0]' ";
            $return = mysqli_query($dbc, $updtqry);
            
            //Check everything ok
            if(mysqli_affected_rows($dbc) == 1) {
                //ok confirmation message
                echo "Passsword Updated, thanks!<br/>";
            } else {
                echo "Password cannot be changed, system error.<br/>";   
            }
        } else {
            echo "Email and password do not match our records!<br/>";   
        }
        
    } else {
        
        echo "<b>The followiong erros ocurred:</b><br/><br/>";
        
        foreach($errors as $err) {
            echo $err."<br/>";
        }
        
    }
    
    //close connection
    mysqli_close($dbc);
    
}



?>

<h1>Change password</h1>


<form action="password.php" method="post">
    
    <p>Email: <input type="text" name="email" size="20" maxlength="50" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" /></p>
    <p>Current Password: <input type="password" name="pass" size="10" maxlength="50" value="<?php if(isset($_POST['pass'])) { echo $_POST['pass']; } ?>" /></p>
    <p>New Password: <input type="password" name="newpass" size="10" maxlength="50" value="<?php if(isset($_POST['newpass'])) { echo $_POST['newpass']; } ?>" /></p>
    <p>Confirm New Password: <input type="password" name="newpass1" size="10" maxlength="50" value="<?php if(isset($_POST['newpass1'])) { echo $_POST['newpass1']; } ?>" /></p>
    <p><input type="submit" name="submit" value="Change Password" /> &nbsp;
     <a href="output.php">Go Back</a></p>
</form>

