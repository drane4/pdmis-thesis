<?php

$year = date('Y');
if(isset($_GET['year']))
{
    $year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$bs = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `dialysistype` = '0' ") or die(mysqli_error());
$fetch1 = $bs->fetch_array();
$cd = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `dialysistype` = '1' ") or die(mysqli_error());
$fetch2 = $cd->fetch_array();

?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#dialysis_type").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            //exportFileName: "Bacteriological Status", 
            //exportEnabled: true,
            title: { 
                text: "Dialysis Cases - Year <?php echo $year?>",
                fontSize: 20
            },
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
                        { label: "Hemodialysis",  y: 
                         <?php
    if($fetch1 == ""){
        echo 0;
    }else{
        echo $fetch1['total'];
    }	
                         ?>, legendText: "Hemodialysis"},

                        { label: "Peritoneal dialysis",  y: 
                         <?php 
                         if($fetch2 == ""){
                             echo 0;
                         }else{
                             echo $fetch2['total'];
                         }	
                         ?>, legendText: "Peritoneal dialysis"}
                    ] 
                } 
            ] 
        }); 
    } 
</script>