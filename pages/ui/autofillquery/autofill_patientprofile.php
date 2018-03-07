<?php 
       
                $list1 = array();
                $list2 = array();
                $list3 = array();
                $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                $query1 = $conn->query("SELECT `esrd_others`,`dur_others`,`freq_others` FROM `hemo_order` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                                                          
                while($fetch1 = $query1 ->fetch_array()){
                    array_push($list1, $fetch1['esrd_others']."");
                    array_push($list2, $fetch1['dur_others']."");
                    array_push($list3, $fetch1['freq_others']."");
                   
                } 

                
                $list4 = array();
                $list5 = array();
                $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                $query1 = $conn->query("SELECT `PIO_others`,`PSH_others` FROM `diagnostic/examination` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                                                          
                while($fetch2 = $query1 ->fetch_array()){
                    array_push($list4, $fetch2['PIO_others']."");
                    array_push($list5, $fetch2['PSH_others']."");
               
                   
                } 
                  
                $list6 = array();
                $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                $query2 = $conn->query("SELECT `P_Religion` as `rel` FROM `patientprofile` GROUP BY `rel`") or die(mysqli_error());
                           
                while($fetch3 = $query2 ->fetch_array()){
                    array_push($list6, $fetch3['rel']."");
  
                } 
                $list7 = array();
                $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                $query3 = $conn->query("SELECT `P_nationality` as `nat` FROM `patientprofile` GROUP BY `nat`") or die(mysqli_error());
                           
                while($fetch4 = $query3 ->fetch_array()){
                    array_push($list7, $fetch4['nat']."");
  
                } 


?>