<?php
 ini_set('display_errors', 0);
   $pageid = $_GET[id];

   list($H_id ,$id2 ,$ydate) = explode(" | ", $pageid);
   $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$H_id' ") or die(mysqli_error());
    $fetchp = $query ->fetch_array();
    $id = $fetch['Hospital_Id'];




//initialize date & db connection
  date_default_timezone_set('Asia/Manila');
  $date = date("Y-m-d");  
  $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());

//display patient basic info

  ini_set('display_errors', 0);
  $q1 = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$H_id' ") or die(mysqli_error());
  $fetch1 = $q1 ->fetch_array();
  $id = $fetch1['Hospital_Id'];

$qs = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$H_id' ") or die(mysqli_error());
  $fetchs = $qs ->fetch_array();
//<-------------------------------transaction(hemo treatment)
//display treatment info                         



if(isset($_POST['filterdate'])){
    $ydate = $_POST['filterdate'];

}else{
   
}
 
//display tables area
//nephrologist notes   
        
  $q4 = $conn->query("SELECT * FROM `nephronotesorder` WHERE `Hospital_Id` = '$H_id' && `notes_order_date` = '$date'") or die(mysqli_error());
  $fetch4 = $q4 ->fetch_array();
  $notes_order_id = $fetch4['notes_order_Id'];  
                                  
//initialtestresult
  $q5 = $conn->query("SELECT * FROM `initialtestresult` WHERE `Hospital_Id` = '$H_id' && `initialtest_date` = '$date'") or die(mysqli_error());
  $fetch5 = $q5 ->fetch_array();
  $itest_id = $fetch5[initialtestresult_id];
    
