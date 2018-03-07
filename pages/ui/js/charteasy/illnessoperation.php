<?php

//WHERE `hemo_order`.`order_date` BETWEEN '$from' AND '$to' GROUP BY `hemo_order`.`order_date`


$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$bs1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `DM` = 1") or die(mysqli_error());
$fetch1a = $bs1->fetch_array();
$di1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `HPN` = '1'") or die(mysqli_error());
$fetch2a = $di1->fetch_array();
$ch1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `PIO_others` != '' ") or die(mysqli_error());
$fetch3a = $ch1->fetch_array();
$hy1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `Asthma` = '1'") or die(mysqli_error());
$fetch4a = $hy1->fetch_array();
$hys1 = $conn->query("SELECT COUNT(*) as total FROM `diagnostic/examination` WHERE `Cancer` = '1'") or die(mysqli_error());
$fetch5a = $hys1->fetch_array();

?>

<script type="text/javascript"> 
	window.onload = function() { 
		$("#illnessoperation").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Bacteriological Status", 
			//exportEnabled: true,
			 title: { 
                text: "<?php if($from == ''){?> Common Cases of Illness & Operations<?php } else{ ?> Common Cases of Illness & Operations <?php echo "("."from ".$from." to ".$to.")" ?><?php } ?>",
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
						{ label: "DM",  y: 
						 <?php
	                   if($fetch1a == ""){
		                      echo 0;
	                               }else{
                           echo $fetch1a['total'];
	                           }	
                         ?>, legendText: "DM"},

						{ label: "HPN",  y: 
						 <?php 
						 if($fetch2a == ""){
							 echo 0;
						 }else{
							 echo $fetch2a['total'];
						 }	
						 ?>, legendText: "HPN"},
						
                        { label: "Asthma",  y: 
						 <?php 
						 if($fetch3a == ""){
							 echo 0;
						 }else{
							 echo $fetch3a['total'];
						 }	
						 ?>, legendText: "Asthma"},
                         { label: "Cancer",  y: 
						 <?php 
						 if($fetch5a == ""){
							 echo 0;
						 }else{
							 echo $fetch5a['total'];
						 }	
						 ?>, legendText: "Cancer"},
                        { label: "Others",  y: 
						 <?php 
						 if($fetch4a == ""){
							 echo 0;
						 }else{
							 echo $fetch4a['total'];
						 }	
						 ?>, legendText: "Others"}
					] 
				} 
			] 
		}); 
	} 
</script>