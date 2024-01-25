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
    <div class="col-xs-2">
        <div class="box-header">
              <center>
                  <a href="AddingPatient.php?Existing"><h3 class="box-title">
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
              <form role="form" method="POST" action="saveServiceUser.php">
                <div class="form-group">
                  <label>Select Member Name </label>
                  <div class="input-group">
                <select class="form-control select2" name="EmployeeID" style="width:285px;" required>
                            <option value="">Select Employee ID Number</option>
                  <?php
                    $sql_employeeID  = "SELECT * FROM employee ";
                   $result_employeeID = $conn->query($sql_employeeID );
          $row_count_employeeID  = $result_employeeID ->num_rows;
          if ($row_count_employeeID > 0)
          {
          while ($rows = $result_employeeID ->fetch_assoc()) {
            $employeeID = $rows['EmployeeID'];
            $EmployeeNID = $rows['EmployeeName'];
            ?>
            <option value="<?php echo $employeeID;?>"><?php echo $EmployeeNID;?></option>
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
        <button type="submit" name="MyInfo" class="btn btn-success" id="submt"> Find Patient Info</button></span>
              </form></div>
                      </div>
                      <?php      
        }
    else if(isset($_GET['New'])) 
    {
?> <div class=" box box-success ">
                      
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
     else if(isset($_POST['MedecineID'])){
        $MedecineInfo=$_POST['MedecineID'];
        $date= $_POST['Date'];
        $PatientName= $_POST['PatientName'];
        $PatientID=$_POST['patientIDNumber'];
        $Adress=   $_POST['patientLocation'];
        $Insurance=$_POST['InsuranceID'];
        $Phone=$_POST['Phone'];
        include('ThirdStep.php');
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
            <option value="<?php echo $InsuranceID;?>"><?php echo $InsuranceName;?></option>
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
                <?php
   
    if(isset($_POST['SubmitMedecine']))
    {
//    $Type=$_POST['MedecineType'];
    $Category=$_POST['category'];
    $QtyAllowed=$_POST['QtyAllowed'];
//	$PatientName=$_POST['patientName'];
    $PatientID =$_POST['PatientID'];  
    $status="NO";
     $Updated=$conn->query( "update patient SET ArticleTypeID='$Category',Quantity = '$QtyAllowed',status='$status' WHERE PatientID='$PatientID'");
		  if($Updated)
			{
          echo ' <span style="color:red; margin:400px;font-size:30px;"> Medecine are Successufully provided </span> ';
           
           
         }
			else
			{
			echo"Some thing Wrong !!!!";
			}  }           
                ?>

                      <?php
 $sql_insurance= "SELECT patient.patientName,patient.Sector,patient.Phone,patient.Date,patient.patientIDNumber,patient.InsuranceID,medecine.DragName FROM `patient` INNER JOIN medecine ON patient.MedecineID=medecine.MedecineID ORDER BY PatientID DESC LIMIT 1  ";
                   $result_insurance= $conn->query($sql_insurance);
          $row_count_insurance = $result_insurance->num_rows;
          if ($row_count_insurance> 0)
          {
          while ($rows = $result_insurance->fetch_assoc()) {
              $patientName = $rows['patientName'];
              $patientLocation=$rows['Sector'];
              $Phone=$rows['Phone'];
              $DragName=$rows['DragName'];
              $InsuranceID=$rows['InsuranceID'];
              $patientIDNumber=$rows['patientIDNumber'];
              $Date=$rows['Date'];
          }}
            ?>
                            





<form role="form" method="POST"action="" >
               <div class="row">
               
                
           <div class="col-sm-4 col-md-4 " style="margin-left:">
               <input type="hidden" value="<?php echo $Date;?>" class="form-control" name="Date"style="width:200px;" >        
                  <div class="form-group">
                 <label> Patient Name</label>
                  <div class="input-group">
                   <input type="text" class="form-control"  style="width:210px;border-radius:5px"name="PatientName" required value="<?php echo $patientName;?>">
                    </div>
                 </div>
              
                   <div class="form-group">
                 <label> Patient ID Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:210px;border-radius:5px"name="patientIDNumber" maxlength="16" required value="<?php echo $patientIDNumber; ?>">
                    </div>
                        
                 </div>
                 <label> Patient Location </label>
                    
                   <div class="form-group">
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:210px;border-radius:5px"name="patientLocation" required value="<?php echo  $patientLocation;?>">
                       </div>
                       </div>
                 <div class="form-group">
                   <div class="input-group">
                         <input type="text" class="form-control"  style="width:210px;border-radius:5px"name="Phone" required value="<?php echo  $Phone;?>">
                       </div></div>
              
                   <div class="form-group">
                 <div class="input-group">
                       <input type="text" class="form-control"  style="width:210px;border-radius:5px"name="InsuranceID" required value="<?php echo $InsuranceID;?>">
                       </div>
               <div class="input-group">
                       <input type="text" class="form-control"  style="width:210px;border-radius:5px"name="InsuranceID" required value="<?php echo $DragName;?>">
                       </div></div>
                      
                 
                     
                   
             
                       
                      
              </div>
                    
                  
    <div class="content-wrapper">
   <section class="col-md-11 content" style="margin-top:-340px;">
    <div class="box box-success">
            <div class="box-header">
              <center><h3 class="box-title">
        <span class="label label-success">
       Choosing Medecine 
        </span>
        </h3>
        </center>
        </div>
        <div class="box-body" style="overflow: auto;">
           
          <table id="example1" class="table table-bordered table-striped" style="width:15px;">
                <thead>
                <tr style="font-size:15px;">
            <th><span class="">Patient Name</span></th>   
           <th><span class=""> Patient ID </span></th>
            <th><span class="">Medecine Name</span></th>
            <th><span class="">Category</span></th>
            <th><span class="">Providing Qty</span></th>
                    
                    </tr>
                </thead>
                        <tbody>
                 <?php
                            
    $stms_prod_requested = $conn->query("SELECT patient.patientName,patient.patientIDNumber,patient.PatientID,patient.patientLocation,patient.Phone,patient.InsuranceID,patient.MedecineID,patient.Nationality,patient.Province,patient.Nationality,patient.District,patient.Sector,patient.articletypeID, patient.Quantity,patient.status,patient.Date, medecine.DragName,medreception.MedreceptionID,medreception.ItemUnit,medreception.UnitNumber,medreception.UnitPrice,medreception.ExperidDate FROM patient INNER JOIN medecine ON patient.MedecineID=medecine.MedecineID INNER JOIN medreception ON medecine.MedecineID=medreception.MedecineID ORDER BY PatientID DESC LIMIT 1 ");
                            
//Display All employee
                            
           $row_count_tryrequest = $stms_prod_requested->num_rows;
           

            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_requested->fetch_assoc()) {
                $DragName=$rows['DragName'];
                $PatientID=$rows['PatientID'];
                $patientIDNumber=$rows['patientIDNumber'];
                $PatientName=$rows['patientName'];
                $ItemUnit=$rows['ItemUnit'];
                $ExperidDate=$rows['ExperidDate'];
                $UnitNumber=$rows['UnitNumber'];
                $TotalQuantity=$ItemUnit*$UnitNumber;
            
                  ?>          
               <tr>
                   
                   <td><input type="text" name="patientname"readonly value="<?php echo $PatientName; ?>"></td>
                   <td><input type="text" readonly name="" value="<?php echo $patientIDNumber; ?>"></td>
                       <td><input type="text"  readonly value="<?php echo                 $DragName=$rows['DragName'];?>"></td>
                       <td><select name="category">
                          <option >TABLET</option>
                          <option >INJECTABLE</option>
                          <option >SUREAU</option>
                          <option >OTHERS</option>
                        </select></td>
                         <input type="hidden" name="PatientID" value="<?php echo $PatientID; ?>">
                       
                       <td><input type="text" name="QtyAllowed" required value=" "></td>
    
                            </tr>       
            <?php  }
                 }
               else
                    {
                    
                    }
                    ?>
                   </table><span style="margin-left:50px;">
        <button type="submit" name="SubmitMedecine" class="btn btn-success" id="submt"> Submit Medecine</button></span>
            </div>
           
          </div>
          
    </section>
    
   
    </div></form> </div></div></section></div>
    <?php include("../footer.php");?>

</div>


<?php include("../script_user.php");?>
</body>
</html>
