<?php

if(isset($_POST['dialysisdetail'])){
    
     $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
    $query = $conn->query("SELECT `patientprofile`.`Hospital_Id`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`initialtestresult`.`initialtest_time`,`treatment`.`treatment_date` FROM `patientprofile` INNER JOIN `initialtestresult` ON `patientprofile`.`Hospital_Id` = `initialtestresult`.`Hospital_Id` INNER JOIN `treatment` ON `patientprofile`.`Hospital_Id` = `treatment`.`Hospital_Id` GROUP BY `treatment`.`treatment_date`") or die(mysqli_error());
    
}else{
   
     $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
    $query = $conn->query("SELECT `patientprofile`.`Hospital_Id`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`initialtestresult`.`initialtest_time`,`treatment`.`treatment_date` FROM `patientprofile` INNER JOIN `initialtestresult` ON `patientprofile`.`Hospital_Id` = `initialtestresult`.`Hospital_Id` INNER JOIN `treatment` ON `patientprofile`.`Hospital_Id` = `treatment`.`Hospital_Id` GROUP BY `treatment`.`treatment_date`") or die(mysqli_error());
    
}

 



?>