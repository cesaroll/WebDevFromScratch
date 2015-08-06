<?php

/* processing Form */

//Verify form is submitting

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname   = $_REQUEST["fname"];
    $lname   = $_REQUEST["lname"];
    $email  = $_REQUEST["email"];
    $gender = $_REQUEST["gender"];
    $age    = $_REQUEST["age"];
    $comments = $_REQUEST["comments"];
    $password = $_REQUEST["password"];
    
    if(!empty($fname) &&  !empty($lname) && !empty($email) && !empty($gender) && !empty($age) && !empty($comments) && !empty($password)){
        
        include("connection.php");
        
        //Insert Values in BD
        
        mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, gender, age, comments, password, registration_date) VALUES('$fname','$lname','$email','$gender','$age','$comments','$password',NOW())");
        
        $affectedrows = mysqli_affected_rows($dbc);
        
        if($affectedrows > 0) {
        
            echo "<h3>You are registered! Please login <a href='index.php' >here</a></h3>";
        } else {
              
            echo "<p style='color:red;'>Error while inserting to Db.</p>";
        }
        
        
        
    } else{
        echo "<p style='color:red;'>Please fill all values of the form!</p><br/><br/>";
        
        echo "First Name: ".$fname."<br/>";
        echo "Last Name:  ".$lname."<br/>";
        echo "Email:    ".$email."<br/>";
        echo "Gender:   ".$gender."<br/>";
        echo "Age:      ".$age."<br/>";
        echo "Comments: ".$comments;
    }
    
}else {
    echo "<h3>Please complete the form.</h3>";   
}
    



?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <Title>MySQL</Title>
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <form action="userform.php" method="post">
               
            <p>First Name: <input type="text" name="fname" size="20" maxlength="50" /></p>
            <p>Last Name: <input type="text" name="lname" size="20" maxlength="50" /></p>
            <p>Email: <input type="text" name="email" size="40" maxlength="60" /></p>
            <p>Gender: <input type="radio" name="gender" value="M" />Male
                       <input type="radio" name="gender" value="F" />Female
            </p>
            <p>Age: 
                <select name="age">
                    <option value="0-29">Under 30</option>
                    <option value="30-60">Between 30 and 60</option>
                    <option value="60+">Over 60</option>
                </select>
            </p>
            <p>Comments:
                <textarea name="comments" cols="40" rows="3" maxlength="200"></textarea>
            </p>
            <p>Password:
                <input type="password" name="password" maxlength="50" />
            </p>
            <p>
                <input type="submit" name="submit" value="Submit" />
            </p>
            
            
        </form>        

        <a href="index.php">Go back to login form</a>
   
    </body>
</html>