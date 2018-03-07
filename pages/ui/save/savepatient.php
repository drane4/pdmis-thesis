<?php

ini_set('display_errors', 0);
if(ISSET($_POST['submit'])){
  
    $Hospital_Id = $_POST['hid'];
    $status = $_POST['status1'];
    $P_Lname = $_POST['lastname'];
    $P_Fname = $_POST['firstname'];
    $P_Mname = $_POST['middlename'];
    $P_BirthDate = $_POST['birthdate'];
    $P_Age = $_POST['age'];
    $P_Sex = $_POST['gender'];
    $P_Nationality = $_POST['nationality'];
    $P_Religion = $_POST['religion'];
    $P_CivilStatus = $_POST['civilstatus'];
    $P_PermanentAdd = $_POST['peraddress'];
    $P_ConNum1 = $_POST['percontactnumber'];
    $P_PresentAdd = $_POST['preaddress'];
    $P_ConNum2 = $_POST['precontactnumber'];  
    $P_Relative = $_POST['relative'];
    $P_RelativeAdd = $_POST['relativeadd'];
    $P_RelativeConNum = $_POST['relativecon'];
    $P_InDial = $_POST['DIDS'];
    $P_AgeFD = $_POST['fdage'];
    $P_dialysistype = $_POST['type1'];
    $P_Erythropoetin = $_POST['erythropoetin'];
    $P_Nephrologist = $_POST['nephrologist'];
    $P_Diagnosis = $_POST['diagnosis'];
    $P_PhilHealthNum = $_POST['phnum'];
    $P_DFBName = $_POST['dfb'];
    $P_DFBRelation = $_POST['relation'];
    date_default_timezone_set('Asia/Manila');
    $date1 = date("Y-m-d");
    $date2 = date("M");
    $date3 = date("Y");


    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `patientprofile` WHERE BINARY `Hospital_Id` = '$Hospital_Id'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `patientprofile` SET `P_Lname` = '$P_Lname', `P_Fname` = '$P_Fname', `P_Mname` = '$P_Mname', `P_BirthDate` = '$P_BirthDate', `P_Age` = '$P_Age', `P_Sex` = '$P_Sex', `P_Nationality` = '$P_Nationality', `P_Religion` = '$P_Religion', `P_CivilStatus` = '$P_CivilStatus', `P_PermanentAdd` = '$P_PermanentAdd', `P_ConNum1` = '$P_ConNum1', `P_PresentAdd` = '$P_PresentAdd', `P_ConNum2` = '$P_ConNum2', `P_Relative` = '$P_Relative', `P_RelativeAdd` = '$P_RelativeAdd', `P_RelativeConNum` = '$P_RelativeConNum', `P_AgeFD` = '$P_AgeFD', `P_Erythropoetin` = '$P_Erythropoetin', `P_Diagnosis` = '$P_Diagnosis', `P_PhilHealthNum` = '$P_PhilHealthNum', `P_DFBName` = '$P_DFBName', `P_DFBRelation` = '$P_DFBRelation', `P_InDial` = '$P_InDial', `dialysistype` = '$P_dialysistype', `nephrologistid` = '$P_Nephrologist', `P_Status` = '$status' WHERE `patientprofile`.`Hospital_Id` = '$Hospital_Id' ") or die(mysqli_error());
             echo "<script type='text/javascript'> alert ('Patient Info Updated!');</script>";
    }
    else{
     
         $conn->query ("INSERT INTO `patientprofile` VALUES('$Hospital_Id', '$P_Lname', '$P_Fname', '$P_Mname', '$P_BirthDate', '$P_Age', '$P_Sex', '$P_Nationality', '$P_Religion', '$P_CivilStatus', '$P_PermanentAdd', '$P_ConNum1', '$P_PresentAdd', '$P_ConNum2', '$P_Relative', '$P_RelativeAdd', '$P_RelativeConNum', '$P_AgeFD', '$P_Erythropoetin', '$P_Diagnosis', '$P_PhilHealthNum', '$P_DFBName', '$P_DFBRelation', '$P_InDial', '$P_dialysistype', '$P_Nephrologist', '$status', '$date1', '$date2', '$date3')") or die(mysqli_error());
         echo "<script type='text/javascript'> alert ('Patient Info Saved!');</script>";
    }
}


echo "<script>document.location='../PatientProfile.php?id=$Hospital_Id | patientinfo'</script>"
?>
