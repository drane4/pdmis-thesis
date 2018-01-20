<?php


if(ISSET($_POST['patientschedule'])){
  
     $patientid = $_POST['patient_S'];
    $day = $_POST['day_S'];
    $time = $_POST['time_S'];
  
 
 
    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `schedule` WHERE BINARY `Sched_Id` = '$sched_id'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `nephrologist` SET `n_lname` = '$n_lname', `n_fname` = '$n_fname', `n_mname` = '$n_mname', `n_telephone` = '$telephone', `n_mobile` = ' $mobile', `n_address` = '$address' WHERE `nephrologist`.`nephrologistid` = '$nephrologistid'") or die(mysqli_error());
    
    }
    else{
      
        $conn->query ("INSERT INTO `schedule` VALUES ('$patientid', '$time', NULL, '$day')") or die(mysqli_error());
        
       
      
    
    }
}
if(ISSET($_POST['nephroschedule'])){
  
     $nephroid = $_POST['nephro_S'];
    $day = $_POST['nephroday_S'];
    $time = $_POST['nephrotime_S'];
    $status = $_POST['nephroschedulestatus'];
  
 
 
    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `schedule` WHERE BINARY `Sched_Id` = '$sched_id'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `nephrologist` SET `n_lname` = '$n_lname', `n_fname` = '$n_fname', `n_mname` = '$n_mname', `n_telephone` = '$telephone', `n_mobile` = ' $mobile', `n_address` = '$address' WHERE `nephrologist`.`nephrologistid` = '$nephrologistid'") or die(mysqli_error());
    
    }
    else{
      
        $conn->query ("INSERT INTO `schedule` VALUES ('$patientid', '$time', NULL, '$day')") or die(mysqli_error());
        
       
      
    
    }
}
header("location: ../patientschedule.php");

?>