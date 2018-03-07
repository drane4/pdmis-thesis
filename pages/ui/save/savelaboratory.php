<?php
 ini_set('display_errors', 0);
 $pageid = $_GET[id];
 list($H_id ,$id2) = explode(" | ", $pageid);

if(ISSET($_POST['bloodchem'])){
 
  $date = $_POST['datebloodchem'];
    $crea = $_POST['crea'];
    $bun = $_POST['bun'];
    $mag = $_POST['mag'];
    $cal = $_POST['cal'];
    $phos = $_POST['phos'];
    $pot = $_POST['pot'];
    $sod = $_POST['sod'];
    $tchol = $_POST['tchol'];
    $ldl = $_POST['ldl'];
    $fbs = $_POST['fbs'];
    $rbs = $_POST['rbs'];
    $uric = $_POST['uric'];
    $trig = $_POST['trig'];
    $hdl = $_POST['hdl'];
    
 echo $rbs;
        echo $uric;
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `laboratory` WHERE BINARY `Hospital_Id` = '$H_id' && `Laboratory_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;

    if($check > 0){
    $query = $conn->query("UPDATE `laboratory` SET `Creatinine` = '$crea', `BUN` = '$bun', `Magnesium` = '$mag', `Calcium` = '$cal', `Phosphorus` = '$phos', `Potassium` = '$pot', `Sodium` = '$sod', `TCholesterol` = '$tchol', `Triglycerides` = '$ldl', `HDL` = '$fbs', `LDL` = '$ldl', `FBS` = '$fbs', `RBS` = '$rbs', `UricAcid` = '$uric' WHERE `laboratory`.`Laboratory_date` = '$date'") or die(mysqli_error());
   
    }
    else{  
        $conn->query ("INSERT INTO `laboratory` VALUES ('$crea', '$bun', '$mag', '$cal', '$phos', '$pot', '$sod', '$tchol', '$trig', '$hdl', '$ldl', '$fbs', '$rbs', '$uric', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$H_id', '$date', '')") or die(mysqli_error());
       
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";

    
    }

}
if(ISSET($_POST['bloodcount'])){
    $date = $_POST['datebloodcount'];
    $rbc = $_POST['rbc'];
    $wbc = $_POST['wbc'];
    $hemog = $_POST['hemog'];
    $hema = $_POST['hema'];
    $platelet = $_POST['platelet'];
    $polys = $_POST['polys'];
    $lymph = $_POST['lymph'];
    $eosi = $_POST['eosi'];
    $mono = $_POST['mono'];
    $baso = $_POST['baso'];
    
    

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `laboratory` WHERE BINARY `Hospital_Id` = '$H_id' && `Laboratory_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;

    if($check > 0){
    $query = $conn->query("UPDATE `laboratory` SET `RBCBlood` = '$rbc', `WBC` = '$wbc', `Hemoglobin` = '$hemog', `Hematocrit` = '$hema', `PlateletCount` = '$platelet', `Polys` = '$polys', `Lymph` = '$lymph', `Eosinophyl` = '$eosi', `Monocytes` = '$mono', `Basophil` = '$baso' WHERE `laboratory`.`Laboratory_date` = '$date'") or die(mysqli_error());
   
    }
    else{  
        $conn->query ("INSERT INTO `laboratory` VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '$rbc', '$wbc', '$hemog', '$hema', '$platelet', '$polys', '$lymph', '$eosi', '$mono', '$baso', '', '', '', '', '', '', '', '', '$H_id', '$date', '')") or die(mysqli_error());
     
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";

    
    }

}
if(ISSET($_POST['urinalysis'])){
    $date = $_POST['dateurine'];
    $ph = $_POST['ph'];
    $sp = $_POST['sp'];
    $alb = $_POST['alb'];
    $sugar = $_POST['sugar'];
    $plus = $_POST['plus'];
    $rbc = $_POST['rbc'];

    

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `laboratory` WHERE BINARY `Hospital_Id` = '$H_id' && `Laboratory_date` = '$date'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;

    if($check > 0){
    $query = $conn->query("UPDATE `laboratory` SET `pH` = '$ph', `SpGravity` = '$sp', `Albumin` = '$alb', `Sugar` = '$sugar', `PlusCells` = '$plus', `RBCUrine` = '$rbc' WHERE `laboratory`.`Laboratory_date` = '$date'") or die(mysqli_error());

    }
    else{  
        $conn->query ("INSERT INTO `laboratory` VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', '$rbc', '$wbc', '$hemog', '', '', '', '', '', '', '', '$ph', '$sp', '$alb', '$sugar', '$plus', '$rbc', '$H_id', '$date', '')") or die(mysqli_error());
     
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";

    }

}
if(ISSET($_POST['others'])){
    $date = $_POST['dateothers'];
    $desc = $_POST['desc'];
    $val = $_POST['val'];
  
    

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `laboratory_others` WHERE BINARY `Hospital_Id` = '$H_id' && `description` = '$desc' && `value` = '$val'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;

    if($check > 0){
    $query = $conn->query("UPDATE `laboratory_others` SET `description` = '$desc', `value` = '$val' WHERE `laboratory_others`.`labothers_date` = '$date'") or die(mysqli_error());

    }
    else{  
        $conn->query ("INSERT INTO `laboratory_others` (`labothers_id`, `description`, `value`, `labothers_date`, `Hospital_Id`) VALUES ('', '$desc', '$val', '$date', '$H_id')") or die(mysqli_error());
     
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";

    }

}
if(ISSET($_POST['info'])){
    $hiv = $_POST['hiv'];
    $hcv = $_POST['hcv'];
    $rm = $_POST['rm'];
    $hbag = $_POST['hbag'];
    $bloodtype = $_POST['bloodtype'];
    $antihbv = $_POST['antihbv'];
    $rhfactor = $_POST['rhfactor'];

  

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `laboratory_info` WHERE BINARY `Hospital_Id` = '$H_id'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;

    if($check > 0){
    $query = $conn->query("UPDATE `laboratory_info` SET `hiv` = '$hiv',`hcv` = '$hcv',`rm` = '$rm',`hbag` = '$hbag',`bloodtype` = '$bloodtype',`antihbv` = '$antihbv',`rhfactor` = '$rhfactor' WHERE `Hospital_id` = '$H_id'") or die(mysqli_error());

    }
    else{  
        $conn->query ("INSERT INTO `laboratory_info` VALUES ('$hiv', '$hcv', '$rm', '$hbag', '$bloodtype','$antihbv','$rhfactor','','$H_id')") or die(mysqli_error());
     
        echo "<script type='text/javascript'> alert ('notes/order saved!');</script>";

    }

}
 
header("location: ../PatientProfile.php?id=$H_id | lab ");






?>