<?php
include('session.php');                                   
                                    ini_set('display_errors', 0);
                                    $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `employeeprofile` where `employeeid` = '$_GET[id]' ") or die(mysqli_error());
                                    $fetch = $query ->fetch_array();
                                    $id = $fetch['employeeid'];

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
        <link href="../../css/style3.css" rel="stylesheet">

        <!-- mytable Css -->
        <link href="../../css/table.css" rel="stylesheet">

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
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name; ?></div>
                        <div class="email"><?php echo $position; ?></div>
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
                                    <a href="nephrologist.php">Nephrologist</a>
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
                                    <a href="UserProfile.php">User Account</a>
                                </li>
                                <li id="systemmaintenance">
                                    <a href="maintenance.php">System Maintenance</a>
                                </li>
                            </ul>
                        </li>
                        <li class="active" id="reports">
                            <a href="reports.php">
                                <i class="material-icons">assignment</i>
                                <span>Reports</span>
                            </a>
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

        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-indigo">
                                <h2>
                                    REPORTS
                                </h2>

                            </div>
                         
                            <div class="body">
                            
                                <button name="export" type="button" class="btn btn-primary m-t-15 waves-effect" onclick="location.href='export.php'"> <i class="material-icons">cloud_download</i>Export</button>
                                   <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="location.href='import.php'"> <i class="material-icons">cloud_upload</i>Import</button>
                            
                                <div class="header">
                                    <h2> 
                                    Maintenance History
                                    </h2>
                                </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Employee Name</th>
                                                        <th>Action</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $date = date("Y-m-d H:i:s"); 
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `maintenance` order by '$date' desc") or die(mysqli_error());
                                                           $id = $fetch['employeeid'];
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                        <tr>

                                                            <td>
                                                                  <?php echo $fetch['name']?>
                                                            </td>
                                                            <td>
                                                                  <?php echo $fetch['action']?>
                                                            </td>
                                                             <td>
                                                                  <?php echo $fetch['m_date']?>
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
        </section>

    

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
        <script src="../../js/pages/forms/advanced-form-elements.js"></script>


        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>
        <script>
        $( window ).load(function(){
        var module ='<?php echo $transaction_a; ?>';
        var module1 ='<?php echo $patientprofile_a; ?>';
        var module2 ='<?php echo $employeeprofile_a; ?>';
        var module3 ='<?php echo $labtest_a; ?>';
        var module4 ='<?php echo $nephrologist_a; ?>';
     
        var module6 ='<?php echo $userprofile_a; ?>';
        var module7 ='<?php echo $maintenance_a; ?>';
        var module8 ='<?php echo $reports_a; ?>';
        
        if(module == '0') 
        {                       
            $('#transaction').hide(); 
            
        }

         if(module1 == '0') 
        {                       
            $('#patientprofile').hide(); 
            
        }
       
         if(module2 == '0') 
        {                       
            $('#employeeprofile').hide(); 
            
        }
       
         if(module3 == '0') 
        {                       
            $('#labtest').hide(); 
            
        }
       
         if(module4 == '0') 
        {                       
            $('#nephrologist').hide(); 
            
        }
      
   
         if(module6 == '0') 
        {                       
            $('#userprofile').hide(); 
            
        }
    
         if(module7 == '0') 
        {                       
            $('#systemmaintenance').hide(); 
            
        }
      
         if(module8 == '0') 
        {                       
            $('#reports').hide(); 
            
        }
         if(module1 == '0' && module2 == '0' && module3 == '0' && module4 == '0' && module5 == '0'){
              $('#profile').hide(); 
           
         }  
        if(module6 == '0' && module7 == '0'){
              $('#maintenance').hide(); 
           
         } 
        });
        
        
    </script>  
    
    </body>

    </html>
