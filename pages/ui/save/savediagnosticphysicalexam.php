<?php
 ini_set('display_errors', 0);
 $pageid = $_GET[id];
 list($H_id ,$id2) = explode(" | ", $pageid);

if(ISSET($_POST['submit'])){
  date_default_timezone_set('Asia/Manila');
  $date1 = date("Y-m-d");
    
     $pioothers = $_POST['pioothers'];    
     $pshothers = $_POST['pshothers'];
     $dm = $_POST['dm'];
     $hpn = $_POST['hpn'];
     $ptb = $_POST['ptb'];
     $cancer = $_POST['cancer'];
     $asthma = $_POST['asthma'];
     $alcoholintake = $_POST['alcoholintake'];
     $smokinghistory = $_POST['smokinghistory'];
     $drugallergies = $_POST['drugallergies'];
     $foodallergies = $_POST['foodallergies'];
     $bp = $_POST['bp'];
     $cr = $_POST['cr'];
     $rr = $_POST['rr'];
     $skin = $_POST['skin'];
     $heent = $_POST['heent'];
     $chestlungs = $_POST['chestlungs'];
     $cardiovascular = $_POST['cardiovascular'];
     $abdomen = $_POST['abdomen'];
     $rectal = $_POST['rectal'];
     $extremeties = $_POST['extremeties'];
     $neurological = $_POST['neurological'];
     $diagnosis = $_POST['diagnosis'];
     $historyby = $_POST['historyby'];
     $doneon = $_POST['doneon'];

     
    
   

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `diagnostic/examination` WHERE BINARY `Hospital_Id` = '$H_id' && `diagnostic/examination_id` = '$id2'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
  
  
    if($check > 0){ 
    $query = $conn->query("UPDATE `diagnostic/examination` SET `PSH_others` = '$pshothers',`PIO_others` = '$pioothers',`DM` = '$dm', `HPN` = '$hpn', `PTB` = '$ptb', `Cancer` = '$cancer', `Asthma` = '$asthma', `Alcoholintake` = '$alcoholintake', `SmokingHistory` = '$smokinghistory', `DrugAllergy` = '$drugallergies', `FoodAllergy` = '$foodallergies', `BP` = '$bp', `CR` = '$cr', `RR` = '$rr', `Skin` = '$skin', `Heent` = '$heent', `Chest/lungs` = '$chestlungs', `Cardiovascular` = '$cardiovascular', `Abdomen` = '$abdomen', `Rectal` = '$rectal', `Extremeties` = '$extremeties', `Neurological` = '$neurological', `Diagnosis` = '$diagnosis', `Historyby` = '$historyby', `Doneon` = '$doneon' WHERE `diagnostic/examination`.`diagnostic/examination_id` = '$id2'") or die(mysqli_error());
    
        echo "<script type='text/javascript'> alert ('Diagnostic/Examination Updated!');</script>";
    }
    else{  
        $conn->query ("INSERT INTO `diagnostic/examination` (`PIO_others`, `PSH_others`, `DM`, `HPN`, `PTB`, `Cancer`, `Asthma`, `Alcoholintake`, `SmokingHistory`, `DrugAllergy`, `FoodAllergy`, `BP`, `CR`, `RR`, `Skin`, `Heent`, `Chest/lungs`, `Cardiovascular`, `Abdomen`, `Rectal`, `Extremeties`, `Neurological`, `Diagnosis`, `Historyby`, `Doneon`, `Hospital_Id`, `diagnostic/examination_id`,`date`) VALUES ('$pioothers', '$pshothers', '$dm', '$hpn', '$ptb', '$cancer', '$asthma', '$alcoholintake', '$smokinghistory', '$drugallergies', '$foodallergies', '$bp', '$cr', '$rr', '$skin', '$heent', '$chestlungs', '$cardiovascular', '$abdomen', '$rectal', '$extremeties', '$neurological', '$diagnosis', '$historyby', '$doneon', '$H_id', '', '$date1');") or die(mysqli_error());
      
        echo "<script type='text/javascript'> alert ('Diagnostic/Examination Updated!');</script>";

    
    }

}
 
echo "<script>document.location='../PatientProfile.php?id=$H_id | weight'</script>"






?>