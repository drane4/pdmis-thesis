    <div class="modal fade" id="employee_modal" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                     <div class="modal-content">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header bg-indigo">
                                                <h2>
                                                   Employee Reports
                                                    <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                                </h2>

                                            </div>
                                            <div class="body">
                                                <form target="_blank" class="form-horizontal page-content" form method="POST" action="print/employeereport.php">
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
                                                    <label for="">Employee Name</label>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <select class="form-control show-tick" data-live-search="true" name="employeeid" id="employeeid" title="&nbsp">
                                                               <option selected value> -- select an option -- </option>
                                                            <?php 

                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT * FROM `employeeprofile`") or die(mysqli_error());

                                                        while ($row = $query->fetch_array()){
                                                        ?>
                                                        <option value="<?php echo $row['employeeid']; ?>" 
                                                        <?php if($fetchp['employeeid']==$row['employeeid']) echo "selected"; ?>>
                                                        <?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname'] ?>
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
                                                            <button type="submit" class="btn bg-grey m-t-15 waves-effect" name="employeedetail1" style="width:80%; color:black">Employee Attendance</button> <br>
                                                               <button type="submit" class="btn bg-grey m-t-15 waves-effect" name="employeedetail2" style="width:70%; color:black">Employee Transactions</button>&nbsp;<button class="btn bg-grey m-t-15 waves-effect" name="employeechart"> <i class="material-icons">pie_chart</i></button>
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