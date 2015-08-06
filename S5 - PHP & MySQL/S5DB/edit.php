<?php
error_reporting(0);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    include('connection.php');
    
    $id = $_POST['userid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    
    $query = "UPDATE users SET first_name='$fname', last_name='$lname', email='$email' WHERE id='$id' ";
    
    $r = mysqli_query($dbc, $query);
    
    if(mysqli_affected_rows($dbc) == 1) {
     
        echo "<p>User updated!</p>";
    } else {
     
        echo "<p>Someting went wrong</p>";
    }
    
    
}

?>


<h1>Edit User</h1>
<form action="edit.php" method="post">
    <p><input type="hidden" name="userid" size="20" maxlength="50" value="<?php echo $_GET['user_id']; ?>" ></p>
    <p>First Name:<input type="text" name="fname" size="20" maxlength="50" value="<?php echo $_GET['fname']; ?>" ></p>
    <p>Last Name:<input type="text" name="lname" size="20" maxlength="50" value="<?php echo $_GET['lname']; ?>" ></p>
    <p>Email:<input type="text" name="email" size="20" maxlength="50" value="<?php echo $_GET['email']; ?>" ></p>
    <p><input type="submit" name="submit" value="Save" ></p>
</form>


<a href="output.php">See Records</a>