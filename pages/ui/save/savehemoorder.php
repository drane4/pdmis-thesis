<?php
 ini_set('display_errors', 0);
 $pageid = $_GET[id];
 list($H_id ,$id2) = explode(" | ", $pageid);



if(ISSET($_POST['submit'])){
 
  date_default_timezone_set('Asia/Manila');
  $date1 = date("Y-m-d");
    
    $diabetic = $_POST['diabetic'];
    $chronic = $_POST['chronic'];
    $hypertensive = $_POST['hypertensive'];
    $esrdothers = $_POST['esrdothers']; 
    $frequencyothers = $_POST['frequencyothers'];   
    $durationothers = $_POST['durationothers'];
    $hepstat = $_POST['hepstat']; 
    $antihstat = $_POST['antihstat']; 
    $hepstatdate = $_POST['hepstatdate']; 
    $antihstatdate = $_POST['antihstatdate']; 
    $access = $_POST['access']; 
    $insertdate = $_POST['insertdate'];
    $surgeon = $_POST['surgeon']; 
    $avfistula = $_POST['avfistula']; 
    $avdate = $_POST['avdate']; 
    $avsurgeon = $_POST['avsurgeon']; 
    $ptfe = $_POST['ptfe'];
    $ptdate = $_POST['ptdate'];
    $ptsurgeon = $_POST['ptsurgeon'];
    $frequency = $_POST['frequency'];
    $duration = $_POST['duration'];
    $dialyzer = $_POST['dialyzer'];
    $reuse = $_POST['reuse'];
    $dialysatebath = $_POST['dialysatebath'];
     $hdrug = $_POST['hdrug'];
     $hdose = $_POST['hdose'];
     $bloodflow = $_POST['bloodflow'];
     $targetwt = $_POST['targetwt'];
     $medication = $_POST['medication'];
    
    
        
    
    

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `hemo_order` WHERE BINARY `Hospital_Id` = '$H_id' && `order_id` = '$id2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
    $query = $conn->query("UPDATE `hemo_order` SET `esrd_diabetic` = '$diabetic', `esrd_chronic` = '$chronic', `esrd_hypertensive` = '$hypertensive', `esrd_others` = '$esrdothers', `freq_others` = '$frequencyothers', `dur_others` = '$durationothers', `hepastat` = '$hepastat', `antihstat` = '$antihstat', `hepstatdate` = '$hepstatdate', `antihstatdate` = '$antihstatdate', `access` = '$access', `insertdate` = '$insertdate', `surgeon` = '$surgeon', `avfistula` = '$avfistula', `avdate` = '$avdate', `avsurgeon` = '$avsurgeon', `ptfe` = '$ptfe', `ptdate` = '$ptdate', `ptsurgeon` = '$ptsurgeon', `frequency` = '$frequency', `duration` = '$duration', `dialyzer` = '$dialyzer', `reuse` = '$reuse', `dialysatebath` = '$dialysatebath', `hdrug` = '$hdrug', `hdose` = '$hdose', `bloodflow` = '$bloodflow', `targetwt` = '$targetwt', `medication` = '$medication' WHERE `hemo_order`.`order_id` = '$id2';") or die(mysqli_error());
         echo "<script type='text/javascript'> alert ('Hemo Order Updated!');</script>";
    }
    else{   
        $conn->query ("INSERT INTO `hemo_order` (`esrd_diabetic`,`esrd_chronic`,`esrd_hypertensive`,`esrd_others`,`freq_others`,`dur_others`, `hepastat`, `antihstat`, `hepstatdate`, `antihstatdate`, `access`, `insertdate`, `surgeon`, `avfistula`, `avdate`, `avsurgeon`, `ptfe`, `ptdate`, `ptsurgeon`, `frequency`, `duration`, `dialyzer`, `reuse`, `dialysatebath`, `hdrug`, `hdose`, `bloodflow`, `targetwt`, `medication`, `Hospital_id`, `order_id`, `order_date`) 
        VALUES ('$diabetic', '$chronic', '$hypertensive', '$esrdothers', '$frequencyothers', '$durationothers',$hepastat', '$antihstat', '$hepstatdate', '$antihstatdate', '$access', '$insertdate', '$surgeon', '$avfistula', '$avdate', '$avsurgeon', '$ptfe', '$ptdate', '$ptsurgeon', '$frequency', '$duration', '$dialyzer', '$reuse', '$dialysatebath', '$hdrug', '$hdose', '$bloodflow', '$targetwt', '$medication', '$H_id', NULL, '$date1')") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('Hemo Order Saved!');</script>";
  
    
    }

}

echo "<script>document.location='../PatientProfile.php?id=$H_id | order'</script>"





?>