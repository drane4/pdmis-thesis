  <?php
            
                $list = array();
                $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                $query1 = $conn->query("SELECT `cardiacrate` FROM `initialtestresult` where `Hospital_Id` = '$_GET[id]' GROUP BY cardiacrate") or die(mysqli_error());
                                                          
                while($fetch1 = $query1 ->fetch_array()){
                    array_push($list, $fetch1['cardiacrate']."");
                } 
                

            ?>