<?php
   
   header('location:index.html');

   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "registration";

   $insert = false;

   if(isset($_POST['first_name'])){
   $con = mysqli_connect($server , $username , $password , $database);
   if(!$con){
       echo "connection to the database is fail";
   }

   $fname=$_POST['first_name'];
   $lname=$_POST['last_name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $password=$_POST['password'];

   $Q1 = "INSERT INTO `student` (`f_name`, `l_name`, `email`, `password`, `phone`) 
          VALUES ('$fname', '$lname', '$email', '$password', '$phone');";

    if($con->query($Q1)==true){
       // echo "inseration successfull";
    $insert = true;
    }
    else{
        echo "ERROR : $con->error";
    }

    if($insert==true)
        echo "your registration is successfull <br> thankyou for joining us";
    else
        echo "something is invalid please recheck fields";
    $con->close();
}
?>