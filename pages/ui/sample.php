<?php 
	include 'queries/laboratory_query.php';    

?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    font-size: 12px;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<?php 
                                                        $H_id = '01-26-22';
	                                                   $dateArray = getDates($H_id);
	                                                   $columnCount = count($dateArray);
                                                                   
                                                    ?>
                                                
                                                <?php if( !empty($dateArray) ){ ?>
                                                <table>
                                                        <tr>
                                                            <th>Date</th>

                                                            <?php 
    	                                                       foreach ($dateArray as $d) {
                                                                   echo '<th>'.$d['Laboratory_date'].'</th>';
                                                               }
                                                            ?>
                                                        </tr>

                                                        <?php
                                                        $column = array("Creatinine", "BUN", "Magnesium", "Calcium", "Phosphorus", "Sodium", "TCholesterol", "Triglycerides", "HDL", "LDL", "FBS", "RBS", "UricAcid", "RBC Blood", "WBC", "Hemoglobin", "Hematocrit", "PlateletCount", "Polys", "Lymph", "Eosinophyl", "Monocytes", "Basophil", "pH", "Sp Gravity", "Albumin", "Sugar", "PlusCells", "RBC Urine", "Hospital_Id", "Laboratory_date", "Laboratory_id");
	                                                       $size = count($column);
  	
                                                        for($i=0;$i < $size;$i++){
  		                                                    //echo $column[$i];
                                                            if($i == 0){
                                                                echo '<tr>
                                                                <td style="background-color:teal;color:#fff;" colspan="'. (1 + $columnCount) .'" >BLOOD CHEMISTRY</td>
                                                                </tr>';
                                                            }else if($i == 13){
                                                                echo '<tr>
                                                                <td style="background-color:teal;color:#fff;" colspan="'. (1 + $columnCount) .'" >BLOOD COUNT</td>
                                                                </tr>';
  	                                                         }
                                                            else if($i == 23){
                                                                echo '<tr>
                                                                <td style="background-color:teal;color:#fff;" colspan="'. (1 + $columnCount) .'" >Urinalysis</td>
                                                                </tr>';
  	                                                         }
  	                                                         echo '<tr>
  	                                                         <td>'.$column[$i].'</td>';
  	
  		                                                        $r = str_replace(' ', '', $column[$i]);
  		                                                        $array = getCreatinine($r, $H_id);
  		
    	                                                           foreach ($array as $x) {
                                                                       echo '<td><a href="#">'.$x[$r].'</href></td>';	
                                                                   }
    
  	                                                                 echo '</tr>';
                                                                        }
                                                            ?>
                                                    </table>
                                                <?php }else{ ?>
                                                    <center>
                                                        <p>No Record. Add New Record</p>
                                                    </center>
                                                <?php } ?>

</body>
</html>