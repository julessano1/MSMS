
              <form role="form" method="POST"action="savePatient.php">
               <div class="row">
                <h4 class="box-title"style="margin-left:210px;">
                    <span class="label label-success" >
                Adding Patient Form
                </span>
                </h4>
                
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"style="width:250px;" >     
                <input type="hidden" value="NO"class="form-control" name="status"style="width:250px;" >     
                  <div class="form-group">
                 <label> Patient Name</label>
                  <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="PatientName" required value="<?php echo $PatientName;?>">
                    </div>
                 </div>
              
                   <div class="form-group">
                 <label> Patient ID Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="patientIDNumber" maxlength="16" required value="<?php echo $PatientID; ?>">
                    </div>
                        
                 </div>
                     </div>
                   <div class="col-sm-3 col-md-3 ">
               <label> Patient Location </label>
                    
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="patientLocation" required value="<?php echo  $Adress;?>">
                       
                         <input type="hidden" class="form-control"  style="width:250px;border-radius:5px"name="Phone" required value="<?php echo  $Phone;?>">
                       <input type="hidden" class="form-control"  style="width:250px;border-radius:5px"name="InsuranceID" required value="<?php echo  $Insurance;?>">
                       <br>
                      <?php
                    $sql_articletype= "SELECT SUM(medreception.ItemUnit) AS TotalItem, medreception.UnitNumber FROM medreception WHERE medreception.MedecineID='$Medecine' AND medreception.articletypeID='$articletypeID' ";
                   $result_articletype= $conn->query($sql_articletype);
          $row_count_articletype = $result_articletype->num_rows;
          if ($row_count_articletype> 0)
          {
          while ($rows = $result_articletype->fetch_assoc()) {
            $TotalItem_InPackage= $rows['TotalItem'];
            $Number_Unit = $rows['UnitNumber'];
            $TotalNumber=$TotalItem_InPackage*$Number_Unit;
          }}
            ?>
                <div class="form-group">
                    <?php echo $TotalNumber;?>
                <label>  Select Quantity Allowed</label>
                <select class="form-control select2" name="Quantity" required>
                  <option value=""></option>
          <?php
          $x=1;
          while($x<=$TotalNumber)
          {
          
          ?>
          <option value="<?php echo $x;?>"><?php echo $x;?></option>
          <?php
          $x++;
          }
          
          ?>
                </select>
        
        
              </div>
                    </div>
                   <div class="col-sm-3 col-md-3 ">
                     
                 
                         <input type="hidden" class="form-control"  style="width:250px;border-radius:5px"name="medreceptionID" required value="<?php echo $Medecine;?>">
                       
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="medreceptionID1" required value="<?php echo $Medecine1;?>">
                        <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="medreceptionID2" required value="<?php echo $Medecine2;?>">
                        <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="medreceptionID3" required value="<?php echo $Medecine3;?>">
                     
                  <div class="input-group">
                         <input type="hidden" class="form-control"  style="width:250px;border-radius:5px"name="articletypeID" required value="<?php echo $articletypeID;?>">
                    </div>
                         
                  
                 </div>
                  
                  </div>
                <span style="margin-left:210px;">
                    <button type="submit" name="submit" class="btn btn-success" id="submt">Save</button> <button type="reset" class="btn btn-primary">Reset</button>
        
        </span>
               </form>
            