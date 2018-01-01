﻿<?php
require 'session.php';

                                    ini_set('display_errors', 0);
                                    $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$_GET[id]' ") or die(mysqli_error());
                                    $fetch = $query ->fetch_array();
                                    $id = $fetch['Hospital_Id'];
 date_default_timezone_set('Asia/Manila');
?>

    <!DOCTYPE html>
    <html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>PDMIS</title>
        <!-- Favicon-->
        <link rel="icon" href="../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Waves Effect Css -->
        <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />
          <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Morris Chart Css-->
        <link href="../../plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../../css/style2.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../css/themes/theme-indigo.css" rel="stylesheet" />
    </head>

    <body class="theme-indigo">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-indigo">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->

        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <center>
                        <a class="navbar-brand" href="index.html">
                            <div class="title">Teresita Jalandoni Provincial Hospital <br> Dialysis Department</div>
                        </a>
                    </center>

                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->

                        <!-- #END# Call Search -->
                        <!-- Notifications -->

                        <!-- #END# Notifications -->
                        <!-- Tasks -->

                        <!-- #END# Tasks -->
                        <!--  <li class="pull-right"><a class="navbar-brand" href="index.html">Sign-Out</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="../../images/nurse.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $name; ?>
                        </div>
                        <div class="email">
                            <?php echo $position; ?>
                        </div>
                        <div class="btn-group user-helper-dropdown">


                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">

                        <li class="header">MAIN NAVIGATION</li>

                        <li class="active" id="transaction">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">folder</i>
                                <span>Transaction</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="transaction" class="active">
                                    <a href="transaction.php">HemoTreatment</a>
                                </li>
                                <li id="Schedule">
                                    <a href="LT.php">Schedule</a>
                                </li>
                                <li id="Immunization">
                                    <a href="P.php">Immunization</a>
                                </li>
                                <li id="PatientMedicalHistory">
                                    <a href="D.php">Patient Medical History</a>
                                </li>
                            </ul>

                        </li>
                        <li id="profile">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Profile</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="patientprofile">
                                    <a href="PatientProfile.php">Patient Profile</a>
                                </li>
                                <li id="employeeprofile">
                                    <a href="EmployeeProfile.php">Employee Profile</a>
                                </li>
                                <li id="labtest">
                                    <a href="LT.php">Lab Tests</a>
                                </li>
                                <li id="nephrologist">
                                    <a href="P.php">Nephrologist</a>
                                </li>
                                <li id="descriptors">
                                    <a href="D.php">Descriptors</a>
                                </li>
                            </ul>
                        </li>
                        <li id="maintenance">

                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">settings</i>
                                <span>Maintenance</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="userprofile">
                                    <a href="UserProfile.php">User Profile</a>
                                </li>
                                <li id="systemmaintenance">
                                    <a href="maintenance.php">System Maintenance</a>
                                </li>
                            </ul>
                        </li>
                        <li id="reports">
                            <a href="R.php">
                                <i class="material-icons">assignment</i>
                                <span>Reports</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="material-icons">input</i>
                                <span>Exit</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2016 - 2017 <a href="javascript:void(0);">Dynamic Explorers</a>.
                    </div>

                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <aside id="rightsidebar" class="right-sidebar">
                <a> <i class="material-icons">input</i></a>

                <!-- tab content (header right)-->
                <!-- tab content -->
            </aside>
            <!-- #END# Right Sidebar -->
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-indigo">
                                <h2>
                                    Hemodialysis Treatment
                                </h2>

                            </div>
                            <div class="body">
                                <form class="form-horizontal" form method="POST" action="saveuser.php">
                                    <div class="row clearfix">
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Hospital Id</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value=" <?php echo $fetch['Hospital_Id']?>" placeholder=" <?php echo $fetch['Hospital_Id']?>" id="employeeid" readonly>
                                                </div>
                                                <span class="input-group-addon">
                                                 <button style="color:blue" type="button" class="btn btn-xs" data-toggle="modal" data-target="#patients">...</button>
                                                 
                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="row clearfix">
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>FullName</label>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" value=" <?php echo $fetch['P_Fname'].' '.$fetch['P_Mname'].' '.$fetch['P_Lname']?>" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row clearfix">
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Age</label>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="<?php echo $fetch['P_Age']?>" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Sex</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="<?php echo $fetch['P_Sex']?>" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>CivilStatus</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="<?php echo $fetch['P_CivilStatus']?>" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Dry Wt.</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-5 col-xs-4 form-control-label">
                                            <label>Duration</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Date</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Weight Gain</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-5 col-xs-4 form-control-label">
                                            <label>BFR</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Dialyzer</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Pre Dialysis WT.</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-5 col-xs-4 form-control-label">
                                            <label>Access</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Dialyzer user</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Post Dialysis Wt.</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-5 col-xs-4 form-control-label">
                                            <label>Heparin</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                            <label>Machine #</label>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="employeeid" value="" id="employeeid" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                                            <table id="mainTable" class="table table-bordered" style="margin-bottom: 0px; table-layout: fixed;">

                                                <thead>
                                                    <tr>
                                                        <th>Physician's Notes</th>
                                                        <th>Physician's Order</th>

                                                    </tr>
                                                </thead>
                                                <?php 
                                                               $nid = $fetch['nephrologistid'];
                                                               $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                               $query = $conn->query("SELECT * FROM `nephrologist` WHERE `nephrologistid` = '$nid'") or die(mysqli_error());
                                                               $fetch = $query ->fetch_array();
                                                               $n_fname = $fetch['n_fname'];
                                                               $n_mname = $fetch['n_mname'];
                                                               $n_lname = $fetch['n_lname'];
    ?>
                                                <tbody>
                                                    <?php   
                                                            
    
                                                            $date = date("Y-m-d");
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `nephronotesorder` WHERE `Hospital_Id` = '$_GET[id]' && `notes_order_date` = '$date' ORDER BY `notes_order_id`") or die(mysqli_error());
                                                           $id = $fetch['Hospital_Id'];
                                                           
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                    <tr>
                                                        <td style="white-space: normal">
                                                            <p style="word-wrap: break-word;">
                                                            <a href="#editPhysician_notes" data-toggle="modal" data-target="#editPhysician_notes" style="color: black;">
                                                                <?php echo $fetch['nephro_notes']?>
                                                            </a>

                                                            <b class="pull-right"><?php echo " -".$n_fname." ".$n_mname." ".$n_lname?></b>
                                                            </p>
                                                        </td>
                                                        <td style="white-space: normal">
                                                            <p style="word-wrap: break-word;">
                                                            <a href="#editPhysician_notes" data-toggle="modal" data-target="#editPhysician_notes" style="color: black;">
                                                            <?php echo $fetch['nephro_order']?>
                                                            </a>
                                                            </p>
                                                        </td>

                                                    </tr>
                                                    <?php
                                                           }

                                                        ?>

                                                </tbody>

                                            </table>

                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                            <small>Initial Test Result</small>


                                            <table id="mainTable" class="table table-bordered" style="margin-bottom: 0px;">
                                                <thead>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>BP</th>
                                                        <th>CR</th>
                                                        <th>RR</th>
                                                        <th>T</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            $date = date("Y-m-d");
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `initialtestresult` WHERE `Hospital_Id` = '$_GET[id]' && `initialtest_date` = '$date' ORDER BY `initialtestresult_id`") or die(mysqli_error());
                                                           $id = $fetch['Hospital_Id'];
                                                           
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                 <a href="#editInitialtest" data-toggle="modal" data-target="#editInitialtest" style="color: black;">
                                                                <?php echo $fetch['initialtest_time']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                 <a href="#editInitialtest" data-toggle="modal" data-target="#editInitialtest" style="color: black;">
                                                                <?php echo $fetch['bloodpressure']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                 <a href="#editInitialtest" data-toggle="modal" data-target="#editInitialtest" style="color: black;">
                                                                <?php echo $fetch['cardiacrate']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                 <a href="#editInitialtest" data-toggle="modal" data-target="#editInitialtest" style="color: black;">
                                                                <?php echo $fetch['repulsiverate']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                 <a href="#editInitialtest" data-toggle="modal" data-target="#editInitialtest" style="color: black;">
                                                                <?php echo $fetch['initialtemperature']?>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                        <?php
                                                           }

                                                        ?>

                                                </tbody>

                                            </table>

                                        </div>

                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pull-right">


                                            <small>&nbsp;</small>

                                            <table id="mainTable" class="table table-bordered" style="margin-bottom: 0px; table-layout: fixed;">
                                                <thead>
                                                    <tr>
                                                        <th>Nurse's Notes</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            $date = date("Y-m-d");
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `nursenotes` WHERE `Hospital_Id` = '$_GET[id]' && `nurse_notes_date` = '$date' ORDER BY `nurse_notes_id`") or die(mysqli_error());
                                                           $id = $fetch['Hospital_Id'];
                                                           
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                        <tr>
                                                            <td style="white-space: normal">
                                                                     <a href="#editnursesnotes<?php echo $fetch['nurse_notes_id'];?>" data-toggle="modal" data-target="#editnursesnotes<?php echo $fetch['nurse_notes_id'];?>" style="color: black;">
                                                                <p style="word-wrap: break-word;"> (F) :
                                                                    <?php echo $fetch['focus']?><br> (D) :
                                                                    <?php echo $fetch['data']?><br> (A) :
                                                                    <?php echo $fetch['action']?><br> (R) :
                                                                    <?php echo $fetch['resolution']?>
                                                                </p>
                                                                         </a>
                                                            </td>


                                                        </tr>
                                                        <?php
                                                           }

                                                        ?>
                                                </tbody>

                                            </table>

                                        </div>


                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                            <small>Test Results</small>

                                            <table id="mainTable" class="table table-bordered" style="margin-bottom: 0px;">
                                                <thead>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>BP</th>
                                                        <th>CR</th>
                                                        <th>BFR</th>
                                                        <th>TMP</th>
                                                        <th>VP</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                           
                                                            $date = date("Y-m-d");
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `machineresult` WHERE `Hospital_Id` = '$_GET[id]' && `m_date` = '$date' ORDER BY `machineresult_id`") or die(mysqli_error());
                                                           $id = $fetch['Hospital_Id'];
                                                           
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                 <a href="#editmachinetest<?php echo $fetch['machineresult_id'];?>" data-toggle="modal" data-target="#editmachinetest<?php echo $fetch['machineresult_id'];?>" style="color: black;">
                                                                <?php echo $fetch['m_time']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                               <a href="#editmachinetest<?php echo $fetch['machineresult_id'];?>" data-toggle="modal" data-target="#editmachinetest<?php echo $fetch['machineresult_id'];?>" style="color: black;">
                                                                <?php echo $fetch['m_bloodpressure']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                               <a href="#editmachinetest<?php echo $fetch['machineresult_id'];?>" data-toggle="modal" data-target="#editmachinetest<?php echo $fetch['machineresult_id'];?>" style="color: black;">
                                                                <?php echo $fetch['m_cardiacrate']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#editmachinetest<?php echo $fetch['machineresult_id'];?>" data-toggle="modal" data-target="#editmachinetest<?php echo $fetch['machineresult_id'];?>" style="color: black;">
                                                                <?php echo $fetch['m_bloodflowrate']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                             <a href="#editmachinetest<?php echo $fetch['machineresult_id'];?>" data-toggle="modal" data-target="#editmachinetest<?php echo $fetch['machineresult_id'];?>" style="color: black;">
                                                                <?php echo $fetch['m_transmempressure']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="#editmachinetest<?php echo $fetch['machineresult_id'];?>" data-toggle="modal" data-target="#editmachinetest<?php echo $fetch['machineresult_id'];?>" style="color: black;">
                                                                <?php echo $fetch['m_venpressure']?>
                                                                </a>
                                                            </td>

                                                        </tr>
                                                        <?php
                                                           }

                                                        ?>

                                                </tbody>

                                            </table>

                                        </div>
                                    </div>


                                    <div class="row clearfix">
                                        <div class="col-lg-offset-7 col-xs-offset-7">
                                            <a data-toggle="modal" class="btn btn-primary m-t-15 waves-effect"  <?php if($_GET[id]=='') {?> disabled="disabled"<?php }  ?>
                                               <?php if($_GET[id]!='') {?> data-target="#smallModal" <?php }  ?>><i class="material-icons">mode_edit</i>Update</a>&nbsp;
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>New</button> &nbsp;
                                            <button type="delete" name="delete" class="btn btn-primary m-t-15 waves-effect"> <i class="material-icons">delete</i>Delete</button> &nbsp;
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="smallModal" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Record

                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                            <li role="presentation" class="active"><a href="#physician" data-toggle="tab">Physicians Notes/Order</a></li>
                                            <li role="presentation"><a href="#nurses" data-toggle="tab">Nurses Notes</a></li>
                                            <li role="presentation"><a href="#itest" data-toggle="tab">Initial Test</a></li>
                                            <li role="presentation"><a href="#machinetest" data-toggle="tab">Machine Result</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <!-- #the 2nd query is to show the content of notes/order of certain patient -->
                                            <?php
                                 
                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                             $query = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$_GET[id]'") or die(mysqli_error());
                                             $fetch = $query ->fetch_array();
                                              $nid = $fetch['nephrologistid'];

                                            ?>
                                                <div role="tabpanel" class="tab-pane fade in active" id="physician">
                                                    <!-- #physician Notes/Order -->
                                              
                                                <form class="form-horizontal" form method="POST" action="savehemotreatment.php?id=<?php echo $_GET[id]."|".$notes_order_id?>">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                                <label for="">Nephrologist :</label>
                                                            </div>
                                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
                                                                <div class="form-group">
                                                                    <div class="">
                                                                        <?php 
                                             $nid = $fetch['nephrologistid'];
                                             $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                             $query = $conn->query("SELECT * FROM `nephrologist` WHERE `nephrologistid` = '$nid'") or die(mysqli_error());
                                             $fetch = $query ->fetch_array();
                                             $n_fname = $fetch['n_fname'];
                                             $n_mname = $fetch['n_mname'];
                                             $n_lname = $fetch['n_lname'];
                                            ?>
                                                                        <input type="text" class="form-control" name="employeeid" value="<?php echo $n_fname." ".$n_mname." ".$n_lname ?>" id="employeeid" placeholder="" readonly>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                              $date = date("Y-m-d");                
                                              $query = $conn->query("SELECT * FROM `nephronotesorder` WHERE `Hospital_Id` = '$_GET[id]' && `notes_order_date` = '$date'") or die(mysqli_error());
                                              $fetch = $query ->fetch_array();
                                              $nephro_note = $fetch['nephro_notes'];
                                              $nephro_order = $fetch['nephro_order'];
                                                            ?>
                                                            <div class="row clearfix">

                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label>Physicians Notes</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-md-8  form-control-label">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <textarea rows="2" name="p_notes" id="p_notes" class="form-control no-resize auto-growth"><?php echo $nephro_note?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                       
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label>Physicians Order</label>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-md-8  form-control-label">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <textarea rows="2" name="p_order" id="p_order" class="form-control no-resize auto-growth"><?php echo $nephro_order?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row clearfix">
                                                                <div class="col-lg-offset-6 col-xs-offset-5">

                                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                                    <button type="NephroNO" class="btn btn-primary m-t-15 waves-effect" name="NephroNO"><i class="material-icons">save</i>Save</button> &nbsp;
                                                                </div>
                                                            </div>
                                                    </form>
                                                </div>
                                                
                                                <div role="tabpanel" class="tab-pane fade" id="nurses">
                                                    <?php
                                                    $date = date("Y-m-d");
                                                    $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                    $query = $conn->query("SELECT * FROM `nursenotes` WHERE `Hospital_Id` = '$_GET[id]' && `nurse_notes_date` = '$date' ORDER BY `nurse_notes_id`") or die(mysqli_error());          
                                                    ?>
                                                    <form class="form-horizontal" form method="POST" action="savehemotreatment.php?id=<?php echo $_GET[id]."|".$fetch['nurse_notes_id']?>">


                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                                <label>Focus</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-1 col-sm-6 col-xs-8 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="focus" value="focus" class="form-control no-resize auto-growth"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                                <label>Data</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-1 col-sm-6 col-xs-8 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="data" value="data" class="form-control no-resize auto-growth"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                                <label>Action</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-1 col-sm-6 col-xs-8 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="action" value="action" class="form-control no-resize auto-growth"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                                <label>Resolution</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-1 col-sm-6 col-xs-8 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="resolution" value="resolution" class="form-control no-resize auto-growth"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-6 col-xs-offset-5">

                                                                <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                                <button type="NurseNO" class="btn btn-primary m-t-15 waves-effect" name="NurseNO"><i class="material-icons">save</i>Save</button> &nbsp;
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="itest">
                                                     <?php 
                                             $date = date("Y-m-d");  
                                             $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                             $query = $conn->query("SELECT * FROM `initialtestresult` WHERE `Hospital_Id` = '$_GET[id]' && `initialtest_date` = '$date'") or die(mysqli_error());
                                             $fetch = $query ->fetch_array();
                                            
                                                                            ?>
                                                    <form class="form-horizontal" form method="POST" action="savehemotreatment.php?id=<?php echo $_GET[id]."|".$fetch[initialtestresult_id]?>">
                                                       

                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Initial Temperature</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="initialtemp" name="initialtemp" class="form-control" placeholder="" value="<?php echo $fetch['initialtemperature']?>" autofocus>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Blood Pressure</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="bloodpressure" name="bloodpressure" class="form-control" placeholder="" value="<?php echo $fetch['bloodpressure']?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Cardiac Rate</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="cardiacrate" name="cardiacrate" class="form-control" placeholder="" value="<?php echo $fetch['cardiacrate']?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Repulsive Rate</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="repulsiverate" name="repulsiverate" class="form-control" placeholder="" value="<?php echo $fetch['repulsiverate']?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-6 col-xs-offset-5">

                                                                <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                                <button type="ITest" class="btn btn-primary m-t-15 waves-effect" name="ITest"><i class="material-icons">save</i>Save</button> &nbsp;
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="machinetest">
                                                    
                                                    <form class="form-horizontal" form method="POST" action="savehemotreatment.php?id=<?php echo $_GET[id]."|".'0000'?>">


                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Blood Pressure</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="bloodpressure" name="bloodpressure" class="form-control" placeholder="" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Cardiac Rate</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="cardiacrate" name="cardiacrate" class="form-control" placeholder="" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Blood Flow Rate</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="bloodflowrate" name="bloodflowrate" class="form-control" placeholder="" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Trans Membrane Pressure</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="transmembranepressure" name="transmembranepressure" class="form-control" placeholder="" value="" autofocus>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Venus Pressure</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="venuspressure" name="venuspressure" class="form-control" placeholder="" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-6 col-xs-offset-5">

                                                                <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                                <button type="MResult" class="btn btn-primary m-t-15 waves-effect" name="MResult"><i class="material-icons">save</i>Save</button> &nbsp;
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="patients" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                        <div class="modal-content">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header bg-indigo">
                                            <h2>
                                                List of Patients

                                                <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                            </h2>

                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Hospital ID</th>
                                                            <th>LastName</th>
                                                            <th>FirstName</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `patientprofile` ORDER BY `Hospital_Id`") or die(mysqli_error());
                                                           $id = $fetch['Hospital_Id'];
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <a href="transaction.php?id=<?php echo $fetch['Hospital_Id']?>">
                                                                        <?php echo $fetch['Hospital_Id']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="transaction.php?id=<?php echo $fetch['Hospital_Id']?>">
                                                                        <?php echo $fetch['P_Lname']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="transaction.php?id=<?php echo $fetch['Hospital_Id']?>">
                                                                        <?php echo $fetch['P_Fname']?>
                                                                    </a>
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
                    </div>
            </div>
            <div class="modal fade" id="editPhysician_notes" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Record

                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                          <?php
                                 
                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                             $query = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$_GET[id]'") or die(mysqli_error());
                                             $fetch = $query ->fetch_array();
                                              $nid = $fetch['nephrologistid'];

                                            ?>
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                            <li role="presentation" class="active"><a href="#physician" data-toggle="tab">Physicians Notes/Order</a></li>
                                            <li role="presentation" class="disabled"><a>Nurses Notes</a></li>
                                            <li role="presentation" class="disabled"><a>Initial Test</a></li>
                                            <li role="presentation" class="disabled"><a>Machine Result</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <!-- #the 2nd query is to show the content of notes/order of certain patient -->
                                                  <?php
                                              $date = date("Y-m-d");                
                                              $query = $conn->query("SELECT * FROM `nephronotesorder` WHERE `Hospital_Id` = '$_GET[id]' && `notes_order_date` = '$date'") or die(mysqli_error());
                                              $fetch = $query ->fetch_array();
                                              $notes_order_id = $fetch['notes_order_Id'];            
                                                            ?>   
                                                <div role="tabpanel" class="tab-pane fade in active" id="physician">
                                                    <!-- #physician Notes/Order -->
                                                    <form class="form-horizontal" form method="POST" action="savehemotreatment.php?id=<?php echo $_GET[id]."|".$notes_order_id?>">
                                                        <div class="r                                                                       ow clearfix">
                                                            <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                                <label for="">Nephrologist :</label>
                                                            </div>
                                                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 form-control-label">
                                                                <div class="form-group">
                                                                    <div class="">
                                                                        <input type="text" class="form-control" name="employeeid" value="<?php echo $n_fname." ".$n_mname." ".$n_lname ?>" id="employeeid" placeholder="" readonly>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label>Physicians Notes</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-md-8  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="p_notes" id="p_notes" class="form-control no-resize auto-growth"><?php echo $nephro_note?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label>Physicians Order</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-md-8  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="p_order" id="p_order" class="form-control no-resize auto-growth"><?php echo $nephro_order?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-6 col-xs-offset-5">

                                                                <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                                <button type="NephroNO" class="btn btn-primary m-t-15 waves-effect" name="NephroNO"><i class="material-icons">save</i>Save</button> &nbsp;
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editInitialtest" role="dialog">
                <div class="modal-dialog modal-default" role="document">
                     <?php 
                                             $date = date("Y-m-d");  
                                             $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                             $query = $conn->query("SELECT * FROM `initialtestresult` WHERE `Hospital_Id` = '$_GET[id]' && `initialtest_date` = '$date'") or die(mysqli_error());
                                             $fetch = $query ->fetch_array();
                                            
                      ?>
                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Record

                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                            <li role="presentation" class="disabled"><a>Physicians Notes/Order</a></li>
                                            <li role="presentation" class="disabled"><a>Nurses Notes</a></li>
                                            <li role="presentation" class="active"><a href="#itest" data-toggle="tab">Initial Test</a></li>
                                            <li role="presentation" class="disabled"><a>Machine Result</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <!-- #the 2nd query is to show the content of notes/order of certain patient -->
                             
                                    <div role="tabpanel" class="tab-pane fade in active" id="itest">

                                                <form class="form-horizontal" form method="POST" action="savehemotreatment.php?id=<?php echo $_GET[id]."|".$fetch['initialtestresult_id']?>">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Initial Temperature</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="initialtemp" name="initialtemp" class="form-control" placeholder="" value="<?php echo $fetch['initialtemperature']?>" autofocus>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Blood Pressure</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="bloodpressure" name="bloodpressure" class="form-control" placeholder="" value="<?php echo $fetch['bloodpressure']?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Cardiac Rate</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="cardiacrate" name="cardiacrate" class="form-control" placeholder="" value="<?php echo $fetch['cardiacrate']?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Repulsive Rate</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="repulsiverate" name="repulsiverate" class="form-control" placeholder="" value="<?php echo $fetch['repulsiverate']?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-6 col-xs-offset-5">

                                                                <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                                <button type="ITest" class="btn btn-primary m-t-15 waves-effect" name="ITest"><i class="material-icons">save</i>Save</button> &nbsp;
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
             $date = date("Y-m-d");
             $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
             $query = $conn->query("SELECT * FROM `machineresult` WHERE `Hospital_Id` = '$_GET[id]' && `m_date` = '$date' ORDER BY `machineresult_id`") or die(mysqli_error());
              while($fetch = $query ->fetch_array()){
                                                        ?>
              <div class="modal fade" id="editmachinetest<?php echo $fetch['machineresult_id'];?>" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Record

                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                            <li role="presentation" class="disabled"><a>Physicians Notes/Order</a></li>
                                            <li role="presentation" class="disabled"><a>Nurses Notes</a></li>
                                            <li role="presentation" class="disabled"><a>Initial Test</a></li>
                                            <li role="presentation" class="active"><a href="#machinetest" data-toggle="tab">Machine Result</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <!-- #the 2nd query is to show the content of notes/order of certain patient -->
                                         <div role="tabpanel" class="tab-pane fade in active" id="machinetest">

                                                    <form class="form-horizontal" form method="POST" action="savehemotreatment.php?id=<?php echo $_GET[id]."|".$fetch['machineresult_id']?>">


                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Blood Pressure</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="bloodpressure" name="bloodpressure" class="form-control" placeholder="" value="<?php echo $fetch['m_bloodpressure'];?>" autofocus>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Cardiac Rate</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="cardiacrate" name="cardiacrate" class="form-control" placeholder="" value="<?php echo $fetch['m_cardiacrate'];?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Blood Flow Rate</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="bloodflowrate" name="bloodflowrate" class="form-control" placeholder="" value="<?php echo $fetch['m_bloodflowrate'];?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Trans Membrane Pressure</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="transmembranepressure" name="transmembranepressure" class="form-control" placeholder="" value="<?php echo $fetch['m_transmempressure'];?>" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label>Venus Pressure</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="venuspressure" name="venuspressure" class="form-control" placeholder="" value="<?php echo $fetch['m_venpressure'];?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-6 col-xs-offset-5">

                                                                <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                                <button type="MResult" class="btn btn-primary m-t-15 waves-effect" name="MResult"><i class="material-icons">save</i>Save</button> &nbsp;
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                 

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <?php } ?>
            
            
              <?php
                $date = date("Y-m-d");
                $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
               $query = $conn->query("SELECT * FROM `nursenotes` WHERE `Hospital_Id` = '$_GET[id]' && `nurse_notes_date` = '$date' ORDER BY `nurse_notes_id`") or die(mysqli_error());                              
              while($fetch = $query ->fetch_array()){
                ?>
              <div class="modal fade" id="editnursesnotes<?php echo $fetch['nurse_notes_id'];?>" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Record

                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                            <li role="presentation" class="disabled"><a>Physicians Notes/Order</a></li>
                                            <li role="presentation" class="active"><a  href="#nurses" data-toggle="tab">Nurses Notes</a></li>
                                            <li role="presentation" class="disabled"><a>Initial Test</a></li>
                                            <li role="presentation" class="disabled"><a>Machine Result</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <!-- #the 2nd query is to show the content of notes/order of certain patient -->
                                       
                                             <div role="tabpanel" class="tab-pane fade in active" id="nurses">

                                                    <form class="form-horizontal" form method="POST" action="savehemotreatment.php?id=<?php echo $_GET[id]."|".$fetch['nurse_notes_id']?>">


                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                                <label>Focus</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-1 col-sm-6 col-xs-8 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="focus" value="<?php echo $fetch['nurse_notes_id'];?>" class="form-control no-resize auto-growth"><?php echo $fetch['focus'];?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                                <label>Data</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-1 col-sm-6 col-xs-8 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="data" value="<?php echo $fetch['nurse_notes_id'];?>" class="form-control no-resize auto-growth"><?php echo $fetch['data'];?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                                <label>Action</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-1 col-sm-6 col-xs-8 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="action" value="<?php echo $fetch['nurse_notes_id'];?>" class="form-control no-resize auto-growth"><?php echo $fetch['action'];?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                                <label>Resolution</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-1 col-sm-6 col-xs-8 col-md-3  form-control-label">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="2" name="resolution" value="<?php echo $fetch['nurse_notes_id'];?>" class="form-control no-resize auto-growth"><?php echo $fetch['resolution'];?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-6 col-xs-offset-5">

                                                                <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                                <button type="NurseNO" class="btn btn-primary m-t-15 waves-effect" name="NurseNO"><i class="material-icons">save</i>Save</button> &nbsp;
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <?php
        }
        $conn->close();
        ?> 








        </section>


        <!-- Jquery Core Js -->


        <script src="../../plugins/jquery/jquery.min.js"></script>
        <script src="../../plugins/jquery/jquery.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../../plugins/node-waves/waves.js"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="../../plugins/jquery-countto/jquery.countTo.js"></script>

        <!-- Morris Plugin Js -->
        <script src="../../plugins/raphael/raphael.min.js"></script>
        <script src="../../plugins/morrisjs/morris.js"></script>

        <!-- ChartJs -->
        <script src="../../plugins/chartjs/Chart.bundle.js"></script>

     <!-- Jquery DataTable Plugin Js -->
        <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
         <script src="../../js/pages/tables/jquery-datatable.js"></script>
        <!-- Sparkline Chart Plugin Js -->
        <script src="../../plugins/jquery-sparkline/jquery.sparkline.js"></script>

 
  
        <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <script src="../../js/pages/index.js"></script>
        
        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>
        <script>
            $(window).load(function() {
                var module = '<?php echo $transaction_a; ?>';
                var module1 = '<?php echo $patientprofile_a; ?>';
                var module2 = '<?php echo $employeeprofile_a; ?>';
                var module3 = '<?php echo $labtest_a; ?>';
                var module4 = '<?php echo $nephrologist_a; ?>';
                var module5 = '<?php echo $descriptors_a; ?>';
                var module6 = '<?php echo $userprofile_a; ?>';
                var module7 = '<?php echo $maintenance_a; ?>';
                var module8 = '<?php echo $reports_a; ?>';

                if (module == '0') {
                    $('#transaction').hide();

                }

                if (module1 == '0') {
                    $('#patientprofile').hide();

                }

                if (module2 == '0') {
                    $('#employeeprofile').hide();

                }

                if (module3 == '0') {
                    $('#labtest').hide();

                }

                if (module4 == '0') {
                    $('#nephrologist').hide();

                }

                if (module5 == '0') {
                    $('#descriptors').hide();

                }

                if (module6 == '0') {
                    $('#userprofile').hide();

                }

                if (module7 == '0') {
                    $('#systemmaintenance').hide();

                }

                if (module8 == '0') {
                    $('#reports').hide();

                }
                if (module1 == '0' && module2 == '0' && module3 == '0' && module4 == '0' && module5 == '0') {
                    $('#profile').hide();

                }
                if (module6 == '0' && module7 == '0') {
                    $('#maintenance').hide();

                }
            });

        </script>

    </body>

    </html>
