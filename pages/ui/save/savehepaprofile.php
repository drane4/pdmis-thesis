<?php

    ini_set('display_errors', 0);
    $pageid = $_GET[id];
    list($H_id ,$id2) = explode(" | ", $pageid);
    if(ISSET($_POST['submit'])){
  
    $hepatitisdate = $_POST['hepatitisdate'];
    $hbsag = $_POST['hbsag'];
    $antihbs = $_POST['antihbs'];
    $hcv = $_POST['hcv'];
    $hiv = $_POST['hiv'];
    $date1 = date('Y, F', strtotime($hepatitisdate));
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `hepatitisprofile` WHERE `Hospital_Id` = '$H_id' && `hepatitisprofile_id` = '$id2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `hepatitisprofile` SET `hepatitisdate` = '$hepatitisdate', `HbsAg` = '$hbsag', `AntiHBs` = '$antihbs', `hcv` = '$hcv', `hiv` = '$hiv' WHERE `Hospital_Id` = '$H_id' && `hepatitisprofile_id` = '$id2'") or die(mysqli_error());

    }
    else{
      
        $conn->query ("INSERT INTO `hepatitisprofile` VALUES ('$hepatitisdate', '$hbsag', '$antihbs', '$hcv', '$hiv', '$_GET[id]', '','$date1')") or die(mysqli_error());

    }
    
           
    
   
    
}
  header("location: ../PatientProfile.php?id=$H_id | hepatitis");  

?>