<?php

//WHERE `hemo_order`.`order_date` BETWEEN '$from' AND '$to' GROUP BY `hemo_order`.`order_date`


$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$bs1 = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `access` = 0") or die(mysqli_error());
$fetch1a = $bs1->fetch_array();
$di1 = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `access` = '1'") or die(mysqli_error());
$fetch2a = $di1->fetch_array();
$ch1 = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `access` = '2'") or die(mysqli_error());
$fetch3a = $ch1->fetch_array();
$hy1 = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `access` = '3'") or die(mysqli_error());
$fetch4a = $hy1->fetch_array();


?>

<script type="text/javascript"> 
	window.onload = function() { 
		$("#access").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Bacteriological Status", 
			//exportEnabled: true,
			 title: { 
                text: "<?php if($from == ''){?> Common Used Access<?php } else{ ?> Common Used Access <?php echo "("."from ".$from." to ".$to.")" ?><?php } ?>",
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
						{ label: "Dialysis Catheter",  y: 
						 <?php
	                   if($fetch1a == ""){
		                      echo 0;
	                               }else{
                           echo $fetch1a['total'];
	                           }	
                         ?>, legendText: "Dialysis Catheter"},

						{ label: "Subclavian",  y: 
						 <?php 
						 if($fetch2a == ""){
							 echo 0;
						 }else{
							 echo $fetch2a['total'];
						 }	
						 ?>, legendText: "Subclavian"},
						{ label: "Internal Jugular",  y: 
						 <?php 
						 if($fetch4a == ""){
							 echo 0;
						 }else{
							 echo $fetch4a['total'];
						 }	
						 ?>, legendText: "Internal Jugular"},
                        { label: "Femoral",  y: 
						 <?php 
						 if($fetch3a == ""){
							 echo 0;
						 }else{
							 echo $fetch3a['total'];
						 }	
						 ?>, legendText: "Femoral"}
					] 
				} 
			] 
		}); 
	} 
</script>