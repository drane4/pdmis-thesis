    <div class="modal fade" id="immunization_modal" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Immunization Profile
                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                     
                                            <li role="presentation" class="active"><a href="#hepa" data-toggle="tab">Hepatitis B</a></li>
                                            <li role="presentation"><a href="#influe" data-toggle="tab">Influenza</a></li>
                                            <li role="presentation"><a href="#pneumon" data-toggle="tab">Pneumococcal</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          
                                            
                                            <div role="tabpanel" class="tab-pane fade in active" id="hepa">
                                            
                                                 <form class="form-horizontal" form method="POST" action="save/saveimmunization.php?id=<?php echo $H_id ?>">
                                              <div class="row clearfix">
                                                 
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Description </label>
                                                        </div>
                                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                <select required class="form-control show-tick" id="description" name="description" title="&nbsp;">
                                                                       <option value="1">1st Dose</option>
                                                                       <option value="2">2nd Dose</option>
                                                                       <option value="3">3rd Dose</option>
                                                                       <option value="b">Booster Dose</option>
                                                                    </select>
                                                                </div>
                                                    </div>
                                                 <div class="row clearfix">
                                                    
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Administered by </label>
                                                        </div>
                                                       
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="administered" name="administered" class="form-control" placeholder="" value="<?php echo $fetch5['initialtemperature']?>" autofocus>
                                                                </div>
                                                           
                                                        </div>
                                                         
                                                     
                                           
                                                    </div>
                                                 <div class="row clearfix">
                                                 
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Date Recieved </label>
                                                        </div>
                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="datereceived" name="datereceived" class="form-control unstyled" placeholder="" value="<?php echo $fetch5['initialtemperature']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                                 <div class="row clearfix">
                                                        
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Next Dose Due on: </label>
                                                        </div>
                                                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="nddo" name="nddo" class="form-control unstyled" placeholder="" value="<?php echo $fetch5['initialtemperature']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                               
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                  <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                            <button type="hepatitis" class="btn btn-primary m-t-15 waves-effect" name="hepatitis"><i class="material-icons">save</i>Save</button> &nbsp;
                                                        </div>
                                                  </div>
                                                 </form>
                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="influe">
                                                
                                                 
                                                        <form class="form-horizontal" form method="POST" action="save/saveimmunization.php?id=<?php echo $H_id ?>">
                                            
                                                 <div class="row clearfix">
                                                    
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Administered by </label>
                                                        </div>
                                                       
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="administeredimmune" name="administeredimmune" class="form-control" placeholder="" value="<?php echo $fetch5['initialtemperature']?>" autofocus>
                                                                </div>
                                                           
                                                        </div>
                                                         
                                                     
                                           
                                                    </div>
                                                 <div class="row clearfix">
                                                 
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Date Recieved </label>
                                                        </div>
                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="datereceivedimmune" name="datereceivedimmune" class="form-control unstyled" placeholder="" value="<?php echo $fetch5['initialtemperature']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                                 <div class="row clearfix">
                                                        
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Next Dose Due on: </label>
                                                        </div>
                                                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="nddoimmune" name="nddoimmune" class="form-control unstyled" placeholder="" value="<?php echo $fetch5['initialtemperature']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                               
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                  <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                            <button type="immunization" class="btn btn-primary m-t-15 waves-effect" name="immunization"><i class="material-icons">save</i>Save</button> &nbsp;
                                                        </div>
                                                  </div>
                                                 </form>
                                         
                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="pneumon">
                                                   <form class="form-horizontal" form method="POST" action="save/saveimmunization.php?id=<?php echo $H_id ?>">
                                                 <div class="row clearfix">
                                                    
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Administered by </label>
                                                        </div>
                                                       
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="administeredpneumon" name="administeredpneumon" class="form-control" placeholder="" value="<?php echo $fetch5['initialtemperature']?>" autofocus>
                                                                </div>
                                                           
                                                        </div>
                                                         
                                                     
                                           
                                                    </div>
                                                 <div class="row clearfix">
                                                 
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Date Recieved </label>
                                                        </div>
                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="datereceivedpneumon" name="datereceivedpneumon" class="form-control unstyled" placeholder="" value="<?php echo $fetch5['initialtemperature']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                                 <div class="row clearfix">
                                                        
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Next Dose Due on: </label>
                                                        </div>
                                                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="nddopneumon" name="nddopneumon" class="form-control unstyled" placeholder="" value="<?php echo $fetch5['initialtemperature']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                  <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                            <button type="pneumococcal" class="btn btn-primary m-t-15 waves-effect" name="pneumococcal"><i class="material-icons">save</i>Save</button> &nbsp;
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

