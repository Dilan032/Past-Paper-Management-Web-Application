<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$databaseName = "past_paper_db"; 

// Check connection
try {
    $connection = new mysqli($servername, $username, $password, $databaseName);
    if ($connection->connect_error) {
        throw new Exception("Connection failed: " . $connection->connect_error);
    }
} catch (Exception $e) {

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Connection failed. Send an Email to Developer <a href="mailto:dilankanishka032@gmail.com">dilankanishka032@gmail.com </a> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

?>
