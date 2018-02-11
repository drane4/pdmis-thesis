
                
                    <div class="modal fade" id="hepa_modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-default" role="document">

                            <div class="modal-content">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header bg-indigo">
                                                <h2>
                                                    Update Hepatitis Profile

                                                    <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                </h2>

                                            </div>
                                            <div class="body">
                                                <form class="form-horizontal page-content" form method="POST" action="save/savehepaprofile.php?id=<?php echo $H_id ?>">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            <label for="email_address_2">Date</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height: 16px;padding-right: 0px;">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="date" class="form-control unstyled" name="hepatitisdate" id="hepatitisdate" value="" style="padding-right:0" required>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            <label for="email_address_2">HBsAg</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                            <select class="form-control show-tick" name="hbsag" id="hbsag" value="" required>
                                                                    <option value="" disabled selected hidden>Select: </option> 
                                                                    <option Value="r">R</option>
                                                                    <option Value="nr">NR</option>    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            <label for="email_address_2">Anti-HBs</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                            <select class="form-control show-tick" name="antihbs" id="antihbs" value="" required>
                                                                    <option value="" disabled selected hidden>Select: </option> 
                                                                    <option Value="r">R</option>
                                                                    <option Value="nr">NR</option>    
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            <label for="email_address_2">HCV</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                            <select class="form-control show-tick" name="hcv" id="hcv" value="" required>
                                                                    <option value="" disabled selected hidden>Select: </option> 
                                                                    <option Value="r">R</option>
                                                                    <option Value="nr">NR</option>    
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            <label for="email_address_2">HIV</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                            <select class="form-control show-tick" name="hiv" id="hiv" value="" required>
                                                                    <option value="" disabled selected hidden>Select: </option> 
                                                                    <option Value="r">R</option>
                                                                    <option Value="nr">NR</option>    
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="row clearfix">
                                                        <div class="col-lg-offset-7 col-xs-offset-4">
                                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
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
                    <?php
                          $date = date("Y-m-d");
                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                            $queryhepa = $conn->query("SELECT * FROM `hepatitisprofile` WHERE `Hospital_Id` = '$H_id' ORDER BY `hepatitisprofile_id`") or die(mysqli_error());
                            
                             while($fetchhepa = $queryhepa ->fetch_array()){
                                                                ?>
                        <div class="modal fade" id="hepa_modal<?php echo $fetchhepa['hepatitisprofile_id']?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-default" role="document">

                                <div class="modal-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h2>
                                                        Update Hepatitis Profile

                                                        <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                    </h2>

                                                </div>

                                                <div class="body">
                                                    <form class="form-horizontal page-content" form method="POST" action="save/savehepaprofile.php?id=<?php echo $H_id." | ".$fetchhepa['hepatitisprofile_id'] ?>">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Date</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="height: 16px;padding-right: 0px;">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="date" class="form-control unstyled" name="hepatitisdate" id="hepatitisdate" value="<?php echo $fetchhepa['hepatitisdate']?>" style="padding-right:0" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">HBsAg</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <select class="form-control show-tick" name="hbsag" id="hbsag" required>
                                                                    
                                                                    <option Value="r" <?php if($fetchhepa['HbsAg'] == 'r') echo "selected"; ?>>R</option>
                                                                    <option Value="nr" <?php if($fetchhepa['HbsAg'] == 'nr') echo "selected"; ?>>NR</option>    
                                                            </select>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label" required>
                                                                <label for="email_address_2">Anti-HBs</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <select class="form-control show-tick" name="antihbs" id="antihbs">

                                                                    <option Value="r" <?php if($fetchhepa['AntiHBs'] == 'r') echo "selected"; ?>>R</option>
                                                                    <option Value="nr" <?php if($fetchhepa['AntiHBs'] == 'nr') echo "selected"; ?>>NR</option>    
                                                            </select>
                                                            </div>

                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label" required>
                                                                <label for="email_address_2">HCV</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <select class="form-control show-tick" name="hcv" id="hcv">
                                                                    <option value="" disabled selected hidden>Select: </option> 
                                                                    <option Value="r" <?php if($fetchhepa['HCV'] == 'r') echo "selected"; ?>>R</option>
                                                                    <option Value="nr" <?php if($fetchhepa['HCV'] == 'nr') echo "selected"; ?>>NR</option>    
                                                            </select>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">HIV</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <select class="form-control show-tick" name="hiv" id="hiv" required>
                                                                    <option value="" disabled selected hidden>Select: </option> 
                                                                    <option Value="r" <?php if($fetchhepa['HIV'] == 'r') echo "selected"; ?>>R</option>
                                                                    <option Value="nr" <?php if($fetchhepa['HIV'] == 'nr') echo "selected"; ?>>NR</option>    
                                                            </select>
                                                            </div>
                                                        </div>


                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-7 col-xs-offset-4">
                                                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
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
                        <?php }?>
                        <div class="modal fade" id="drug_modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-default" role="document">

                                <div class="modal-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h2>
                                                        Update Patient Drug Profile

                                                        <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                    </h2>

                                                </div>
                                                <div class="body">
                                                    <form class="form-horizontal page-content" form method="POST" action="save/savedrugprofile.php?id=<?php echo $H_id ?>">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Drug</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="drug" id="drug" value="<?php echo $fetch['']?>" autofocus required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Strength</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="strength" id="strength" value="<?php echo $fetch['']?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Dosage</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="dosage" id="dosage" value="<?php echo $fetch['']?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Frequency</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="freq" id="freq" value="<?php echo $fetch['']?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Route of Admin</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="roa" id="roa" value="<?php echo $fetch['']?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Date Ordered</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="date" class="form-control unstyled" name="dateordered" id="dateordered" value="<?php echo $fetch['']?>" style="padding-right:0" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Remarks</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <textarea rows="1" name="remark" id="remark" class="form-control no-resize auto-growth"><?php echo $fetch['']?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Date Description</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="datedesc" id="datedesc" value="<?php echo $fetch['']?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">PRN</label>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="PRN" id="PRN" value="<?php echo $fetch['']?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                <label for="email_address_2">Physician</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                                                <select class="form-control show-tick" name="nephrologistid" id="nephrologistid" title="&nbsp" data-live-search="true" required>
                                         
                                                        <?php 

                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `nephrologist`") or die(mysqli_error());
                                                    
                                                        while ($row = $query->fetch_array()){

                                                        ?>
                                                        <option value="<?php echo $row['nephrologistid']; ?>" 
                                                        <?php if($fetch4['nephrologistid']==$row['nephrologistid']) echo "selected"; ?>>
                                                        <?php echo $row['n_fname']." ".$row['n_mname']." ".$row['n_lname'] ?>


                                                        </option>

                                                        <?php
                                                        
                                                        }
                                                    ?>
                                            </select>
                                                            </div>

                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-7 col-xs-offset-4">
                                                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="drug"><i class="material-icons">save</i>Save</button> &nbsp;
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

                        <!-- #Add modal area -->
       
                        <div class="modal fade" id="defaultModal" role="dialog">
                            <div class="modal-dialog modal-default" role="document">

                                <div class="modal-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h2>
                                                        Find Patient

                                                        <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                    </h2>

                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Hospital ID</th>
                                                                    <th>LastName</th>
                                                                    <th>FirstName</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `patientprofile` ORDER BY `Hospital_Id`") or die(mysqli_error());
                                                           $id = $fetch['Hospital_Id'];
                                                           while($fetch = $query ->fetch_array()){
                                                        ?>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="PatientProfile.php?id=<?php echo $fetch['Hospital_Id']." | "."patientinfo "?>">
                                                                                <?php echo $fetch['Hospital_Id']?>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="PatientProfile.php?id=<?php echo $fetch['Hospital_Id']." | "."patientinfo "?>">
                                                                                <?php echo $fetch['P_Lname']?>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="PatientProfile.php?id=<?php echo $fetch['Hospital_Id']." | "."patientinfo "?>">
                                                                                <?php echo $fetch['P_Fname']?>
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
                        <div class="modal fade" id="patientlist" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">

                                <div class="modal-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h2>
                                                        List of Patients

                                                        <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                    </h2>

                                                </div>
                                                <div class="body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>Hospital ID</th>
                                                                    <th>Name</th>
                                                                    <th>Address</th>
                                                                    <th>Contact #</th>



                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                           $query = $conn->query("SELECT * FROM `patientprofile` ORDER BY `Hospital_Id`") or die(mysqli_error());
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
                                                                            <?php echo $fetch['P_PermanentAdd']?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $fetch['P_ConNum1']?>
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
                        <div class="modal fade" id="problemlist_modal" role="dialog">
                            <div class="modal-dialog modal-default" role="document">

                                <div class="modal-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h2>
                                                        Update Problem List
                                                        <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                    </h2>

                                                </div>
                                                <div class="body">
                                                    <?php $a = ".0"?>
                                                    <form class="form-horizontal page-content" form method="POST" action="save/saveproblemlist.php?id=<?php echo $H_id." | ".$a ?>">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label for="problem">Problem Encountered</label>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 form-control-label ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="problem" id="problem" value="<?php echo $fetch['problem']?>" autofocus required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label ">
                                                                <label for="date">Date Noted</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="date" class="form-control unstyled" name="datenoted" id="datenoted" value="<?php echo $fetch['datenoted']?>" style="padding-right:0" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label ">
                                                                <label for="date">Date Resolved</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="date" class="form-control unstyled" name="dateresolved" id="dateresolved" value="<?php echo $fetch['dateresolved']?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-7 col-xs-offset-4">
                                                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
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
                        <div class="modal fade" id="confinement_modal" role="dialog">
                            <div class="modal-dialog modal-default" role="document">

                                <div class="modal-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="header bg-indigo">
                                                    <h2>
                                                        Update Confinement
                                                        <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                    </h2>
                                                </div>
                                                <div class="body">
                                                    <?php $a = ".0"?>
                                                    <form class="form-horizontal page-content" form method="POST" action="save/saveconfinement.php?id=<?php echo $H_id." | ".$a ?>">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <label for="problem">Hospital Name</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="hospitalname" id="hospitalname" value="" autofocus required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label ">
                                                                <label for="date">Date of Confinement</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="date" class="form-control unstyled" name="confinementdate" id="confinementdate" value="" style="padding-right:0" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label ">
                                                                <label for="date">Reason of Confinement</label>
                                                            </div>

                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 form-control-label ">

                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" name="confinementreason" id="confinementreason" value="" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-offset-8 col-xs-offset-8">
                                                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
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

                        <!-- #Edit modal area -->
                        <?php
                     $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                     $querydrug = $conn->query("SELECT * FROM `patientdrugprofile`") or die(mysqli_error());
                       while($fetchdrug = $querydrug ->fetch_array()){
                                                        ?>
                            <div class="modal fade" id="drug_modal<?php echo $fetchdrug['drugprofile_id']?>" role="dialog">
                                <div class="modal-dialog modal-default" role="document">

                                    <div class="modal-content">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="header bg-indigo">
                                                        <h2>
                                                            Update Patient Drug Profile

                                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                        </h2>

                                                    </div>
                                                    <div class="body">
                                                        <form class="form-horizontal page-content" form method="POST" action="save/savedrugprofile.php?id=<?php echo $H_id." | ".$fetchdrug['drugprofile_id'] ?>">
                                                            <?php 
                                                    $split = $fetchdrug['drug_strength'];
                                                        list($drug ,$strength) = explode(" ", $split);
                                                    ?>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">Drug</label>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="drug" id="drug" value="<?php echo $drug?>" autofocus required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">Strength</label>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="strength" id="strength" value="<?php echo $strength?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">Dosage</label>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="dosage" id="dosage" value="<?php echo $fetchdrug['dosage']?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">Frequency</label>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="freq" id="freq" value="<?php echo $fetchdrug['frequency']?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">Route of Admin</label>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="roa" id="roa" value="<?php echo $fetchdrug['ROA']?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">Date Ordered</label>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="date" class="form-control unstyled" name="dateordered" id="dateordered" value="<?php echo $fetchdrug['dateordered']?>" style="padding-right:0" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">Remarks</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <textarea rows="1" name="remark" id="remark" class="form-control no-resize auto-growth"><?php echo $fetchdrug['remarks']?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">Date Description</label>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="datedesc" id="datedesc" value="<?php echo $fetchdrug['datediscription']?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">PRN</label>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                                                                    <div class="form-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" name="PRN" id="PRN" value="<?php echo $fetchdrug['PRN']?>" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                                    <label for="email_address_2">Physician</label>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                                                    <select class="form-control show-tick" name="nephrologistid" id="nephrologistid" title="&nbsp" data-live-search="true" required>
                                         
                                                        <?php 

                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `nephrologist`") or die(mysqli_error());
                                                    
                                                        while ($row = $query->fetch_array()){

                                                        ?>
                                                        <option value="<?php echo $row['nephrologistid']; ?>" 
                                                        <?php if($fetchdrug['nephrologistid']==$row['nephrologistid']) echo "selected"; ?>>
                                                        <?php echo $row['n_fname']." ".$row['n_mname']." ".$row['n_lname'] ?>


                                                        </option>

                                                        <?php
                                                        
                                                        }
                                                    ?>
                                            </select>
                                                                </div>

                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-offset-7 col-xs-offset-4">
                                                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
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
                            <?php
                       }
                        $conn->close();
                        ?>
                                <?php
                         $date = date("Y-m-d");
                         $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                          $query = $conn->query("SELECT * FROM `confinement` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                                 while($fetch = $query ->fetch_array()){
                         ?>
                                    <div class="modal fade" id="confinement_modal<?php echo $fetch['confinement_id'];?>" role="dialog">
                                        <div class="modal-dialog modal-default" role="document">

                                            <div class="modal-content">
                                                <div class="row clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="card">
                                                            <div class="header bg-indigo">
                                                                <h2>
                                                                    Update Confinement
                                                                    <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                                </h2>
                                                            </div>
                                                            <div class="body">

                                                                <form class="form-horizontal page-content" form method="POST" action="save/saveconfinement.php?id=<?php echo $H_id." | ".$fetch['confinement_id'] ?>">
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                            <label for="problem">Hospital Name</label>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="hospitalname" id="hospitalname" value="<?php echo $fetch['hospitalname']?>" autofocus required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label ">
                                                                            <label for="date">Date of Confinement</label>
                                                                        </div>
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="date" class="form-control unstyled" name="confinementdate" id="confinementdate" value="<?php echo $fetch['confinementdate']?>" style="padding-right:0" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label ">
                                                                            <label for="date">Reason of Confinement</label>
                                                                        </div>

                                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 form-control-label ">

                                                                            <div class="form-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" name="confinementreason" id="confinementreason" value="<?php echo $fetch['confinementreason']?>" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-offset-8 col-xs-offset-8">
                                                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
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
                                    <?php
                       }
                        $conn->close();
                        ?>
                                        <?php
                       $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                       $query = $conn->query("SELECT * FROM `problemlist` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());                  while($fetch = $query ->fetch_array()){
                     ?>
                                            <div class="modal fade" id="problemlist_modal<?php echo $fetch['problemlist_id'];?>" role="dialog">
                                                <div class="modal-dialog modal-default" role="document">

                                                    <div class="modal-content">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card">
                                                                    <div class="header bg-indigo">
                                                                        <h2>
                                                                            Update Problem List
                                                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                                        </h2>

                                                                    </div>
                                                                    <div class="body">
                                                                        <?php $a = ".0"?>
                                                                        <form class="form-horizontal page-content" form method="POST" action="save/saveproblemlist.php?id=<?php echo $H_id." | ".$fetch['problemlist_id'] ?>">
                                                                            <div class="row clearfix">
                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                                    <label for="problem">Problem Encountered</label>
                                                                                </div>
                                                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 form-control-label ">
                                                                                    <div class="form-group">
                                                                                        <div class="form-line">
                                                                                            <input type="text" class="form-control" name="problem" id="problem" value="<?php echo $fetch['problem']?>" autofocus required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row clearfix">
                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label ">
                                                                                    <label for="date">Date Noted</label>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                    <div class="form-group">
                                                                                        <div class="form-line">
                                                                                            <input type="date" class="form-control unstyled" name="datenoted" id="datenoted" value="<?php echo $fetch['datenoted']?>" style="padding-right:0" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row clearfix">
                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label ">
                                                                                    <label for="date">Date Resolved</label>
                                                                                </div>
                                                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                                                                    <div class="form-group">
                                                                                        <div class="form-line">
                                                                                            <input type="date" class="form-control unstyled" name="dateresolved" id="dateresolved" value="<?php echo $fetch['dateresolved']?>" required>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row clearfix">
                                                                                <div class="col-lg-offset-7 col-xs-offset-4">
                                                                                    <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit"><i class="material-icons">save</i>Save</button> &nbsp;
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
                                            <?php
                       }
                        $conn->close();
                        ?>


