<?php
 include('session.php'); 
                                   
                                    ini_set('display_errors', 0);
                                    $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                    $query = $conn->query("SELECT * FROM `nephrologist` where `nephrologistid` = '$_GET[id]' ") or die(mysqli_error());
                                    $fetch = $query ->fetch_array();
                                    $id = $fetch['nephrologistid'];

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
        
      <?php include ('modals/dialysisreport_modal.php')?>
        <?php include ('modals/employee_modal.php')?>    

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
                                <li class="active" id="nephrologist">
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
                                    Nephrologist Profile
                                </h2>

                            </div>
                            <div class="body">

                                <form class="form-horizontal page-content" form method="POST" action="save/savenephro.php">



                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-control-label">
                                            <label for="email_address_2">Nephrologist ID</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1 ">
                                            <div class="form-group">

                                                <div class="">
                                                    <input type="text" class="form-control" name="nephrologistid" value="<?php echo $fetch['nephrologistid']?>" placeholder="<?php echo $Nid; ?>" id="nephrologistid" readonly>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                            <label for="">LastName</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 col-md-3  form-control-label">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="n_lname" name="n_lname" class="form-control" placeholder="" value="<?php echo $fetch['n_lname']?>" onkeyup="capitalize(this.id, this.value);" autofocus required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2  form-control-label">
                                            <label for="">FirstName</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="n_fname" name="n_fname" class="form-control" placeholder="" value="<?php echo $fetch['n_fname']?>" onkeyup="capitalize(this.id, this.value);" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                            <label for="">MI</label>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="n_mname" name="n_mname" class="form-control" placeholder="" value="<?php echo $fetch['n_mname']?>" onkeyup="capitalize(this.id, this.value);" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                            <label for="email_address_2">Address</label>
                                        </div>
                                        <div class="col-lg-9 col-md-1 col-sm-2 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="n_address" id="n_address" value="<?php echo $fetch['n_address']?>" onkeyup="capitalize(this.id, this.value);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix demo-masked-input">
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                            <label for="email_address_2">Tel. #</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                            <div class="form-group">
                                                <div class="form-line ">
                                                    <input type="text" class="form-control" name="n_telephone" id="n_telephone" value="<?php echo $fetch['n_telephone']?>" placeholder="Optional">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 form-control-label">
                                            <label for="email_address_2">Mobile#</label>
                                        </div>
                                        <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control mobile-phone-number" id="n_mobile" name="n_mobile" value="<?php echo $fetch['n_mobile']?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                

                                    <div class="row clearfix">
                                        <div class="col-lg-offset-6 col-xs-offset-3">
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields()"> <i class="material-icons">description</i> New</button> &nbsp;
                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" button name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">find_in_page</i>Find</button>&nbsp;

                                            <button type="submit" button name="delete" class="btn btn-primary m-t-15 waves-effect" <?php if ($fetch[ 'transaction']==1 ){?> disabled="disabled"<?php } ?> onclick="Delete()"><i class="material-icons">delete </i>Delete</button>&nbsp;&nbsp;
                                            <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#employeelist"><i class="material-icons">list</i>List   </button>

                                        </div>


                                    </div>
                                </form>
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
                                                List of Nephrologist

                                                <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                            </h2>

                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>LastName</th>
                                                            <th>FirstName</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `nephrologist` ORDER BY `nephrologistid`") or die(mysqli_error());
                                                           $id = $fetch['nephrologistid'];
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                            <tr>

                                                                <td>
                                                                    <a href="nephrologist.php?id=<?php echo $fetch['nephrologistid']?>">
                                                                        <?php echo $fetch['n_lname']?>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="nephrologist.php?id=<?php echo $fetch['nephrologistid']?>">
                                                                        <?php echo $fetch['n_fname']?>
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
                                                List of Nephrologist

                                                <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                            </h2>

                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table id="example" class="table table-bordered table-striped table-hover dataTable">
                                                    <thead>
                                                        <tr>

                                                            <th>Name</th>
                                                            <th>Address</th>
                                                            <th>Telephone #</th>
                                                            <th>Mobile #</th>
                                                           

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `nephrologist` ORDER BY `nephrologistid`") or die(mysqli_error());
                                                           $id = $fetch['nephrologistid'];
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                            <tr>


                                                                <td>
                                                                    <?php echo $fetch['n_fname']. " " .$fetch['n_mname']. " " .$fetch['n_lname']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch['n_address']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch['n_telephone']?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $fetch['n_mobile']?>
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
                
                document.getElementById("nephrologistid").value = "";
                document.getElementById("n_lname").focus();
               document.getElementById("n_lname").value="";
                document.getElementById("n_fname").value = "";
                document.getElementById("n_mname").value = "";
                document.getElementById("n_address").value = "";
                document.getElementById("n_telephone").value = "";
                document.getElementById("n_mobile").value = "";
        

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
        
        <?php include('queries/headers_query.php'); ?>
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
