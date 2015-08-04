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

        <form action="handle.php" method="post">
               
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

    </body>
</html>