<?php


if(ISSET($_POST['nephroschedule'])){
  
     $nephroid = $_POST['nephro_S'];
    $day = $_POST['nephroday_S'];
    $time = $_POST['nephrotime_S'];
    $status = $_POST['nephroschedulestatus'];
  
 
 
    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `nephrologistschedule` WHERE `nephrologistid` = '$nephroid'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `nephrologistschedule` SET `nephroschedule_day` = '$day', `nephroschedule_time` = '$time', `nephrologistschedule_status` = '$status' WHERE `nephrologistschedule`.`nephrologistid` = '$nephroid'") or die(mysqli_error());
    
    }
    else{
      
        $conn->query ("INSERT INTO `nephrologistschedule` VALUES (NULL, '$nephroid', '$day', '$time', '$status')") or die(mysqli_error());
        
       
      
    
    }
}
header("location: ../nephroschedule.php");

?>