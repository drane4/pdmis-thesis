
<?php
session_start();

$conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
     
if(ISSET($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);
    
    
     $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
    $query = $conn->query("SELECT * FROM `employeeprofile` WHERE BINARY `username` = '$username' && BINARY `password` = '$password'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $valid = $query->num_rows;
    $id = $fetch['employeeid'];
  
    
    
    if($valid > 0){
        //activity log start here
date_default_timezone_set('Asia/Manila');
$date1 = date("Y-m-d");
  $time = date("g:i a");
$conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
 $querylogin = $conn->query("INSERT INTO `activitylog` VALUES ('$id','Login','$date1','$time', '')") or die(mysqli_error());
 
        
        
            $_SESSION['username'] = $username;
            header("location: pages/ui/PatientProfile.php");
            
    }
    else {
        echo "<script>alert('Invalid account. Please check your username and password.')</script>";
        echo "<script>window.location = 'index.php'</script>";
         }
    mysql_close($connection);

}




?>