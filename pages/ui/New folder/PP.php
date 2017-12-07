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
    <link href="../../css/style1.css" rel="stylesheet">

    <!-- mytable Css -->
    <link href="../../css/table.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/theme-indigo.css" rel="stylesheet" />
    <-- Uppercase JS-->
        <script src="../ui/Uppercase.js"></script>
    </-->


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
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rhitt Bancaya</div>
                    <div class="email">Head Nurse</div>
                    <div class="btn-group user-helper-dropdown">


                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    <a href="../../index.html">
                            <i class="material-icons">folder</i>
                            <span>Transaction</span>
                        </a>

                    <li class="active">
                        <a href="javascript:void(0);a" class="menu-toggle">
                                <i class="material-icons">people</i>
                                <span>Profile</span>
                            </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="PP.php">Patient Profile</a>
                            </li>
                            <li>
                                <a href="EP.php">Employee Profile</a>
                            </li>
                            <li>
                                <a href="LT.php">Lab Tests</a>
                            </li>
                            <li>
                                <a href="P.php">Physician</a>
                            </li>
                            <li>
                                <a href="D.php">Descriptors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">settings</i>
                                <span>Maintenance</span>
                            </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="pages/ui/UP.php">User Profile</a>
                            </li>
                            <li>
                                <a href="pages/ui/SM.php">System Maintenance</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="R.php">
                                <i class="material-icons">assignment</i>
                                <span>Reports</span>
                            </a>
                    </li>
                    <li>
                        <a href="Exit.html">
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
                            <form class="form-horizontal page-content" form method="POST" action="savepatient.php">



                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-control-label">
                                        <label for="email_address_2">Hospital ID</label>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-1 col-xs-2 ">
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" class="form-control" name="hid" id="hid" onkeyup="capitalize(this.id, this.value);" autofocus>
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
                                                <input type="text" id="lastname" name="lastname" class="form-control" onkeyup="capitalize(this.id, this.value);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2  form-control-label">
                                        <label for="">FirstName</label>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="firstname" name="firstname" class="form-control" onkeyup="capitalize(this.id, this.value);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                        <label for="">MiddleName</label>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="middlename" name="middlename" class="form-control" onkeyup="capitalize(this.id, this.value);">
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
                                                <input type="text" class="form-control date" name="birthdate" id="birthdate" placeholder="YYYY/MM/DD">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 form-control-label">
                                        <label for="">Age</label>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="age" id="age" min="0" max="110" step="1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                        <label for="email_address_2">gender</label>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                        <select class="form-control show-tick" title=&nbsp id="gender" name="gender">
                                        <option>Male</option>
                                        <option>Female</option>                            
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
                                                <input type="text" class="form-control" name="nationality" id="nationality" onkeyup="capitalize(this.id, this.value);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 form-control-label">
                                        <label for="">Religion</label>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-2">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="religion" id="religion" onkeyup="capitalize(this.id, this.value);">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                        <label for="">CivilStatus</label>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                        <select class="form-control show-tick" id="civilstatus" name="civilstatus" title=&nbsp >
                                        <option value="single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>  
                                        <option value="Widowed">Widowed</option>  
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
                                                <input type="text" class="form-control" name="peraddress" id="peraddress" onkeyup="capitalize(this.id, this.value);">
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
                                                <input type="text" class="form-control mobile-phone-number" name="percontactnumber" id="percontactnumber" placeholder="Ex: +00 (000) 000-00-00" >
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
                                                <input type="text" class="form-control" name="preaddress" id="preaddress" onkeyup="capitalize(this.id, this.value);">
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
                                                <input type="text" class="form-control mobile-phone-number" name="precontactnumber" id="precontactnumber" placeholder="Ex: +00 (000) 000-00-00" >
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
                                                <input type="text" class="form-control" name="relative" id="relative" onkeyup="capitalize(this.id, this.value);">
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
                                                <input type="text" class="form-control" name="relativeadd" id="relativeadd" onkeyup="capitalize(this.id, this.value);">
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
                                                <input type="text" class="form-control mobile-phone-number" name="relativecon" id="relativecon" placeholder="Ex: +00 (000) 000-00-00">
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
                                                <input type="text" class="form-control date" name="DIDS" id="DIDS" placeholder="YYYY/MM/DD">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-1 col-sm-2 col-xs-5 form-control-label">
                                        <label for="">Age When first Dialysis Started</label>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" class="form-control" name="fdage" id="fdage" min="0" max="110" step="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix demo-masked-input ">
                                    <div class="col-lg-4 col-md-1 col-sm-2 col-xs-6 form-control-label">
                                        <label>Type of Dialysis when First Started</label>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">
                                            <input type="radio" id="type1" name="type1" class="with-gap" value="1">
                                            <label for="type1">HemoDialysis</label>
                                                   </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">
                                            <input type="radio" id="type2" name="type2" class="with-gap" value="0">
                                            <label for="type2">Peritoneal Dialysis</label>
                                                   </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                        <label for="">Erythropoetin</label>
                                    </div>
                                    <div class="col-lg-6 col-md-1 col-sm-2 col-xs-8">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="erythropoetin" id="erythropoetin" onkeyup="capitalize(this.id, this.value);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-3 form-control-label">
                                        <label for="">Nephrologist</label>
                                    </div>
                                    <div class="col-lg-4 col-md-1 col-sm-2 col-xs-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="nephrologist" id="nephrologist" onkeyup="capitalize(this.id, this.value);">
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
                                                <input type="text" class="form-control" name="diagnosis" id="diagnosis" onkeyup="capitalize(this.id, this.value);">
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
                                                <input type="text" class="form-control" name="phnum" id="phnum" onkeyup="capitalize(this.id, this.value);">
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
                                                <input type="text" class="form-control" name="dfb" id="dfb" onkeyup="capitalize(this.id, this.value);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-4 form-control-label">
                                        <label for="">Relation</label>
                                    </div>
                                    <div class="col-lg-2 col-md-1 col-sm-2 col-xs-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="relation" id="relation" onkeyup="capitalize(this.id, this.value);">
                                            </div>
                                        </div>
                                    </div>





                                </div>
                                <hr>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-6 col-xs-offset-3">
                                        <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>New</button> &nbsp;
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect" button name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
                                        <button type="button" class="btn btn-primary m-t-15 waves-effect" data-toggle="modal" data-target="#defaultModal"><i class="material-icons">find_in_page</i>Find</button>&nbsp;
                                        <button type="button" class="btn btn-primary m-t-15 waves-effect"><i class="material-icons">delete </i>Delete</button>&nbsp;&nbsp;
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
                                            List of Employees

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
                                                           $query = $conn->query("SELECT * FROM `UserProfile` ORDER BY `employeeid`") or die(mysqli_error());
                                                           $id = $fetch['employeeid'];
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                        <tr>

                                                            <td>
                                                                <a href="EP.php?id=<?php echo $fetch['employeeid']?>">
                                                                    <?php echo $fetch['lastname']?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="EP.php?id=<?php echo $fetch['employeeid']?>">
                                                                    <?php echo $fetch['firstname']?>
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

                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>Telephone #</th>
                                                        <th>Mobile #</th>
                                                        <th>Position</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `UserProfile` ORDER BY `employeeid`") or die(mysqli_error());
                                                           $id = $fetch['employeeid'];
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                        <tr>


                                                            <td>
                                                                <?php echo $fetch['firstname']. " " .$fetch['middlename']. " " .$fetch['lastname']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['address']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['telephone']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['mobile']?>
                                                            </td>
                                                            <td>
                                                                <?php echo $fetch['position']?>
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
            document.getElementById("gender").value = "";
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

    <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
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





    <!-- Bootstrap Colorpicker Js -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>



    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
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

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
