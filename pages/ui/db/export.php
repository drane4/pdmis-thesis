<?php
ini_set('display_errors', 0);
include('../session.php'); 
$connection = mysqli_connect('localhost', 'root', '', 'pdmis');

$tables = array();
$result = mysqli_query($connection, "SHOW TABLES");
while ($row = mysqli_fetch_row($result)){
	$tables[] = $row[0];
}

$return = '';

foreach ($tables as $table) {
	$result = mysqli_query($connection, "SELECT * FROM ". $table);
	$num_fields = mysqli_num_fields($result);

	$return .= 'DROP TABLE '.$table.';';
	$row2 = mysqli_fetch_row(mysqli_query($connection, 'SHOW CREATE TABLE '.$table));
	$return .= "\n\n".$row2[1].";\n\n";

	for ($i=0;$i<$num_fields;$i++){
		while ($row = mysqli_fetch_row($result)){
			$return .= 'INSERT INTO '.$table.' VALUES(';
			for ($j=0;$j<$num_fields;$j++){
				$row[$j] = addslashes($row[$j]);
				if(isset($row[$j])){$return .= '"' .$row[$j]. '"';} else {$return .= '""';}
				if($j<$num_fields-1){$return .= ',';}
			}
			$return .="); \n";
		}
	}

	$return .="\n\n\n";
}
date_default_timezone_set('Asia/Manila');
$handle = fopen('pdmis_'.date('F-j-Y-g-i-a').'.sql','w+');
fwrite($handle, $return);
fclose($handle);

$conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
$connection = mysqli_connect('localhost', 'root', '', 'pdmis');
date_default_timezone_set('Asia/Manila');
$date = date("Y-m-d h:i a");    

$conn->query ("INSERT INTO `maintenance` (`employeeid`, `action`, `m_date`) VALUES ('$id', 'Export', '$date');") or die(mysqli_error());
echo "<script>alert('Successfully exported database')</script>";
echo "<script>document.location='../maintenance.php'</script>";
?>
