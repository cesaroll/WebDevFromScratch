
<table align="center" border="1" cellspacing="3" cellpading="3" width="75%">
    <tr>
    <th>Name</th>

    <th>Email</th>
    </tr>

<?php

include("connection.php");

$reader = mysqli_query($dbc, "SELECT * FROM users ORDER BY last_name");

while($row = mysqli_fetch_array($reader) ) {
    
    echo "<tr>";
    echo "<td>".$row["last_name"].", ".$row["first_name"];
    echo "</td>";
    echo "<td>".$row["email"]."</td>";
    echo "</tr>";
    
}

mysqli_close($dbc);

?>

</table>