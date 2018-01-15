<?php
include('session.php');                                   
                                    ini_set('display_errors', 0);
                                    $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `patientprofile` where `Hospital_Id` = '$_GET[id]' ") or die(mysqli_error());
                                    $fetch = $query ->fetch_array();
                                    $id = $fetch['Hospital_Id'];

?>

    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>PDMIS</title>
        <!-- Favicon-->
        <!-- Favicon-->
        <link rel="icon" href="../../favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Select Css -->
        <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
        <!-- Bootstrap Core Css -->
        <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- JQuery DataTable Css -->
        <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Custom Css -->
        <link href="../../css/style2.css" rel="stylesheet">

        <!-- mytable Css -->
        <link href="../../css/table.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../css/themes/theme-indigo.css" rel="stylesheet" />
        <style>
            .unstyled::-webkit-inner-spin-button,
            .unstyled::-webkit-calendar-picker-indicator {

                -webkit-appearance: none;
            }

        </style>

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
                        <li id="transaction">
                            <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="material-icons">folder</i>
                                <span>Transaction</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="transaction">
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
                        <li id="profile" class="active">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Profile</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="patientprofile" class="active">
                                    <a href="PatientProfile.php">Patient Profile</a>
                                </li>
                                <li id="patientprofile">
                                </li>
                                <li id="employeeprofile">
                                    <a href="EmployeeProfile.php">Employee Profile</a>
                                </li>
                                <li id="nephrologist">
                                    <a href="nephrologist.php">Nephrologist</a>
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
                                    Patient Profile
                                </h2>

                            </div>
                            <div class="body">
                                <div style="padding-bottom:10px;">
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                        <li role="presentation" class="active"><a href="#patientinfo" data-toggle="tab">Patient Info</a></li>
                                        <li role="presentation" class=""><a href="#treatment" data-toggle="tab">Treatment</a></li>
                                        <li role="presentation" class=""><a href="#lab" data-toggle="tab">Lab</a></li>
                                        <li role="presentation" class=""><a href="#physicalexam" data-toggle="tab">Physical Exam</a></li>
                                         <li role="presentation" class=""><a href="listconfinement" data-toggle="tab">Problem list/confinement</a></li>
                                        <li role="presentation" class=""><a href="weight" data-toggle="tab">Weight</a></li>
                                        <li role="presentation" class=""><a href="drug" data-toggle="tab">Drug</a></li>
                                        <li role="presentation" class=""><a href="hepatitis" data-toggle="tab">Hepatitis</a></li>
                                        <li role="presentation" class=""><a href="immunization" data-toggle="tab">Immunization</a></li>

                                    </ul>
                                </div>


                                <div class="tab-content">
                                    <!-- #the 2nd query is to show the content of notes/order of certain patient -->

                                    <div role="tabpanel" class="tab-pane fade in active" id="patientinfo">
                                        <form class="form-horizontal page-content" form method="POST" action="savepatient.php">
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="email_address_2">Hospital ID</label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-2 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="hid" id="hid" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['Hospital_Id']?>" autofocus required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">LastName</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 col-md-3  form-control-label">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="lastname" name="lastname" class="form-control" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_Lname']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2  form-control-label">
                                                    <label for="">FirstName</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="firstname" name="firstname" class="form-control" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_Fname']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">MiddleName</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="middlename" name="middlename" class="form-control" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_Mname']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix demo-masked-input">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">Birthdate</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="date" class="form-control unstyled" name="birthdate" id="birthdate" value="<?php echo $fetch['P_BirthDate']?>" style="padding-right:0" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 form-control-label">
                                                    <label for="">Age</label>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="number" class="form-control" name="age" id="age" min="0" max="110" step="1" value="<?php echo $fetch['P_Age']?>" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="email_address_2">gender</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <select class="form-control show-tick" id="gender" name="gender" title="&nbsp;">
                                                      
                                        <option value="Male" <?php if($fetch['P_Sex']== 'Male') echo "selected"; ?>>Male</option>
                                        <option Value="Female" <?php if($fetch['P_Sex']== 'Female') echo "selected"; ?>>Female</option>                            
                                            </select>
                                                </div>

                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">Nationality</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="nationality" id="nationality" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_Nationality']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 form-control-label">
                                                    <label for="">Religion</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="religion" id="religion" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_Religion']?>" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">CivilStatus</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <select class="form-control show-tick" name="civilstatus" id="civilstatus" title="&nbsp;">
                                        <option value="Single" <?php if($fetch['P_CivilStatus']== 'Single') echo "selected"; ?>>Single</option>
                                        <option value="Married"  <?php if($fetch['P_CivilStatus']== 'Married') echo "selected"; ?>>Married</option>
                                        <option value="Divorced"  <?php if($fetch['P_CivilStatus']== 'Divorced') echo "selected"; ?>>Divorced</option>  
                                        <option value="Widowed"  <?php if($fetch['P_CivilStatus']== 'Widowed') echo "selected"; ?>>Widowed</option>  
                                            </select>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4 form-control-label">
                                                    <label for="">Permanent Address</label>
                                                </div>
                                                <div class="col-lg-9 col-md-1 col-sm-2 col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="peraddress" id="peraddress" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_PermanentAdd']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix demo-masked-input">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4 form-control-label">
                                                    <label for="">Contact Number</label>
                                                </div>
                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="percontactnumber" id="percontactnumber" placeholder="Ex: +00 (000) 000-00-00" value="<?php echo $fetch['P_ConNum1']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4 form-control-label">
                                                    <label for="">Present Address</label>
                                                </div>
                                                <div class="col-lg-9 col-md-1 col-sm-2 col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="preaddress" id="preaddress" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_PresentAdd']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix demo-masked-input">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4 form-control-label">
                                                    <label for="">Contact Number</label>
                                                </div>
                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="precontactnumber" id="precontactnumber" placeholder="Ex: +00 (000) 000-00-00" value="<?php echo $fetch['P_ConNum2']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-1 col-sm-2 col-xs-6 form-control-label">
                                                    <label for="">Name of Relative Not Living with Patient</label>
                                                </div>
                                                <div class="col-lg-7 col-md-1 col-sm-2 col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="relative" id="relative" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_Relative']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4 form-control-label">
                                                    <label for="">Present Address</label>
                                                </div>
                                                <div class="col-lg-9 col-md-1 col-sm-2 col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="relativeadd" id="relativeadd" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_RelativeAdd']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix demo-masked-input">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4 form-control-label">
                                                    <label for="">Contact Number</label>
                                                </div>
                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="relativecon" id="relativecon" placeholder="Ex: +00 (000) 000-00-00" value="<?php echo $fetch['P_RelativeConNum']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row clearfix  demo-masked-input">
                                                <div class="col-lg-4 col-md-1 col-sm-2 col-xs-5 form-control-label">
                                                    <label for="">Date of Initial Dialysis was Started</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="date" class="form-control unstyled" name="DIDS" id="DIDS" placeholder="YYYY/MM/DD" style="padding-right:0" value="<?php echo $fetch['P_InDial']?>" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-5 form-control-label">
                                                    <label for="">Age When first Dialysis Started</label>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="number" class="form-control" name="fdage" id="fdage" min="0" max="110" step="1" value="<?php echo $fetch['P_AgeFD']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix ">
                                                <div class="col-lg-4 col-md-1 col-sm-2 col-xs-6 form-control-label">
                                                    <label>Type of Dialysis when First Started</label>
                                                </div>

                                                <div class="form-group demo-radio-button">

                                                    <input name="type1" type="radio" class="with-gap" id="radio_3" value="0" <?php if ($fetch[ 'dialysistype']==0 ){?> checked="active"
                                                    <?php } ?>/>
                                                    <label for="radio_3">HemoDialysis</label>
                                                    <input name="type1" type="radio" id="radio_4" class="with-gap" value="1" <?php if ($fetch[ 'dialysistype']==1 ){?> checked="active"
                                                    <?php } ?>/>
                                                    <label for="radio_4">Peritoneal Dialysis</label>


                                                </div>

                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">Erythropoetin</label>
                                                </div>
                                                <div class="col-lg-6 col-md-1 col-sm-2 col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="erythropoetin" id="erythropoetin" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_Erythropoetin']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">Nephrologist</label>
                                                </div>
                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select class="form-control show-tick" name="nephrologist" id="nephrologist" title="&nbsp" required>
                                         
                                                        <?php 

                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `nephrologist`") or die(mysqli_error());
                                                    
                                                        while ($row = $query->fetch_array()){

                                                        ?>
                                                        <option value="<?php echo $row['nephrologistid']; ?>" 
                                                        <?php if($fetch['nephrologistid']==$row['nephrologistid']) echo "selected"; ?>>
                                                        <?php echo $row['n_fname']." ".$row['n_mname']." ".$row['n_lname'] ?>


                                                        </option>

                                                        <?php
                                                        
                                                        }
                                                    ?>
                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">Diagnosis</label>
                                                </div>
                                                <div class="col-lg-8 col-md-1 col-sm-2 col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="diagnosis" id="diagnosis" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_Diagnosis']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4 form-control-label">
                                                    <label for="">PhilHealth Number</label>
                                                </div>
                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="phnum" id="phnum" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_PhilHealthNum']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4 form-control-label">
                                                    <label for="">Data Furnished By</label>
                                                </div>
                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-4">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="dfb" id="dfb" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetch['P_DFBName']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 form-control-label">
                                                    <label for="">Relation</label>
                                                </div>

                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4">
                                                    <select class="form-control show-tick" id="relation" name="relation" title="&nbsp;">
                                 
                                        <option value="Parent" <?php if($fetch['P_DFBRelation']== 'Parent') echo "selected"; ?>>Parent</option>
                                        <option Value="Sibling" <?php if($fetch['P_DFBRelation']== 'Daughter') echo "selected"; ?>>Sibling</option> 
                                        <option Value="Cousin" <?php if($fetch['P_DFBRelation']== 'Cousin') echo "selected"; ?>>Cousin</option>    
                                        <option Value="Guardian" <?php if($fetch['P_DFBRelation']== 'Guardian') echo "selected"; ?>>Guardian</option>
                                         <option Value="Wife" <?php if($fetch['P_DFBRelation']== 'Wife') echo "selected"; ?>>Wife</option>
                                        <option Value="Self" <?php if($fetch['P_DFBRelation']== 'Self') echo "selected"; ?>>Self</option>
                                        <option Value="Aunt" <?php if($fetch['P_DFBRelation']== 'Aunt') echo "selected"; ?>>Aunt</option>        
                                            </select>
                                                </div>

                                            </div>
                                            <hr>

                                            <div class="row clearfix">
                                                <div class="col-lg-offset-7 col-xs-offset-4">
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>New</button> &nbsp;
                                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" button name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">find_in_page</i>Find</button>&nbsp;
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#employeelist"><i class="material-icons">list</i>List   </button>

                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                     <div role="tabpanel" class="tab-pane fade in active" id="treatment">
                                         
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in active" id="lab">
                                         
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in active" id="physicalexam">
                                         
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in active" id="listconfinement">
                                         
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in active" id="weight">
                                         
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in active" id="Drug">
                                         
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in active" id="hepatitis">
                                         
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in active" id="immunization">
                                         
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
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
                                                                    <a href="PatientProfile.php?id=<?php echo $fetch['Hospital_Id']?>">
                                                                        <?php echo $fetch['Hospital_Id']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="PatientProfile.php?id=<?php echo $fetch['Hospital_Id']?>">
                                                                        <?php echo $fetch['P_Lname']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="PatientProfile.php?id=<?php echo $fetch['Hospital_Id']?>">
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
                <div class="modal fade" id="employeelist" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">

                        <div class="modal-content">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header bg-indigo">
                                            <h2>
                                                List of Employees

                                                <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                            </h2>

                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Hospital ID</th>
                                                            <th>Name</th>
                                                            <th>Address</th>
                                                            <th>Contact #</th>



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
                                                                    <?php echo $fetch['Hospital_Id']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch['P_Fname']. " " .$fetch['P_Mname']. " " .$fetch['P_Lname']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch['P_PermanentAdd']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch['P_ConNum1']?>
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



            </div>
        </section>

        <script>
            function ClearFields() {

                document.getElementById("hid").value = "";
                document.getElementById("hid").focus();
                document.getElementById("lastname").value = "";
                document.getElementById("firstname").value = "";
                document.getElementById("middlename").value = "";
                document.getElementById("birthdate").value = "";
                document.getElementById("age").value = "";
                document.getElementById("gender").title = "&nbsp;";
                document.getElementById("nationality").value = "";
                document.getElementById("religion").value = "";
                document.getElementById("civilstatus").value = "";
                document.getElementById("peraddress").value = "";
                document.getElementById("percontactnumber").value = "";
                document.getElementById("preaddress").value = "";
                document.getElementById("precontactnumber").value = "";
                document.getElementById("relative").value = "";
                document.getElementById("relativeadd").value = "";
                document.getElementById("relativecon").value = "";
                document.getElementById("DIDS").value = "";
                document.getElementById("fdage").value = "";
                document.getElementById("radio_3").checked = "active";
                document.getElementById("erythropoetin").value = "";
                document.getElementById("nephrologist").value = "";
                document.getElementById("diagnosis").value = "";
                document.getElementById("phnum").value = "";
                document.getElementById("dfb").value = "";
                document.getElementById("relation").value = "";
                $('#gender').prop('selectedIndex', 0);
            }


            function capitalize(textboxid, str) {
                // string with alteast one character
                if (str && str.length >= 1) {
                    var firstChar = str.charAt(0);
                    var remainingStr = str.slice(1);
                    str = firstChar.toUpperCase() + remainingStr;
                }
                document.getElementById(textboxid).value = str;
            }

        </script>


        <!-- Dropzone Plugin Js -->
        <script src="../../plugins/dropzone/dropzone.js"></script>

        <!-- Jquery Core Js -->
        <script src="../../plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../../plugins/node-waves/waves.js"></script>


        <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

        <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>



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

        <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <script src="../../js/pages/tables/jquery-datatable.js"></script>
        <script src="../../js/pages/forms/advanced-form-elements1.js"></script>

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
