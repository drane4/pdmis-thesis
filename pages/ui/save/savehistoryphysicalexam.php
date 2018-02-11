<?php

if(ISSET($_POST['drug'])){
  date_default_timezone_set('Asia/Manila');
  $date1 = date("Y-m-d");
     $drugstrength = $_POST['drug']."".$_POST['strength'];
     $dosage = $_POST['dosage']; 
     $freq = $_POST['freq'];
     $roa = $_POST['roa'];
     $dateordered = $_POST['dateordered'];
     $remark = $_POST['remark'];
     $datedescription = $_POST['datedesc'];
     $PRN = $_POST['PRN'];
     $remark = $_POST['remark'];
     $nephrologistid = $_POST['nephrologistid'];
    
    

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `patientdrugprofile` WHERE BINARY `Hospital_Id` = '$_GET[id]' && `dateordered` = '$dateordered'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
    $query = $conn->query("UPDATE `patientdrugprofile` SET `drug_strength` = '$drugstrength', `dosage` = '$dosage', `frequency` = '$freq', `ROA` = '$roa', `dateordered` = '$dateordered', `datediscription` = '$datedescription', `PRN` = '$PRN', `remarks` = '$remark', `nephrologistid` = '$nephrologistid' WHERE `patientdrugprofile`.`Hospital_Id` = $_GET[id] && `dateordered` = '$dateordered'") or die(mysqli_error());
    
    }
    else{   
        $conn->query ("INSERT INTO `patientdrugprofile` VALUES ('$drugstrength','$dosage', '$freq', '$roa', '$dateordered', '$datedescription', '$PRN', '$remark', '$nephrologistid', NULL, '$_GET[id]', '$date1')") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
    }

}
 
header("location: ../PatientProfile.php?id=$_GET[id] | drug ");






?>