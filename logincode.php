<?php
    session_start();
    include('dbcon.php');

    if(isset($_POST['login_now_btn'])){
        {
            if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password']))){
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);

                $login_query = "SELECT * FROM USERS WHERE email = '$email' AND  pass = '$password' LIMIT 1";
                $login_query_run = mysqli_query($conn, $login_query);

                if(mysqli_num_rows($login_query_run) > 0){
                    $_SESSION['status'] = "You are successfully Logged In.";
                    header("Location: home2.php");
                    exit(0);
                }
                else{
                    $_SESSION['status'] = "user not found";
                    header("Location: singup.php");
                    exit(0);
                }
            }
        }
    }

?>