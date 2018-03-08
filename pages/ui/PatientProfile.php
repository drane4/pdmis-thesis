
<?php include('session.php');?>

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
        <link href="../../css/style4.css" rel="stylesheet">

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
        <script type="text/javascript">
            function getAge() {
                var birthdate = document.getElementById('birthdate').value;
                birthdate = new Date(birthdate);
                var today = new Date();
                var age = Math.floor((today - birthdate) / (365.25 * 24 * 60 * 60 * 1000));
                document.getElementById('age').value = age;
            }

            function getDAge() {
                var DIDS = document.getElementById('DIDS').value;
                var age = document.getElementById('age').value;
                DIDS = new Date(DIDS);
                var today = new Date();
                var dialysisage = Math.floor((today - DIDS) / (365.25 * 24 * 60 * 60 * 1000));
                document.getElementById('fdage').value = age - dialysisage;
            }

        </script>
        
        
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
                            <div class="title"></div>
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
                        
                        <li class="active" id="profile">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Profile</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="active" id="patientprofile">
                                    <a href="PatientProfile.php">Patient Profile</a>
                                </li>
                                <li id="employeeprofile">
                                    <a href="EmployeeProfile.php">Employee Profile</a>
                                </li>
                                <li class="" id="nephrologist">
                                    <a href="nephrologist.php">Nephrologist</a>
                                </li>
                                <li class="" id="schedule">
                                    <a href="javascript:void(0);" class="menu-toggle">
                                <span>Schedule</span>
                            </a>
                                    <ul class="ml-menu">
                                        <li id="descriptors">
                                            <a href="patientschedule.php">Patient</a>
                                        </li>
                                        <li id="descriptors">
                                            <a href="nephroschedule.php">Nephrologist</a>
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
                                    <a href="transaction.php">HemoTreatment</a>
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


                <!-- tab content (header right)-->
                <!-- tab content -->
            </aside>
            <!-- #END# Right Sidebar -->
        </section>
        <?php
         
           include ('queries/patientprofile_query.php');
            include ('queries/laboratory_query.php');  
            include ('modals/laboratory_modal.php'); 
            include ('modals/patientprofile_modal.php');  
            include ('modals/immunization_modal.php'); 
          
                    
     include ('modals/dialysisreport_modal.php');
        include ('modals/employee_modal.php');
        
        ?>
        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                   
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <?php if($H_id != ''){?>
                        <div class = "alert bg-indigo">
                            <p> <strong> <?php echo $fetchp['P_Fname']." ".$fetchp['P_Mname']." ".$fetchp['P_Lname'] ?></strong> Record</p>
                            </div>
                        <?php } ?>
                        
                        <div class="card">
                            <div class="header bg-indigo">
                                <h2>
                                    Patient Profile
                                </h2>

                            </div>
                            <div class="body">
                                
                                <div style="padding-bottom:10px;">
                                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                      <li role="presentation" <?php if ($id2=='patientinfo' ){?> class="active"
                                            <?php } ?>
                                            <?php if ($id2 == '' && H_id == '' ){?> class="active"
                                            <?php } ?>><a href="#patientinfo" data-toggle="tab">Patient Info</a></li>
                                        <li role="presentation" <?php if ($id2=='hemotreatment' ){?> class="active"
                                            <?php } ?>><a href="#hemotreatment" data-toggle="tab">Treatment</a></li>
                                        <!--<li role="presentation" class=""><a href="#treatment" data-toggle="tab">Treatment</a></li>-->
                                        <li role="presentation" <?php if ($id2=='order' ){?> class="active"
                                            <?php } ?>><a href="#order" data-toggle="tab">Order</a></li>
                                        <li role="presentation" <?php if ($id2=='lab' ){?> class="active"
                                            <?php } ?>><a href="#lab" data-toggle="tab">Laboratory</a></li>
                                        <li role="presentation" <?php if ($id2=='weight' ){?> class="active"
                                            <?php } ?>><a href="#weight" data-toggle="tab">Physical Examination</a></li>
                                        <li role="presentation" <?php if ($id2=='drug' ){?> class="active"
                                            <?php } ?>><a href="#drugprofile" data-toggle="tab">Drug Profile</a></li>
                                        <li role="presentation" <?php if ($id2=='hepatitis' ){?> class="active"
                                            <?php } ?>><a href="#hepatitis" data-toggle="tab">Hepatitis Profile</a></li>
                                        <li role="presentation" <?php if ($id2=='immunization' ){?> class="active"
                                            <?php } ?>><a href="#immunization" data-toggle="tab">Immunization Profile</a></li>
                                        <li role="presentation" <?php if ($id2=='problemlist' ){?> class="active"
                                            <?php } ?>><a href="#problemlist" data-toggle="tab">Problem list</a></li>
                                        <li role="presentation" <?php if ($id2=='confinement' ){?> class="active"
                                            <?php } ?>><a href="#confinement" data-toggle="tab">Confinement</a></li>


                                    </ul>
                                </div>


                                <div class="tab-content">
                                    <!-- #the 2nd query is to show the content of notes/order of certain patient -->
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'patientinfo' )echo active ?>
                                   <?php if ($id2 == '' && $H_id == '' )echo active ?>" id="patientinfo">
                                        
                                         <form class="form-horizontal page-content" form method="POST" action="save/savepatient.php">
                                            <div class="row clearfix">

                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="email_address_2">Hospital ID</label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-2 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="hid" id="hid" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['Hospital_Id']?>" autofocus required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                            <input type="checkbox" id="status1" name="status1" value="1"
                                            <?php if ($fetchp['P_Status']==1 ){?> checked="checked"<?php } ?>
                                            <?php if ($fetchp['P_Status']=='' ){?> checked="checked"<?php } ?>>
                                                    <label for="status1"><b>Active</b></label>
                                                   </span>
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
                                                            <input type="text" id="lastname" name="lastname" class="form-control" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_Lname']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2  form-control-label">
                                                    <label for="">FirstName</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="firstname" name="firstname" class="form-control" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_Fname']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">MiddleName</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="middlename" name="middlename" class="form-control" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_Mname']?>" required>
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
                                                            <input type="date" class="form-control unstyled" name="birthdate" id="birthdate" onblur="getAge();" value="<?php echo $fetchp['P_BirthDate']?>" style="padding-right:0" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 form-control-label">
                                                    <label for="">Age</label>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="number" class="form-control" name="age" id="age" min="0" max="110" step="1" value="<?php echo $fetchp['P_Age']?>" readonly required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="email_address_2">Gender</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <select required class="form-control show-tick" id="gender" name="gender" title="&nbsp;">
                                        <option value="" selected="selected" disabled selected hidden>Select: </option>           
                                        <option value="Male" <?php if($fetchp['P_Sex']== 'Male') echo "selected"; ?>>Male</option>
                                        <option Value="Female" <?php if($fetchp['P_Sex']== 'Female') echo "selected"; ?>>Female</option>                            
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
                                                            <input type="text" class="form-control" name="nationality" id="nationality" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_Nationality']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 form-control-label">
                                                    <label for="">Religion</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="religion" id="religion" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_Religion']?>" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                                    <label for="">Civil Status</label>
                                                </div>
                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                                    <select class="form-control show-tick" name="civilstatus" id="civilstatus" title="&nbsp;">
                                        <option value="" disabled selected hidden>Select: </option>   
                                        <option value="Single" <?php if($fetchp['P_CivilStatus']== 'Single') echo "selected"; ?>>Single</option>
                                        <option value="Married"  <?php if($fetchp['P_CivilStatus']== 'Married') echo "selected"; ?>>Married</option>
                                        <option value="Divorced"  <?php if($fetchp['P_CivilStatus']== 'Divorced') echo "selected"; ?>>Divorced</option>  
                                        <option value="Widowed"  <?php if($fetchp['P_CivilStatus']== 'Widowed') echo "selected"; ?>>Widowed</option>  
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
                                                            <input type="text" class="form-control" name="peraddress" id="peraddress" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_PermanentAdd']?>" required>
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
                                                            <input type="text" class="form-control" name="percontactnumber" id="percontactnumber" placeholder="Ex: +00 (000) 000-00-00" value="<?php echo $fetchp['P_ConNum1']?>" required>
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
                                                            <input type="text" class="form-control" name="preaddress" id="preaddress" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_PresentAdd']?>">
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
                                                            <input type="text" class="form-control" name="precontactnumber" id="precontactnumber" placeholder="Ex: +00 (000) 000-00-00" value="<?php echo $fetchp['P_ConNum2']?>">
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
                                                            <input type="text" class="form-control" name="relative" id="relative" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_Relative']?>" required>
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
                                                            <input type="text" class="form-control" name="relativeadd" id="relativeadd" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_RelativeAdd']?>" required>
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
                                                            <input type="text" class="form-control" name="relativecon" id="relativecon" placeholder="Ex: +00 (000) 000-00-00" value="<?php echo $fetchp['P_RelativeConNum']?>" required>
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
                                                            <input type="date" class="form-control unstyled" name="DIDS" id="DIDS" onblur="getDAge();" placeholder="YYYY/MM/DD" style="padding-right:0" value="<?php echo $fetchp['P_InDial']?>" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-1 col-sm-2 col-xs-5 form-control-label">
                                                    <label for="">Age When first Dialysis Started</label>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="number" class="form-control" name="fdage" id="fdage" min="1" max="110" step="1" value="<?php echo $fetchp['P_AgeFD']?>" required readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix ">
                                                <div class="col-lg-4 col-md-1 col-sm-2 col-xs-6 form-control-label">
                                                    <label>Type of Dialysis when First Started</label>
                                                </div>

                                                <div class="form-group demo-radio-button">

                                                    <input name="type1" type="radio" class="with-gap" id="radio_3" value="0" <?php if ($fetchp[ 'type1']==0 ){?> checked="active"
                                                    <?php } ?>/>
                                                    <label for="radio_3">HemoDialysis</label>
                                                    <input name="type1" type="radio" id="radio_4" class="with-gap" value="1" <?php if ($fetchp[ 'type1']==1 ){?> checked="active"
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
                                                            <input type="text" class="form-control" name="erythropoetin" id="erythropoetin" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_Erythropoetin']?>" required>
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
                                                        <?php if($fetchp['nephrologistid']==$row['nephrologistid']) echo "selected"; ?>>
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
                                                <div class="col-lg-10 col-md-1 col-sm-2 col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            
                                                            <?php 
	                                                   $found = checkorder($H_id);              
                                                    ?>
                                        <?php if( !empty($found) ){ ?>
                                                       <input type="text" class="form-control" name="diagnosis" id="diagnosis" onkeyup="capitalize(this.id, this.value);" 
                                                       value="<?php echo $coerd ?>" readonly>       
                                             <?php }else{ ?>           
                                                        <input type="text" class="form-control" name="diagnosis" id="diagnosis" readonly>        
                                                 <?php } ?>                
                                                          
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
                                                            <input type="text" class="form-control" name="phnum" id="phnum" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_PhilHealthNum']?>">
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
                                                            <input type="text" class="form-control" name="dfb" id="dfb" onkeyup="capitalize(this.id, this.value);" value="<?php echo $fetchp['P_DFBName']?>" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 form-control-label">
                                                    <label for="">Relation</label>
                                                </div>

                                                <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4">
                                                    <select class="form-control show-tick dropup" id="relation" name="relation" data-live-search="true" required title="&nbsp;">
                                                        <option value="" disabled selected hidden>Select: </option> 
                                                        <option Value="Guardian" <?php if($fetchp['P_DFBRelation']== 'Guardian') echo "selected"; ?>>Guardian</option>
                                                        <option value="Parent" <?php if($fetchp['P_DFBRelation']== 'Parent') echo "selected"; ?>>Parent</option>
                                                        <option Value="Child" <?php if($fetchp['P_DFBRelation']== 'Child') echo "selected"; ?>>Child</option>
                                                        <option Value="Sibling" <?php if($fetchp['P_DFBRelation']== 'Sibling') echo "selected"; ?>>Sibling</option> 
                                                        <option Value="Cousin" <?php if($fetchp['P_DFBRelation']== 'Cousin') echo "selected"; ?>>Cousin</option>    
                                                        <option Value="Spouse" <?php if($fetchp['P_DFBRelation']== 'Spouse') echo "selected"; ?>>Spouse</option>
                                                        <option Value="Self" <?php if($fetchp['P_DFBRelation']== 'Self') echo "selected"; ?>>Self</option>
                                                        <option Value="Aunt" <?php if($fetchp['P_DFBRelation']== 'Aunt') echo "selected"; ?>>Aunt</option> 
                                                        <option Value="Uncle" <?php if($fetchp['P_DFBRelation']== 'Uncle') echo "selected"; ?>>Uncle</option>
                                                        <option Value="Niece" <?php if($fetchp['P_DFBRelation']== 'Niece') echo "selected"; ?>>Niece</option>
                                                       <option Value="Nephew" <?php if($fetchp['P_DFBRelation']== 'Nephew') echo "selected"; ?>>Nephew</option>
                                                </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row clearfix">
                                                <div class="col-lg-offset-7 col-xs-offset-4">
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="location.href='PatientProfile.php'"> <i class="material-icons">description</i>New</button> &nbsp;
                                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" button name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">find_in_page</i>Find</button>&nbsp;
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#patientlist"><i class="material-icons">list</i>List   </button>
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="location.href='print_patientprofile.php?id=<?php echo $H_id?>'"> <i class="material-icons">visibility</i>Preview</button> &nbsp;
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'hemotreatment' )echo active ?>" id="hemotreatment">
                                       <?php 
                                                    
	                                                   $found = checktreatment($H_id);
                                                                   
                                                    ?>

                                        <?php if( !empty($found) ){ ?>
                                        <div class="row clearfix">

                                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">

                                                
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-6 form-control-label">
                                                            <label for="">Filter Date</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <form method="post" id="filtertreatment" action="<?php echo " PatientProfile.php?id=".$H_id." | hemotreatment " ?> ">
                                                            <div class="form-line">
                                                                <select class="form-control show-tick" name="filterdate" id="filterdate" title="&nbsp" onchange="this.form.submit()" required>
                                                                    <ul class="dropdown-menu">
                                                                        <option class="hidden"></option>
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `treatment` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                                                        while ($row = $query->fetch_array()){
                                                        ?>
                                                        <option value="<?php echo $row['treatment_date']; ?>" 
                                                        <?php if($fetch2['treatment_date']==$row['treatment_date']) echo "selected"; ?>>
                                                        <?php echo $row['treatment_date']?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                            </div>
                                                                   </form>
                                                        </div>
                                                        <button class="btn btn-primary btn-sm waves-effect" onclick="location.href='print_transaction.php?id=<?php echo $H_id." | ".$ydate?>'" <?php if($H_id=='' ) {?> disabled="disabled"<?php }  ?>><i class="material-icons">visibility</i>Preview</button>
                                                    </div>
                                                    <hr>
                                               
                                             
                                                <div id="">
                                                    <div class="body">

                                                        <div class="row clearfix">
                                                            <div class="col-xs-5">
                                                                <strong>   Name : <u><?php echo $fetchs['P_Fname'].' '.$fetchs['P_Mname'].' '.$fetchs['P_Lname']?></u>
                                         <br> Sex: <u><?php echo $fetchs['P_Sex']?></u>
                                        <br>Dry Wt.:<u><?php echo $fetch3['targetwt']?></u>
                                        <br>Weight Gain :<u> <?php echo $fetch2['preweight']-$fetch3['targetwt']." Kg"?></u>
                                        <br>Pre Dialysis WT. :<u> <?php echo $fetch2['preweight']." Kg"?></u>
                                        <br>Post-Dialysis WT. :<u> <?php echo $fetch2['postweight']." Kg"?></u>
                                        </strong>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                
                                                                <br>
                                                                <strong>   Age : <u> <?php echo $fetchs['P_Age'] ?></u>
                                        <br>Duration :<u> <?php echo $HOfetch['duration'] ?></u>
                                        <br>Bfr :<u> <?php echo $fetch2['BFR'] ?></u>
                                        <br>Access :<u> <?php echo $fetch2['access'] ?></u>
                                        <br>Heparin :<u> <?php echo $fetch2['heparin'] ?></u>
                                        </strong>

                                                            </div>
                                                            <div class="col-xs-3">


                                                                <strong>  Hospital ID : <u><?php echo $fetchs['Hospital_Id'] ?></u> 
                                          <br>Civil Status: <u> <?php echo $fetchs['P_CivilStatus'] ?></u>     
                                        <br>Date :<u> <?php echo $fetch2['treatment_date'] ?></u>
                                        <br>Dialyzer :<u> <?php echo $HOfetch['dialyzer'] ?></u>
                                        <br>Dialyzer Use :<u> <?php echo $fetch2['dialyzer_user'] ?></u>
                                        <br>Machine #:<u> <?php echo $fetch2['machine_num'] ?></u>
                                        </strong>

                                                            </div>
                                                        </div>

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
                                                            
                                                ?>
                                                                    <tbody>
                                                                        <?php   
                                                          //  echo $date = $fetch2['treatment_date']; 
                                                            $datet = $fetch2['treatment_date'];  
                                                            echo "haha"; echo $datet;       
                                                            $tquery2 = $conn->query("SELECT * FROM `nephronotesorder` WHERE `Hospital_Id` = '$H_id' && `notes_order_date` = '$datet' ORDER BY `notes_order_id`") or die(mysqli_error());
                                                           while($fetch = $tquery2 ->fetch_array()){
                                                        ?>
                                                                        <tr>
                                                                            <td style="white-space: normal">
                                                                                <p style="word-wrap: break-word;">

                                                                                    <?php echo $fetch['nephro_notes']?>
                                                                                    <a class="pull-right" style="color:black">
                                                                                        <?php echo " -".$n_fname." ".$n_mname." ".$n_lname?>
                                                                                    </a>
                                                                                </p>
                                                                            </td>
                                                                            <td style="white-space: normal">
                                                                                <p style="word-wrap: break-word;">

                                                                                    <?php echo $fetch['nephro_order']?>

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
                                                           $date = $fetch2['treatment_date'];   
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `initialtestresult` WHERE `Hospital_Id` = '$H_id' && `initialtest_date` = '$date' ORDER BY `initialtestresult_id`") or die(mysqli_error());
                                                           $id = $fetch['Hospital_Id'];
                                                           
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <?php echo $fetch['initialtest_time']?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $fetch['bloodpressure']?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $fetch['cardiacrate']?>

                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $fetch['repulsiverate']?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $fetch['initialtemperature']?>
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
                                                            $date = $fetch2['treatment_date'];   
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `nursenotes` WHERE `Hospital_Id` = '$H_id' && `nurse_notes_date` = '$date' ORDER BY `nurse_notes_id`") or die(mysqli_error());
                                                           $id = $fetch['Hospital_Id'];
                                                           
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                                            <tr>
                                                                                <td style="white-space: normal">

                                                                                    <p style="word-wrap: break-word;"> (F) :
                                                                                        <?php echo $fetch['focus']?><br> (D) :
                                                                                        <?php echo $fetch['data']?><br> (A) :
                                                                                        <?php echo $fetch['action']?><br> (R) :
                                                                                        <?php echo $fetch['resolution']?>
                                                                                    </p>

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
                                                           
                                                            $date = $fetch2['treatment_date'];   
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `machineresult` WHERE `Hospital_Id` = '$H_id' && `m_date` = '$date' ORDER BY `machineresult_id`") or die(mysqli_error());
                                                           $id = $fetch['Hospital_Id'];
                                                           
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                                            <tr>
                                                                                <td>

                                                                                    <?php echo $fetch['m_time']?>

                                                                                </td>
                                                                                <td>

                                                                                    <?php echo $fetch['m_bloodpressure']?>

                                                                                </td>
                                                                                <td>

                                                                                    <?php echo $fetch['m_cardiacrate']?>

                                                                                </td>
                                                                                <td>

                                                                                    <?php echo $fetch['m_bloodflowrate']?>

                                                                                </td>
                                                                                <td>

                                                                                    <?php echo $fetch['m_transmempressure']?>

                                                                                </td>
                                                                                <td>

                                                                                    <?php echo $fetch['m_venpressure']?>

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
                                                            <div class="col-xs-6">

                                                                <strong>
                                            <?php
                                            $id = $fetch2['employeeid'];
                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                            $q6 = $conn->query("SELECT * FROM `employeeprofile` where `employeeid` = '$id' ") or die(mysqli_error());
                                            $fetch6 = $q6 ->fetch_array();
                                            $id = $fetch2['technicianid'];
                                            $q7 = $conn->query("SELECT * FROM `employeeprofile` where `employeeid` = '$id' ") or die(mysqli_error());
                                            $fetch7 = $q7 ->fetch_array();
                                            ?>
                                            
                                          Dialysis Technician : <u> <?php echo $fetch6['firstname']." ".$fetch6['middlename']." ".$fetch6['lastname'] ?></u>     
                                        <br>Dialysis Nurse :<u> <?php echo $fetch7['firstname']." ".$fetch7['middlename']." ".$fetch7['lastname'] ?></u>
                                        </strong>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <center>
                                            <p>No Record Found.</p>
                                        </center>
                                        <?php } ?>
                                        
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'order' )echo active ?>" id="order">
                                              
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-6 form-control-label">
                                                            <label for="">Filter Date</label>
                                                        </div>
                                                         
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <form method="post" id="filtertreatment" action="<?php echo " PatientProfile.php?id=".$H_id." | order " ?> ">
                                                            
                                                            <div class="form-line">
                                                         <select class="form-control show-tick" name="filterdate_order" id="filterdate_order" title="&nbsp" onchange="this.form.submit()" required>
                                                                    <ul class="dropdown-menu">
                                                                        <option class="hidden"></option>
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `hemo_order` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                                                        while ($row = $query->fetch_array()){
                                                        ?>
                                                        <option value="<?php echo $row['order_date']; ?>" 
                                                        <?php if($HOfetch['order_date']==$row['order_date']) echo "selected"; ?>>
                                                        <?php echo $row['order_date']?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                            </div>
                                                                 </form>
                                                        </div>
                                                    
                                                        
                                                        <button class="btn btn-primary btn-sm waves-effect" onclick="location.href='print/print_order.php?id=<?php echo $H_id." | ".$orderdate ?>'" <?php if($H_id=='' ) {?> disabled="disabled"<?php }  ?>><i class="material-icons">visibility</i>Preview</button>
                                                    </div>
                                                    <hr>


                                  
                                            <form class="form-horizontal" form method="POST" action="save/savehemoorder.php?id=<?php if($HOfetch['order_id'] == '') echo $H_id." | "."001" ?><?php if($HOfetch['order_id'] != '') echo $H_id." | ".$HOfetch['order_id'] ?>">
                                                <div class="row clearfix">
                                                    <div class="col-lg-10" style="margin-left: 30;">
                                                        <label for="email_address_2">Cause of ESRD (Diagnosis for primary renal disease)</label>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-sm-offset-2 ">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="diabetic" name="diabetic" class="filled-in" value="1" <?php if ($HOfetch['esrd_diabetic']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="diabetic">Diabetic Nephropathy</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="chronic" name="chronic" class="filled-in" value="1" <?php if ($HOfetch['esrd_chronic']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="chronic">Chronic Gromerulonephritis</label>
                                                    </div>
                                                </div> 
                                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="hypertensive" name="hypertensive" class="filled-in" value="1" <?php if ($HOfetch['esrd_hypertensive']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="hypertensive">Hypertensive Nephrosclerosis</label>
                                                    </div>
                                                </div>    
                                                </div>
                                                 <div class="row clearfix">
                                              
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-lg-offset-1 form-control-label">
                                                        <label for="">Others:</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <div class="form-group">
                                                            <div class="form-line" >
                                                                <input type="text" class="form-control" name="esrdothers" id="esrdothers" value="<?php echo $HOfetch['esrd_others']?>"  style="width: 200px;">
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-0 form-control-label">
                                                        <label for="">Hepatitis status: </label>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-lg-offset-0 form-control-label">
                                                        <label for="">HepBsAg </label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                        <div class="form-group demo-radio-button">

                                                            <input name="hepstat" type="radio" class="with-gap" id="hepstat1" value="0" <?php if ($HOfetch['hepastat']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="hepstat1">Positive</label>
                                                            <input name="hepstat" type="radio" id="hepstat2" class="with-gap" value="1" <?php if ($HOfetch['hepastat']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="hepstat2">Negative</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label" style="margin-left:-20%">
                                                        <label for="">Date</label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date" class="form-control unstyled" name="hepstatdate" id="hepstatdate" value="<?php echo $HOfetch['hepstatdate']?>" style="padding-right:0" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1 form-control-label" style="margin-top:-5px; left:5px">
                                                        <label for="">Anti-HCV</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group demo-radio-button">

                                                            <input name="antihstat" type="radio" class="with-gap" id="antihstat1" value="0" <?php if ($HOfetch[ 'antihstat']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="antihstat1">Positive</label>
                                                            <input name="antihstat" type="radio" id="antihstat2" class="with-gap" value="1" <?php if ($HOfetch[ 'antihstat']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="antihstat2">Negative</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1 form-control-label" style="margin-left:-28.5%">
                                                        <label for="">Date</label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-left:-8.5%">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date" class="form-control unstyled" name="antihstatdate" id="antihstatdate" value="<?php echo $HOfetch['antihstatdate']?>" style="padding-right:0" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-0 form-control-label">
                                                        <label for="">Access:</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                                        <div class="form-group demo-radio-button">

                                                            <input name="access" type="radio" class="with-gap" id="Catheter" value="0" <?php if ($HOfetch['access']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="Catheter">Dialysis Catheter</label>
                                                            <input name="access" type="radio" id="Subclavian" class="with-gap" value="1" <?php if ($HOfetch['access']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="Subclavian">Subclavian</label>
                                                            <input name="access" type="radio" id="Jugular" class="with-gap" value="2" <?php if ($HOfetch['access']==2 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="Jugular">Internal Jugular</label>
                                                            <input name="access" type="radio" id="Femoral" class="with-gap" value="3" <?php if ($HOfetch['access']==3 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="Femoral">Femoral</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-2 form-control-label">
                                                        <label for="">Date Inserted</label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date" class="form-control unstyled" name="insertdate" id="insertdate" value="<?php echo $HOfetch['insertdate']?>" style="padding-right:0" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                        <label for="">Surgeon</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="surgeon" id="surgeon" value="<?php echo $HOfetch['surgeon']?>"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1">
                                                        <div class="form-group input-group">
                                                            <span class="input-group-addon">
                                                    <input type="checkbox" id="avfistula" name="avfistula" class="filled-in" value="1"
                                                   <?php if ($HOfetch['avfistula']==1 ){?> checked="checked"<?php } ?>/>
                                                    <label for="avfistula">AV Fistula</label>
                                                        </span>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-2 form-control-label" style="margin-left:-8.5%">
                                                        <label for="">Date Done</label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date" class="form-control unstyled" name="avdate" id="avdate" value="<?php echo $HOfetch['avdate']?>" style="padding-right:0" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                        <label for="">Surgeon</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="avsurgeon" id="avsurgeon" value="<?php echo $HOfetch['avsurgeon']?>" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-1">
                                                        <div class="form-group input-group">
                                                            <span class="input-group-addon">
                                                    <input type="checkbox" id="ptfe" name="ptfe" class="filled-in" value="1"
                                                   <?php if ($HOfetch['ptfe']==1 ){?> checked="checked"<?php } ?>/>
                                                    <label for="ptfe">PTFE(Goretex)</label>
                                                        </span>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-2 form-control-label" style="margin-left:-8.5%">
                                                        <label for="">Date Done</label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date" class="form-control unstyled" name="ptdate" id="ptdate" value="<?php echo $HOfetch['ptdate']?>" style="padding-right:0" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                        <label for="">Surgeon</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="ptsurgeon" id="ptsurgeon" value="<?php echo $HOfetch['ptsurgeon']?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label>HemoDialysis Orders</label>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label for="">Frequency</label>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                        <select id="frequency" name="frequency">
                                                    <option></option>
                                                    <option value="1" <?php if($HOfetch['frequency']== '1') echo "selected"; ?>>1x a week</option>
                                                    <option value="2" <?php if($HOfetch['frequency']== '2') echo "selected"; ?>>2x a week</option>
                                                    <option value="3" <?php if($HOfetch['frequency']== '3') echo "selected"; ?>>3x a week</option>
                                                    </select>
                                                    </div>
                                                   
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-lg-offset-2 form-control-label">
                                                        <label for="">Others:</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="frequencyothers" id="frequencyothers" value="<?php echo $HOfetch['freq_others']?>" style="width: 200px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label for="">Duration</label>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                        <select id="duration" name="duration">
                                                      <option></option> 
                                                    <option value="3 hours" <?php if($HOfetch['duration']== '3 hours') echo "selected"; ?>>3 hours</option>
                                                    <option value="3.5 hours" <?php if($HOfetch['duration']== '3.5 hours') echo "selected"; ?>>3.5 hours</option>
                                                    <option value="4 hours" <?php if($HOfetch['duration']== '4 hours') echo "selected"; ?>>4 hours</option>
                                                    <option value="4.5 hours" <?php if($HOfetch['duration']== '4.5 hours') echo "selected"; ?>>4.5 hours</option>
                                                    </select>
                                                    </div>
                                                     
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-lg-offset-2 form-control-label">
                                                        <label for="">Others:</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="durationothers" id="durationothers" value="<?php echo $HOfetch['dur_others']?>" style="width: 200px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label for="">Dialyzer</label>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                        <select id="dialyzer" name="dialyzer">
                                                      <option></option>
                                                    <option value="HIPS-18" <?php if($HOfetch['dialyzer']== 'HIPS-18') echo "selected"; ?>>HIPS 18</option>
                                                    <option value="F8HPS" <?php if($HOfetch['dialyzer']== 'F8HPS') echo "selected"; ?>>F8HPS</option>
                                                     <option value="ELISIO-190LR" <?php if($HOfetch['dialyzer']== 'ELISIO-190LR') echo "selected"; ?>>ELISIO-190LR</option> 
                                                    <option value="LOPS - 18" <?php if($HOfetch['dialyzer']== 'LOPS - 18') echo "selected"; ?>>LOPS - 18</option>
                                                    <option value="F6" <?php if($HOfetch['dialyzer']== 'F6') echo "selected"; ?>>F6</option>          
                                                    </select>
                                                    </div>
                                                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label for="">Re-use?</label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                        <div class="form-group demo-radio-button">

                                                            <input name="reuse" type="radio" class="with-gap" id="yes" value="0" <?php if ($HOfetch[ 'reuse']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="yes">Yes</label>
                                                            <input name="reuse" type="radio" id="no" class="with-gap" value="1" <?php if ($HOfetch[ 'reuse ']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="no">No</label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label for="">Dialysate Bath</label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                        <div class="form-group demo-radio-button">

                                                            <input name="dialysatebath" type="radio" class="with-gap" id="db1" value="0" <?php if ($HOfetch[ 'dialysatebath']==0 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="db1">Bycarbonate</label>
                                                            <input name="dialysatebath" type="radio" id="db2" class="with-gap" value="1" <?php if ($HOfetch[ 'dialysatebath']==1 ){?> checked="active"
                                                            <?php } ?>/>
                                                            <label for="db2">Acetate</label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label for="">Heparin</label>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                        <label for="">Drug</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="hdrug" id="hdrug" value="<?php echo $HOfetch['hdrug']?>"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                        <label for="">Dose</label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="hdose" id="hdose" value="<?php echo $HOfetch['hdose']?>"  required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label for="">Blood Flow</label>
                                                    </div>

                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="bloodflow" id="bloodflow" value="<?php echo $HOfetch['bloodflow']?>"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label for="">Target Weight or UF</label>
                                                    </div>

                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="targetwt" id="targetwt" value="<?php echo $HOfetch['targetwt']?>" maxlength="3" min="2"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                        <label for="">Medication</label>
                                                    </div>

                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-md-8  form-control-label">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea rows="2" name="medication" id="medication" class="form-control no-resize auto-growth"><?php echo $HOfetch['medication']?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-7 col-xs-offset-4">
                                                       <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="location.href='PatientProfile.php?id=<?php echo $H_id." | order"?>'"> <i class="material-icons">description</i>New</button> &nbsp;
                                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect" button name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
                                                    </div>


                                                </div>
                                            </form>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'lab' )echo active ?>" id="lab">

                                    <div class="row clearfix">
                                    
                                            <form method="post" name="filterdate_lab1" id="filterdate_lab1" action="patientprofile.php?id=<?php echo $H_id." | "."lab"?>">
                                             <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-4 form-control-label">
                                                            <label for="">Filter Date</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                                            <div class="form-line">
                                                         <select class="form-control show-tick" name="filterdate_lab1" data-live-search="true" id="filterdate_lab" title="&nbsp" required>
                                                                    <ul class="dropdown-menu">
                                                            <option class="hidden"></option>
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $querylab = $conn->query("SELECT `Laboratory_date` FROM `laboratory` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                                                        while ($row = $querylab->fetch_array()){
                                                            
                                                        ?>
                                                        <option value="<?php echo $row['Laboratory_date']?>" 
                                                        <?php if($fetch['Laboratory_date']==$row['Laboratory_date']) echo "selected"; ?>>
                                                        <?php
                                                           
                                                            echo $row['Laboratory_date'];
                                                            ?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                            </div>
                                                        </div>
                                                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                                            <div class="form-line">
                                                         <select class="form-control show-tick" name="filterdate_lab2" data-live-search="true" id="filterdate_lab2" title="&nbsp" required>
                                                                    <ul class="dropdown-menu">
                                                            <option class="hidden"></option>
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $querylab = $conn->query("SELECT `Laboratory_date` FROM `laboratory` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                                                        while ($row = $querylab->fetch_array()){
                                                            
                                                        ?>
                                                        <option value="<?php echo $row['Laboratory_date']?>" 
                                                        <?php if($fetch['Laboratory_date']==$row['Laboratory_date']) echo "selected"; ?>>
                                                        <?php
                                                           
                                                            echo $row['Laboratory_date'];
                                                            ?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                                
                                                            </div>
                                                        </div>
                                                 
                                                 <button type="submit" name="lab" class="btn btn-primary btn-sm waves-effect" ><i class="material-icons">search</i></button>
                                                    <a class="btn btn-primary btn-sm" onclick="printDiv('printableArea')" target="_blank"><i class="material-icons">print</i> Print</a>
                                                   </div>
                                                  </form>
                                                  
                                                
                                              
                                        
                                                  
                                       
                                        <div id="printableArea">
                                                
                                            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-12">
                                                <center>
                                                    <h3>HEMODIALYSIS LABORATORY FLOWSHEET
                                                    </h3>
                                                </center><br>
                                               
                                                <?php 
                                                    $from = '';
                                                    $to = '';
                                                    if(isset($_POST['lab'])){
                                                        $from = $_POST['filterdate_lab1'];
                                                        $to = $_POST['filterdate_lab2']; 
                                                        
                                                    }
                                                       
	                                                   $dateArray = getDates($H_id, $from, $to);
                                                       $columnCount = count($dateArray);
                                                                   
                                                ?>

                                                <?php if( !empty($dateArray) ){ ?>
                                                 <div class="row clearfix">
                                                 <div class="col-xs-4">
                                          <strong>   Name : <u><?php echo $fetchs['P_Fname'].' '.$fetchs['P_Mname'].' '.$fetchs['P_Lname']?></u>
                                         <br> HIV: <u><?php echo $fetchlab['hiv']?></u>
                                        <br>HCV:<u><?php echo $fetchlab['hcv']?></u>
                                        </strong>
                                                </div>
                                               <div class="col-xs-3">
                                          <strong>   Age : <u><?php echo $fetchs['P_Age']?></u><br>
                                        RM# : <u><?php echo $fetchlab['rm']?></u>
                                         <br> HbAg: <u><?php echo $fetchlab['hbag']?></u>
                                        <br>Blood Type:<u><?php echo $fetchlab['bloodtype']?></u>
                                        </strong>
                                               </div>
                                           <div class="col-xs-4">
                                          <strong>   Doctor : <u><?php echo $fetchnephro['n_fname'].' '.$fetchnephro['n_mname'].' '.$fetchnephro['n_lname']?></u>
                                         <br> AntiHbv: <u><?php echo $fetchlab['antihbv']?></u>
                                        <br>RhFactor:<u><?php echo $fetchlab['rhfactor']?></u>
                                        </strong>
                                                            </div>            
                                                    
                                                </div>
                                                 <table id="mainTable" class="table table-bordered ">
                                                    <tr>
                                                        <th>Date</th>

                                                        <?php 
    	                                                       foreach ($dateArray as $d) {
                                                                   echo '<th>' .$d['Laboratory_date']. '</th>';
                                                               }
                                                            ?>
                                                    </tr>
                                                     
                                                    <?php
                                                        $column = array("Creatinine", "BUN", "Magnesium", "Calcium", "Phosphorus", "Potassium", "Sodium", "TCholesterol", "Triglycerides", "HDL", "LDL", "FBS", "RBS", "UricAcid", "RBC Blood", "WBC", "Hemoglobin", "Hematocrit", "PlateletCount", "Polys", "Lymph", "Eosinophyl", "Monocytes", "Basophil", "pH", "Sp Gravity", "Albumin", "Sugar", "PlusCells", "RBC Urine");
	                                                       $size = count($column);
  	
                                                        for($i=0;$i < $size;$i++){
  		                                                    //echo $column[$i];
                                                            if($i == 0){
                                                                echo '<tr>
                                                                <td style="background-color:teal;color:#fff;" colspan="'. (1 + $columnCount) .'" >BLOOD CHEMISTRY</td>
                                                                </tr>';
                                                            }else if($i == 14){
                                                                echo '<tr>
                                                                <td style="background-color:teal;color:#fff;" colspan="'. (1 + $columnCount) .'" >BLOOD COUNT</td>
                                                                </tr>';
  	                                                         }
                                                            else if($i == 24){
                                                                echo '<tr>
                                                                <td style="background-color:teal;color:#fff;" colspan="'. (1 + $columnCount) .'" >Urinalysis</td>
                                                                </tr>';
  	                                                         }
  	                                                         echo '<tr>
  	                                                         <td>'.$column[$i].'</td>';
  	
  		                                                        $r = str_replace(' ', '', $column[$i]);
  		                                                        $array = getCreatinine($r, $H_id, $from, $to);
  		
    	                                                           foreach ($array as $x) {
                                                                       echo '<td>  <a href="#updatelab1 '. $fetchlab['Laboratory_id'].'" data-toggle="modal" data-target="#updatelab1 '.$fetchlab['Laboratory_id'].'" style="color: black;">'.$x[$r].'</href></td>';	
                                                                   }
    
  	                                                                 echo '</tr>';
                                                                        }
                                                             $otherslist = getOtherlist($H_id);

                                                                echo '<tr>
                                                                <td style="background-color:teal;color:#fff;" colspan="'. (1 + $columnCount) .'" >OTHERS</td>
                                                                </tr>';

                                                                foreach ($otherslist as $o) {
                                                                    echo '
                                                                    <tr>
                                                                    <td>'.$o['description'].'</td>';
                                                      
                                                                    foreach ($dateArray as $d) {
                                                                        echo 
                                                                        '<td>'.getOtherByDate($o['description'], 
                                                                            $d['Laboratory_date'], $H_id).
                                                                        '</td>';
                                                                        
  			                                                       }
                                                                
  	                                                             echo '</tr>';
  	
                                                                }
                                                    ?>


                                                </table>
                                                
 <br><br>
                                     <b>Produced By: <u><?php echo $name ?></u></b>

                                                    <div class="row clearfix">
                                            <div class="col-lg-offset-10 row hidden-print mt-20">
                                             <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#laboratory_modal"><i class="material-icons">edit</i>Update</button>&nbsp;
                                            </div>
                                       </div>
                                                <?php }else{ ?>
                                                <center>
                                                    <p>No Record.</p>
                                                        <div class="row clearfix">
                                            <div class="">
                                             <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#laboratory_modal"><i class="material-icons">edit</i>Add New Record</button>&nbsp;
                                            </div>
                                       </div>
                                                </center>
                                                <?php } ?>
                                                
                                                
                                               
                                            </div>
                                        </div>
                                        </div>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'problemlist' )echo active ?>" id="problemlist">
                                                <?php 
	                                                   $found1 = checkproblemlist($H_id);           
                                                    ?>
                                        
                                        <?php if(!empty($found1) ){ ?>
                                            
                                          <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-6 form-control-label">
                                                            <label for="">Filter Date</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                             <form method="post" name="filterdate_problem" id="filterdate_problem" action="<?php echo "PatientProfile.php?id=".$H_id." | problemlist "?> ">
                                                            <div class="form-line">
                                                         <select class="form-control show-tick" name="filterdate_problem" data-live-search="true" id="filterdate_problem" title="&nbsp" onchange="this.form.submit()" required>
                                                                    <ul class="dropdown-menu">
                                                      
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT `datenoted`,`problemlist_monthyear` FROM `problemlist` WHERE `Hospital_Id` = '$H_id' GROUP BY `problemlist_monthyear`") or die(mysqli_error());
                                                        while ($row = $query->fetch_array()){
                                                        ?>
                                                        <option value="<?php echo $row['problemlist_monthyear']?>" 
                                                        <?php if($problemfetch['problemlist_monthyear']==$row['problemlist_monthyear']) echo "selected"; ?>>
                                                        <?php
                                                            echo $row['problemlist_monthyear'];
                                                            ?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                            </div>
                                                                   </form>
                                                        </div>
                                                        <button class="btn btn-primary btn-sm waves-effect" onclick="location.href='print/print_problemlist.php?id=<?php echo $H_id." | ".$probdate ?>'" <?php if($H_id=='' ) {?> disabled="disabled"<?php }  ?>><i class="material-icons">visibility</i>Preview</button>
                                                    </div>
                                              <hr>

                                        <div class="row clearfix">
                                                <center>
                                            <h3>Problem List Record</h3>
                                                </center>
                                            <div class="col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                <label>Diagnosis:</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                       <input type="text" class="form-control" name="diagnosis" id="diagnosis" onkeyup="capitalize(this.id, this.value);" value="<?php if($H_id != '')echo $coerd ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
                                                    <table id="mainTable" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Problem List</th>
                                                                <th>Date Noted</th>
                                                                <th>Date Resolved</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php         
                                                                   while($fetch = $problemquery1 ->fetch_array()){
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <a href="#problemlist_modal<?php echo $fetch['problemlist_id'];?>" data-toggle="modal" data-target="#problemlist_modal<?php echo $fetch['problemlist_id'];?>" style="color: black;">
                                                                            <?php echo $fetch['problem']?>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="#problemlist_modal<?php echo $fetch['problemlist_id'];?>" data-toggle="modal" data-target="#problemlist_modal<?php echo $fetch['problemlist_id'];?>" style="color: black;">
                                                                            <?php echo $fetch['datenoted']?>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="#problemlist_modal<?php echo $fetch['problemlist_id'];?>" data-toggle="modal" data-target="#problemlist_modal<?php echo $fetch['problemlist_id'];?>" style="color: black;">
                                                                            <?php echo $fetch['dateresolved']?>
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
                                                <div class="col-lg-offset-10 col-xs-offset-10">
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#problemlist_modal"><i class="material-icons"></i>Add Record   </button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <center>
                                            <p>No Record Found.</p>
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#problemlist_modal"><i class="material-icons">add</i>Add New Record   </button>
                                        </center>
                                        <?php } ?>


                                        
                                        
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'confinement' )echo active ?>" id="confinement">
                                          <?php 
	                                                  $foundconfinement = checkconfinement($H_id);                                                
                                                    ?>
                                        <?php if( !empty($foundconfinement) ){ ?>
                                        
                                          <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-6 form-control-label">
                                                            <label for="">Filter Date</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                              <form method="post" name="filterdate_confinement" id="filterdate_confinement" action="<?php echo "PatientProfile.php?id=".$H_id." | confinement "?> ">
                                                            <div class="form-line">
                                                         <select class="form-control show-tick" name="filterdate_confinement" data-live-search="true" id="filterdate_confinement" title="&nbsp" onchange="this.form.submit()" required>
                                                                    <ul class="dropdown-menu">
                                                            <option class="hidden"></option>
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT `confinementdate`,`confinement_monthyear` FROM `confinement` WHERE `Hospital_Id` = '$H_id' GROUP BY `confinement_monthyear`") or die(mysqli_error());
                                                        while ($row = $query->fetch_array()){
                                                            
                                                        ?>
                                                        <option value="<?php echo $row['confinementdate']?>" 
                                                        <?php if($confinementfetch['confinementdate']==$row['confinementdate']) echo "selected"; ?>>
                                                        <?php
                                                           
                                                            echo $row['confinement_monthyear'];
                                                            ?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                            </div>
                                                                 </form>
                                                        </div>
                                                        <button class="btn btn-primary btn-sm waves-effect" onclick="location.href='print/print_confinement.php?id=<?php echo $H_id." | ".$condate ?>'" <?php if($H_id=='' ) {?> disabled="disabled"<?php }  ?>><i class="material-icons">visibility</i>Preview</button>
                                                    </div>
                                   
                                                    <hr>
                                        <center>
                                            <h3>Confinement Record</h3>
                                        </center>
                                        <div class="row ">
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <table id="mainTable" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Name of Hospital</th>
                                                            <th>Date of Confinement</th>
                                                            <th>Reason of Confinement</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                                   while($fetch = $confinementquery1 ->fetch_array()){
                                                                ?>
                                                            <tr>
                                                                <td>
                                                                    <a href="#confinement_modal<?php echo $fetch['confinement_id'];?>" data-toggle="modal" data-target="#confinement_modal<?php echo $fetch['confinement_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['hospitalname']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#confinement_modal<?php echo $fetch['confinement_id'];?>" data-toggle="modal" data-target="#confinement_modal<?php echo $fetch['confinement_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['confinementdate']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#confinement_modal<?php echo $fetch['confinement_id'];?>" data-toggle="modal" data-target="#confinement_modal<?php echo $fetch['confinement_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['confinementreason']?>
                                                                    </a>
                                                                </td>


                                                            </tr>
                                                            <?php
                                                                   }
                                                                ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-offset-10 col-xs-offset-10">
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#confinement_modal"><i class="material-icons"></i>Add Record</button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <center>
                                            <p>No Record Found.</p>
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#confinement_modal"><i class="material-icons">add</i>Add New Record</button>
                                        </center>
                                        <?php } ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'weight' )echo active ?>" id="weight">
                                         
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-6 form-control-label">
                                                            <label for="">Filter Date</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <form method="post" id="filterexam" action="<?php echo " PatientProfile.php?id=".$H_id." | weight " ?> ">
                                                            <div class="form-line">
                                                         <select class="form-control show-tick" name="filterdate_examination" id="filterdate_examination" title="&nbsp" onchange="this.form.submit()" required>
                                                                    <ul class="dropdown-menu">
                                                            <option class="hidden"></option>
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `diagnostic/examination` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                                                        while ($row = $query->fetch_array()){
                                                        ?>
                                                        <option value="<?php echo $row['Doneon']; ?>" 
                                                        <?php if($examfetch['Doneon']==$row['Doneon']) echo "selected"; ?>>
                                                            <?php $datedone = strtotime($row['Doneon']);
                                                        echo date("Y-m-d", $datedone);    
                                                        ?> 
                                                        </option>
                                                        <?php
                                                        }
                                                                        ?>
                                                                    </ul>
                                                            </select>
                                                            </div>                    
                                                </form>
                                                        </div>
                                          
                                                        <button class="btn btn-primary btn-sm waves-effect" onclick="location.href='print/print_diagnostic.php?id=<?php echo $H_id." | ".$examdate?>'" <?php if($H_id=='' ) {?> disabled="disabled"<?php }  ?>><i class="material-icons">visibility</i>Preview</button>
                                                    </div>
                                        <?php $ids = ''; ?>
                                        <?php if($examfetch['diagnostic/examination_id'] == ''){
                                        $ids = '.01';
                                        } else {
                                        $ids = $examfetch['diagnostic/examination_id'];
                                        } ?>
                              
                                        <form class="form-horizontal" form method="POST" action="save/savediagnosticphysicalexam.php?id=<?php echo $H_id." | ".$ids ?>">
                                                 
                                            
                                            <div class="row clearfix">
                                                <div class="col-md-offset-1">
                                                    <label>History</label>
                                                </div>
                                            </div>
                                            
                                            <div class="row clearfix">
                                                <div class="col-md-offset-1">
                                                    <label>Past History (Previous Illness & Operation):</label>
                                                </div>
                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-sm-offset-1 ">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="dm" name="dm" class="filled-in" value="1" <?php if ($examfetch['DM']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="dm">DM</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="hpn" name="hpn" class="filled-in" value="1" <?php if ($examfetch['HPN']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="hpn">HPN</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="ptb" name="ptb" class="filled-in" value="1" <?php if ($examfetch['PTB']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="ptb">PTB</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="cancer" name="cancer" class="filled-in" value="1" <?php if ($examfetch['Cancer']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="cancer">Cancer</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="asthma" name="asthma" class="filled-in" value="1" <?php if ($examfetch['Asthma']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="asthma">Asthma</label>
                                                    </div>
                                                </div>
                                             <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label" style="margin-top:-6px">
                                                        <label for="">Others:</label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 "  style="margin-top:-10px">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="pioothers" id="pioothers" value="<?php echo $examfetch['PIO_others']?>">
                                                            </div>
                                                        </div>
                                                    </div> 
                                            </div>
                                            <div class="row clearfix ">
                                                <div class="col-sm-offset-1">
                                                    <label>Personal/Social History:</label>
                                                </div>
                                            </div>
                                            <div class="row clearfix">

                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sm-offset-1 ">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="alcoholintake" name="alcoholintake" class="filled-in" value="1" <?php if ($examfetch['Alcoholintake']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="alcoholintake">Alcohol Intake</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="smokinghistory" name="smokinghistory" class="filled-in" value="1" <?php if ($examfetch['Smokinghistory']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="smokinghistory">Smoking History</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="drugallergies" name="drugallergies" class="filled-in" value="1" <?php if ($examfetch['DrugAllergy']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="drugallergies">Drug Allergies</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                    <div class="form-group input-group">
                                                        <input type="checkbox" id="foodallergies" name="foodallergies" class="filled-in" value="1" <?php if ($examfetch['FoodAllergy']==1 ){?> checked="checked"
                                                        <?php } ?>/>
                                                        <label for="foodallergies">Food Allergies</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label" style="margin-top:-8px; margin-left:-30px;">
                                                        <label for="">Others:</label>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="margin-top:-10px">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name="pshothers" id="pshothers" value="<?php echo $examfetch['PSH_others']?>">
                                                            </div>
                                                        </div>
                                                    </div> 
                                            </div>


                                            <div class="row clearfix">
                                                <div class="col-md-offset-1">
                                                    <label>Physical Examination</label>
                                                </div>
                                                <hr>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>BP</label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="bp" value="<?php echo $examfetch['BP'] ?>" id="bp">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 col-sm-5 col-xs-4 form-control-label">
                                                    <label>CR</label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="cr" value="<?php echo $examfetch['CR'] ?>" id="cr">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>RR</label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="rr" value="<?php echo $examfetch['RR'] ?>" id="rr">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Skin:</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="skin" value="<?php echo $examfetch['Skin'] ?>" id="skin">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Heent:</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="heent" value="<?php echo $examfetch['Heent'] ?>" id="heent">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Chest/Lungs:</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="chestlungs" value="<?php echo $examfetch['Chest/lungs']?>" id="employeeid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Cardiovascular:</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="cardiovascular" value="<?php echo $examfetch['Cardiovascular']?>" id="cardiovascular">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Abdomen:</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="abdomen" value="<?php echo $examfetch['Abdomen'] ?>" id="abdomen">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Rectal:</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="rectal" value="<?php echo $examfetch['Rectal'] ?>" id="rectal">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Extremeties:</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="extremeties" value="<?php echo $examfetch['Extremeties'] ?>" id="extremeties">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Neurological</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="neurological" value="<?php echo $examfetch['Neurological'] ?>" id="neurological">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Diagnosis:</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                             <?php 
	                                                   $found = checkorder($H_id);              
                                                    ?>
                                            <?php if( !empty($found) ){ ?>
                                                       <input type="text" class="form-control" name="diagnosis" id="diagnosis" onkeyup="capitalize(this.id, this.value);" 
                                                       value="<?php echo $coerd ?>" readonly>       
                                             <?php }else{ ?>           
                                                        <input type="text" class="form-control" name="diagnosis" id="diagnosis" readonly>        
                                                 <?php } ?>                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>History By:</label>
                                                </div>
                                                <div class="col-lg-9 col-md-2 col-sm-1 col-xs-1 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="historyby" value="<?php echo $examfetch['Historyby'] ?>" id="historyby">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-md-2 col-sm-5 col-xs-4 form-control-label">
                                                    <label>Done On:</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="datetime-local" class="form-control" name="doneon" value="<?php echo $examfetch['Doneon']; ?>" id="doneon">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-offset-8 col-xs-offset-7">
                                                    <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="location.href='PatientProfile.php?id=<?php echo $H_id." | weight"?>'"> <i class="material-icons">description</i>New</button> &nbsp;
                                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'drug' )echo active ?>" id="drugprofile">
                                         <?php 
	                                             $founddrug = checkdrug($H_id);              
                                                    ?>
                                        <?php if( !empty($founddrug) ){ ?>
                                             
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-6 form-control-label">
                                                            <label for="">Filter Date</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                                        <div class="form-line">
                                                       <form method="post" name="filterdate_drug" id="filterdate_drug" action="<?php echo "PatientProfile.php?id=".$H_id." | drug "?>">
                                                         <select class="form-control show-tick" name="filterdate_drug" data-live-search="true" id="filterdate_drug" title="&nbsp" onchange="this.form.submit()" required>
                                                                    <ul class="dropdown-menu">
                                                            <option class="hidden"></option>
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT `dateordered`,`drugprofile_date` FROM `patientdrugprofile` WHERE `Hospital_Id` = '$H_id' GROUP BY `drugprofile_date`") or die(mysqli_error());
                                                        while ($row = $query->fetch_array()){
                                                            
                                                        ?>
                                                        <option value="<?php echo $row['dateordered']?>" 
                                                        <?php if($drugdate == date("m", strtotime($row['dateordered']))) echo "selected"; ?>>
                                                        <?php
                                                           
                                                            echo $row['drugprofile_date'];
                                                            ?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                                  </form>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary btn-sm waves-effect" onclick="location.href='print/print_drugprofile.php?id=<?php echo $H_id." | ".$drugdate ?>'" <?php if($H_id=='' ) {?> disabled="disabled"<?php }  ?>><i class="material-icons">visibility</i>Preview</button>
                                                    </div>
                                                    <hr>

                                              
                                        <div class="row clearfix">
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <center>
                                                    <h3>Patient Drug Profile
                                                    </h3>
                                                </center>

                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Drug & Strength</th>
                                                            <th>Dosage</th>
                                                            <th>Freq.</th>
                                                            <th>Route of Admin.</th>
                                                            <th>Date Ordered</th>
                                                            <th>PRN</th>
                                                            <th>REMARKS</th>
                                                            <th>Physician</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                           while($fetch = $drugsquery ->fetch_array()){
                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <a href="#drug_modal<?php echo $fetch['drugprofile_id'];?>" data-toggle="modal" data-target="#drug_modal<?php echo $fetch['drugprofile_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['drug_strength']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#drug_modal<?php echo $fetch['drugprofile_id'];?>" data-toggle="modal" data-target="#drug_modal<?php echo $fetch['drugprofile_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['dosage']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#drug_modal<?php echo $fetch['drugprofile_id'];?>" data-toggle="modal" data-target="#drug_modal<?php echo $fetch['drugprofile_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['frequency']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#drug_modal<?php echo $fetch['drugprofile_id'];?>" data-toggle="modal" data-target="#drug_modal<?php echo $fetch['drugprofile_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['ROA']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#drug_modal<?php echo $fetch['drugprofile_id'];?>" data-toggle="modal" data-target="#drug_modal<?php echo $fetch['drugprofile_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['dateordered']?>
                                                                    </a>
                                                                </td>
                                    
                                                                <td>
                                                                    <a href="#drug_modal<?php echo $fetch['drugprofile_id'];?>" data-toggle="modal" data-target="#drug_modal<?php echo $fetch['drugprofile_id'];?>" style="color: black;">
                                                                        <?php if($fetch['PRN'] == 0) echo "No"?>
                                                                         <?php if($fetch['PRN'] == 1) echo "Yes"?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#drug_modal<?php echo $fetch['drugprofile_id'];?>" data-toggle="modal" data-target="#drug_modal<?php echo $fetch['drugprofile_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['remarks']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#drug_modal<?php echo $fetch['drugprofile_id'];?>" data-toggle="modal" data-target="#drug_modal<?php echo $fetch['drugprofile_id'];?>" style="color: black;">
                                                                        <?php echo $fetch['nephrologistid']?>
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
                                            <div class="col-lg-offset-10 col-xs-offset-10 ">
                                                <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#drug_modal"><i class="material-icons">edit</i>Update</button>&nbsp;
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <center>
                                            <p>No Record Found.</p>
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#drug_modal"><i class="material-icons">add</i>Add New Record</button>&nbsp;
                                        </center>
                                        <?php } ?>


                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'hepatitis' )echo active ?>" id="hepatitis">
                                          
                                          <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-6 form-control-label">
                                                            <label for="">Filter Date</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                                            <div class="form-line">
                                                                  <form method="post" name="filterdate_hepa" id="filterdate_hepa" action="<?php echo "PatientProfile.php?id=".$H_id." | hepatitis "?> ">
                                                         <select class="form-control show-tick" name="filterdate_hepa" data-live-search="true" id="filterdate_hepa" title="&nbsp" onchange="this.form.submit()" required>
                                                                    <ul class="dropdown-menu">
                                                            <option class="hidden"></option>
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT `hepatitisdate`,`hepatitismonthyear` FROM `hepatitisprofile` WHERE `Hospital_Id` = '$H_id' GROUP BY `hepatitismonthyear`") or die(mysqli_error());
                                                        while ($row = $query->fetch_array()){
                                                            
                                                        ?>
                                                        <option value="<?php echo $row['hepatitisdate']?>" 
                                                        <?php if($hepafetch['hepatitisdate']==$row['hepatitisdate']) echo "selected"; ?>>
                                                        <?php
                                                            echo $row['hepatitismonthyear'];
                                                            ?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                    </form>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary btn-sm waves-effect" onclick="location.href='print/print_hepatitisprofile.php?id=<?php echo $H_id." | ".$hepadate?>'" <?php if($H_id=='' ) {?> disabled="disabled"<?php }  ?>><i class="material-icons">visibility</i>Preview</button>
                                                    </div>
                                                <hr>
                                       <div class="row clearfix">
                                            <center>
                                                <h3>Hepatitis Profile</h3>
                                            </center>
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">


                                                <table id="mainTable" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>HBsAg</th>
                                                            <th>Anti-HBs</th>
                                                            <th>HCV</th>
                                                            <th>HIV</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                                   while($fetch = $hepaquery1 ->fetch_array()){
                                                                ?>
                                                            <tr>
                                                                <td>
                                                                    <a href="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" data-toggle="modal" data-target="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" style="color: black;">
                                                                        <?php echo $fetch['hepatitisdate']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                   <a href="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" data-toggle="modal" data-target="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" style="color: black;">
                                                                        <?php if($fetch['HbsAg'] == 'r') echo "Reactive" ?>
                                                                       <?php if($fetch['HbsAg'] == 'nr') echo "Non-Reactive" ?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" data-toggle="modal" data-target="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" style="color: black;">
                                                                         <?php if($fetch['AntiHBs'] == 'r') echo "Reactive" ?>
                                                                       <?php if($fetch['AntiHBs'] == 'nr') echo "Non-Reactive" ?>
                                                                      
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" data-toggle="modal" data-target="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" style="color: black;">
                                                                         <?php if($fetch['HCV'] == 'r') echo "Reactive" ?>
                                                                       <?php if($fetch['HCV'] == 'nr') echo "Non-Reactive" ?>
                                                               
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                   <a href="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" data-toggle="modal" data-target="#hepa_modal<?php echo $fetch['hepatitisprofile_id']?>" style="color: black;">
                                                                         <?php if($fetch['HIV'] == 'r') echo "Reactive" ?>
                                                                       <?php if($fetch['HIV'] == 'nr') echo "Non-Reactive" ?>
                                                        
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
                                            <div class="col-lg-offset-10 col-xs-offset-10 ">
                                                <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#hepa_modal"><i class="material-icons">edit</i>Update</button>&nbsp;
                                            </div>
                                        </div>
                                   
                                        </div>
                                    <div role="tabpanel" class="tab-pane fade in <?php if ($id2 == 'immunization' )echo active ?>" id="immunization">
                                          
                                          <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-lg-offset-6 form-control-label">
                                                            <label for="">Filter Date</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                              <form method="post" name="filterdate_hepab" id="filterdate_immune" action="<?php echo "PatientProfile.php?id=".$H_id." | immunization "?> ">
                                                            <div class="form-line">
                                                         <select class="form-control show-tick" name="filterdate_hepab" data-live-search="true" id="filterdate_hepab" title="&nbsp" onchange="this.form.submit()" required>
                                                                    <ul class="dropdown-menu">
                                                          
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT `hepatitisbvaccine`.`hepa_year`,`influenzavaccine`.`influenza_year`,`pneumococcal_vaccine`.`pneumococcal_year` AS YEAR FROM `hepatitisbvaccine` INNER JOIN `influenzavaccine` ON `hepatitisbvaccine`.`Hospital_Id` = `influenzavaccine`.`Hospital_Id` INNER JOIN `pneumococcal_vaccine` ON `hepatitisbvaccine`.`Hospital_Id` = `pneumococcal_vaccine`.`Hospital_Id` GROUP BY YEAR") or die(mysqli_error());
                                                        while ($row = $query->fetch_array()){
                                                            
                                                        ?>
                                                    
                                                         <option value="<?php echo $row['YEAR']?>" 
                                                        <?php if($immunedate==$row['YEAR']) echo "selected"; ?>>
                                                        <?php
                                                            echo $row['YEAR'];
                                                            
                                                            ?>
                                                        </option>                
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                            </div>
                                                                   </form>
                                                        </div>
                                                        <button class="btn btn-primary btn-sm waves-effect" onclick="location.href='print/print_immunization.php?id=<?php echo $H_id." | ".$immunedate ?>'" <?php if($H_id=='' ) {?> disabled="disabled"<?php }  ?>><i class="material-icons">visibility</i>Preview</button>
                                                    </div>
                                 
                                                    <hr>
                                        <div class="row clearfix">
                                            <center>
                                                <h3>Immunization Profile</h3>
                                            </center>
                                             <h4>Hepatitis B Vaccine</h4>
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                
                                              <table id="mainTable" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Description</th>
                                                            <th>Administered By</th>
                                                            <th>Date Done</th>
                                                            <th>Next Dose due on:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <?php   
                                                   
                                                                     
                               
                                                                   while($fetchhepa = $queryhepa1 ->fetch_array()){
                                                          ?>
                                                            <tr>
                                                                <td>
                                                                   <a href="#immunization_modal_hb<?php echo $fetchhepa['hepa_id']?>" data-toggle="modal" data-target="#immunization_modal_hb<?php echo $fetchhepa['hepa_id']?>" style="color: black;">
                                                                        <?php echo $fetchhepa['description']?>
                                                                    </a>
                                                               
                                                                </td>
                                                                <td>
                                                                    <a href="#immunization_modal_hb<?php echo $fetchhepa['hepa_id']?>" data-toggle="modal" data-target="#immunization_modal_hb<?php echo $fetchhepa['hepa_id']?>" style="color: black;">
                                                                        <?php echo $fetchhepa['administeredby']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                   <a href="#immunization_modal_hb<?php echo $fetchhepa['hepa_id']?>" data-toggle="modal" data-target="#immunization_modal_hb<?php echo $fetchhepa['hepa_id']?>" style="color: black;">
                                                                        <?php echo $fetchhepa['hepa_daterecieved']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                      <a href="#immunization_modal_hb<?php echo $fetchhepa['hepa_id']?>" data-toggle="modal" data-target="#immunization_modal_hb<?php echo $fetchhepa['hepa_id']?>" style="color: black;">
                                                                        <?php echo $fetchhepa['hepa_nextdate']?>
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
                                             <h4>Influenza Vaccine</h4>
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                

                                              <table id="mainTable" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                        
                                                            <th>Administered By</th>
                                                            <th>Date Done</th>
                                                            <th>Next Dose due on:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                <?php
                                                                  
                                                                  
                                                                   while($fetchinflu = $queryinflu ->fetch_array()){
                                                                ?>
                                                            <tr>
                                                         
                                                                <td>
                                                                     <a href="#immunization_modal_im<?php echo $fetchinflu['influenza_id']?>" data-toggle="modal" data-target="#immunization_modal_im<?php echo $fetchinflu['influenza_id']?>" style="color: black;">
                                                                        <?php echo $fetchinflu['influenza_administeredby']?>
                                                                    </a>
                                                             
                                                                </td>
                                                                <td>
                                                                     <a href="#immunization_modal_im<?php echo $fetchinflu['influenza_id']?>" data-toggle="modal" data-target="#immunization_modal_im<?php echo $fetchinflu['influenza_id']?>" style="color: black;">
                                                                        <?php echo $fetchinflu['influenza_daterecieved']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                     <a href="#immunization_modal_im<?php echo $fetchinflu['influenza_id']?>" data-toggle="modal" data-target="#immunization_modal_im<?php echo $fetchinflu['influenza_id']?>" style="color: black;">
                                                                        <?php echo $fetchinflu['influenza_datenext']?>
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
                                             <h4>Pneumococcal Vaccine</h4>
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                            
                                              <table id="mainTable" class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                        
                                                            <th>Administered By</th>
                                                            <th>Date Done</th>
                                                            <th>Next Dose due on:</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                <?php
                                                                
                                                                   
                                                                 
                                                                   while($fetchpneu = $querypneu ->fetch_array()){
                                                                ?>
                                                            <tr>
                                                         
                                                                <td>
                                                                     <a href="#immunization_modal_pneu<?php echo $fetchpneu['pneumococcal_id']?>" data-toggle="modal" data-target="#immunization_modal_pneu<?php echo $fetchpneu['pneumococcal_id']?>" style="color: black;">
                                                                        <?php echo $fetchpneu['pneumococcal_administeredby']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                     <a href="#immunization_modal_pneu<?php echo $fetchpneu['pneumococcal_id']?>" data-toggle="modal" data-target="#immunization_modal_pneu<?php echo $fetchpneu['pneumococcal_id']?>" style="color: black;">
                                                                        <?php echo $fetchpneu['pneumococcal_daterecieved']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                     <a href="#immunization_modal_pneu<?php echo $fetchpneu['pneumococcal_id']?>" data-toggle="modal" data-target="#immunization_modal_pneu<?php echo $fetchpneu['pneumococcal_id']?>" style="color: black;">
                                                                        <?php echo $fetchpneu['pneumococcal_datenext']?>
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
                                            <div class="col-lg-offset-10">
                                             <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#immunization_modal"><i class="material-icons">edit</i>Update</button>&nbsp;
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!----- modal section -->
                                
                            </div>
                            </div>
                            </div>
                    </div>
                
            </div>
            
        </section>
     
        
        <script>
            $(function() {
                $('.dropdown-menu li').click(function() {
                    $('#filtertreatment').val($(this).html());
                    $('#filtertreatment').submit();
                });
            });

        </script>

        <script>
            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            }
        </script>

        <script>
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
        <script>
              function ClearFields() {
               // document.getElementById("").focus();
                  
                //$("#filterdate_order").val("").change(); 
               
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
        <?php include('queries/headers_query.php'); ?>
        <!-- Custom Js -->
        <script src="../../js/admin.js"></script>
        <script src="../../js/pages/tables/jquery-datatable.js"></script>
        <script src="../../js/pages/forms/advanced-form-elements1.js"></script>
    
        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>
        
        <script src="autofill/jquery.easy-autocomplete.min.js"></script> 
        <link rel="stylesheet" href="autofill/easy-autocomplete.min.css"> 
        <link rel="stylesheet" href="autofill/easy-autocomplete.themes.min.css">
        
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
         <?php include ('modals/dialysisreport_modal.php')?>
        <?php include('autofillquery/autofill_patientprofile.php')?>
           
        <script>    
            var options1 = {
                    data: <?php echo json_encode($list1) ?>,
                    list: {
                        match: {
                            enabled: true	
                        }
                    }
                };

            $("#esrdothers").easyAutocomplete(options1);
            
             var options2 = {
                    data: <?php echo json_encode($list2) ?>,
                    list: {
                        match: {
                            enabled: true	
                        }
                    }
                };

            $("#durationothers").easyAutocomplete(options2);
            
               var options3 = {
                    data: <?php echo json_encode($list3) ?>,
                    list: {
                        match: {
                            enabled: true	
                        }
                    }
                };

            $("#frequencyothers").easyAutocomplete(options3);
            
             var options4 = {
                    data: <?php echo json_encode($list4) ?>,
                    list: {
                        match: {
                            enabled: true	
                        }
                    }
                };

            $("#pioothers").easyAutocomplete(options4);
            
            var options5 = {
                    data: <?php echo json_encode($list5) ?>,
                    list: {
                        match: {
                            enabled: true	
                        }
                    }
                };

            $("#pshothers").easyAutocomplete(options5);
            
                var options6 = {
                    data: <?php echo json_encode($list6) ?>,
                    list: {
                        match: {
                            enabled: true	
                        }
                    }
                };

            $("#religion").easyAutocomplete(options6);
            
               var options7 = {
                    data: <?php echo json_encode($list7) ?>,
                    list: {
                        match: {
                            enabled: true	
                        }
                    }
                };

            $("#nationality").easyAutocomplete(options7);
            
    </script>
        <script>
//    $(document).ready(function(){
//       $('#listing').DataTable({
//           dom: 'Bfrtip',
//           buttons: [ 'copy', 'csv', 'excel',
//                    {
//                        extend: 'print',
//                        title: 'saple',
//                        responsive: true,
//                        footer: true,
//                        className: '',
//                        customize: function ( win ){
//                            .prepend('<left><h4></h4></left>');
//                            $(win.document.body).find('h3').css('font-family','impact');
//                            $(win.document.body).find( 'table' ).addClass( 'compact' ).css('font-size','inherit')
//                        }
//                    }]
//       }) 
//    });
//    
    </script>
    </body>
        

    </html>
