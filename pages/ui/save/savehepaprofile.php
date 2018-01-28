<?php

   ini_set('display_errors', 0);
   //$pageid = $_GET[id];
  // list($H_id ,$id2) = explode(" | ", $pageid);
if(ISSET($_POST['submit'])){
  
    $dateordered = $_POST['dateordered'];
    $hbsag = $_POST['hbsag'];
    $antihbs = $_POST['antihbs'];
    $hcv = $_POST['hcv'];
    $hiv = $_POST['hiv'];

    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `hepatitisprofile` WHERE `Hospital_Id` = '$_GET[id]'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `hepatitisprofile` SET `hepatitisday` = '$dateordered', `HbsAg` = '$hbsag', `AntiHBs` = '$antihbs', `hcv` = '$hcv', `hiv` = '$hiv' WHERE `Hospital_Id` = '$_GET[id]'") or die(mysqli_error());

    }
    else{
      
        $conn->query ("INSERT INTO `hepatitisprofile` VALUES ('$dateordered', '$hbsag', '$antihbs', '$hcv', '$hiv', '$_GET[id]', '');") or die(mysqli_error());

    }
    
           
    
   
    
}
  header("location: ../PatientProfile.php");  

?>