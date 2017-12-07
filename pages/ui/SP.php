<?php

if(ISSET($_POST['submit'])){
  
    $Hospital_Id = $_POST['Hospital_Id'];
    $P_Lname = $_POST['P_Fname'];
    $P_Fname = $_POST['P_Fname'];
    $P_Mname = $_POST['P_Mname'];
    $P_BirthDate = $_POST['P_BirthDate'];
    $P_Age = $_POST['P_Age'];
    $P_Sex = $_POST['P_Sex'];
    $P_Nationality = $_POST['P_Nationality'];
    $P_Religion = $_POST['P_Religion'];
    $P_CivilStatus = $_POST['P_CivilStatus'];
    $P_PermanentAdd = $_POST['P_PermanentAdd'];
    $P_ConNum1 = $_POST['P_ConNum1'];
    $P_PresentAdd = $_POST['P_PresentAdd'];
    $P_ConNum2 = $_POST['P_ConNum2'];  
    $P_Relative = $_POST['P_Relative'];
    $P_RelativeConNum = $_POST['P_RelativeConNum'];
    $P_InitialDate = $_POST['P_InitialDate'];
    $P_AgeFD = $_POST['P_AgeFD'];
    $P_TDHemodialyis = $_POST['P_TDHemodialyis'];
    $P_Erythropoetin = $_POST['P_Erythropoetin'];
    $P_Nephrologist = $_POST['P_Nephrologist'];
    $P_Diagnosis = $_POST['P_Diagnosis'];
    $P_PhilHealthNum = $_POST['P_PhilHealthNum'];
    $P_DFBName = $_POST['P_DFBName'];
    $P_DFBRelation = $_POST['P_DFBRelation'];
    




    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `patientprofile` WHERE BINARY `Hospital_Id` = '$Hospital_Id'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
      $conn->query ("UPDATE `patientprofile` SET `P_Lname`='$P_Lname',`P_Fname`='$P_Fname',`P_Mname`='$P_Mname',`P_BirthDate`='$P_BirthDate',`P_Age`='$P_Age',`P_Sex`='$P_Sex',`P_Nationality`='$P_Nationality',`P_Religion`='$P_Religion',`P_CivilStatus`='$P_CivilStatus',`P_PermanentAdd`='$P_PermanentAdd',`P_ConNum1`='$P_ConNum1',`P_PresentAdd`='$P_PresentAdd',`P_ConNum2`='$P_ConNum2',`P_Relative`='$P_Relative',`P_RelativeAdd`='$P_RelativeAdd',`P_RelativeConNum`='$P_RelativeConNum',`P_InitialDate`='$P_InitialDate',`P_AgeFD`='$P_AgeFD',`P_TDHemodialysis`='$P_TDHemodialysis',`P_TDPeritoneal`='$P_TDPeritoneal',`P_Erythropoetin`='$P_Erythropoetin',`P_Nephrologist`='$P_Nephrologist',`P_Diagnosis`='$P_Diagnosis',`P_PhilHealthNum`='$P_PhilHealthNum',`P_DFBName`='$P_DFBName',`P_DFBRelation`='$P_DFBRelation' WHERE `patientprofile`.`Hospital_Id` = '$Hospital_Id' ") or die(mysqli_error());'
    }
    else{
    $conn->query ("INSERT INTO `patientprofile` VALUES('', '$P_Lname', '$P_Fname', '$P_Mname', '$P_BirthDate', '$P_Age', '$P_Sex', '$P_Nationality', '$P_Religion', '$P_CivilStatus', '$P_PermanentAdd', '$P_ConNum1', '$P_PresentAdd', '$P_ConNum2', '$P_Relative', '$P_RelativeAdd', '$P_RelativeConNum', '$P_InitialDate','$P_AgeFD', '$P_TDHemodialysis', '$P_TDPeritoneal', '$P_Erythropoetin', '$P_Nephrologist', '$P_Diagnosis', '$P_PhilHealthNum', '$P_DFBName', '$P_DFBRelation')") or die(mysqli_error());
        echo "<script type='text/javascript'> alert ('Account registered successfully!');</script>";
        echo "<script>window.location='save.php'</script>";
    }}
header("location: UP.php");

?>