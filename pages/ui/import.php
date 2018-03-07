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
<?php 
include('session.php');   
$conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d h:i a");    


$conn->query ("INSERT INTO `maintenance` (`employeeid`, `action`, `m_date`) VALUES ('$id', 'Import', '$date');") or die(mysqli_error());




$connection = mysqli_connect('localhost', 'root', '', 'pdmis');


$filename = "pdmis.sql";
$handle = fopen($filename,'r+');
$contents = fread($handle,filesize($filename));

$sql = explode(';',$contents);
foreach($sql as $query){

	$result = mysqli_query($connection,$query);
	
}

fclose($handle);

echo "<script>alert('Successfully imported database')</script>";
echo "<script>document.location='maintenance.php'</script>";

?>