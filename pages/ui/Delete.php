<?php

if(ISSET($_POST['delete'])){
  
     $employeeid = $_POST['employeeid'];

    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("DELETE FROM `userprofile` WHERE `userprofile`.`employeeid` = $employeeid") or die(mysqli_error());
   
header("location: EP.php");

?>