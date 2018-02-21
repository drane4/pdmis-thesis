<?php

$year = date('Y');

$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Sex` = 'Male'") or die(mysqli_error());
$f1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Sex` = 'Female'") or die(mysqli_error());
$f2 = $q2->fetch_array();


?>
<script type="text/javascript"> 
    window.onload = function() { 
        $("#patient_gender").CanvasJSChart({
            theme: "light2",
            animationEnabled: true,
            animationDuration: 1000,
            //exportFileName: "Gender", 
            //exportEnabled: true,
            title: { 
                text: "Patient Gender Statistics - Year <?php echo $pyear?>",
                fontSize: 20
            },
            axisY: { 
                title: "Patient Gender" 
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
                        { label: "Male",  y: 
                         <?php
    if($f1 == ""){
        echo 0;
    }else{
        echo $f1['total'];
    }	
                         ?>, legendText: "Male"},

                        { label: "Female",  y: 
                         <?php 
                         if($f2 == ""){
                             echo 0;
                         }else{
                             echo $f2['total'];
                         }	
                         ?>, legendText: "Female"}
                    ] 
                } 
            ] 
        });
    } 
</script>