<?php
 ini_set('display_errors', 0);
 $pageid = $_GET[id];
 list($H_id ,$id2) = explode(" | ", $pageid);

if(ISSET($_POST['submit'])){
  date_default_timezone_set('Asia/Manila');
 
    
    
     $problem = $_POST['problem'];
     $datenoted = $_POST['datenoted'];
     $dateresolved = $_POST['dateresolved'];
     $date1 = date('Y, F', strtotime($datenoted));
    
  

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `problemlist` WHERE BINARY `Hospital_Id` = '$H_id' && `problemlist_id` = '$id2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
  
  
    if($check > 0){
    $query = $conn->query("UPDATE `problemlist` SET `problem` = '$problem' WHERE `problemlist`.`problemlist_id` = $id2;") or die(mysqli_error());
     echo "<script type='text/javascript'> alert ('Problem List Details Updated!');</script>";
    }
    else{   
        $conn->query ("INSERT INTO `problemlist` VALUES ('$problem', '$datenoted', '$dateresolved', '$H_id', NULL, '$date1');") or die(mysqli_error());
   
        echo "<script type='text/javascript'> alert ('Problem List Details Saved!');</script>";

    
    }

}
 
echo "<script>document.location='../PatientProfile.php?id=$H_id | problemlist'</script>"





?>