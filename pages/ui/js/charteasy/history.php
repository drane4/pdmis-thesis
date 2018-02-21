<?php

$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$bs = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `esrd_chronic` = 1 ") or die(mysqli_error());
$fetch1 = $bs->fetch_array();
$di = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `esrd_diabetic` = 'Diabetic Nephropathy' ") or die(mysqli_error());
$fetch2 = $di->fetch_array();
$ch = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `esrd_others` != '' ") or die(mysqli_error());
$fetch3 = $ch->fetch_array();
$hy = $conn->query("SELECT COUNT(*) as total FROM `hemo_order` WHERE `esrd_hypertensive` = 'Hypertensive Nephrosclorosis' ") or die(mysqli_error());
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
                text: "ESRD Cases - Year <?php echo $year?>",
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
					type: "doughnut", 
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