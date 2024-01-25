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
              <center><a href="CashierService.php?Billing">
                  <h3 class="box-title">
        <span class="label label-success">
         Patient Bill
        </span>
        </h3></a>
        </center>
        </div>
   
      </div>
      <div class="col-xs-2"> <div class="box-header">
              <center><a href="CashierService.php?Print">
                  <h3 class="box-title">
        <span class="label label-success">
        Print Patient Invoice
        </span>
        </h3></a>
        </center>
        </div>
   
      </div>
       </div>
       <?php
        if(isset($_GET['Billing'])){?>
        <div class=" box box-success ">
           
            <div class="box-body" style="overflow: auto;">
              <form role="form" method="POST" action="payementApprove.php">
                <div class="form-group">
                  <div class="input-group">
                 <select class="form-control select2" name="ExistingID" style="width:285px;" required>
                            <option value="">Select Patient ID Number</option>
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
                $ExistingPatient=$_POST['ExistingID'];
                
                include('medDistribution.php');
            }
			
			else if(isset($_GET['patientID'])){
			echo "welllll";	
				
			}
					  ?>
    <?php

        }
        
        else if(isset($_GET['Print'])){?>
        <div class=" box box-success ">
           
            <div class="box-body" style="overflow: auto;">
              <form role="form" method="POST" action="">
                <div class="form-group">
                  <div class="input-group">
                 <select class="form-control select2" name="ExistingID" style="width:285px;" required>
                            <option value="">Select Patient ID Number</option>
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
        <button type="submit" name="FindExisting" class="btn btn-success" id="submt"> Print Invoice</button></span>
              </form></div></div>
                      <?php
            if (isset($_POST['FindExisting'])){
                $ExistingPatient=$_POST['ExistingID'];
                
                include('medDistribution.php');
            }?>
    <?php
        
        }
    else if(isset($_GET['New'])) 
    {
?> 
                      
                      
                      <div class=" box box-success ">
                      
                     <?php
 if(isset($_POST['MedAllowed'])){
        $date= $_POST['Date'];
        $PatientName= $_POST['PatientName'];
        $PatientID=$_POST['patientIDNumber'];
        $Adress=   $_POST['patientLocation'];
        $Insurance=$_POST['InsuranceID'];
        
        $Phone=$_POST['Phone'];
        
        include('SecondStep.php');
    }
     
    else{
    ?> 
            <div class="box-body" style="overflow: auto;">
              <form role="form" method="POST" action=" ">
         <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"style="width:250px;" >     

                  <div class="form-group">
                 <label> Patient Name</label>
                  <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="PatientName" required placeholder="Enter Patient Name">
                    </div>
                 </div>
                  <div class="form-group">
                 <label> Patient ID Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="patientIDNumber" maxlength="16" required placeholder="Enter Patient ID Number">
                    </div>
                 </div>
                  

                  <div class="form-group">
                 <label> Patient Location Adress</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="patientLocation" maxlength="16" required placeholder="Enter Patient Location">
                    </div>
                 </div>
                  <div class="form-group">
                 <label> Patient Phone Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Phone" maxlength="16" required placeholder="Enter Patient Phone">
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
                 <div class="box-footer">
                <button type="reset" class="btn btn-primary">Reset</button>
                <button type="submit" name="MedAllowed"class="btn btn-success" id="submt"><i class="fa fa-save"></i> Save</button>
            </div>
              </form></div></div>
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
