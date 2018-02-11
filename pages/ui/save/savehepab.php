<?php

    ini_set('display_errors', 0);
    $pageid = $_GET[id];
    list($H_id ,$id2) = explode(" | ", $pageid);
    if(ISSET($_POST['submit'])){
  
  
    $datedone1= $_POST['$datedone1'];
    $dosedue1 = $_POST['dosedue1'];
    $administerby1 = $_POST['administerby1'];
    $datedone2= $_POST['$datedone2'];
    $dosedue2 = $_POST['dosedue2'];
    $administerby2 = $_POST['administerby2'];
    $datedone3= $_POST['$datedone3'];
    $dosedue3 = $_POST['dosedue3'];
    $administerby1 = $_POST['administerby3'];
    $datedone4= $_POST['$datedone4'];
    $dosedue4 = $_POST['dosedue4'];
    $administerby4 = $_POST['administerby4'];
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
    $q1 = $conn->query ("SELECT * FROM `immunizationprofile` WHERE `Hospital_Id` = '$_GET[id]'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `immunizationprofile` 
                            SET `datedone1` = '$datedone1', `dosedue1` = '$dosedue1', `administerby1` = '$administerby1', 
                            `datedone2` = '$datedone2', `dosedue2` = '$dosedue2' , `administerby2` = '$administerby2',
                            `datedone3` = '$datedone3', `dosedue3` = '$dosedue3' , `administerby3` = '$administerby3',
                            `datedone2` = '$datedone4', `dosedue4` = '$dosedue4' , `administerby4` = '$administerby4'
                            WHERE `Hospital_Id` = '$_GET[id]'") or die(mysqli_error());

    }
    else{
      
        $conn->query ("INSERT INTO `immunizationprofile` VALUES ('$datedone1', '$dosedue1', '$administerby1', 
                        '$datedone2', '$dosedue2', '$administerby2', 
                        '$datedone3', '$dosedue3', '$administerby3', 
                        '$datedone4', '$dosedue4', '$administerby4', 
                        '$_GET[id]', '');") or die(mysqli_error());

    }
}
  header("location: ../PatientProfile.php");  

?>