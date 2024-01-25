<?php
if(isset($_REQUEST['EmployeeName'])
AND isset($_REQUEST["Role"])
AND isset($_REQUEST["ID"])
AND isset($_REQUEST["Adress"])
AND isset($_REQUEST["Email"])
AND isset($_REQUEST["Date"])
AND isset($_REQUEST["EmployeeID"])
AND isset($_REQUEST["Phone"]))
    

{
?>
    <?php
   $EmployeeName=$_REQUEST['EmployeeName'];
   $Role= $_REQUEST['Role'];
   $ID=$_REQUEST['ID'];
   $Adress=$_REQUEST['Adress'];
   $Email=$_REQUEST['Email'];
   $employeeID=$_REQUEST['EmployeeID'];
   $date = $_REQUEST['Date'];
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
                       
            <input type="text" class="form-control" value="<?php echo $EmployeeName;?>" readonly name="EmployeeName" style="width:150px;">
                    </div>
                <input type="text" class="form-control" value="<?php echo $EmployeeID;?>" readonly name="EmployeeID" style="width:150px;">    
                <div class="form-group">
                       
        <input type="text" class="form-control" value="<?php echo $Role;?>" readonly name="Role" style="width:150px;">
                </div>
              <div class="form-group">
            <input type="text" class="form-control" value="<?php echo  $ID;?>" readonly name="ID" style="width:150px;">
                </div>
                    <div class="form-group">
            <input type="text" class="form-control" readonly value="<?php echo $Adress;?>"  name="Adress" style="width:150px;">
                </div>
                <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Email;?>"  name="Email" style="width:150px;" readonly>
                </div><div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Email;?>"  name="Email" style="width:150px;">
                </div><center>
                <table>
                  <tr><td>
      <div class="box-footer">
         <button type="submit" name="Approve_requestedLoan"class="btn btn-success" id="submt" style=" background-color: #4CAF50;"> Update</button>
        </div></td><td>
        <div class="box-footer" style="flaot:left;margin-left:-8px;">
         <button type="submit" name="Data-Deleting"class="btn btn-success" id="submt" style="background-color: #f44336;"> Delete</button>
        </div></td><td>
        <div class="box-footer" style="flaot:left;margin-left:-8px;">
         <button type="submit" name="Cancel_request"class="btn btn-success" id="submt" style="background-color: #008CBA;"> Cancel</button>
        </div></td></tr></table>
        </center>
              </form></div></div></div></div>                   
        <?php }   ?>