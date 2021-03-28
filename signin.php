<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "registration";
    
    $insert = false;
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    if(isset($_POST['submit'])){
        $con = mysqli_connect($server , $username , $password , $database);
        if($con){
            // echo "connection to the database is successful";
            $email=$_POST['email'];
            $pass=$_POST['password'];

            $Q1= "select * from student where email='$email' and password='$pass'";

            $result = mysqli_query($con,$Q1);
            $num = mysqli_num_rows($result);

            if($num == 1){
                $_SESSION['user'] = $email;
               // header('location:index.html');
               echo $email," login successful";
            }
            else{
                header('location:signup.html');
            }

        }
        else{
            echo "connection to the database is fail";
        }

        $con->close();
    }

?>