    <div class="modal fade" id="dialysisreport_modal" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                     <div class="modal-content">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header bg-indigo">
                                                <h2>
                                                   Dialysis Reports

                                                    <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                </h2>

                                            </div>
                                            <div class="body">
                                                <form target="_blank" class="form-horizontal page-content" form method="POST" action="print/dialysissummaryreport.php">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">From</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" class="form-control unstyled" name="reportdate1" id="reportdate1" value="" style="padding-right:0">
                                                                </div>
                                                           
                                                        </div>
                                                         <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                                                            <label for="email_address_2">To</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                       
                                                                <div class="form-line">
                                                                    <input type="date" class="form-control unstyled" name="reportdate2" id="reportdate2" value="" style="padding-right:0">
                                                                </div>
                                                     
                                                        </div>

                                                    </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                    <label for="">Patient Name</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select class="form-control show-tick" data-live-search="true" name="patientid" id="patientid" title="&nbsp">
                                         
                                                        <?php 

                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `patientprofile`") or die(mysqli_error());

                                                        while ($row = $query->fetch_array()){
                                                        ?>
                                                        <option value="<?php echo $row['Hospital_Id']; ?>" 
                                                        <?php if($fetch['Hospital_Id']==$row['Hospital_Id']) echo "selected"; ?>>
                                                        <?php echo $row['P_Fname']." ".$row['P_Mname']." ".$row['P_Lname'] ?>
                                                        </option>
                                                        <?php
                                                        
                                                        }
                                                    ?>
                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                    <div class="row clearfix">
                                                       <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3">
                                                            <button type="submit" class="btn bg-grey m-t-15 waves-effect" name="dialysisdetail1" style="width:80%; color:black">Patient Dialysis Summary</button> <br>
                                                           <button type="submit" class="btn bg-grey m-t-15 waves-effect" name="dialysisdetail2" style="width:80%; color:black">Patient Weight Summary</button> <br>
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

<script>
$(document).ready(function() {
    $('#myform').submit(function() {
        window.open('', 'formpopup', 'width=400,height=400,resizeable,scrollbars');
        this.target = 'formpopup';
    });
});
        
</script>