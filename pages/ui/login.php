
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
  
    
    
    if($valid > 0){
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