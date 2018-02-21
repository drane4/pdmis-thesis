<?php


$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Sex` = 'Male' ") or die(mysqli_error());
$f1 = $q1->fetch_array();

$q2 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Sex` = 'Female' ") or die(mysqli_error());
$f2 = $q2->fetch_array();


?>
<script type="text/javascript"> 
    window.onload = function(){ 
        $("#patient_age").CanvasJSChart({
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            exportFileName: "Monthly Population", 
            exportEnabled: true,

            title: { 
                text: "Patient Population as of Year ",
                fontSize: 20
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
                    enabled: true,
                    snapToDataPoint: true
                }
            }, 
            data: [ 
                { 
                    type: "column", 
                    showInLegend: true, 
                    legendText: "Total Number of Patients",
                    name: "Total Patients this month",
                    color: "#7E8F74",
                    dataPoints: [ 
                        { label: "10 Years old", y: <?php echo $f1['total']?> },
                         { label: "10 Years old", y: <?php echo $f2['total']?> }
                        }
                    ] 
                }); 
                }
</script>