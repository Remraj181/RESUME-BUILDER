<?php
 // Database connection
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "RESUME PRO";



 $conn = mysqli_connect($servername, $username, $password, $dbname );

 // Check connections:
 if ($conn->connect_error){
        die("connection failed." .$conn->connect_error);
    }
?>