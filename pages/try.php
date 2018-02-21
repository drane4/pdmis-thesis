  <?php if(isset($_POST['dialysisdetail1'])): ?>
                    
                  <?php if(empty($_POST['patientid'])): ?>
        
                  <div id="printableArea">
                            <div class="body">
                            
                                    <div class="row clearfix">
                                         <div class="col-lg-12 col-md-12 center">
                                        <center>
                                        <h4>TERESITA L. JALANDONI PROVINCIAL HOSPITAL</h4>
                                        <h5>Rizal St, Silay City, Neg. Occ.</h5>
                                        <h5>Tel. No. 495-1704 / 495-1705 / 495-0096</h5>
                                        <h4>HEMODIALYSIS PATIENT CONFINEMENT RECORD</h4>

                                        </center>
                                        </div>
                                </div>
                                        
                                           <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h4>
                                                        <b>List of Patients</b>
                                                    </h4>

                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover js-basic-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>Hospital ID</th>
                                                                    <th>Name</th>
                                                                    <th>Date</th>

                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT `patientprofile`.`Hospital_Id`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`initialtestresult`.`initialtest_time`,`treatment`.`treatment_date` FROM `patientprofile` INNER JOIN `initialtestresult` ON `patientprofile`.`Hospital_Id` = `initialtestresult`.`Hospital_Id` INNER JOIN `treatment` ON `patientprofile`.`Hospital_Id` = `treatment`.`Hospital_Id`  WHERE `treatment`.`treatment_date` BETWEEN '$from' AND '$to' GROUP BY `treatment`.`treatment_date`") or die(mysqli_error());
                                                          // $id = $fetch['Hospital_Id'];
                                                            
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                                    <tr>

                                                                        <td>
                                                                            <?php echo $fetch['Hospital_Id']?>
                                                                        </td>
                                                                      <td>
                                                                            <?php echo $fetch['P_Fname']. " " .$fetch['P_Mname']. " " .$fetch['P_Lname']?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $fetch['treatment_date']?>
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
                                   <div class="row clearfix">
                                            <div class="col-lg-offset-10 col-xs-offset-10">
                                               <div class="row hidden-print mt-20">
                                                 
                                                   <a class="btn btn-primary btn-xs" onclick="printDiv('printableArea')" target="_blank"><i class="material-icons">print</i> Print</a>
                                                
                                                   
                                              </div>
                                         </div>
                                    </div>
                    
                         </div>
                  <?php else: ?>
                    
                    <div id="printableArea">
                        
                            <div class="body">
                            
                                    <div class="row clearfix">
                                         <div class="col-lg-12 col-md-12 center">
                                        <center>
                                        <h4>TERESITA L. JALANDONI PROVINCIAL HOSPITAL</h4>
                                        <h5>Rizal St, Silay City, Neg. Occ.</h5>
                                        <h5>Tel. No. 495-1704 / 495-1705 / 495-0096</h5>
                                        <h4>HEMODIALYSIS PATIENT CONFINEMENT RECORD</h4>
                                        </center>
                                        </div>
                                </div>
                                        
                                           <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h4>
                                                        <b>List of Patients</b>
                                                    </h4>

                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover js-basic-example">
                                                            <thead>
                                                                <tr>
                                                                    <th>Hospital ID</th>
                                                                    <th>Name</th>
                                                                    <th>Date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                        <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT `patientprofile`.`Hospital_Id`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`initialtestresult`.`initialtest_time`,`treatment`.`treatment_date` FROM `patientprofile` INNER JOIN `initialtestresult` ON `patientprofile`.`Hospital_Id` = `initialtestresult`.`Hospital_Id` INNER JOIN `treatment` ON `patientprofile`.`Hospital_Id` = `treatment`.`Hospital_Id` 
                                                           WHERE 
                                                                `treatment`.`treatment_date` BETWEEN '$from' AND '$to'
                                                                AND `treatment`.`Hospital_Id` = '$pname' 
                                                            GROUP BY `treatment`.`treatment_date`") or die(mysqli_error());
                                                        
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $fetch['Hospital_Id']?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $fetch['P_Fname']. " " .$fetch['P_Mname']. " " .$fetch['P_Lname']?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $fetch['treatment_date']?>
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
                                   <div class="row clearfix">
                                            <div class="col-lg-offset-10 col-xs-offset-10">
                                               <div class="row hidden-print mt-20">
                                                 
                                                   <a class="btn btn-primary btn-xs" onclick="printDiv('printableArea')" target="_blank"><i class="material-icons">print</i> Print</a>
                                                
                                                   
                                              </div>
                                         </div>
                                    </div>
                    
                         </div>
                  <?php endif ?>
        
        <?php elseif(isset($_POST['dialysisdetail2'])): ?>
           <?php if(empty($_POST['patientid'])): ?>
            
              
        <?php endif ?>