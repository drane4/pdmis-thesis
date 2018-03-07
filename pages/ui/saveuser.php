<?php


if(ISSET($_POST['submit'])){
  
     $employeeid = $_POST['employeeid'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $transaction_a = $_POST['transaction_a'];
     $patientprofile_a = $_POST['patientprofile_a'];
     $employeeprofile_a = $_POST['employeeprofile_a'];
     $schedule_a = $_POST['schedule_a'];
     $nephrologist_a = $_POST['nephrologist_a'];
     $userprofile_a = $_POST['userprofile_a'];
     $maintenance_a = $_POST['maintenance_a'];
     $reports_a = $_POST['reports_a'];
     $account= $_POST['type1'];

    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
        
            $conn->query ("UPDATE `employeeprofile` SET `username` = '$username', `password` = '$password', `transaction_a` = '$transaction_a', `patientprofile_a` = '$patientprofile_a', `employeeprofile_a` = '$employeeprofile_a', `schedule_a` = '$schedule_a', `nephrologist_a` = '$nephrologist_a', `userprofile_a` = '$userprofile_a', `maintenance_a` = '$maintenance_a', `reports_a` = '$reports_a', `account` = '$account' WHERE `employeeprofile`.`employeeid` = '$employeeid';") or die(mysqli_error());
    
}
if(ISSET($_POST['delete'])){
  
     $employeeid = $_POST['employeeid'];
  
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
        
            $conn->query ("DELETE FROM `employeeprofile` WHERE `employeeprofile`.`employeeid` = '$employeeid';") or die(mysqli_error());
    
}

header("location: UserProfile.php");

?>