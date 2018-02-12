<?php
//initialize date & db connection
  date_default_timezone_set('Asia/Manila');
  $date = date("Y-m-d");  
  $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());

//display patient basic info
  ini_set('display_errors', 0);
  $q1 = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$_GET[id]' ") or die(mysqli_error());
  $fetch1 = $q1 ->fetch_array();
  $id = $fetch1['Hospital_Id'];

//<-------------------------------transaction(hemo treatment)
//display treatment info                         
  $q2 = $conn->query("SELECT * FROM `treatment` WHERE `Hospital_Id` = '$_GET[id]' && `treatment_date` = '$date'") or die(mysqli_error());
  $fetch2 = $q2 ->fetch_array();


//---------
  $q3 = $conn->query("SELECT * FROM `hemo_order` WHERE `Hospital_Id` = '$_GET[id]' ORDER BY `order_id` DESC") or die(mysqli_error());
  $fetch3 = $q3 ->fetch_array();
  

  
//display tables areaa
//nephrologist notes   
  $date = date("Y-m-d");                
  $q4 = $conn->query("SELECT * FROM `nephronotesorder` WHERE `Hospital_Id` = '$_GET[id]' && `notes_order_date` = '$date'") or die(mysqli_error());
  $fetch4 = $q4 ->fetch_array();
  $notes_order_id = $fetch4['notes_order_Id'];  
                                                      
//initialtestresult
  $q5 = $conn->query("SELECT * FROM `initialtestresult` WHERE `Hospital_Id` = '$_GET[id]' && `initialtest_date` = '$date'") or die(mysqli_error());
  $fetch5 = $q5 ->fetch_array();
  $itest_id = $fetch5[initialtestresult_id];
    
//fetch schedule
 //fetch schedule
  $q6 = $conn->query("SELECT * FROM `patientschedule` INNER JOIN `patientprofile` ON `patientschedule`.`Hospital_Id` = `patientprofile`.`Hospital_Id` WHERE `patientprofile`.`Hospital_Id` = '$_GET[id]'") or die(mysqli_error());
  $fetch6 = $q6 ->fetch_array();
//INNERJOIN
 $day = $fetch6['treatment_day'];
$status = $fetch6['P_Status'];     

  function checkweight($id){-
		$order = $GLOBALS['pdo'] -> prepare(" SELECT `order_id` FROM `hemo_order` WHERE `Hospital_id` = ?");
		$order -> execute([$id]);
		$order = $order -> fetchAll(PDO::FETCH_ASSOC);
		return $order;
	}
//--------------------------------->end transaction    




?>