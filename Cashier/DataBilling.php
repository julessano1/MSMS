<?php
$date = date("Y/m/d");
if(isset($_REQUEST['patientName'])
AND isset($_REQUEST["PatientID"])
AND isset($_REQUEST["patientIDNumber"])
AND isset($_REQUEST["PriceAmount"])
AND isset($_REQUEST["Province"])
AND isset($_REQUEST["District"])
AND isset($_REQUEST["Nationality"])
AND isset($_REQUEST["Sector"])
   AND isset($_REQUEST["Quantity"])
   AND isset($_REQUEST["Phone"])
   AND isset($_REQUEST["Insurance"])
    AND isset($_REQUEST["Medecine"])
  
  
  
  )
    

{
?>
    <?php
    $patientName=$_REQUEST['patientName'];
   $PatientID= $_REQUEST['PatientID'];
   $patientIDNumber=$_REQUEST['patientIDNumber'];
   $PriceAmount=$_REQUEST['PriceAmount'];
   $Province=$_REQUEST['Province'];
	$District=$_REQUEST['District'];
	$Nationality=$_REQUEST['Nationality'];
	$Sector=$_REQUEST['Sector'];
	$Quantity=$_REQUEST['Quantity'];
$Medecine=$_REQUEST['Medecine'];
$Phone=$_REQUEST['Phone'];
    $InsuranceID=$_REQUEST['Insurance'];
//    $date = date("Y/m/d");
  ?>
<center><h4 class="box-title">
        <span class="label label-success">
      Payment Details 
        </span>
        </h4>
        </center>
  <div class="box box-danger">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form role="form" method="POST" action="">
                 <div class="form-group">
                       
            <input type="text" class="form-control" value="<?php echo "$date";?>" readonly name="PayedDate" style="width:150px;">
                    </div>
              <div class="form-group">
                       
            <input type="text" class="form-control" value="<?php echo "$PatientID";?>" readonly name="PatientID" style="width:150px;">
                    </div>
                    <div class="form-group">
                       
            <input type="text" class="form-control" value="<?php echo "$Medecine";?>" readonly name="Medecine" style="width:150px;">
                    </div>
                   <div class="form-group">
                       
            <input type="text" class="form-control" value="<?php echo "$Quantity";?>" readonly name="Quantity" style="width:150px;">
                    </div>
                    <div class="form-group">
                       
            <input type="text" class="form-control" value="<?php echo "$PriceAmount";?>" readonly name="PriceAmount" style="width:150px;">
                    </div>
                <div class="form-group">
                       
        <input type="text" class="form-control" value="<?php echo $patientName;?>" readonly name="patientName" style="width:150px;">
                </div>
                    <div class="form-group">
                       
        <input type="text" class="form-control" value="<?php echo $patientIDNumber;?>" readonly name="patientIDNumber" style="width:150px;">
                </div>
              <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $InsuranceID;?>" readonly name="InsuranceID" style="width:150px;">
                </div>
                    <div class="form-group">
            <input type="text" class="form-control" readonly value="<?php echo $District;?>"  name="District" style="width:150px;">
                </div>
                <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Phone;?>"  name="Phone" style="width:150px;" readonly>
                </div>
                    <center>
                <table>
                  <tr><td>
      <div class="box-footer">
         <button type="submit" name="Approve_Payement"class="btn btn-success" id="submt" style=" background-color: #4CAF50;"> Approve Payment</button>
        </div></td></tr></table>
        </center>
              </form></div></div></div></div>                   
        <?php }   ?>