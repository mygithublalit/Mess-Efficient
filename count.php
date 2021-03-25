<?php
   
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "registration";

   $insert = false;

   if(isset($_POST['choice'])){
   $con = mysqli_connect($server , $username , $password , $database);
   if(!$con){
       echo "connection to the database is fail";
   }

   $choice=$_POST['choice'];
   

   $Q1 = "INSERT INTO `student` (`choice`) 
          VALUES ('$choice');";

    if($con->query($Q1)==true){
       // echo "inseration successfull";
    $insert = true;
    }
    else{
        echo "ERROR : $con->error";
    }

    if($insert==true)
        echo "your response taken successfully <br> thankyou for your valuable  response";
    else
        echo "something is invalid please recheck fields";
    $con->close();
}
?>