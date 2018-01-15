<?php


if(ISSET($_POST['submit'])){
  
     $nephrologistid = $_POST['nephrologistid'];
    $n_lname = $_POST['n_lname'];
    $n_fname = $_POST['n_fname'];
     $n_mname = $_POST['n_mname'];
    $address = $_POST['n_address'];
      $telephone = $_POST['n_telephone'];
      $mobile = $_POST['n_mobile'];
 
 
    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `nephrologist` WHERE BINARY `nephrologistid` = '$nephrologistid'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `nephrologist` SET `n_lname` = '$n_lname', `n_fname` = '$n_fname', `n_mname` = '$n_mname', `n_telephone` = '$telephone', `n_mobile` = ' $mobile', `n_address` = '$address' WHERE `nephrologist`.`nephrologistid` = '$nephrologistid'") or die(mysqli_error());
    
    }
    else{
        $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
        $rowSQL = mysqli_query($conn, "SELECT MAX(nephrologistnum) AS maxid FROM nephrologist"); 
        $row = mysqli_fetch_assoc($rowSQL); 
        $largestUID = $row['maxid'] + 1; 
        $id = 'N000' . $largestUID;
        
        $conn->query ("INSERT INTO `nephrologist` VALUES('', '$id', '$n_lname', '$n_fname', '$n_mname', '$n_telephone', '$n_mobile', '$address')") or die(mysqli_error());
        
        echo "<script type='text/javascript'> alert ('Account registered successfully!');</script>";
      
    
    }
}
if(ISSET($_POST['delete'])){
  
     $nephrologistid = $_POST['nephrologistid'];
  
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
        
            $conn->query ("DELETE FROM `nephrologist` WHERE `nephrologist`.`nephrologistid` = '$nephrologistid';") or die(mysqli_error());
    
}
header("location: nephrologist.php");

?>