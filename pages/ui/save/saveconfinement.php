<?php

 ini_set('display_errors', 0);
 $pageid = $_GET[id];
 list($H_id ,$id2) = explode(" | ", $pageid);

if(ISSET($_POST['submit'])){
  date_default_timezone_set('Asia/Manila');
  $date1 = date("Y-m-d");
    
    
     $hospitalname = $_POST['hospitalname'];
     $confinementdate = $_POST['confinementdate'];
     $confinementreason = $_POST['confinementreason'];
     $date1 = date('Y, F', strtotime($confinementdate));
    
    

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `confinement` WHERE BINARY `Hospital_Id` = '$H_id' && `confinement_id` = '$id2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
    $query = $conn->query("UPDATE `confinement` SET `hospitalname` = '$hospitalname', `confinementdate` = '$confinementdate', `confinementreason` = '$confinementreason' WHERE `confinement`.`confinement_id` = $id2;") or die(mysqli_error());
    echo "<script type='text/javascript'> alert ('Confinement Details Updated!');</script>";

            //activity log start here
include('../session.php');
  $time = date("g:i a");
$conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
 $querylogin = $conn->query("INSERT INTO `activitylog` VALUES ('$id','Update Patient Record','$date1','$time', '')") or die(mysqli_error());
 
        
    }
    else{   
        $conn->query ("INSERT INTO `confinement` VALUES ('$hospitalname', '$confinementdate', '$confinementreason', '$H_id', '','$date1')") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('Confinement Details Saved!');</script>";
      
$conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
 $querylogin = $conn->query("INSERT INTO `activitylog` VALUES ('$id','Update Patient Record','$date1','$time', '')") or die(mysqli_error());
 
       

    
    }

}
 
echo "<script>document.location='../PatientProfile.php?id=$H_id | confinement'</script>"





?>