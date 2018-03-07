<?php

require '../session.php';
require '../queries/patientprofile_query.php';
 ini_set('display_errors', 0);
   $pageid = $_GET[id];
   list($H_id ,$orderdate) = explode(" | ", $pageid);
  $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
 $HOq = $conn->query("SELECT * FROM `hemo_order` WHERE `Hospital_Id` = '$H_id' && `order_date` = '$orderdate'") or die(mysqli_error());
  $HOfetch = $HOq ->fetch_array();
?>


    <!DOCTYPE html>
    <html>

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>PDMIS</title>
        <!-- Favicon-->
        <link rel="icon" href="../../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="../../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Waves Effect Css -->
        <link href="../../../plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../../../plugins/animate-css/animate.css" rel="stylesheet" />
        <!-- JQuery DataTable Css -->
        <link href="../../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Morris Chart Css-->
        <link href="../../../plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../../../css/style2.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../../css/themes/theme-indigo.css" rel="stylesheet" />
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
                        <img src="../../../images/nurse.png" width="48" height="48" alt="User" />
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
                        
                        <li class="active" id="profile">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Profile</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="active" id="patientprofile">
                                    <a href="../PatientProfile.php">Patient Profile</a>
                                </li>
                                <li id="employeeprofile">
                                    <a href="../EmployeeProfile.php">Employee Profile</a>
                                </li>
                                <li class="" id="nephrologist">
                                    <a href="../nephrologist.php">Nephrologist</a>
                                </li>
                                <li class="" id="schedule">
                                    <a href="javascript:void(0);" class="menu-toggle">
                                <span>Schedule</span>
                            </a>
                                    <ul class="ml-menu">
                                        <li id="descriptors">
                                            <a href="../patientschedule.php">Patient</a>
                                        </li>
                                        <li id="descriptors">
                                            <a href="../nephroschedule.php">Nephrologist</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="transaction">
                            <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="material-icons">folder</i>
                                <span>Transaction</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="transaction">
                                    <a href="../transaction.php">HemoTreatment</a>
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
                                    <a href="../UserProfile.php">User Profile</a>
                                </li>

                                <li id="systemmaintenance">
                                    <a href="../maintenance.php">System Maintenance</a>
                                </li>
                            </ul>
                        </li>

                    <li id="reports">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">assignment</i>
                                <span>Reports</span>
                            </a>
                            <ul class="ml-menu">
                                
                                <li  id="progressstat">
                                    <a data-toggle="modal" data-target="#dialysisreport_modal" >
                                            Patient Reports</a>
                                </li>
                                <li id="">
                                    <a data-toggle="modal" data-target="#employee_modal" >Employee Reports</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="logout.php">
                                <i class="material-icons">input</i>
                                <span>Logout</span>
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
        <?php    
        include ('../modals/dialysisreport_modal.php');
        include ('../modals/employee_modal.php');
        ?>
        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                 
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                               <div id="printableArea">
                            <div class="body">
                           
                                    <div class="row clearfix">
                                         <div class="col-lg-12 col-md-12 center">
                                        <center>
                                        <h4>TERESITA L. JALANDONI PROVINCIAL HOSPITAL</h4>
                                        <h5>Rizal St, Silay City, Neg. Occ.</h5>
                                        <h5>Tel. No. 495-1704 / 495-1705 / 495-0096</h5>
                                        <h4>HEMODIALYSIS ORDER FORM</h4>


                                        </center>
                                        </div>
                                </div>
                                    <br>
                                            <div class="row clearfix">
                                                    <div class="col-lg-10" style="margin-left: 30;">
                                                        <label for="email_address_2">Date: <u><?php echo $orderdate?></u></label>
                                                    </div>
                                                </div>
                                            <div class="row clearfix">
                                                    <div class="col-lg-10" style="margin-left: 30;">
                                                        <label for="email_address_2">Hospital ID: <u><?php echo $fetchs['Hospital_Id']?></u></label>
                                                    </div>
                                                </div>
                                            <div class="row clearfix">
                                                    <div class="col-lg-10" style="margin-left: 30;">
                                                        <label for="email_address_2">Name: <u><?php echo $fetchs['P_Fname'].' '.$fetchs['P_Mname'].' '.$fetchs['P_Lname']?></u></label>
                                                    </div>
                                                </div>
                                            <div class="row clearfix">
                                                    <div class="col-lg-10" style="margin-left: 30;">
                                                        <label for="email_address_2">Birthday: <u><?php echo $fetchs['P_BirthDate']?></u></label>
                                                    </div>
                                                </div>
                                              <div class="row clearfix">
                                                    <div class="col-lg-10" style="margin-left: 30;">
                                                        <label for="email_address_2">Cause of ESRD (Diagnosis for primary renal disease):</label>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                     <div class="col-lg-12">
                                                         <p><u><b><?php echo $coerd ?></b></u></p>             
                                                    </div>
                                            </div>    
                                                <div class="row clearfix">
                                                   <div class="col-lg-10" style="margin-left: 30;">
                                                        <label for="">Hepatitis status:</label>
                                                             <label for="">HepBsAg</label>
                                                            <input name="hepstat" type="radio" class="with-gap" id="hepstat1" value="0" <?php if ($HOfetch['hepastat']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="hepstat1">Positive</label>
                                                            <input name="hepstat" type="radio" id="hepstat2" class="with-gap" value="1" <?php if ($HOfetch['hepastat']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="hepstat2">Negative</label>
                                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label for="">Date: <?php echo $HOfetch['hepstatdate']?></label>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                           
                                                    <div class="col-lg-10" style="margin-left: 30;">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;
                                                        <label for="">Anti-HCV</label>
                                                            <input name="antihstat" type="radio" class="with-gap" id="antihstat1" value="0" <?php if ($HOfetch['antihstat']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="antihstat1">Positive</label>
                                                            <input name="antihstat" type="radio" id="antihstat2" class="with-gap" value="1" <?php if ($HOfetch['antihstat']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="antihstat2">Negative</label>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <label for="">Date: <?php echo $HOfetch['antihstatdate']?></label>
                                                    </div>
                                                </div>



                                              
                                                <div class="row clearfix">
                                                     &nbsp;&nbsp;&nbsp;&nbsp;  
                                                        <label for="">Access:</label>
                                                            <input name="access" type="radio" class="with-gap" id="Catheter" value="0" <?php if ($HOfetch['access']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="Catheter">Dialysis Catheter</label>
                                                            <input name="access" type="radio" id="Subclavian" class="with-gap" value="1" <?php if ($HOfetch['access']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="Subclavian">Subclavian</label>
                                                            <input name="access" type="radio" id="Jugular" class="with-gap" value="1" <?php if ($HOfetch['access']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="Jugular">Internal Jugular</label>
                                                            <input name="access" type="radio" id="Femoral" class="with-gap" value="1" <?php if ($HOfetch['access']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="Femoral">Femoral</label>
                                                </div>
                                    <br>
                                                <div class="row clearfix">
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <label for="">Date Inserted:  <u>
                                                        <?php if($HOfetch['insertdate'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>
                                                        <?php echo $HOfetch['insertdate']?></u></label>
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="">Surgeon: <u>
                                                            <?php if($HOfetch['surgeon'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>
                                                            <?php echo $HOfetch['surgeon']?></u></label>
                                                </div>
                                
                                 
                                    <br>
                                                <div class="row clearfix">
                                                       
                                                       <span class="input-group">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" id="avfistula" name="avfistula" class="filled" value="1"
                                                   <?php if ($HOfetch['avfistula']==1 ){?> checked="checked"<?php } ?>/>
                                                    <label for="avfistula">AV Fistula</label>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                           <label for="">Date Done: <u>
                                                               <?php if($HOfetch['avdate'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>
                                                               <?php echo $HOfetch['avdate']?></u></label>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                           <label for="">Surgeon <u>
                                                        <?php if($HOfetch['avsurgeon'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>
                                                        <?php echo $HOfetch['avsurgeon']?></u></label>
                                                    </span>
 
                                                </div>
                                
                                          <div class="row clearfix">
                                                       
                                                       <span class="input-group">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <input type="checkbox" id="ptfe" name="ptfe" class="filled" value="1"
                                                   <?php if ($HOfetch['ptfe']==1 ){?> checked="checked"<?php } ?>/>
                                                    <label for="avfistula">AV Fistula</label>
                                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
                                                           <label for="">Date Done: <u>
                                                               <?php if($HOfetch['ptdate'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>
                                                               <?php echo $HOfetch['ptdate']?></u></label>
                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                    <label for="">Surgeon <u>
                                                        <?php if($HOfetch['ptsurgeon'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>
                                                        <?php echo $HOfetch['ptsurgeon']?></u></label>
                                                    </span>
 
                                                </div>

                                                <div class="row clearfix">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;  
                                                        <label>HemoDialysis Orders</label>
                                                </div>
                                &nbsp; 
                                                <div class="row clearfix">
                                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="">Frequency: <u>
                                                         <?php if($HOfetch['frequency'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>    
                                                        <?php if($HOfetch['frequency']== '1') echo "1x a week"; ?>
                                                        <?php if($HOfetch['frequency']== '2') echo "2x a week"; ?>
                                                        <?php if($HOfetch['frequency']== '3') echo "3x a week"; ?>    
                                                        <?php if($HOfetch['freq_others']!= '0') echo $HOfetch['freq_others'] ?>    
                                                            </u></label>
                                               
                                  
                                

                                    
                                                </div>
                                    &nbsp;
                                                <div class="row clearfix">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="">Duration: <u> 
                                                              <?php if($HOfetch['duration'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>    
                                                            <?php if($HOfetch['duration']== '3 hours') echo "3 hours"; ?>
                                                            <?php if($HOfetch['duration']== '3.5 hours') echo "3.5 hours"; ?>
                                                            <?php if($HOfetch['duration']== '4 hours') echo "4 hours"; ?>
                                                            <?php if($HOfetch['duration']== '4.5 hours') echo "4.5 hours"; ?>
                                                            <?php if($HOfetch['dur_others']!= '0') echo $HOfetch['dur_others'] ?>   
                                                            </u>
                                                    </label>
                                                </div>
                                &nbsp;
                                                <div class="row clearfix">
                                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="">Dialyzer: 
                                                           <u> 
                                                            <?php if($HOfetch['dialyzer'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>    
                                                               
                                                            <?php if($HOfetch['dialyzer']== 'HIPS-18') echo "HIPS 18"; ?>
                                                            <?php if($HOfetch['dialyzer']== 'F8HPS') echo "HIPS 18"; ?>
                                                           </u>
                                                            
                                                        </label>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                          
                                                        <label for="">Re-use?</label>
                                              
                                                  
                                                

                                                            <input name="reuse" type="radio" class="with-gap" id="yes" value="0" <?php if ($HOfetch[ 'reuse']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="yes">Yes</label>
                                                            <input name="reuse" type="radio" id="no" class="with-gap" value="1" <?php if ($HOfetch[ 'reuse ']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="no">No</label>

                                       
                                                </div>
                                           
                                    &nbsp;
                                                <div class="row clearfix">
                                                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       
                                                        <label for="">Dialysate Bath</label>
                                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                            <input name="dialysatebath" type="radio" class="with-gap" id="db1" value="0" <?php if ($HOfetch[ 'dialysatebath']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="db1">Bycarbonate</label>
                                                            <input name="dialysatebath" type="radio" id="db2" class="with-gap" value="1" <?php if ($HOfetch[ 'dialysatebath']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="db2">Acetate</label>
                                                </div>
                                &nbsp;
                                                <div class="row clearfix">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="">Heparin</label>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    
                                                  
                                                    <label for="">Drug:<u>
                                                          <?php if($HOfetch['hdrug'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>    
                                                            <?php echo $HOfetch['hdrug']?> </u></label>
                                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                               
                                                   
                                                        <label for="">Dose:<u>
                                                             <?php if($HOfetch['hdose'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>    
                                                            <?php echo $HOfetch['hdose']?> </u></label>
    
                                                </div>
                                &nbsp;
                                                <div class="row clearfix">
                                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="">Blood Flow 
                                                            <u>
                                                                <?php if($HOfetch['bloodflow'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>   
                                                            <?php echo $HOfetch['bloodflow']?>
                                                            </u>    
                                                                </label>
                                                </div>
                                &nbsp;
                                                <div class="row clearfix">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="">Target Weight or UF: <u>
                                                             <?php if($HOfetch['targetwt'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>   
                                                            <?php echo $HOfetch['targetwt']?></u></label>
                                                
                                                </div>
                                &nbsp;
                                                <div class="row clearfix">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label for="">Medication:<u>
                                                            <?php if($HOfetch['medication'] ==''){ ?>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php } ?>
                                                            <?php echo $HOfetch['medication']?></u></label>
                                                </div>
                                <br><br>
                                     <b>Produced By: <u><?php echo $name ?></u></b>
                                        <div class="row clearfix">
                                            <div class="col-lg-offset-9 col-xs-offset-9">
                                               <div class="row hidden-print mt-20">
                                                   <a class="btn btn-primary btn-xs" onclick="printDiv('printableArea')" target="_blank"><i class="material-icons">print</i> Print</a>
                                                   <button class="btn btn-primary btn-sm" onclick="location.href='../patientprofile.php?id=<?php echo $H_id." | "."order"." | "."$orderdate"?>'">cancel</button>
                                                   
                                              </div>
                                         </div>
                                    </div>
                                            
                            </div>
                                   
                                 </div>
                            </div>
                        </div>
                    </div>
            </div>
     




        </section>


        <!-- Jquery Core Js -->
            <script>
        function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
        </script>

        <script src="../../../plugins/jquery/jquery.min.js"></script>
        <script src="../../../plugins/jquery/jquery.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../../../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../../../plugins/node-waves/waves.js"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="../../../plugins/jquery-countto/jquery.countTo.js"></script>

        <!-- Morris Plugin Js -->
        <script src="../../../plugins/raphael/raphael.min.js"></script>
        <script src="../../../plugins/morrisjs/morris.js"></script>

        <!-- ChartJs -->
        <script src="../../../plugins/chartjs/Chart.bundle.js"></script>

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
        <script src="../../../js/pages/tables/jquery-datatable.js"></script>
        <!-- Sparkline Chart Plugin Js -->
        <script src="../../../plugins/jquery-sparkline/jquery.sparkline.js"></script>



        <!-- Custom Js -->
        <script src="../../../js/admin.js"></script>
        <script src="../../../js/pages/index.js"></script>

        <!-- Demo Js -->
        <script src="../../../js/demo.js"></script>
        <script>
            $(window).load(function() {
                var module = '<?php echo $transaction_a; ?>';
                var module1 = '<?php echo $patientprofile_a; ?>';
                var module2 = '<?php echo $employeeprofile_a; ?>';
                var module3 = '<?php echo $schedule_a; ?>';
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
                    $('#schedule').hide();

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
    