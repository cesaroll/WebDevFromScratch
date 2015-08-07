<?php
//Page Title
echo "<h3>Control Panel</h3>";
include('navbar.php');

include("connection.php");

//number of records by page
$display = 4;

//Determine how many pages are there
$query = "SELECT COUNT(id) FROM users";
$reader = mysqli_query($dbc, $query);
$row = mysqli_fetch_array($reader, MYSQLI_NUM);
$records = $row[0];

if($records > $display) {
    $pages = ceil($records/$display);   
} else {
    $pages = 1;   
}

//Determine where in the Db to start returnning results
if(isset($_GET['s']) && is_numeric($_GET['s'])) {
    $start = $_GET['s'];
} else {
    $start = 0;   
}

$query = "SELECT id, first_name, last_name, email, DATE_FORMAT(registration_date, '%M %d, %Y') AS regis_dte ";
$query .= " FROM users ORDER BY registration_date LIMIT $start, $display ";

$reader = mysqli_query($dbc, $query);
$count = mysqli_num_rows($reader);

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

//Links to other pages
if($pages > 1) {
    echo "<br/><p><center>";
    
    //Determine current page
    $curr_page = ($start/$display) + 1;
    
    //If not fisrt page, create previous link
    if($curr_page != 1){
        echo "<a href='output.php?s=". ($start - $display) ."'>Previous</a>";   
    }
    
    echo " ";
    
    //Make all numbered pages
    for($i=1; $i<=$pages; $i++) {
        
        if($i != $curr_page) {
          echo "<a href='output.php?s=". ($display * ($i - 1)) ."'>$i</a>";   
        }else {
            echo "$i";   
        }
        
        echo " ";
        
    }
    
    //If not last page, make next button
    if($curr_page != $pages) {
        echo "<a href='output.php?s=". ($start + $display) ."'>Next</a>";   
    }
    
    echo "</center></p>";
}

?>