//fetch schedule
  $q6 = $conn->query("SELECT * FROM `patientschedule` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
  $fetch6 = $q6 ->fetch_array();
 $day = $fetch6['treatment_day'];
$status = $fetch6['treatment_status'];     


//--------------------------------->table in treatment area 


     $q2 = $conn->query("SELECT * FROM `treatment` WHERE `Hospital_Id` = '$H_id' && `treatment_date` = '$ydate'") or die(mysqli_error());
    $fetch2 = $q2 ->fetch_array();
    
    $tquery = $conn->query("SELECT * FROM `nephronotesorder` WHERE `Hospital_Id` = '$H_id' && `notes_order_date` = '$ydate'") or die(mysqli_error());
     $tfetch = $tquery ->fetch_array();
    
       $nid = $tfetch['nephrologistid'];
       $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
       $tquery1 = $conn->query("SELECT * FROM `nephrologist` WHERE `nephrologistid` = '$nid'") or die(mysqli_error());
            $tfetch1 = $tquery1 ->fetch_array();
            $n_fname = $tfetch1['n_fname'];
            $n_mname = $tfetch1['n_mname'];
            $n_lname = $tfetch1['n_lname'];
      
$q3 = $conn->query("SELECT `targetwt` FROM `hemo_order` WHERE `Hospital_Id` = '$H_id' ORDER BY `order_id` DESC") or die(mysqli_error());
  $fetch3 = $q3 ->fetch_array();

//--------------------------------->Hemo Orders
// $HOq1 = $conn->query("SELECT `coerd` FROM `hemo_order` WHERE `Hospital_Id` = '$H_id' ORDER BY 'DESC'") or die(mysqli_error());
//$HOfetch1 = $HOq1 ->fetch_array();



$queryesrd = $conn->query("SELECT `esrd_diabetic`,`esrd_chronic`,`esrd_hypertensive`,`esrd_others` FROM `hemo_order` WHERE `Hospital_Id` = '$H_id' ORDER BY 'DESC'") or die(mysqli_error());
$fetchesrd = $queryesrd ->fetch_array();
$val1 = $fetchesrd['esrd_diabetic'];
$val2 = $fetchesrd['esrd_chronic'];
$val3 = $fetchesrd['esrd_hypertensive'];
$val4 = $fetchesrd['esrd_others'];
$coerd = "ESRD Secondary to ";
if($val1 != 0){
$coerd .= ", Diabetic Nephropathy";
}
if($val2 != 0){
$coerd .= ", Chronic Gromerulonephritis";
}
if($val3 != 0){
$coerd .= ", Hypertensive Nephrosclerosis";
}
if(!empty($val4)){
$coerd .= ", $val4";
}

if(isset($_POST['filterdate_order'])){
    $orderdate = $_POST['filterdate_order'];

}else{
   $orderdate = date("Y-m-d");  
}

 $HOq = $conn->query("SELECT * FROM `hemo_order` WHERE `Hospital_Id` = '$H_id' && `order_date` = '$orderdate'") or die(mysqli_error());
  $HOfetch = $HOq ->fetch_array();

if(isset($_POST['filterdate_examination'])){
    $examdate = $_POST['filterdate_examination'];

}else{

}
 $Wq = $conn->query("SELECT * FROM `diagnostic/examination` WHERE `Hospital_Id` = '$H_id' && `Doneon` = '$examdate'") or die(mysqli_error());
  $examfetch = $Wq ->fetch_array();


if(isset($_POST['filterdate_drug'])){
$val = $_POST['filterdate_drug'];
$drugdate = date("m", strtotime($val));    
}else{
$curdate = date("Y-m-d");    
 $drugdate = date("m", strtotime($curdate));            
}       
$drugsquery = $conn->query("SELECT * FROM `patientdrugprofile` WHERE `Hospital_Id` = '$H_id' && month(dateordered) = '$drugdate'") or die(mysqli_error());
 //$drugfetch = $drugsquery ->fetch_array();


if(isset($_POST['filterdate_hepa'])){
$val1 = $_POST['filterdate_hepa'];
$hepadate = date("m", strtotime($val1));    
}else{
$curdate = date("Y-m-d");    
 $hepadate = date("m", strtotime($curdate));            
}  

 $hepaquery = $conn->query("SELECT * FROM `hepatitisprofile` WHERE `Hospital_Id` = '$H_id' && month(hepatitisdate) = '$hepadate'") or die(mysqli_error());
 $hepafetch = $hepaquery ->fetch_array();

 $hepaquery1 = $conn->query("SELECT * FROM `hepatitisprofile` WHERE `Hospital_Id` = '$H_id' && month(hepatitisdate) = '$hepadate'") or die(mysqli_error());

 $hepaquery2 = $conn->query("SELECT * FROM `hepatitisprofile` WHERE `Hospital_Id` = '$H_id' && month(hepatitisdate) = '$hepadate1'") or die(mysqli_error());


if(isset($_POST['filterdate_problem'])){
$val1 = $_POST['filterdate_problem'];
$probdate = date("m", strtotime($val1));    
}else{
$curdate = date("Y-m-d");    
 $probdate = date("m", strtotime($curdate));            
} 
$problemquery = $conn->query("SELECT * FROM `problemlist` WHERE `Hospital_Id` = '$H_id' && month(datenoted) = '$probdate'") or die(mysqli_error());
$problemfetch = $problemquery ->fetch_array();
$problemquery1 = $conn->query("SELECT * FROM `problemlist` WHERE `Hospital_Id` = '$H_id' && month(datenoted) = '$probdate'") or die(mysqli_error());
$problemquery2 = $conn->query("SELECT * FROM `problemlist` WHERE `Hospital_Id` = '$H_id' && month(datenoted) = '$probdate2'") or die(mysqli_error());

if(isset($_POST['filterdate_confinement'])){
$val1 = $_POST['filterdate_confinement'];
$condate = date("m", strtotime($val1));    
}else{
$curdate = date("Y-m-d");    
 $condate = date("m", strtotime($curdate));            
} 
 $confinementquery = $conn->query("SELECT * FROM `confinement` WHERE `Hospital_Id` = '$H_id' && month(confinementdate) = '$condate'") or die(mysqli_error());
$confinementfetch = $confinementquery ->fetch_array();
 $confinementquery1 = $conn->query("SELECT * FROM `confinement` WHERE `Hospital_Id` = '$H_id' && month(confinementdate) = '$condate'") or die(mysqli_error());
 $confinementquery2 = $conn->query("SELECT * FROM `confinement` WHERE `Hospital_Id` = '$H_id' && month(confinementdate) = '$condate2'") or die(mysqli_error());
//-----------------------------------------------immunization profile
if(isset($_POST['filterdate_hepab'])){
$immunedate = $_POST['filterdate_hepab'];
  
}else{
     $immunedate = date("Y");     
}


$queryinflu = $conn->query("SELECT * FROM `influenzavaccine` WHERE `Hospital_Id` = '$H_id' && `influenza_year` = '$immunedate' ORDER BY `influenza_id` ") or die(mysqli_error());
   
$querypneu = $conn->query("SELECT * FROM `pneumococcal_vaccine` WHERE `Hospital_Id` = '$H_id' && `pneumococcal_year` = '$immunedate' ORDER BY `pneumococcal_id` ") or die(mysqli_error());
 
$queryhepa1 = $conn->query("SELECT * FROM `hepatitisbvaccine` WHERE `Hospital_Id` = '$H_id' && `hepa_year` = '$immunedate'") or die(mysqli_error());

//-------------------------------------------------patientlist

 
    $querynephro = $conn->query("SELECT `nephrologist`.`n_lname`,`nephrologist`.`n_fname`,`nephrologist`.`n_mname` FROM `nephrologist` INNER JOIN `patientprofile` ON `patientprofile`.`nephrologistid` = `nephrologist`.`nephrologistid` where `Hospital_Id` = '$H_id' ") or die(mysqli_error());
    $fetchnephro = $querynephro ->fetch_array();
    
     $querylab = $conn->query("SELECT * FROM `laboratory_info` where `Hospital_Id` = '$H_id' ") or die(mysqli_error());
     $fetchlab = $querylab ->fetch_array(); 


?>
