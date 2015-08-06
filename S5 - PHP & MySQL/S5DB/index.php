<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <h3>Please Login...</h3>
        
        <form method="post" action="login.php">
            <p>Email:<input type="text" name="login_email" maxlength="50" /></p>
            <p>Password<input type="password" name="login_password" maxlength="50" /></p>
            <p><input type="submit" value="Login" /></p>
        </form>
        
        <br/>
        <a href="userForm.php">Register Here</a>

    </body>
</html>