<?php //---------------------------------------------------------------------------------- update modal ?>
  <?php
                       
                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                            $queryhepab = $conn->query("SELECT * FROM `hepatitisbvaccine` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                            
                            while($fetchhepab = $queryhepab ->fetch_array()){
                                                                ?>
  <div class="modal fade" id="immunization_modal_hb<?php echo $fetchhepab['hepa_id']?>" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Immunization Profile
                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                     
                                            <li role="presentation" class="active"><a href="#hepa" data-toggle="tab">Hepatitis B</a></li>
                                            <li role="presentation" class="disabled"><a>Influenza</a></li>
                                            <li role="presentation" class="disabled"><a>Pneumococcal</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          
                                            
                                            <div role="tabpanel" class="tab-pane fade in active" id="hepa">
                                            
                                                 <form class="form-horizontal" form method="POST" action="save/saveimmunization.php?id=<?php echo $H_id." | ".$fetchhepab['hepa_id'] ?>">
                                              <div class="row clearfix">
                                                 
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Description </label>
                                                        </div>
                                                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                <select required class="form-control show-tick" id="description" name="description" title="&nbsp;">
                                                                       <option value="1" <?php if($fetchhepab['description'] == 1) echo "selected";?>>1st Dose</option>
                                                                       <option value="2" <?php if($fetchhepab['description'] == 2) echo "selected";?>>2nd Dose</option>
                                                                       <option value="3" <?php if($fetchhepab['description'] == 3) echo "selected";?>>3rd Dose</option>
                                                                       <option value="b" <?php if($fetchhepab['description'] == 4) echo "selected";?>>Booster Dose</option>
                                                                    </select>
                                                                </div>
                                                    </div>
                                                 <div class="row clearfix">
                                                    
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Administered by </label>
                                                        </div>
                                                       
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="administered" name="administered" class="form-control" placeholder="" value="<?php echo $fetchhepab['administeredby']?>" autofocus>
                                                                </div>
                                                           
                                                        </div>
                                                         
                                                     
                                           
                                                    </div>
                                                 <div class="row clearfix">
                                                 
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Date Recieved </label>
                                                        </div>
                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="datereceived" name="datereceived" class="form-control unstyled" placeholder="" value="<?php echo $fetchhepab['hepa_daterecieved']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                                 <div class="row clearfix">
                                                        
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Next Dose Due on: </label>
                                                        </div>
                                                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="nddo" name="nddo" class="form-control unstyled" placeholder="" value="<?php echo $fetchhepab['hepa_nextdate']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                               
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                  <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                            <button type="hepatitis" class="btn btn-primary m-t-15 waves-effect" name="hepatitis"><i class="material-icons">save</i>Save</button> &nbsp;
                                                        </div>
                                                  </div>
                                                 </form>
                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="influe" disabled>
                                                
                                                 
                                              
                                         
                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="pneumon" disabled>
                                               
                                            </div>

                                       
                                          
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php } ?>

<?php
                       
                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                            $queryinflue = $conn->query("SELECT * FROM `influenzavaccine` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                            
                            while($fetchinflue = $queryinflue ->fetch_array()){
                                                                ?>
    <div class="modal fade" id="immunization_modal_im<?php echo $fetchinflue['influenza_id']?>" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Immunization Profile
                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                     
                                            <li role="presentation" class="disabled"><a>Hepatitis B</a></li>
                                            <li role="presentation" class="active"><a href="#influe" data-toggle="tab">Influenza</a></li>
                                            <li role="presentation" class="disabled"><a>Pneumococcal</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          
                                            <div role="tabpanel" class="tab-pane fade in" id="hepa">
                                            
                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in  active" id="influe">
                                                
                                                 
                                                        <form class="form-horizontal" form method="POST" action="save/saveimmunization.php?id=<?php echo $H_id." | ".$fetchinflue['influenza_id']?>">
                                            
                                                 <div class="row clearfix">
                                                    
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Administered by </label>
                                                        </div>
                                                       
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="administeredimmune" name="administeredimmune" class="form-control" placeholder="" value="<?php echo $fetchinflue['influenza_administeredby']?>" autofocus>
                                                                </div>
                                                           
                                                        </div>
                                                         
                                                     
                                           
                                                    </div>
                                                 <div class="row clearfix">
                                                 
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Date Recieved </label>
                                                        </div>
                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="datereceivedimmune" name="datereceivedimmune" class="form-control unstyled" placeholder="" value="<?php echo $fetchinflue['influenza_daterecieved']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                                 <div class="row clearfix">
                                                        
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Next Dose Due on: </label>
                                                        </div>
                                                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                                <div class="form-line">
                                                                    <input type="date" id="nddoimmune" name="nddoimmune" class="form-control unstyled" placeholder="" value="<?php echo $fetchinflue['influenza_datenext']?>" autofocus>
                                                                </div>
                                                       </div>
                                                    </div>
                                               
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                  <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                            <button type="immunization" class="btn btn-primary m-t-15 waves-effect" name="immunization"><i class="material-icons">save</i>Save</button> &nbsp;
                                                        </div>
                                                  </div>
                                                 </form>
                                         
                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="pneumon">
                                          
                                         
                                            </div>

                                       
                                          
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php } ?>
<?php
                       
                            $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
                            $querypneumo = $conn->query("SELECT * FROM `pneumococcal_vaccine` WHERE `Hospital_Id` = '$H_id'") or die(mysqli_error());
                            
                            while($fetchpneumo = $querypneumo ->fetch_array()){
                                                                ?>
    <div class="modal fade" id="immunization_modal_pneu<?php echo $fetchpneumo['pneumococcal_id']?>" role="dialog">
                <div class="modal-dialog modal-default" role="document">

                    <div class="modal-content">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header bg-indigo">
                                        <h2>
                                            Update Immunization Profile
                                            <a href=""><i class="material-icons pull-right" data-dismiss="modal">clear</i></a>
                                        </h2>

                                    </div>
                                    <div class="body">
                                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                     
                                            <li role="presentation" class="disabled"><a>Hepatitis B</a></li>
                                            <li role="presentation" class="disabled"><a>Influenza</a></li>
                                            <li role="presentation"  class="active"><a href="#pneumon" data-toggle="tab">Pneumococcal</a></li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          
                                            
                                            <div role="tabpanel" class="tab-pane fade in" id="hepa">                              
                                               
                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in" id="influe">

                                            </div>
                                             <div role="tabpanel" class="tab-pane fade in active" id="pneumon">
                                                   <form class="form-horizontal" form method="POST" action="save/saveimmunization.php?id=<?php echo $H_id." | ".$fetchpneumo['pneumococcal_id']?>">
                                                 <div class="row clearfix">
                                                    
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Administered by </label>
                                                        </div>
                                                       
                                                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="text" id="administeredpneumon" name="administeredpneumon" class="form-control" placeholder="" value="<?php echo $fetchpneumo['pneumococcal_administeredby']?>" autofocus>
                                                                </div>
                                                           
                                                        </div>
                                                         
                                                     
                                           
                                                    </div>
                                                 <div class="row clearfix">
                                                 
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Date Recieved </label>
                                                        </div>
                                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="datereceivedpneumon" name="datereceivedpneumon" class="form-control unstyled" placeholder="" value="<?php echo $fetchpneumo['pneumococcal_daterecieved']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                                 <div class="row clearfix">
                                                        
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            <label for="email_address_2">Next Dose Due on: </label>
                                                        </div>
                                                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 form-control-label">
                                                            
                                                                <div class="form-line">
                                                                    <input type="date" id="nddopneumon" name="nddopneumon" class="form-control unstyled" placeholder="" value="<?php echo $fetchpneumo['pneumococcal_datenext']?>" autofocus>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                                  <div class="row clearfix">
                                                      <div class="col-lg-12 col-lg-offset-6">
                                                  <button type="button" class="btn btn-primary m-t-15 waves-effect" onclick="ClearFields();"> <i class="material-icons">description</i>Clear</button> &nbsp;
                                                            <button type="pneumococcal" class="btn btn-primary m-t-15 waves-effect" name="pneumococcal"><i class="material-icons">save</i>Save</button> &nbsp;
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

<?php } ?>
