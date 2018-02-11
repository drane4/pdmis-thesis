<?php

 $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
$query = $conn->query("SELECT * FROM `patientschedule`") or die(mysqli_error());
$f1 = $query ->fetch_array();
$sched_id = $f1['Hospital_Id'];
?>