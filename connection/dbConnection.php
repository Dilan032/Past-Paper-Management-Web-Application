<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$databaseName = "past_paper_db"; 

// connection
$connection = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if ($connection) {
    //echo "Succsesfully connect";
}
else {
    die("Connection failed: " . $connection);
}

mysqli_select_db($connection, "past_paper_db");
?>