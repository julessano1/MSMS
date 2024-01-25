<!DOCTYPE html>
<html>
<?php include("../header_userok.php");
$date = date("Y/m/d");
session_start();
if(!isset($_SESSION["UserName"])){
  header('location:../index.php');
}
  elseif (isset($_SESSION['UserName'])) {
    $MyName=$_SESSION['UserName'];
  }

?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <?php include("panel_top_header.php");?>
  </header>
  <?php include("panel_left.php");?>
      <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
                <div class="box">
                <div class="box-header">
                  <section class="content-header">
  <div class="row">
    <div class="col-xs-2"> <div class="box-header">
              <center><a href="AddingPatient.php?Existing"><h3 class="box-title">
        <span class="label label-success">
        Existing Patient 
        </span>
        </h3></a>
        </center>
        </div>
   
      </div>
      <div class="col-xs-2">
          <div class="box-header">
              <center>
                  <a href="AddingPatient.php?New"><h3 class="box-title">
                      <span class="label label-success">
       New Patient
        </span>
        </h3></a>
      </center>
        </div>
          
      </div>

     
      </div>
       <?php
        if(isset($_GET['Existing'])){?>
        <div class=" box box-success ">
           
            <div class="box-body" style="overflow: auto;">
              <form role="form" method="POST" action="">
                <div class="form-group">
                  <div class="input-group">
                 <select class="form-control select2" name="ExistingID" style="width:285px;" required>
                            <option value="">Select Employee ID Number</option>
                  <?php
                    $sql_employeeID  = "SELECT * FROM patient ";
                   $result_employeeID = $conn->query($sql_employeeID );
          $row_count_employeeID  = $result_employeeID ->num_rows;
          if ($row_count_employeeID > 0)
          {
          while ($rows = $result_employeeID ->fetch_assoc()) {
            $PatientID = $rows['PatientID'];
            $patientIDNumber = $rows['patientIDNumber'];
            ?>
            <option value="<?php echo $patientIDNumber;?>"><?php echo $patientIDNumber;?></option>
            <?php 
            }
          }
                    else
                    {
                    }
                    ?> </select>
               
                  </div>
                 </div>
               
                 
                   
                         <span style="margin-left:50px;">
        <button type="submit" name="FindExisting" class="btn btn-success" id="submt"> Find Patient Info</button></span>
              </form></div></div>
                      <?php
            if (isset($_POST['FindExisting'])){
             $MypatientID=$_POST['ExistingID'];
             $sql_insurance= "SELECT patient.patientName,patient.patientLocation,patient.Phone,patient.Date,patient.patientIDNumber,patient.InsuranceID,medecine.DragName FROM `patient` INNER JOIN medecine ON patient.MedecineID=medecine.MedecineID
                
                WHERE patient.patientIDNumber='$MypatientID' ";
                   $result_insurance= $conn->query($sql_insurance);
          $row_count_insurance = $result_insurance->num_rows;
          if ($row_count_insurance> 0)
          {
          while ($rows = $result_insurance->fetch_assoc()) {
              $patientName = $rows['patientName'];
              $patientLocation=$rows['patientLocation'];
              $Phone=$rows['Phone'];
              $DragName=$rows['DragName'];
              $InsuranceID=$rows['InsuranceID'];
               $patientIDNumber=$rows['patientIDNumber'];
              $Date=$rows['Date'];
          }}?>
                     
               <form role="form" method="POST"action=" savepatient1.php">
               <div class="row">
               
                
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"style="width:250px;" >
               <input type="hidden" value="Waiting"class="form-control" name="status"style="width:250px;" >
                <input type="hidden" value="Waiting"class="form-control" name="status"style="width:250px;" >     
                  <div class="form-group">
                 <label> Patient Name</label>
                  <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="PatientName" required value="<?php echo $patientName;?>">
                    </div>
                 </div>
              
                   <div class="form-group">
                 <label> Patient ID Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="patientIDNumber" maxlength="16" required value="<?php echo $patientIDNumber; ?>">
                    </div>
                        
                 </div>
                     </div>
                   <div class="col-sm-3 col-md-3 ">
               <label> Patient Location </label>
                    
                   <div class="form-group">
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="patientLocation" required value="<?php echo  $patientLocation;?>">
                       </div>
                       </div>
                       
                   <div class="form-group">
                   <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Phone" required value="<?php echo  $Phone;?>">
                       </div></div>
                       
                    
                   <div class="form-group">
                 <div class="input-group">
                       <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="InsuranceID" required value="<?php echo $InsuranceID;?>">
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
 
           
             
         
        
   
    <?php
        }
        }
        
    else if(isset($_GET['New'])) 
    {
?> <div class=" box box-success ">
                      
                     <?php
 if(isset($_POST['MedAllowed'])){
        $date= $_POST['Date'];
        $PatientFName= $_POST['PatientFName'];
	    $PatientLName=$_POST['patientLname'];
	    $Phone=$_POST['Phone'];
	    $Nationality=$_POST['PatientNation'];
	    $Patientpr=$_POST['Patientpr'];
	    $PatientDistrict=$_POST['PatientDistrict'];
	    $PatientSector=$_POST['PatientSector'];
	    $PatientID=$_POST['PatientIDnumber'];
       
        $Insurance=$_POST['InsuranceID'];
	 
         include('SecondStep.php');
    }
     
    else{
    ?> 
	
				
              <form role="form" method="POST"action=" ">
               <div class="row">
               
                
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"style="width:250px;" > 
               
                  <div class="form-group">
                 <label> Patient First Name</label>
                  <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px" name="PatientFName" required placeholder="Enter Patient First Name">
                    </div>
                 </div>
                <div class="form-group">
                 <label> Patient Last Name</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px" name="patientLname"  required placeholder="Enter Patient Last Name">
                    </div>
                 </div>    
                   <div class="form-group">
                 <label> Patient ID Number</label>
                 <div class="input-group">
                   <input type="number" class="form-control"  style="width:250px;border-radius:5px"name="PatientIDnumber" min="0" max="9999999999999999"  required placeholder="Enter Patient ID">
                    </div>

					   
					   
					   
                 </div>
               </div>
                   <div class="col-sm-3 col-md-3 ">
					   <div class="form-group">
                 <label> Patient Phone Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Phone" maxlength="15" required placeholder="Enter Patient Phone">
                    </div>
                 </div>
					   <div class="form-group">
                 <label> Patient Nationality</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="PatientNation"  required placeholder="Enter Patient Nationality">
                    </div>
                 </div>
               <div class="form-group">
                 <label> Patient Province</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Patientpr"  required placeholder="Enter Patient Province">
                    </div>
                 </div>
                   
                      
              </div>
                  <div class="form-group">
                 <label> Patient District</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="PatientDistrict"  required placeholder="Enter Patient District">
                    </div>
                 </div>
				    <div class="form-group">
                 <label> Patient Sector</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="PatientSector"  required placeholder="Enter Patient Sector">
                    </div>
                 </div>
                     <div class="form-group">
                 <label> Patient Insuarence Name</label>
                  <div class="input-group">
                <select class="form-control select2" name="InsuranceID"  style="width:250px;" required >
                            <option value="">Select Insurance Name</option>
                  <?php
                    $sql_InsuranceName = "SELECT * FROM Insurance ";
                   $result_InsuranceName = $conn->query($sql_InsuranceName);
          $row_count_InsuranceName = $result_InsuranceName->num_rows;
          if ($row_count_InsuranceName> 0)
          {
          while ($rows = $result_InsuranceName->fetch_assoc()) {
            $InsuranceID = $rows['insuranceID'];
            $InsuranceName = $rows['insuranceName'];
            ?>
            <option value="<?php echo $InsuranceName;?>"><?php echo $InsuranceName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>
                  </div>
                 </div>
                     <span style="margin-left:-180px;">
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" name="MedAllowed" class="btn btn-success" id="submt">Next</button>
        
        </span>
                    </div>
                 </form>
 
           
             
         
        
     
</div>

                      <?php      
        }}
    else if(isset($_GET['New'])) 
    {}
?>                     
                </section>
               </div>            
                      
    
  
                   
                </div>

      
     
              </div></div></section></div>
    <?php include("../footer.php");?>

</div>


<?php include("../script_user.php");?>
</body>
</html>
