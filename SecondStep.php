
              <form role="form" method="POST"action=" savepatient1.php">
               <div class="row">
               
                
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"style="width:250px;" >
               <input type="hidden" value="NO"class="form-control" name="status"style="width:250px;" >
                <input type="hidden" value="Waiting"class="form-control" name="status" value="Waiting" style="width:250px;" >     
                  <div class="form-group">
                 <label> Patient Full Name</label>
                  <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="PatientName" required value="<?php echo $PatientFName." ".$PatientLName;?>" readonly>
					  
					                    <input type="hidden" class="form-control"  style="width:250px;border-radius:5px"name="PatientNation" required value="<?php echo $Nationality;?>">

					                     <input type="hidden" class="form-control"  style="width:250px;border-radius:5px"name="Patientpr" required value="<?php echo $Patientpr;?>">

					                     <input type="hidden" class="form-control"  style="width:250px;border-radius:5px"name="PatientDistrict" required value="<?php echo $PatientDistrict;?>">


                    </div>
                 </div>
              
                   <div class="form-group">
                 <label> Patient ID Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="patientIDNumber" maxlength="16" required value="<?php echo $PatientID; ?>" readonly >
                    </div>
                        
                 </div>
                     </div>
                   <div class="col-sm-3 col-md-3 ">
               <label> Patient Sector </label>
                    <div class="form-group">
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="PatientSector" required value="<?php echo  $PatientSector;?>" readonly>
                       </div>
                       </div>
                       
                  
                   <div class="input-group">
                         <input type="hidden" class="form-control"  style="width:250px;border-radius:5px"name="Phone" required value="<?php echo  $Phone;?>" >
                       </div>
                     <div class="form-group">
					<label>Insurance Name </label>
                 <div class="input-group">
                       <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="InsuranceID" required value="<?php echo  $Insurance;?>" readonly>
                       </div></div>
                      
                      
              </div>
                   <div class="form-group">
                  <label>Select Proposed Medecine </label>
                  <div class="input-group">
                <select class="form-control select2" name="MedecineID" style="width:285px;" required>
                            <option value="">Select Medecine Name</option>
                  <?php
                   $sql_InsuranceName = "SELECT medecine.DragName,medecine.MedecineID,medreception.MedreceptionID FROM medreception INNER JOIN medecine ON medreception.MedecineID=medecine.MedecineID
 ";
                   $result_InsuranceName = $conn->query($sql_InsuranceName);
          $row_count_InsuranceName = $result_InsuranceName->num_rows;
          if ($row_count_InsuranceName> 0)
          {
          while ($rows = $result_InsuranceName->fetch_assoc()) {
            $MedreceptionID = $rows['MedecineID'];
            $DragName = $rows['DragName'];
            ?>
            <option value="<?php echo  $MedreceptionID;?>"><?php echo $DragName;?></option>
            <?php 
            }
          }
            else{ }?>
                      </select>
 
                  </div>
                  </div>
                   <span style="margin-left:50px;">
        <button type="submit" name="submit" class="btn btn-success" id="submt"> Find Medecine</button></span>
                    </div>
                 </form>
 
           
             
         
        
     