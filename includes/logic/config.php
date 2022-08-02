<?php
    
    // connecting database
    $conn = mysqli_connect('localhost', 'root', '', 'restaurant');
   
    // checking database 
    if(!$conn) {
        die("Database connection failed!");
    }

?>