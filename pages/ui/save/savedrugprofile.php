<?php
 ini_set('display_errors', 0);
 $pageid = $_GET[id];
 list($H_id ,$id2) = explode(" | ", $pageid);

if(ISSET($_POST['drug'])){
 
    
     $drugstrength = $_POST['drugname']." ".$_POST['strength'];
     $dosage = $_POST['dosage']; 
     $freq = $_POST['freq'];
     $roa = $_POST['roa'];
     $dateordered = $_POST['dateordered'];
     $remark = $_POST['remark'];
 //    $datedescription = $_POST['datedesc'];
     $PRN = $_POST['PRN'];
     $remark = $_POST['remark'];
     $nephrologistid = $_POST['nephrologistid'];
    $date1 = date('Y, F', strtotime($dateordered));
    

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `patientdrugprofile` WHERE BINARY `Hospital_Id` = '$H_id' && `drugprofile_id` = '$id2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
  
  
    if($check > 0){
   
    $query = $conn->query("UPDATE `patientdrugprofile` SET `drug_strength` = '$drugstrength', `dosage` = '$dosage', `frequency` = '$freq', `ROA` = '$roa', `dateordered` = '$dateordered', `PRN` = '$PRN', `remarks` = '$remark', `nephrologistid` = '$nephrologistid' WHERE `patientdrugprofile`.`Hospital_Id` = '$H_id' && `drugprofile_id` = '$id2'") or die(mysqli_error());
     echo "<script type='text/javascript'> alert ('Drug Profile Updated!');</script>";
    }
    else{   

        $conn->query ("INSERT INTO `patientdrugprofile` VALUES ('$drugstrength','$dosage', '$freq', '$roa', '$dateordered', '$PRN', '$remark', '$nephrologistid', '', '$H_id', '$date1')") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('Drug Profile saved!');</script>";
      
    
    }

}

echo "<script>document.location='../PatientProfile.php?id=$H_id | drug '</script>"






?>