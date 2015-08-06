<?php

include("connection.php");

$query = "SELECT id, first_name, last_name, email, DATE_FORMAT(registration_date, '%M %d, %Y') AS regis_dte ";
$query .= " FROM users ORDER BY registration_date ";

$reader = mysqli_query($dbc, $query);
$count = mysqli_num_rows($reader);

//Page Title
echo "<h3>Control Panel</h3>";
include('navbar.php');

// If rows returned, display records
if($count > 0) {
    
    echo "<p>There are $count registered users.</p>";
    
    echo "<table align='center' border='1' cellspacing='3' cellpading='3' width='75%'>
    <tr><th>Edit</th><th>Delete</th><th>Name</th><th>Email</th><th>Date Registered</th></tr>";
    
    while($row = mysqli_fetch_array($reader) ) {
    
        $id = $row["id"];
        $fname = $row["first_name"];
        $lname = $row["last_name"];
        $email = $row["email"];
        $regdte = $row["regis_dte"];
        
        $urlstr = "user_id=".$id."&fname=".$fname."&lname=".$lname."&email=".$email;
        
        echo "<tr>";
        echo "<td><a href='edit.php?".$urlstr."' />Edit</td>";
        echo "<td><a href='delete.php?".$urlstr."' />Delete</td>";
        echo "<td>".$lname.", ".$fname;
        echo "</td>";
        echo "<td>".$email."</td>";
        echo "<td>".$regdte."</td>";
        echo "</tr>";
    
    }
    
    echo "</table>";
    
} else {
 
    echo "<br/>There are no registered users.<br/>";
    
}



mysqli_close($dbc);

?>

