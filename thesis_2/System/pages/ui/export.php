
<?php

include('session.php');   
  $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
$connection = mysqli_connect('localhost', 'root', '', 'pdmis');
$date = date("Y-m-d");    


$conn->query ("INSERT INTO `maintenance` (`employeeid`, `action`, `m_date`, `name`) VALUES ('$id', 'Export', '$date' ,'$name');") or die(mysqli_error());


 



//get all tables
$tables = array();
$result = mysqli_query($connection,"SHOW TABLES");
while($row = mysqli_fetch_row($result)){
	$tables[] = $row[0];
}

$return = '';
foreach($tables as $table){
	$result = mysqli_query($connection,"select * from ".$table);
	$num_fields = mysqli_num_fields($result);

	//$return .= 'DROP TABLE '.$table.';';
	$row2 = mysqli_fetch_row(mysqli_query($connection,'SHOW CREATE TABLE '.$table));
	$return .= "

".$row2[1].";

";

	for($i=0;$i<$num_fields;$i++){
		while($row = mysqli_fetch_row($result)){
			$return .= "INSERT INTO ".$table." VALUES(";
			for($j=0;$j<$num_fields;$j++){
				$row[$j] = addslashes($row[$j]);
				if(isset($row[$j])){ $return .='"'.$row[$j].'"';}else{ $return .= '""';}
				if($j<$num_fields-1){ $return .= ',';}
			}
			$return .= ");
";
		}
	}
	$return .= "


";
}
//save file
$handle = fopen('pdmis.sql','w+');
fwrite($handle,$return);
fclose($handle);


header("Location: maintenance.php");
exit;


?>
