<?php


if(ISSET($_POST['nephroschedule'])){
  
     $nephroid = $_POST['nephro_S'];
    $day1 = $_POST['day1'];
    $day2 = $_POST['day2'];
    $day3 = $_POST['day3'];
    $day4 = $_POST['day4'];
    $day5 = $_POST['day5'];
 
    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `nephrologistschedule` WHERE `nephrologistid` = '$nephroid'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `nephrologistschedule` SET `nephroschedule_day` = '$day'  WHERE `nephrologistschedule`.`nephrologistid` = '$nephroid'") or die(mysqli_error());
    
    }
    else{
      
        $conn->query ("INSERT INTO `nephrologistschedule` (`nephroschedule_id`, `nephrologistid`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`) VALUES (NULL, '$nephroid', '$day1', '$day2', '$day3', '$day4', '$day5')") or die(mysqli_error());
        
       
      
    
    }
}
header("location: ../nephroschedule.php");

?>