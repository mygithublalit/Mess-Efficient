<?php
   
   $server = "localhost";
   $username = "root";
   $password = "";
   $database = "registration";

   $insert = false;

   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

   if(isset($_POST['submit'])){
   $con = mysqli_connect($server , $username , $password , $database);
   if(!$con){
       echo "connection to the database is fail";
   }

   $day1=$_POST['monday'];
   $day2=$_POST['tuesday'];
   $day3=$_POST['wednesday'];
   $day4=$_POST['thursday'];
   $day5=$_POST['friday'];
   $day6=$_POST['saturday'];
   $day7=$_POST['sunday'];
   $student_Id =$_POST['student_id'] ;

   $mon=implode(",",$_POST['monday']);

   $monday = implode($day1);
   $tuesday = implode($day2);
   $wednesday = implode($day3);
   $thursday = implode($day4);
   $friday = implode($day5);
   $saturday = implode($day6);
   $sunday = implode($day7);

   $query1 = "insert into student_record (s_id,monday,tuesday,wednesday,thursday,friday,satruday,sunday)
               values('$student_Id','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday');";

    if($con->query($query1)==true){
        echo "thankyou for giving your valuble time<br>";
    
        echo "Your record is saved in mess database successful";
    }
    else{
        echo "ERROR : $con->error";
    }

    $con->close();
}
?>