<?php
if(isset($_REQUEST['patientName'])
AND isset($_REQUEST["articletypeID"])
AND isset($_REQUEST["ID"])
AND isset($_REQUEST["Adress"])
AND isset($_REQUEST["MedecineID"])
AND isset($_REQUEST["Insurance"])
AND isset($_REQUEST["Quantity"])
AND isset($_REQUEST["PatientID"])
AND isset($_REQUEST["Phone"]))
    

{
?>
    <?php
   $patientName=$_REQUEST['patientName'];
   $patientID=$_REQUEST['PatientID'];
   $articletypeID= $_REQUEST['articletypeID'];
   $ID=$_REQUEST['ID'];
   $Adress=$_REQUEST['Adress'];
   $Insurance=$_REQUEST['Insurance'];
   $Quantity=$_REQUEST['Quantity'];
   $MedecineID=$_REQUEST['MedecineID'];
    $date = date("Y/m/d");
  ?>

  <div class="box box-danger">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form role="form" method="POST" action="">
                 <div class="form-group">
                       
            <input type="text" class="form-control" value="<?php echo $date;?>" readonly name="Date" style="width:150px;">
                    </div>
              <div class="form-group">
              <input type="text" class="form-control" value="<?php echo $patientID;?>" name="PatientID" style="width:150px;">         
            <input type="text" class="form-control" value="<?php echo $patientName;?>" name="patientName" style="width:150px;">
                    </div>
                    
                <div class="form-group">
                       
        <input type="text" class="form-control" value="<?php echo $articletypeID;?>" readonly name="articletypeID" style="width:150px;">
                </div>
              <div class="form-group">
            <input type="text" class="form-control" value="<?php echo  $ID;?>" readonly name="patientIDNumber" style="width:150px;">
                </div>
                    <div class="form-group">
            <input type="text" class="form-control"  value="<?php echo $Adress;?>"  name="patientLocation" style="width:150px;">
                </div>
                <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Insurance;?>"  name="Insurance" style="width:150px;" readonly>
                </div><div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Quantity;?>"  name="Quantity" style="width:150px;">
                </div>
                    <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $MedecineID;?>"  name="MedecineID" style="width:150px;">
                </div>
                   <div class="form-group">
            <input type="text" class="form-control" value="<?php echo "Amount in Rwfs";?>"  name="RwfrsAmount" style="width:150px;">
                </div> 
                    <center>
                <table>
                  <tr><td>
      <div class="box-footer">
         <button type="submit" name="Patient-served"class="btn btn-success" id="submt"> Distribute</button>
        </div></td><td>
        <div class="box-footer" style="flaot:left;margin-left:-8px;">
<!--         <button type="submit" name="Deleting-Medecine"class="btn btn-success" id="submt" style="background-color:#f44336;"> Delete</button>-->
        </div></td></tr></table>
        </center>
              </form></div></div></div></div>                   
        <?php }   ?>