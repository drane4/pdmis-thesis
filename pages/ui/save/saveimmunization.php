<?php

    ini_set('display_errors', 0);
    $pageid = $_GET[id];
    
    list($H_id ,$id2) = explode(" | ", $pageid);
    if(ISSET($_POST['hepatitis'])){
  
        $description = $_POST['description'];
        $administered = $_POST['administered'];
        $datereceived = $_POST['datereceived'];
        $nddo1 = $_POST['nddo'];
        $date1 = date('Y, F', strtotime($datereceived));
        
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `hepatitisbvaccine` WHERE `Hospital_Id` = '$H_id' && `hepa_id` = '$id2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;


    if($check > 0){
  
            $conn->query ("UPDATE `hepatitisbvaccine` SET `description` = '$description', `administeredby` = '$administered', `hepa_daterecieved` = '$datereceived', `hepa_nextdate` = '$nddo1' WHERE `hepa_id` = '$id2'") or die(mysqli_error());
    
    }
    else{

        $conn->query ("INSERT INTO `hepatitisbvaccine` VALUES ('$description', '$administered', '$datereceived', '$nddo1', '', '$H_id','$date1')") or die(mysqli_error());
    
    }
    
           
    
   
    
}
  if(ISSET($_POST['immunization'])){
  
     
        $administered = $_POST['administeredimmune'];
        $datereceived = $_POST['datereceivedimmune'];
        $nddo = $_POST['nddoimmune'];
        $date1 = date('Y, F', strtotime($datereceived));

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `influenzavaccine` WHERE `Hospital_Id` = '$H_id' && `influenza_id` = '$id2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   

    if($check > 0){
     
            $conn->query ("UPDATE `influenzavaccine` SET `influenza_administeredby` = '$administered', `influenza_daterecieved` = '$datereceived', `influenza_datenext` = '$nddo' WHERE `influenzavaccine`.`influenza_id` = $id2") or die(mysqli_error());
    
    }
    else{
 
        $conn->query ("INSERT INTO `influenzavaccine` VALUES ('$administered', '$datereceived', '$nddo', '', '$H_id','$date1')") or die(mysqli_error());

    }
    
           
    
   
    
}
 if(ISSET($_POST['pneumococcal'])){
  
     
        $administered = $_POST['administeredpneumon'];
        $datereceived = $_POST['datereceivedpneumon'];
        $nddo = $_POST['nddopneumon'];
$date1 = date('Y, F', strtotime($datereceived));

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `pneumococcal_vaccine` WHERE `Hospital_Id` = '$H_id' && `pneumococcal_id` = '$id2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   

    if($check > 0){
     
            $conn->query ("UPDATE `pneumococcal_vaccine` SET `pneumococcal_administeredby` = '$administered', `pneumococcal_datenext` = '$datereceived', `pneumococcal_daterecieved` = '$nddo' WHERE `pneumococcal_vaccine`.`pneumococcal_id` = '$id2'") or die(mysqli_error());
    
    }
    else{
 
        $conn->query ("INSERT INTO `pneumococcal_vaccine` VALUES ('$administered', '$nddo', '$datereceived', '', '$H_id','$date1')") or die(mysqli_error());
    
    }
    
           
    
   
    
}
header("location: ../PatientProfile.php?id=$H_id | immunization");  

?>