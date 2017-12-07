<?php


if(ISSET($_POST['submit'])){
  
     $employeeid = $_POST['employeeid'];
    $status = $_POST['status'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $address = $_POST['address'];
      $telephone = $_POST['telnum'];
      $mobile = $_POST['monum'];
      $position = $_POST['position'];
      $lastname = $_POST['lastname'];
    $transaction = "1";
    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `employeeprofile` WHERE BINARY `employeeid` = '$employeeid'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `employeeprofile` SET `status` = '$status', `firstname` = '$firstname', `middlename` = '$middlename', `address` = '$address', `telephone` = '$telephone', `mobile` = '$mobile', `position` = '$position', `lastname` = '$lastname', `transaction` = '$transaction' WHERE `employeeprofile`.`employeeid` = '$employeeid'") or die(mysqli_error());
    
    }
    else{
        $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
        $rowSQL = mysqli_query($conn, "SELECT MAX(employee_num) AS maxid FROM employeeprofile"); 
        $row = mysqli_fetch_assoc($rowSQL); 
        $largestUID = $row['maxid'] + 1; 
        $id = 'E000' . $largestUID;
        
        $conn->query ("INSERT INTO `employeeprofile` VALUES('', '$status', '$firstname', '$middlename', '$address', '$telephone', '$mobile', '$position', '$lastname', '$transaction', '$id' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'')") or die(mysqli_error());
        
        echo "<script type='text/javascript'> alert ('Account registered successfully!');</script>";
      
    
    }
}
header("location: EmployeeProfile.php");

?>