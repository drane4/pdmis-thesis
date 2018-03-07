<?php

$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$q = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Jan'") or die(mysqli_error());
$f = $q->fetch_array();
$q2 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Feb'") or die(mysqli_error());
$f2 = $q2->fetch_array();
$q3 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Mar'") or die(mysqli_error());
$f3 = $q3->fetch_array();
$q4 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Apr'") or die(mysqli_error());
$f4 = $q4->fetch_array();

$q5 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'May'") or die(mysqli_error());
$f5 = $q5->fetch_array();

$q6 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Jun'") or die(mysqli_error());
$f6 = $q6->fetch_array();

$q7 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Jul'") or die(mysqli_error());
$f7 = $q7->fetch_array();

$q8 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Aug'") or die(mysqli_error());
$f8 = $q8->fetch_array();
$q9 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Sep'") or die(mysqli_error());
$f9 = $q9->fetch_array();
$q10 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Oct'") or die(mysqli_error());
$f10 = $q10->fetch_array();
$q11 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Nov'") or die(mysqli_error());
$f11 = $q11->fetch_array();
$q12 = $conn->query("select count(*) as total from patientprofile where (P_Date BETWEEN '$from' AND '$to') && `P_Month` = 'Dec'") or die(mysqli_error());
$f12 = $q12->fetch_array();
?>
<script type="text/javascript"> 
	window.onload = function(){ 
		$("#population").CanvasJSChart({
			theme: "light2",
			zoomEnabled: true,
			zoomType: "x",
			panEnabled: true,
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Monthly Population", 
			//exportEnabled: true,
			toolTip: {
				shared: true  
			},
			title: { 
				text: "Patient Population as of Year ",
				fontSize: 20
			},
			legend: {
				cursor: "pointer",
				itemclick: function (e) {
					if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}
					e.chart.render();
				}
			},
			axisX: {
				interval: 1,
				gridDashType: "dot",
				gridThickness: 1,
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			},
			axisY: { 
				title: "Total Population", 
				includeZero: false,
				labelFontColor: "black",
				crosshair: {
					enabled: true 
				}
			}, 
			data: [ 
				{ 
					type: "line", 
					showInLegend: true, 
					legendText: "Total Number of Patients",
					name: "Total Patients this month",
					color: "#7E8F74",
					dataPoints: [ 
						{ label: "January", y: <?php echo $f['total']?> },
						 { label: "February", y: <?php echo $f2['total']?> },
						{ label: "March", y: <?php echo $f3['total']?> },
						 { label: "April", y: <?php echo $f4['total']?> },
                        { label: "May", y: <?php echo $f5['total']?> },
						 { label: "June", y: <?php echo $f6['total']?> },
						{ label: "July", y: <?php echo $f7['total']?> },
						 { label: "August", y: <?php echo $f8['total']?> },
                        { label: "September", y: <?php echo $f9['total']?> },
						 { label: "October", y: <?php echo $f10['total']?> },
						{ label: "November", y: <?php echo $f11['total']?> },
						 { label: "December", y: <?php echo $f12['total']?> }
					] 
				}
			] 
		}); 
	}
</script>