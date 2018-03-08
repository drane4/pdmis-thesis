<?php
 include('session.php'); 
                                   
                                  
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
        <link href="../../css/style4.css" rel="stylesheet">

        <!-- mytable Css -->
        <link href="../../css/table.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../../css/themes/theme-indigo.css" rel="stylesheet" />

         <!-- Multi Select Css -->
        <link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">
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
                          
                        <li class="active" id="profile">
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
                            
                                <li class="" id="nephrologist">
                                    <a href="nephrologist.php">Nephrologist</a>
                                </li>
                            <li class="active" id="schedule">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Schedule</span>
                            </a>
                            <ul class="ml-menu">
                                 <li id="patientschedule">
                                    <a href="patientschedule.php">Patient</a>
                                </li>
                                <li class="active" id="nephroschedule">
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
 <?php include ('modals/dialysisreport_modal.php')?>
        <?php include ('modals/employee_modal.php')?>    
        <section class="content">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-indigo">
                                <h2>
                                    Schedules
                                </h2>

                            </div>
                            <div class="body">
                                  <!-- Nav tabs -->

                       
                            
                                     <table id="nephrosched" class="table table-bordered table-striped table-hover dataTable">
                                                <thead>
                                                    <tr>
                                             
                                                        <th>Name</th>
                                                        <th>Monday</th>
                                                        <th>Tuesday</th>
                                                        <th>Wednesday</th>
                                                        <th>Thursday</th>
                                                        <th>Friday</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT *
                                                           FROM `nephrologist` INNER JOIN `nephrologistschedule` ON `nephrologist`.`nephrologistid` = `nephrologistschedule`.`nephrologistid`") or die(mysqli_error());
                                                  
                                                           while($fetch = $query ->fetch_array()){        
                                                        ?>
                                                    <tr>
                                                         <td>
                                                              <?php echo $fetch['n_fname'].' '.$fetch['n_mname'].' '.$fetch['n_lname']?>
                                                        </td>
                                                       
                                                        <td>
                                                            <?php if($fetch['monday'] == 0) echo "Available" ?>
                                                        </td>
                                                        <td>
                                                           <?php if($fetch['tuesday'] == 0) echo "Available" ?>
                                                        </td>
                                                        <td>
                                                            <?php if($fetch['wednesday'] == 0) echo "Available" ?>
                                                        </td>
                                                         <td>
                                                             <?php if($fetch['thursday'] == 0) echo "Available" ?>
                                                        </td>
                                                         <td>
                                                             <?php if($fetch['friday'] == 0) echo "Available" ?>
                                                        </td>
                                                        
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                               
                                        <div class="col-lg-offset-10 col-xs-offset-3">
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#nephro"> <i class="material-icons">date_range</i> Manage</button> &nbsp;
                                    </div>
                                </div>
                            </div>
                      </div>
                </div>
            </div>
           <div class="modal fade" id="nephro" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                        <div class="modal-content">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header bg-indigo">
                                            <h2>
                                                Manage Schedule

                                                <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                            </h2>

                                        </div>
                                        <div class="body">               
                                          <form class="form-horizontal" form method="POST" action="save/savenephroschedule.php">
                                            <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                            <label for="email_address_2">Nephrologist Name</label>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <select class="form-control show-tick" name="nephro_S" id="nephro_S" title="&nbsp" data-live-search="true" required>
                                         
                                                        <?php 

                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `nephrologist`") or die(mysqli_error());
                                                    
                                                        while ($row = $query->fetch_array()){

                                                        ?>
                                                        <option value="<?php echo $row['nephrologistid']; ?>" 
                                                        <?php if($fetch['nephrologistid']==$row['nephrologistid']) echo "selected"; ?>>
                                                        <?php echo $row['n_fname']." ".$row['n_mname']." ".$row['n_lname']?>
                                                        </option>

                                                        <?php
                                                        
                                                        }
                                                    ?>
                                            </select>
                                        </div>
                                         
                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
                                            <div class="form-group input-group">
                                                <span class="input-group-addon">
                                            <input type="checkbox" id="nephroschedulestatus" name="nephroschedulestatus" value="1"
                                                  <?php if ($fetch['status']==1 ){?> checked="checked"<?php } ?>
                                                   <?php if ($fetch['Hospital_Id']=='' ){?> checked="checked"<?php } ?>>
                                            <label for="status">Active</label>
                                                   </span>
                                            </div>
                                        </div>       
          
                                    </div>
                                               <div class="col-sm-offset-1">  
                                            <label for="email_address_2">Available Days :</label>
                                              </div>
                                              <div class="row clearfix">
                                            

                                       

                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 col-sm-offset-2 ">
                                           <div class="form-group input-group">
                                            <input type="checkbox" id="day1" name="day1" class="filled-in" value="Monday"
                                                   <?php if ($fetch[ 'nephroschedule_day']=='Monday' ){?> checked="checked"<?php } ?>/>
                                            <label for="day1">Monday</label>         
                                            </div>
                                        </div>
                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
                                           <div class="form-group input-group">
                                            <input type="checkbox" id="day2" name="day2" class="filled-in" value="Monday"
                                                   <?php if ($fetch[ 'nephroschedule_day']=='Monday' ){?> checked="checked"<?php } ?>/>
                                            <label for="day2">Tuesday</label>         
                                            </div>
                                        </div>
                                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
                                           <div class="form-group input-group">
                                            <input type="checkbox" id="day3" name="day3" class="filled-in" value="Monday"
                                                   <?php if ($fetch[ 'nephroschedule_day']=='Monday' ){?> checked="checked"<?php } ?>/>
                                            <label for="day3">Wednesday</label>         
                                            </div>
                                        </div>
                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
                                           <div class="form-group input-group">
                                            <input type="checkbox" id="day4" name="day4" class="filled-in" value="Monday"
                                                   <?php if ($fetch[ 'nephroschedule_day']=='Monday' ){?> checked="checked"<?php } ?>/>
                                            <label for="day4">Thursday</label>         
                                            </div>
                                        </div>
                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
                                           <div class="form-group input-group">
                                            <input type="checkbox" id="day5" name="day5" class="filled-in" value="Monday"
                                                   <?php if ($fetch[ 'nephroschedule_day']=='Monday' ){?> checked="checked"<?php } ?>/>
                                            <label for="day5">Friday</label>         
                                            </div>
                                        </div>   
                                          
                                             
                                                  
                                    </div>
                                       
                                              
                                              
                                              <div class="row clearfix">
                                        <div class="col-lg-offset-6 col-xs-offset-3">
                                          
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" button name="nephroschedule"><i class="material-icons">save</i>Save</button> &nbsp;
                                           
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
        
        <!-- Multi Select Plugin Js -->
        <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>

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
        <script src="../../js/pages/forms/advanced-form-elements.js"></script>
         <script src="../../js/pages/forms/basic-form-elements.js"></script>
       

        <!-- Demo Js -->
        <script src="../../js/demo.js"></script>
        <script>
        $( window ).load(function(){
        var module ='<?php echo $transaction_a; ?>';
        var module1 ='<?php echo $patientprofile_a; ?>';
        var module2 ='<?php echo $employeeprofile_a; ?>';
        var module3 ='<?php echo $schedule_a; ?>';
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
            $('#schedule').hide(); 
            
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
