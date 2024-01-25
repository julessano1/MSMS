<?php
if(isset($_REQUEST['EmployeeName'])
AND isset($_REQUEST["Role"])
AND isset($_REQUEST["ID"])
AND isset($_REQUEST["Adress"])
AND isset($_REQUEST["Email"])
AND isset($_REQUEST["Phone"]))
    

{
?>
    <?php
    $EmployeeName=$_REQUEST['EmployeeName'];
   $Role= $_REQUEST['Role'];
   $ID=$_REQUEST['ID'];
   $Adress=$_REQUEST['Adress'];
    $Email=$_REQUEST['Email'];
    $date = date("Y/m/d");
  ?>

  <div class="box box-danger">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form role="form" method="POST" action="">
             <input type="hidden" class="form-control" value="<?php echo $date;?>" readonly name="UpdatedDate" style="width:150px;">
                 
              <div class="form-group">
                       
            <input type="text" class="form-control" value="<?php echo $EmployeeName;?>" required name="EmployeeName" style="width:150px;">
                    </div>
            <div class="form-group">
            <input type="text" class="form-control" value="<?php echo  $ID;?>" required  maxlength="16" name="EmployeeIDN" style="width:150px;">
                </div>
                    <input type="text" class="form-control" value="<?php echo  $EmployeeID;?>" required  maxlength="16" name="EmployeeID" style="width:150px;">
            <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Phone;?>"  required name="EmployeePhone" style="width:150px;" >
                </div>
              <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Email;?>"  required name="EmployeeEmail" style="width:150px;" >
                </div>
                    <div class="form-group">
            <input type="text" class="form-control"  value="<?php echo $Adress;?>" required name="EmployeeAdress" style="width:150px;">
                </div>
                <div class="form-group">
             <input type="text" class="form-control" value="<?php echo $Role;?>" required name="EmployeeRole" style="width:150px;">
                </div>
           <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Email;?>"  name="" style="width:150px;">
                </div><center>
                <table>
                  <tr><td>
      <div class="box-footer">
         <button type="submit" name="UpdateEmplyee"class="btn btn-success" id="submt" style=" background-color: #4CAF50;"> Update </button>
        </div></td>
        <td>
        <div class="box-footer" style="flaot:left;margin-left:-8px;">
         <button type="submit" name="Delete-patient"class="btn btn-success" id="submt" style="background-color: #f44336;"> Delete</button>
        </div></td></tr></table>
        </center>
              </form></div></div></div></div>                   
        <?php }   ?>