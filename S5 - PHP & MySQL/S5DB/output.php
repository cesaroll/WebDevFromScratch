<?php

include("connection.php");

$query = "SELECT id, first_name, last_name, email, DATE_FORMAT(registration_date, '%M %d, %Y') AS regis_dte ";
$query .= " FROM users ORDER BY registration_date ";

$reader = mysqli_query($dbc, $query);
$count = mysqli_num_rows($reader);

// If rows returned, display records
if($count > 0) {
    
    echo "<table align='center' border='1' cellspacing='3' cellpading='3' width='75%'>
    <tr><th>Edit</th><th>Delete</th><th>Name</th><th>Email</th><th>Date Registered</th></tr>";
    
    while($row = mysqli_fetch_array($reader) ) {
    
        echo "<tr>";
        echo "<td><a href='edit_user.php?user_id=".$row["id"]."&fname=".$row["first_name"]."&lname=".$row["last_name"]."' />Edit</td>";
        echo "<td><a href='delete.php?user_id=".$row["id"]."&fname=".$row["first_name"]."&lname=".$row["last_name"]."' />Delete</td>";
        echo "<td>".$row["last_name"].", ".$row["first_name"];
        echo "</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["regis_dte"]."</td>";
        echo "</tr>";
    
    }
    
    echo "</table>";
    
} else {
 
    echo "<br/>There are no registered users.<br/>";
    
}



mysqli_close($dbc);

?>

