<?php
$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$res = $conn->query("SELECT * FROM `treatment` GROUP BY `Hospital_id`") or die(mysqli_error());
$data_points = array();
while($result = $res->fetch_array()){
	$R = $result['Hospital_id'];
	$q1 = $conn->query("SELECT *, count(*) as total FROM `treatment` WHERE `Hospital_id` = '$R'") or die(mysqli_error());
	$f1 = $q1->fetch_array();
	$FR = intval($f1['total']);
	$point = array('label' => $R, 'y' => $FR);
	array_push($data_points, $point);
}
json_encode($data_points);
?>
<script type="text/javascript"> 
	window.onload = function(){

		$("#employee").CanvasJSChart({
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
				text: "Employee Performance",
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
					type: "doughnut", 
					//showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					//legendText: "<?php echo $f1['Hospital_id']?>",
					//name: "Total Patients this year",
					dataPoints: <?php echo json_encode($data_points); ?>

				}
					] 
				}); 
				}
</script>