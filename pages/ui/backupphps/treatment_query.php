<?php
//initialize date & db connection
date_default_timezone_set('Asia/Manila');
    ini_set('display_errors', 0);
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
$q10 = $conn->query("SELECT * FROM `treatment` WHERE `Hospital_Id` = '$_GET[id]' && `treatment_date` != '$date' ORDER BY `treatment_id` DESC") or die(mysqli_error());
   $fetch10 = $q10 ->fetch_array();
$dateni = $fetch10['treatment_date'];

  //date_default_timezone_set('Asia/Manila');

  $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());

//display patient basic info
  ini_set('display_errors', 0);
  $q1 = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$_GET[id]' ") or die(mysqli_error());
  $fetch1 = $q1 ->fetch_array();
  $id = $fetch1['Hospital_Id'];

//<-------------------------------transaction(hemo treatment)
//display treatment info                         
  $q2 = $conn->query("SELECT * FROM `treatment` WHERE `Hospital_Id` = '$_GET[id]' && `treatment_date` = '$dateni'") or die(mysqli_error());
  $fetch2 = $q2 ->fetch_array();

  $q3 = $conn->query("SELECT `weight` FROM `treatment` WHERE `Hospital_Id` = '$_GET[id]' && `treatment_date` != '$dateni' ORDER BY `treatment_id` DESC") or die(mysqli_error());
   $fetch3 = $q3 ->fetch_array();

//display tables area
//nephrologist notes   
 // $date = date("Y-m-d");                
  $q4 = $conn->query("SELECT * FROM `nephronotesorder` WHERE `Hospital_Id` = '$_GET[id]' && `notes_order_date` = '$dateni'") or die(mysqli_error());
  $fetch4 = $q4 ->fetch_array();
  $notes_order_id = $fetch4['notes_order_Id'];  
                                                      
//initialtestresult
  $q5 = $conn->query("SELECT * FROM `initialtestresult` WHERE `Hospital_Id` = '$_GET[id]' && `initialtest_date` = '$dateni'") or die(mysqli_error());
  $fetch5 = $q5 ->fetch_array();
  $itest_id = $fetch5[initialtestresult_id];
    
//fetch schedule
  $q6 = $conn->query("SELECT * FROM `patientschedule` WHERE `Hospital_Id` = '$_GET[id]'") or die(mysqli_error());
  $fetch6 = $q6 ->fetch_array();
 $day = $fetch6['treatment_day'];
$status = $fetch6['treatment_status'];     


//--------------------------------->end transaction    




?>