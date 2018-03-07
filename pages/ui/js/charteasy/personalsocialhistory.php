<?php

//WHERE `hemo_order`.`order_date` BETWEEN '$from' AND '$to' GROUP BY `hemo_order`.`order_date`


$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$bs1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `Alcoholintake` = 1") or die(mysqli_error());
$fetch1a = $bs1->fetch_array();
$di1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `SmokingHistory` = '1'") or die(mysqli_error());
$fetch2a = $di1->fetch_array();
$ch1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `DrugAllergy` = '1'") or die(mysqli_error());
$fetch3a = $ch1->fetch_array();
$hy1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `FoodAllergy` = '1'") or die(mysqli_error());
$fetch4a = $hy1->fetch_array();
$hys1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `PSH_others` != ''") or die(mysqli_error());
$fetch5a = $hys1->fetch_array();

?>

<script type="text/javascript"> 
	window.onload = function() { 
		$("#personalsocialhistory").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Bacteriological Status", 
			//exportEnabled: true,
			 title: { 
                text: "<?php if($from == ''){?> Common Cases of Physical/Social History<?php } else{ ?> Common Cases of Physical/Social History <?php echo "("."from ".$from." to ".$to.")" ?><?php } ?>",
                fontSize: 20
            }, 
            subtitles:[
                {
                    text: ""
                }
			],
			legend :{ 
				verticalAlign: "center", 
				horizontalAlign: "left" 
			}, 
			data: [ 
				{ 
					type: "pie", 
					showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					dataPoints: [ 
						{ label: "Alcohol Intake",  y: 
						 <?php
	                   if($fetch1a == ""){
		                      echo 0;
	                               }else{
                           echo $fetch1a['total'];
	                           }	
                         ?>, legendText: "Alcohol Intake"},

						{ label: "Smoking History",  y: 
						 <?php 
						 if($fetch2a == ""){
							 echo 0;
						 }else{
							 echo $fetch2a['total'];
						 }	
						 ?>, legendText: "Smoking History"},
						{ label: "Drug Allergy",  y: 
						 <?php 
						 if($fetch4a == ""){
							 echo 0;
						 }else{
							 echo $fetch4a['total'];
						 }	
						 ?>, legendText: "Drug Allergy"},
                        { label: "Food Allergy",  y: 
						 <?php 
						 if($fetch3a == ""){
							 echo 0;
						 }else{
							 echo $fetch3a['total'];
						 }	
						 ?>, legendText: "Food Allergy"},
                         { label: "Others",  y: 
						 <?php 
						 if($fetch5a == ""){
							 echo 0;
						 }else{
							 echo $fetch5a['total'];
						 }	
						 ?>, legendText: "Others"}
					] 
				} 
			] 
		}); 
	} 
</script>