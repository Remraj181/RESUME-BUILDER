<?php

    session_start();
    include('dbcon.php');
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conpassword = $_POST['conpassword'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "RESUME PRO";


    if($pass == $conpassword){
        // Create connection:
    $conn = new mysqli($servername, $username, $password, $dbname );

    // Check connections:
    if ($conn->connect_error){
        die("connection failed." .$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("INSERT INTO USERS (name, email, pass, conpassword) VALUES(?, ?, ?, ?)");
        //bind this question mark: 
        $stmt->bind_param("ssss",$name, $email, $pass, $conpassword);
        $stmt->execute();
        
        // registration;
        $_SESSION["status"] = "Registration successfull.";
        header("Location: singup.php");
        $stmt->close();
    }
    
    }
    else{
        echo "confirm password and password didn't matched";
        // header("Location: singup.php");
    }
    // Close the connection
    $conn->close();
    
?>