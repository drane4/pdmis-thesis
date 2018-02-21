<?php

$year = date('Y');

$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` <= 10") or die(mysqli_error());
$f1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` >= 10 && `P_Age` <= 20") or die(mysqli_error());
$f2 = $q2->fetch_array();
$q3 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` >= 20 && `P_Age` <= 30") or die(mysqli_error());
$f3 = $q3->fetch_array();
$q4 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` >= 30 && `P_Age` <= 40") or die(mysqli_error());
$f4 = $q4->fetch_array();
$q5 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` >= 40 && `P_Age` <= 50") or die(mysqli_error());
$f5 = $q5->fetch_array();
$q6 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` >= 50 && `P_Age` <= 60") or die(mysqli_error());
$f6 = $q6->fetch_array();
$q7 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` >= 60 && `P_Age` <= 70") or die(mysqli_error());
$f7 = $q7->fetch_array();
$q8 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` >= 70 && `P_Age` <= 80") or die(mysqli_error());
$f8 = $q8->fetch_array();
$q9 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` >= 80 && `P_Age` <= 90") or die(mysqli_error());
$f9 = $q9->fetch_array();
$q10 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Age` >= 90 && `P_Age` <= 100") or die(mysqli_error());
$f10 = $q10->fetch_array();

?>


                                                      
                                              





<script type="text/javascript"> 
    window.onload = function(){ 
        $("#patient_population").CanvasJSChart({
            theme: "light2",
            zoomEnabled: true,
            zoomType: "x",
            panEnabled: true,
            animationEnabled: true,
            animationDuration: 1000,
            //exportFileName: "Monthly Population", 
            //exportEnabled: true,
            title: { 
                text: "Patient Population - Year <?php echo $year?>",
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
                    enabled: true 
                }
            }, 
            data: [ 
                { 
                    type: "column", 
                    toolTipContent: "{label}: {y}", 
                    dataPoints: [ 
                        { label: "10-19 years old", y: <?php echo $f1['total']?> },
                         { label: "20-29 years old", y: <?php echo $f2['total']?> },
                        { label: "30-39 years old", y: <?php echo $f3['total']?> },
                         { label: "40-49 years old", y: <?php echo $f4['total']?> },
                        { label: "50-59 years old", y: <?php echo $f5['total']?> },
                         { label: "60-69 years old", y: <?php echo $f6['total']?> },
                        { label: "70-79 years old", y: <?php echo $f7['total']?> },
                         { label: "80-89 years old", y: <?php echo $f8['total']?> },
                        { label: "90-99 years old", y: <?php echo $f9['total']?> },
                         { label: "100 years old", y: <?php echo $f10['total']?> }
                    ] 
                }, { 
                    type: "", 
                    toolTipContent: "{label}: {y}", 
                    dataPoints: [ 
                        { label: "10-19 years old", y: <?php echo $f1['total']?> },
                         { label: "20-29 years old", y: <?php echo $f2['total']?> },
                        { label: "30-39 years old", y: <?php echo $f3['total']?> },
                         { label: "40-49 years old", y: <?php echo $f4['total']?> },
                        { label: "50-59 years old", y: <?php echo $f5['total']?> },
                         { label: "60-69 years old", y: <?php echo $f6['total']?> },
                        { label: "70-79 years old", y: <?php echo $f7['total']?> },
                         { label: "80-89 years old", y: <?php echo $f8['total']?> },
                        { label: "90-99 years old", y: <?php echo $f9['total']?> },
                         { label: "100 years old", y: <?php echo $f10['total']?> }
                    ] 
                }
                
            ] 
        }); 
    }
</script>