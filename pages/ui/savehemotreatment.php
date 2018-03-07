<?php
$pageid = $_GET[id];

list($H_id ,$id2) = explode(" | ", $pageid);



$conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
$q10 = $conn->query("SELECT * FROM `treatment` WHERE `Hospital_Id` = '$H_id' && `treatment_date` != '$date' ORDER BY `treatment_id` DESC") or die(mysqli_error());
   $fetch10 = $q10 ->fetch_array();
$dateni = $fetch10['treatment_date'];

if(ISSET($_POST['NephroNO'])){
  date_default_timezone_set('Asia/Manila');
    $nephrologistid = $_POST['nephrologistid'];
    $notes = $_POST['p_notes'];
    $order = $_POST['p_order'];
    $date1 = date("Y-m-d");


    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `nephronotesorder` WHERE BINARY `Hospital_Id` = '$H_id' && `notes_order_date` = '$dateni'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
 
 $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
 $query = $conn->query("UPDATE `nephronotesorder` SET `nephrologistid` = '$nephrologistid', `nephro_notes` = '$notes', `nephro_order` = '$order' WHERE `nephronotesorder`.`notes_order_Id` = '$id2'") or die(mysqli_error());
    
    }
    else{
        
        $conn->query ("INSERT INTO `nephronotesorder` VALUES ('$nephrologistid', '$notes', '$order', '$dateni', '', '$H_id')") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
    }
}
if(ISSET($_POST['NurseNO'])){
  
date_default_timezone_set('Asia/Manila');
    $focus = $_POST['focus'];
    $data = $_POST['data'];
    $action = $_POST['action'];
    $resolution = $_POST['resolution'];
        $date = $_POST['date'];
    $date1 = date("Y-m-d");

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `nursenotes` WHERE BINARY `nurse_notes_id` = '$id2' && `Hospital_Id` = '$H_id' && `nurse_notes_date` = '$dateni'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
         $conn->query ("UPDATE `nursenotes` SET `focus` = '$focus', `data` = '$data', `action` = '$action', `resolution` = '$resolution' WHERE `nursenotes`.`nurse_notes_id` = '$id2'") or die(mysqli_error());
    
    }
    else{
        require 'session.php';
        $conn->query ("INSERT INTO `nursenotes` VALUES ('$focus', '$data', '$action', '$resolution', '$id', '$dateni', '', '$H_id')") or die(mysqli_error());
       

        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
    }
}
if(ISSET($_POST['ITest'])){
    date_default_timezone_set('Asia/Manila');
   
    $itest_time = $_POST['time'];
        $date = $_POST['date'];
    $date1 = date("Y-m-d");
    $bloodpressure = $_POST['bloodpressure'];
    $repulsiverate = $_POST['repulsiverate'];
    $cardiacrate = $_POST['cardiacrate'];
    $initialtemp = $_POST['initialtemp'];
   

       
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `initialtestresult` WHERE BINARY `Hospital_Id` = '$H_id' && `initialtest_date` = '$dateni'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){

        
           $conn->query ("UPDATE `initialtestresult` SET `initialtemperature` = '$initialtemp', `bloodpressure` = '$bloodpressure', `cardiacrate` = '$cardiacrate', `repulsiverate` = '$repulsiverate', `initialtest_time` = '$itest_time' WHERE `initialtestresult`.`initialtestresult_id` = '$id2'") or die(mysqli_error());
    
    }
    else{
        require 'session.php';
         
        $conn->query ("INSERT INTO `initialtestresult` VALUES ('$initialtemp', '$bloodpressure','$cardiacrate', '$repulsiverate', '', '$H_id', '$dateni', '$itest_time')") or die(mysqli_error());
      
           echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
        
        
     
    
    }
}
if(ISSET($_POST['MResult'])){
    date_default_timezone_set('Asia/Manila');

    $time = $_POST['time'];
    $bloodpressure = $_POST['bloodpressure'];
    $bloodflowrate = $_POST['bloodflowrate'];
    $cardiacrate = $_POST['cardiacrate'];
    $venuspressure = $_POST['venuspressure'];
    $transmembranepressure = $_POST['transmembranepressure'];
    $date =  $_POST['date'];
    $date1 = date("Y-m-d");
  
       

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `machineresult` WHERE BINARY `machineresult_id` = '$id2' && `Hospital_Id` = '$H_id' && `m_date` = '$dateni'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
         $conn->query ("UPDATE `machineresult` SET `m_bloodpressure` = '$bloodpressure', `m_cardiacrate` = '$cardiacrate', `m_bloodflowrate` = '$bloodflowrate', `m_transmempressure` = '$transmembranepressure', `m_venpressure` = '$venuspressure', `m_time` = '$time' WHERE `machineresult`.`machineresult_id` = '$id2'") or die(mysqli_error());
    
    }
    else{
        require 'session.php';
        
        $conn->query ("INSERT INTO `machineresult` VALUES ('$bloodpressure', '$cardiacrate','$bloodflowrate', '$transmembranepressure', '$venuspressure', '', '$H_id', '$dateni', '$time')") or die(mysqli_error());
       

        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
    }
}
if(ISSET($_POST['treatment_infos'])){
    require 'session.php';
    //date_default_timezone_set('Asia/Manila');
    $pageid = $_GET[id];
    list($H_id,$id2) = explode("|", $pageid);
    $weight = $_POST['weight'];    
    $duration = $_POST['duration'];
    $bfr = $_POST['bfr'];
    $dialyzer = $_POST['dialyzer'];
    $access = $_POST['access'];
    $dialyzeruse = $_POST['dialyzeruse'];
    $heparin = $_POST['heparin'];
    $machinenum = $_POST['machinenum'];
    $technician = $_POST['technician'];
    $date2 = $_POST['dates'];
    //$date1 = date("Y-m-d");
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `treatment` WHERE BINARY `Hospital_Id` = '$H_id' && `treatment_date` = '$date2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
    if($check > 0){
    $conn->query ("UPDATE `treatment` SET `treatment_duration` = '$duration', `BFR` = '$bfr', `dialyzer` = '$dialyzer', `dialyzer_user` = '$dialyzeruse', `access` = '$access', `heparin` = '$heparin', `machine_num` = '$machinenum', `weight` = '$weight', `technicianid` = '$technician' WHERE `treatment`.`Hospital_Id` = '$H_id' && `treatment_date` = '$date2'") or die(mysqli_error());
        
    }
    else{
        
        $conn->query ("INSERT INTO `treatment` VALUES ('', '$date2', '$duration', '$bfr', '$dialyzer', '$dialyzeruse', '$access', '$heparin', '$machinenum', '$H_id', '$weight', '$id', '$technician')") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";
      
    
    }
}


header("location: Transaction.php?id=$H_id");

?>