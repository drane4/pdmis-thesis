<?php

//WHERE `hemo_order`.`order_date` BETWEEN '$from' AND '$to' GROUP BY `hemo_order`.`order_date`


$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$bs = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `esrd_chronic` = 1 && `order_date` BETWEEN '$from' AND '$to'") or die(mysqli_error());
$fetch1 = $bs->fetch_array();
$di = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `esrd_diabetic` = '1' && `order_date` BETWEEN '$from' AND '$to'") or die(mysqli_error());
$fetch2 = $di->fetch_array();
$ch = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `esrd_others` != '' && `order_date` BETWEEN '$from' AND '$to'") or die(mysqli_error());
$fetch3 = $ch->fetch_array();
$hy = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `esrd_hypertensive` = '1' && `order_date` BETWEEN '$from' AND '$to'") or die(mysqli_error());
$fetch4 = $hy->fetch_array();



?>
<script type="text/javascript"> 
	window.onload = function() { 
		$("#coerd").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Bacteriological Status", 
			//exportEnabled: true,
			 title: { 
                text: "<?php if($from == ''){?> Overall ESRD Cases<?php } else{ ?> ESRD Cases <?php echo "("."from ".$from." to ".$to.")" ?><?php } ?>",
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
						{ label: "Chronic Gromerulonephritis",  y: 
						 <?php
	if($fetch1 == ""){
		echo 0;
	}else{
		echo $fetch1['total'];
	}	
						 ?>, legendText: "Chronic Gromerulonephritis"},

						{ label: "Diabetic Nephropathy",  y: 
						 <?php 
						 if($fetch2 == ""){
							 echo 0;
						 }else{
							 echo $fetch2['total'];
						 }	
						 ?>, legendText: "Diabetic Nephropathy"},
						{ label: "Hypertensive Nephrosclorosis",  y: 
						 <?php 
						 if($fetch4 == ""){
							 echo 0;
						 }else{
							 echo $fetch4['total'];
						 }	
						 ?>, legendText: "Hypertensive Nephrosclorosis"},
                        { label: "ESRD Others",  y: 
						 <?php 
						 if($fetch3 == ""){
							 echo 0;
						 }else{
							 echo $fetch3['total'];
						 }	
						 ?>, legendText: "Others"}
					] 
				} 
			] 
            
		}); 
	} 
</script>