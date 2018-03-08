<?php require '../session.php'; ?>
<html>
    <head>
    
   
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Select Css -->
        <link href="../../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Bootstrap Core Css -->
        <link href="../../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="../../../plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../../../plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- JQuery DataTable Css -->
        <link href="../../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        
        <!-- mytable Css -->
        <link href="../../../css/table.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../../css/themes/theme-indigo.css" rel="stylesheet" />
    </head>
    <body>
            <?php 
                date_default_timezone_set('Asia/Manila');
                $from = $_POST['reportdate1']; //required
                $to = empty($_POST['reportdate2']) ? date('Y-m-d') : $_POST['reportdate2'];
                $ename = $_POST['employeeid']; 
            ?>
         <?php 
            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
             $querye = $conn->query("SELECT `firstname`, `middlename`, `lastname`, `employeeid` FROM `employeeprofile` WHERE `employeeid` = '$ename'") or die(mysqli_error());
            $fetche = $querye ->fetch_array();
            ?>
             <?php if(isset($_POST['employeedetail1'])){ ?>
                    
                  <?php if(empty($_POST['employeeid'])){ ?>
        
                  <div id="printableArea">
                            <div class="body">
                            
                                    <div class="row clearfix">
                                         <div class="col-lg-12 col-md-12 center">
                                        <center>
                                        <h4>TERESITA L. JALANDONI PROVINCIAL HOSPITAL</h4>
                                        <h5>Rizal St, Silay City, Neg. Occ.</h5>
                                        <h5>Tel. No. 495-1704 / 495-1705 / 495-0096</h5>
                                        <h4>HEMODIALYSIS EMPLOYEE RECORD</h4>

                                        </center>
                                        </div>
                                </div>
                                        
                                           <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h4>
                                                        <b>Employee Attendance</b>
                                                    </h4>

                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover js-basic-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>Employee ID</th>
                                                                    <th>Name</th>
                                                                    <th>Date</th>

                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT `employeeprofile`.`employeeid`,`employeeprofile`.`firstname`,`employeeprofile`.`middlename`,`employeeprofile`.`lastname`,`treatment`.`employeeid`,`treatment`.`treatment_date` FROM `treatment` INNER JOIN `employeeprofile` ON `treatment`.`employeeid` = `employeeprofile`.`employeeid` WHERE `treatment`.`treatment_date` BETWEEN '$from' AND '$to' GROUP BY `treatment`.`treatment_date`") or die(mysqli_error());
                                                          // $id = $fetch['Hospital_Id'];
                                                            
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $fetch['employeeid']?>
                                                                        </td>
                                                                      <td>
                                                                            <?php echo $fetch['firstname']. " " .$fetch['middlename']. " " .$fetch['lastname']?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $fetch['treatment_date']?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                           }

                                                        ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       <?php if($from != ''){?>
                                <b>Date: <u><?php echo $from." - ".$to?></u></b><br>
                                <?php } ?>
                                <b>Produced By: <u><?php echo $name ?></u></b>
                           
                           
                            </div>
                                   <div class="row clearfix">
                                            <div class="col-lg-offset-10 col-xs-offset-10">
                                               <div class="row hidden-print mt-20">
                                                 
                                                   <a class="btn btn-primary btn-xs" onclick="printDiv('printableArea')" target="_blank"><i class="material-icons">print</i> Print</a>
                                                
                                                   
                                              </div>
                                         </div>
                                    </div>
                    
                         </div>
                  <?php } else{ ?>
                    
                    <div id="printableArea">
                        
                            <div class="body">
                            
                                    <div class="row clearfix">
                                         <div class="col-lg-12 col-md-12 center">
                                        <center>
                                        <h4>TERESITA L. JALANDONI PROVINCIAL HOSPITAL</h4>
                                        <h5>Rizal St, Silay City, Neg. Occ.</h5>
                                        <h5>Tel. No. 495-1704 / 495-1705 / 495-0096</h5>
                                        <h4>HEMODIALYSIS EMPLOYEE RECORD</h4>
                                        </center>
                                        </div>
                                </div>
                                        
                                           <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                 <div class="header bg-indigo">
                                                    <h4><br><br>
                                                        <p>Employee ID: <?php echo $fetche['employeeid']?><br>
                                                        Employee Name: <?php echo $fetche['firstname']." ".$fetche['middlename']." ".$fetche['lastname'] ?></p>
                                                    </h4>
                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover js-basic-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Day</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                        <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT `employeeprofile`.`employeeid`,`employeeprofile`.`firstname`,`employeeprofile`.`middlename`,`employeeprofile`.`lastname`,`treatment`.`employeeid`,`treatment`.`treatment_date` FROM `treatment` INNER JOIN `employeeprofile` ON `treatment`.`employeeid` = `employeeprofile`.`employeeid` WHERE `treatment`.`treatment_date` BETWEEN '$from' AND '$to' AND `employeeprofile`.`employeeid` = '$ename' GROUP BY `treatment`.`treatment_date`") or die(mysqli_error());

                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                                     <tr>
                                                                         <td>
                                                                            <?php echo $fetch['treatment_date']?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo date("l", strtotime($fetch['treatment_date']))?>
                                                                        </td> 
                                                                    </tr>
                                                                    <?php
                                                           }

                                                        ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <?php if($from != ''){?>
                                <b>Date: <u><?php echo $from." - ".$to?></u></b><br>
                                <?php } ?>
                                <b>Produced By: <u><?php echo $name ?></u></b>
                           
                            </div>
                                   <div class="row clearfix">
                                            <div class="col-lg-offset-10 col-xs-offset-10">
                                               <div class="row hidden-print mt-20">
                                                 
                                                   <a class="btn btn-primary btn-xs" onclick="printDiv('printableArea')" target="_blank"><i class="material-icons">print</i> Print</a>
                                                
                                                   
                                              </div>
                                         </div>
                                    </div>
                    
                         </div>
                  <?php } ?>
                <?php } ?>
        
        <?php if(isset($_POST['employeedetail2'])){ ?>
                <?php if(empty($_POST['employeeid'])){ ?>    
                <div id="printableArea">
                            <div class="body">
                            
                                    <div class="row clearfix">
                                         <div class="col-lg-12 col-md-12 center">
                                        <center>
                                        <h4>TERESITA L. JALANDONI PROVINCIAL HOSPITAL</h4>
                                        <h5>Rizal St, Silay City, Neg. Occ.</h5>
                                        <h5>Tel. No. 495-1704 / 495-1705 / 495-0096</h5>
                                        <h4>HEMODIALYSIS EMPLOYEE RECORD</h4>
                                        </center>
                                        </div>
                                </div>
                                        
                                           <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h4>
                                                        <b>Employee Performance</b>
                                                    </h4>
                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover js-basic-example">
                                                            <thead>
                                                                <tr>
                                                                     <th>Date</th>
                                                                    <th>Time</th>
                                                                    <th>Day</th>
                                                                     <th>Employee Name</th>
                                                                    <th>Attended Patient</th>
                                                                   
                                                                    
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT `treatment`.`treatment_start`, `treatment`.`treatment_end`,`employeeprofile`.`employeeid`,`employeeprofile`.`firstname`,`employeeprofile`.`middlename`,`employeeprofile`.`lastname`,`treatment`.`employeeid`,`treatment`.`treatment_date`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname` FROM `treatment` INNER JOIN `employeeprofile` ON `treatment`.`employeeid` = `employeeprofile`.`employeeid` INNER JOIN `patientprofile` ON `patientprofile`.`Hospital_Id` = `treatment`.`Hospital_Id` WHERE `treatment`.`treatment_date` BETWEEN '$from' AND '$to' GROUP BY `treatment`.`treatment_date`") or die(mysqli_error());
                                                          // $id = $fetch['Hospital_Id'];
                                                            
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                                    <tr>
                                                                         <td>
                                                                            <?php echo $fetch['treatment_date']?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $fetch['treatment_start']. " - " .$fetch['treatment_end']?>
                                                                        </td>
                                                                         <td>
                                                                            <?php echo date("l", strtotime($fetch['treatment_date']))?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $fetch['P_Fname']. " " .$fetch['P_Mname']. " " .$fetch['P_Lname']?>
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            <?php echo $fetch['firstname']. " " .$fetch['middlename']. " " .$fetch['lastname']?>
                                                                        </td>
                                                                        
                                                                       
                                                                    </tr>
                                                                    <?php
                                                           }

                                                        ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                           
                            </div>
                                   <div class="row clearfix">
                                            <div class="col-lg-offset-10 col-xs-offset-10">
                                               <div class="row hidden-print mt-20">
                                                 
                                                   <a class="btn btn-primary btn-xs" onclick="printDiv('printableArea')" target="_blank"><i class="material-icons">print</i> Print</a>
                                                
                                                   
                                              </div>
                                         </div>
                                    </div>
                    
                         </div>
            <?php } else{ ?>
                 <div id="printableArea">
                            <div class="body">
                            
                                    <div class="row clearfix">
                                         <div class="col-lg-12 col-md-12 center">
                                        <center>
                                        <h4>TERESITA L. JALANDONI PROVINCIAL HOSPITAL</h4>
                                        <h5>Rizal St, Silay City, Neg. Occ.</h5>
                                        <h5>Tel. No. 495-1704 / 495-1705 / 495-0096</h5>
                                        <h4>HEMODIALYSIS EMPLOYEE RECORD</h4>

                                        </center>
                                        </div>
                                </div>
                                        
                                           <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                      <h4><br><br>
                                                        <p>Employee ID: <?php echo $fetche['employeeid']?><br>
                                                        Employee Name: <?php echo $fetche['firstname']." ".$fetche['middlename']." ".$fetche['lastname'] ?></p>
                                                    </h4>
                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover js-basic-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>Date</th>
                                                                    <th>Time</th>
                                                                    <th>Day</th>
                                                                    <th>Attended Patient</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                            $total = 0;
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT `treatment`.`treatment_start`, `treatment`.`treatment_end`, `employeeprofile`.`employeeid`,`employeeprofile`.`firstname`,`employeeprofile`.`middlename`,`employeeprofile`.`lastname`,`treatment`.`employeeid`,`treatment`.`treatment_date`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname` FROM `treatment` INNER JOIN `employeeprofile` ON `treatment`.`employeeid` = `employeeprofile`.`employeeid` INNER JOIN `patientprofile` ON `patientprofile`.`Hospital_Id` = `treatment`.`Hospital_Id` WHERE `treatment`.`treatment_date` BETWEEN '$from' AND '$to' AND `employeeprofile`.`employeeid` = '$ename' GROUP BY `treatment`.`treatment_date`") or die(mysqli_error());
                                                          // $id = $fetch['Hospital_Id'];
                                                            
                                                           while($fetch = $query ->fetch_array()){
                                                               $total = $total + 1;
                                                        ?>
                                                                    <tr>
                                                                         <td>
                                                                            <?php echo $fetch['treatment_date']?>
                                                                        </td>
                                                                         <td>
                                                                            <?php echo $fetch['treatment_start']." - ".$fetch['treatment_end']?>
                                                                        </td>
                                                                         <td>
                                                                            <?php echo date("l", strtotime($fetch['treatment_date']))?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $fetch['P_Fname']. " " .$fetch['P_Mname']. " " .$fetch['P_Lname']?>
                                                                        </td>
                                                                       
                                                                    </tr>
                                                                    <?php
                                                           }

                                                        ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <?php if($from != ''){?>
                                <b>Date: <u><?php echo $from." - ".$to?></u></b><br>
                                <?php } ?>
                                <b>Produced By: <u><?php echo $name ?></u></b><br>
                                <b>Total Transactions Created: <u><?php echo $total ?></u></b>
                                
                            </div>
                                   <div class="row clearfix">
                                            <div class="col-lg-offset-10 col-xs-offset-10">
                                               <div class="row hidden-print mt-20">
                                                 
                                                   <a class="btn btn-primary btn-xs" onclick="printDiv('printableArea')" target="_blank"><i class="material-icons">print</i> Print</a>
                                                
                                                   
                                              </div>
                                         </div>
                                    </div>
                    
                         </div>
        
            <?php } ?>
        <?php } ?>
             <?php if(isset($_POST['employeechart'])){ ?>
             <?php require '../js/charteasy/employee.php'?>
          
           <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                      <div id="printableArea">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <div class="clearfix row" id="printthisDiv">
                                    <style type="text/css">
                                        .header{
                                            text-align: center;
                                            font-family: “Calibri, Optima, Candara, Verdana, Geneva, sans-serif”;
                                            color: #393938;
                                        }
                                    </style>
                                    <div class="header">
                                        <span style="font-weight: bold;font-size: 18px;">
                                            TERESITA L. JALANDONI PROVINCIAL HOSPITAL
                                        </span><br>
                                        Rizal St, Silay City, Neg. Occ.<br>
                                        Tel. No. 495-1704 / 495-1705 / 495-0096<br>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                         <div id="employee" style="width: 100%; height: 400px"></div>
                                    </div>
                                    <div>
                                    <b>Produced By: <u><?php echo $name ?></u></b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button id="printthis"><span class="glyphicon glyphicon-print"></span>&nbsp;Print</button>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
     
            <?php } ?>  
        
        
        
         

<script>
            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            }
        </script>
  <script src="../../../plugins/dropzone/dropzone.js"></script>

        <!-- Jquery Core Js -->
        <script src="../../../plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../../../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../../../plugins/node-waves/waves.js"></script>


        <script src="../../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

        <script src="../../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>



        <!-- Jquery DataTable Plugin Js -->
        <script src="../../../plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="../../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="../../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="../../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="../../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="../../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="../../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="../../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="../../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

        <!-- Custom Js -->
        <script src="../../../js/admin.js"></script>
        <script src="../../../js/pages/tables/jquery-datatable.js"></script>
        <script src="../../../js/pages/forms/advanced-form-elements1.js"></script>

        <!-- Demo Js -->
        <script src="../../../js/demo.js"></script>
           <script src = "../js/charteasy/printThis/printThis.js"></script>       
 <script src="../js/jquery.canvasjs.min.js"></script>
      
    </body>
</html>