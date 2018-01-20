<?php


if(ISSET($_POST['submit'])){
  
     $patientid = $_POST['patient_S'];
    $day = $_POST['day_S'];
     $time = $_POST['time_S'];
    $status = $_POST['status'];

    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `patientschedule` WHERE BINARY `Hospital_Id` = '$patientid'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `patientschedule` SET `treatment_day` = '$day', `treatment_time` = '$time', `treatment_status` = '$status' WHERE `patientschedule`.`Hospital_Id` = '$patientid'") or die(mysqli_error());
    }
    else{
        
        $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
        $conn->query ("INSERT INTO `patientschedule` VALUES (NULL, '$patientid', '$day', '$time', '$status')") or die(mysqli_error());
        
        echo "<script type='text/javascript'> alert ('Account registered successfully!');</script>";
      
    
    }
}
header("location: ../patientschedule.php");

?>