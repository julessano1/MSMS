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
                 <div class="form-group">
                       
            <input type="text" class="form-control" value="<?php echo $date;?>" readonly name="ApprovedDate" style="width:150px;">
                    </div>
              <div class="form-group">
                       
            <input type="hidden" class="form-control" value="<?php echo $EmployeeName;?>" readonly name="Loan_ApplicationID" style="width:150px;">
                    </div>
                    
                <div class="form-group">
                       
        <input type="text" class="form-control" value="<?php echo $Role;?>" readonly name="Member_Name" style="width:150px;">
                </div>
              <div class="form-group">
            <input type="text" class="form-control" value="<?php echo  $ID;?>" readonly name="MemberID_No" style="width:150px;">
                </div>
                    <div class="form-group">
            <input type="text" class="form-control" readonly value="<?php echo $Adress;?>"  name="Member_Address" style="width:150px;">
                </div>
                <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Email;?>"  name="RequestedAmount" style="width:150px;" readonly>
                </div><div class="form-group">
            <input type="text" class="form-control" value="<?php echo $Email;?>"  name="AllowedAmount" style="width:150px;">
                </div><center>
                <table>
                  <tr><td>
      <div class="box-footer">
         <button type="submit" name="Approve_requestedLoan"class="btn btn-success" id="submt" style=" background-color: #4CAF50;"> Update</button>
        </div></td><td>
        <div class="box-footer" style="flaot:left;margin-left:-8px;">
         <button type="submit" name="Cancel_request"class="btn btn-success" id="submt" style="background-color: #008CBA;"> Cancel</button>
        </div></td><td>
        <div class="box-footer" style="flaot:left;margin-left:-8px;">
         <button type="submit" name="Cancel_request"class="btn btn-success" id="submt" style="background-color: #f44336;"> Delete</button>
        </div></td></tr></table>
        </center>
              </form></div></div></div></div>                   
        <?php }   ?>