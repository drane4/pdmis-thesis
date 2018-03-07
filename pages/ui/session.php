<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['username'];
// SQL Query To Fetch Complete Information Of User

$ses_sql= $conn->query("SELECT * FROM `employeeprofile` WHERE `username`='$user_check'");

 $fetch = $ses_sql ->fetch_array();
$id = $fetch['employeeid'];
$username = $fetch['username'];
$name = $fetch['firstname'] ." ". $fetch['lastname'];
$position =$fetch['position'];
$transaction_a =$fetch['transaction_a'];
$patientprofile_a =$fetch['patientprofile_a'];
$employeeprofile_a =$fetch['employeeprofile_a'];
$schedule_a =$fetch['schedule_a'];
$nephrologist_a =$fetch['nephrologist_a'];
$userprofile_a =$fetch['userprofile_a'];
$maintenance_a =$fetch['maintenance_a'];
$reports_a =$fetch['reports_a'];

$conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
$rowSQL = mysqli_query($conn, "SELECT MAX(employee_num) AS maxid FROM employeeprofile"); 
$row = mysqli_fetch_assoc($rowSQL); 
$largestUID = $row['maxid'] + 1; 
$Eid = 'E000' . $largestUID;
  



   $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
    $rowSQL = mysqli_query($conn, "SELECT MAX(nephrologistnum) AS maxid FROM nephrologist"); 
    $row = mysqli_fetch_assoc($rowSQL); 
    $largestUID = $row['maxid'] + 1; 
    $Nid = 'N000' . $largestUID;



if(!isset($username)){
mysql_close($connection); // Closing Connection
header('Location: ../../index.php'); // Redirecting To Home Page
}
?>