         <?php
                    $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                    $query = $conn->query("SELECT * FROM `laboratory` where `Hospital_Id` = '$H_id' ") or die(mysqli_error());
                    $fetch = $query ->fetch_array(); 
                    
                
                    $query1 = $conn->query("SELECT * FROM `laboratory_others` where `Hospital_Id` = '$H_id' ") or die(mysqli_error());
                    $fetch1 = $query1 ->fetch_array(); 
       ?>   


<style>
            .unstyled::-webkit-inner-spin-button,
            .unstyled::-webkit-calendar-picker-indicator {

                -webkit-appearance: none;
            }

        </style>
<div class="modal fade" id="laboratory_modal" role="dialog">
                <div class="modal-dialog modal-default" role="document">
          
                    
                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Laboratory
                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                     
                                            <li role="presentation" class="active"><a href="#bloodchem" data-toggle="tab">Blood Chemistry</a></li>
                                            <li role="presentation"><a href="#bloodcount" data-toggle="tab">Blood Count</a></li>
                                            <li role="presentation"><a href="#urinalysis" data-toggle="tab">Urinalysis</a></li>
                                            <li role="presentation"><a href="#others" data-toggle="tab">Others</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          
                                            
                                            <div role="tabpanel" class="tab-pane fade in active" id="bloodchem">
                                            
                                                 <form class="form-horizontal" form method="POST" action="save/savelaboratory.php?id=<?php echo $H_id ?>">
                                                      <div class="row clearfix">
                                                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Date </label>
                                                        </div>
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <div class="form-line">
                                                                    <input type="date" id="datebloodchem" name="datebloodchem" class="form-control unstyled" placeholder="" value="<?php echo $fetch['Laboratory_date']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                 <div class="row clearfix">
                                                       
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Creatinine </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="crea" name="crea" class="form-control" placeholder="" value="<?php echo $fetch['Creatinine']?>" autofocus>
                                                                </div>
                                                        </div>
                                                 
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">BUN </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="bun" name="bun" class="form-control" placeholder="" value="<?php echo $fetch['BUN']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                     <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Magnesium </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="mag" name="mag" class="form-control" placeholder="" value="<?php echo $fetch['Magnesium']?>" autofocus>
                                                                </div>
                                                        </div>
                                                  
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Calcium </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="cal" name="cal" class="form-control" placeholder="" value="<?php echo $fetch['Calcium']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                     <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Phosphorus </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="phos" name="phos" class="form-control" placeholder="" value="<?php echo $fetch['Phosphorus']?>" autofocus>
                                                                </div>
                                                        </div>
                                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Potassium </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="pot" name="pot" class="form-control" placeholder="" value="<?php echo $fetch['Potassium']?>" autofocus>
                                                                </div>
                                                        </div>
                                                   
                                                    </div>
                                                      <div class="row clearfix">
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Sodium </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="sod" name="sod" class="form-control" placeholder="" value="<?php echo $fetch['Sodium']?>" autofocus>
                                                                </div>
                                                        </div>
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">TCholesterol </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="tchol" name="tchol" class="form-control" placeholder="" value="<?php echo $fetch['TCholesterol']?>" autofocus>
                                                                </div>
                                                        </div>

                                                    </div>
                                                      <div class="row clearfix">
                                                        
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Triglycerides </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="trig" name="trig" class="form-control" placeholder="" value="<?php echo $fetch['Triglycerides']?>" autofocus>
                                                                </div>
                                                        </div>
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">HDL </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="hdl" name="hdl" class="form-control" placeholder="" value="<?php echo $fetch['HDL']?>" autofocus>
                                                                </div>
                                                        </div>
                                                  
                                                    
                                                       
                                                    </div>
                                                      <div class="row clearfix">
                                                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">LDL </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="ldl" name="ldl" class="form-control" placeholder="" value="<?php echo $fetch['LDL']?>" autofocus>
                                                                </div>
                                                        </div>
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">FBS </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="fbs" name="fbs" class="form-control" placeholder="" value="<?php echo $fetch['FBS']?>" autofocus>
                                                                </div>
                                                        </div>
                                                   
                                                    
                                                    </div>
                                                      <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">RBS </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="rbs" name="rbs" class="form-control" placeholder="" value="<?php echo $fetch['rbs']?>" autofocus>
                                                                </div>
                                                        </div>
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Uric Acid </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="uric" name="uric" class="form-control" placeholder="" value="<?php echo $fetch['uric']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                  <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                            <button type="bloodchem" class="btn btn-primary m-t-15 waves-effect" name="bloodchem"><i class="material-icons">save</i>Save</button> &nbsp;
                                                        </div>
                                                  </div>
                                                 </form>
                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="bloodcount">
                                                
                                                 
                                             <form class="form-horizontal" form method="POST" action="save/savelaboratory.php?id=<?php echo $H_id ?>">
                                                <div class="row clearfix">
                                                            <div class="row clearfix">
                                                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Date </label>
                                                        </div>
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="datebloodcount" name="datebloodcount" class="form-control unstyled" placeholder="" value="<?php echo $fetch['Laboratory_date']?>" autofocus>
                                                                </div>
                                                         </div>
                                                    </div>
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">RBC Blood</label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="rbc" name="rbc" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                 
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">WBC </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="wbc" name="wbc" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                     <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Hemoglobin </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="hemog" name="hemog" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                 
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Hematocrit </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="hema" name="hema" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                               <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Platelet Count </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="platelet" name="platelet" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                 
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Polys </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="polys" name="polys" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                         <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Lymph </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="lymph" name="lymph" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                 
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Eosinophyl </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="eosi" name="eosi" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                               <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Monocytes </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="mono" name="mono" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Basophyl </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="baso" name="baso" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                            
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                  <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                            <button type="bloodcount" class="btn btn-primary m-t-15 waves-effect" name="bloodcount"><i class="material-icons">save</i>Save</button> &nbsp;
                                                        </div>
                                                  </div>
                                                 </form>
                                         
                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="urinalysis">
                                                   <form class="form-horizontal" form method="POST" action="save/savelaboratory.php?id=<?php echo $H_id ?>">
                                                <div class="row clearfix">
                                                           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Date </label>
                                                        </div>
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="dateurine" name="dateurine" class="form-control unstyled" placeholder="" value="<?php echo $fetch['Laboratory_date']?>" autofocus>
                                                                </div>
                                                         </div>
                                                    </div>
                                                  <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">pH </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="ph" name="ph" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                 
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Sp Gravity </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="sp" name="sp" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                          <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Albumin </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="alb" name="alb" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                 
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Sugar </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="sugar" name="sugar" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                       <div class="row clearfix">
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">PlusCells </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="plus" name="plus" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                 
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">RBC Urine </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="rbc" name="rbc" class="form-control" placeholder="" value="<?php echo $fetch['']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                  <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                            <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="urinalysis"><i class="material-icons">save</i>Save</button> &nbsp;
                                                        </div>
                                                  </div>
                                                 </form>
                                         
                                            </div>
                                                      <div role="tabpanel" class="tab-pane fade in" id="others">
                                                   <form class="form-horizontal" method="POST" action="save/savelaboratory.php?id=<?php echo $H_id ?>">
                                              
                                                  
                                                   <div class="row">
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="">Date</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                                                         <div class="form-line">
                                                         <select class="form-control show-tick" name="dateothers" data-live-search="true" id="dateothers" title="&nbsp" required>
                                                                    <ul class="dropdown-menu">
                                                            <option class="hidden"></option>
                                                        <?php 
                                                          $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                                                          $query = $conn->query("SELECT `Laboratory_date` FROM `laboratory` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                                                        while ($row = $query->fetch_array()){
                                                            
                                                        ?>
                                                        <option value="<?php echo $row['Laboratory_date']?>" 
                                                        <?php if($fetch['Laboratory_date']==$row['Laboratory_date']) echo "selected"; ?>>
                                                        <?php
                                                           
                                                            echo $row['Laboratory_date'];
                                                            ?>
                                                        </option>
                                                        <?php
                                                        }
                                                    ?>
                                                                    </ul>
                                                            </select>
                                                            </div>
                                                        </div>
                                                      
                                                      </div>
                                                      
                                                      
                                                          <div class="row clearfix">
                                                      
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Description </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="desc" name="desc" class="form-control" placeholder="" value="<?php echo $fetch1['description']?>" autofocus>
                                                                </div>
                                                        </div>
                                                 
                                                    
                                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label">
                                                            <label for="email_address_2">Value </label>
                                                        </div>
                                                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="val" name="val" class="form-control" placeholder="" value="<?php echo $fetch1['value']?>" autofocus>
                                                                </div>
                                                        </div>
                                                    </div>
                                                       
                                               
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                          
                                                          <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields1()"> 
                                                              <i class="material-icons">description</i>Clear
                                                          </button> &nbsp;
                                                            
                                                          <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="others">
                                                              <i class="material-icons">save</i>Save</button> &nbsp;
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
                </div>
            </div>


<?php //---------------------------------------------------------------------------------- pateint ?>
  <script>
      
        
        function ClearFields2() {
               document.getElementById("").value = "";
                document.getElementById("").value = "";
                  
             
               
            }
      
      function ClearFields1() {
               document.getElementById("desc").value = "";
                document.getElementById("val").value = "";
                  
             
               
            }
        </script>