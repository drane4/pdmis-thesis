<?php
 ini_set('display_errors', 0);
$pageid = $_GET[id];

list($H_id ,$id2) = explode(" | ", $pageid);

if(ISSET($_POST['NephroNO'])){
  date_default_timezone_set('Asia/Manila');
    $nephrologistid = $_POST['nephrologistid'];
    $notes = $_POST['p_notes'];
    $order = $_POST['p_order'];
    $date = date("Y-m-d");

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `nephronotesorder` WHERE BINARY `Hospital_Id` = '$H_id' && `notes_order_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
     $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
 $query = $conn->query("UPDATE `nephronotesorder` SET `nephrologistid` = '$nephrologistid', `nephro_notes` = '$notes', `nephro_order` = '$order' WHERE `nephronotesorder`.`notes_order_Id` = '$id2'") or die(mysqli_error());
        echo "<script type='text/javascript'> alert ('Notes/Order Updated!');</script>";

    }
    else{
        
        $conn->query ("INSERT INTO `nephronotesorder` VALUES ('$nephrologistid', '$notes', '$order', '$date', '', '$H_id')") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('Notes/Order Saved!');</script>";
      
    
    }
}
if(ISSET($_POST['NurseNO'])){
  
date_default_timezone_set('Asia/Manila');
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
        echo "<script type='text/javascript'> alert ('Nurse's Notes Updated!');</script>";
    }
    else{
        require '../session.php';
       
        
        
        $conn->query ("INSERT INTO `nursenotes` VALUES ('$focus', '$data', '$action', '$resolution', '$id', '$date', '', '$H_id')") or die(mysqli_error());
       
        
        
        
        
        echo "<script type='text/javascript'> alert ('Nurse's Notes Saved!');</script>";
      
    
    }
}
if(ISSET($_POST['ITest'])){
    date_default_timezone_set('Asia/Manila');
    $itest_time = date("g:i a");
    $date = date("Y-m-d");
    $bloodpressure = $_POST['isbp']." / ".$_POST['idbp'];
    $repulsiverate = $_POST['repulsiverate'];
    $cardiacrate = $_POST['cardiacrate'];
    $initialtemp = $_POST['initialtemp'];
   

       
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `initialtestresult` WHERE BINARY `Hospital_Id` = '$H_id' && `initialtest_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){

        
           $conn->query ("UPDATE `initialtestresult` SET `initialtemperature` = '$initialtemp', `bloodpressure` = '$bloodpressure', `cardiacrate` = '$cardiacrate', `repulsiverate` = '$repulsiverate' WHERE `initialtestresult`.`initialtestresult_id` = '$id2'") or die(mysqli_error());
             echo "<script type='text/javascript'> alert ('Initial Result Updated!');</script>";
    }
    else{
        require '../session.php';
         
        $conn->query ("INSERT INTO `initialtestresult` VALUES ('$initialtemp', '$bloodpressure','$cardiacrate', '$repulsiverate', '', '$H_id', '$date', '$itest_time')") or die(mysqli_error());
      
           echo "<script type='text/javascript'> alert ('Initial Result Saved!');</script>";
      
    
        
        
     
    
    }
}
if(ISSET($_POST['MResult'])){
    date_default_timezone_set('Asia/Manila');
    $time = date("g:i a");
    $bloodpressure = $_POST['msbp']." / ".$_POST['mdbp'];
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
            echo "<script type='text/javascript'> alert ('Machine Result Updated!');</script>";
    }
    else{
        require '../session.php';
       
        
        
        $conn->query ("INSERT INTO `machineresult` VALUES ('$bloodpressure', '$cardiacrate','$bloodflowrate', '$transmembranepressure', '$venuspressure', '', '$H_id', '$date', '$time')") or die(mysqli_error());
        echo "<script type='text/javascript'> alert ('Machine Result Saved!');</script>";
        
      
    
    }
}
if(ISSET($_POST['treatment_infos'])){
    require '../session.php';
    date_default_timezone_set('Asia/Manila');
    $pageid = $_GET[id];
    list($H_id,$id2) = explode("|", $pageid);
    
     $pw = $_POST['preweight'];
    list($preweight ,$id2) = explode(" ", $pw);
    $postw = $_POST['postweight'];
    list($postweight ,$id2) = explode(" ", $postw);
        
  
    $bfr = $_POST['bfr'];
    $dialyzer = $_POST['dialyzer'];
    $access = $_POST['access'];
    $dialyzeruse = $_POST['dialyzeruse'];
    $heparin = $_POST['heparin'];
    $machinenum = $_POST['machinenum'];
    $technician = $_POST['technician'];
    $date = date("Y-m-d");

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `treatment` WHERE BINARY `Hospital_Id` = '$H_id' && `treatment_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
    $conn->query ("UPDATE `treatment` SET `BFR` = '$bfr', `dialyzer_user` = '$dialyzeruse', `access` = '$access', `heparin` = '$heparin', `machine_num` = '$machinenum', `preweight` = '$preweight', `technicianid` = '$technician', `postweight` = '$postweight' WHERE `treatment`.`Hospital_Id` = '$H_id' && `treatment_date` = '$date'") or die(mysqli_error());
        
     echo "<script type='text/javascript'> alert ('Treatment Info Updated!');</script>";
    }
    else{
        
    
        $conn->query ("INSERT INTO `treatment` VALUES ('', '$date', '$bfr', '$dialyzeruse', '$access', '$heparin', '$machinenum', '$H_id', '$preweight', '$id', '$technician', $postweight)") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('Treatment Info Saved!');</script>";
      
    
    }
}

echo "<script>document.location='../transaction.php?id=$H_id'</script>"
?>