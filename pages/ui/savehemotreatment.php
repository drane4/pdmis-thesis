<?php
$pageid = $_GET[id];
list($H_id ,$id2) = explode("|", $pageid);





if(ISSET($_POST['NephroNO'])){
  
   
    $notes = $_POST['p_notes'];
    $order = $_POST['p_order'];
    $date = date("Y-m-d");

    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `nephronotesorder` WHERE BINARY `Hospital_Id` = '$H_id' && `notes_order_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
     $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
 $query = $conn->query("UPDATE `nephronotesorder` SET `nephro_notes` = '$notes', `nephro_order` = '$order' WHERE `nephronotesorder`.`notes_order_Id` = '$id2' && `Hospital_Id` = '$H_id'") or die(mysqli_error());
    
    }
    else{
        
        
         $query = $conn->query("SELECT `nephrologistid` FROM `patientprofile` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
         $fetch = $query ->fetch_array();
         $N_id = $fetch['nephrologistid'];
        
        
        $conn->query ("INSERT INTO `nephronotesorder` VALUES ('$N_id', '$notes', '$order', '$date', '', '$H_id')") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
    }
}
if(ISSET($_POST['NurseNO'])){
  

    $focus = $_POST['focus'];
    $data = $_POST['data'];
    $action = $_POST['action'];
    $resolution = $_POST['resolution'];
    $date = date("Y-m-d");
  
       
    
    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `nursenotes` WHERE BINARY `nurse_notes_id` = '$id2' && `Hospital_Id` = '$H_id' && `nurse_notes_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
         $conn->query ("UPDATE `nursenotes` SET `focus` = '$focus', `data` = '$data', `action` = '$action', `resolution` = '$resolution' WHERE `nursenotes`.`nurse_notes_id` = '$id2'") or die(mysqli_error());
    
    }
    else{
        require 'session.php';
       
        
        
        $conn->query ("INSERT INTO `nursenotes` VALUES ('$focus', '$data', '$action', '$resolution', '$id', '$date', '', '$H_id')") or die(mysqli_error());
       
        
        
        
        
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
    }
}
if(ISSET($_POST['ITest'])){
    date_default_timezone_set('Asia/Manila');
    $itest_time = date("g:i a");
    $date = date("Y-m-d");
    $bloodpressure = $_POST['bloodpressure'];
    $repulsiverate = $_POST['repulsiverate'];
    $cardiacrate = $_POST['cardiacrate'];
    $initialtemp = $_POST['initialtemp'];
   

       
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `initialtestresult` WHERE BINARY `Hospital_Id` = '$H_id' && `initialtest_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){

        
           $conn->query ("UPDATE `initialtestresult` SET `initialtemperature` = '$initialtemp', `bloodpressure` = '$bloodpressure', `cardiacrate` = '$cardiacrate', `repulsiverate` = '$repulsiverate' WHERE `initialtestresult`.`initialtestresult_id` = '$id2'") or die(mysqli_error());
    
    }
    else{
        require 'session.php';
         
        $conn->query ("INSERT INTO `initialtestresult` VALUES ('$initialtemp', '$bloodpressure','$cardiacrate', '$repulsiverate', '', '$H_id', '$date', '$itest_time')") or die(mysqli_error());
      
           echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
        
        
     
    
    }
}
if(ISSET($_POST['MResult'])){
    date_default_timezone_set('Asia/Manila');
    $time = date("g:i a");
    $bloodpressure = $_POST['bloodpressure'];
    $bloodflowrate = $_POST['bloodflowrate'];
    $cardiacrate = $_POST['cardiacrate'];
    $venuspressure = $_POST['venuspressure'];
     $transmembranepressure = $_POST['transmembranepressure'];
    $date = date("Y-m-d");
  
       
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `machineresult` WHERE BINARY `machineresult_id` = '$id2' && `Hospital_Id` = '$H_id' && `m_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
         $conn->query ("UPDATE `machineresult` SET `m_bloodpressure` = '$bloodpressure', `m_cardiacrate` = '$cardiacrate', `m_bloodflowrate` = '$bloodflowrate', `m_transmempressure` = '$transmembranepressure', `m_venpressure` = '$venuspressure' WHERE `machineresult`.`machineresult_id` = '$id2'") or die(mysqli_error());
    
    }
    else{
        require 'session.php';
       
        
        
        $conn->query ("INSERT INTO `machineresult` VALUES ('$bloodpressure', '$cardiacrate','$bloodflowrate', '$transmembranepressure', '$venuspressure', '', '$H_id', '$date', '$time')") or die(mysqli_error());
       
        
        
        
        
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
    }
}header("location: Transaction.php?id=$H_id");

?>