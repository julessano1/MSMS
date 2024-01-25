<?php
if(isset($_REQUEST['DragName'])
AND isset($_REQUEST["ArticleTypeName"])
AND isset($_REQUEST["ItemUnit"])
AND isset($_REQUEST["UnitNumber"])
AND isset($_REQUEST["UnitPrice"])
AND isset($_REQUEST["Date"]))
    

{
?>
    <?php
   $DragName=$_REQUEST['DragName'];
   $ArticleTypeName= $_REQUEST['ArticleTypeName'];
   $ItemUnit=$_REQUEST['ItemUnit'];
   $UnitNumber=$_REQUEST['UnitNumber'];
   $UnitPrice=$_REQUEST['UnitPrice'];
   $Date=$_REQUEST['Date'];
    
//    $date = date("Y/m/d");
  ?>

  <div class="box box-danger">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form role="form" method="POST" action="">
                 <div class="form-group">
                       
            <input type="text" class="form-control" value="<?php echo $Date;?>" readonly name="ApprovedDate" style="width:150px;">
                    </div>
              <div class="form-group">
                       
            <input type="hidden" class="form-control" value="<?php echo $DragName;?>" readonly name="Loan_ApplicationID" style="width:150px;">
                    </div>
                    
                <div class="form-group">
                       
        <input type="text" class="form-control" value="<?php echo $ArticleTypeName;?>" readonly name="Member_Name" style="width:150px;">
                </div>
              <div class="form-group">
            <input type="text" class="form-control" value="<?php echo  $ItemUnit;?>" readonly name="MemberID_No" style="width:150px;">
                </div>
                    <div class="form-group">
            <input type="text" class="form-control" readonly value="<?php echo $UnitNumber;?>"  name="Member_Address" style="width:150px;">
                </div>
                <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $UnitPrice;?>"  name="RequestedAmount" style="width:150px;" readonly>
                </div><div class="form-group">
            <input type="text" class="form-control" value="<?php echo "TOTAL amount";?>"  name="AllowedAmount" style="width:150px;">
                </div><center>
                <table>
                  <tr><td>
      <div class="box-footer">
         <button type="submit" name="Approve_requestedLoan"class="btn btn-success" id="submt"> Update</button>
        </div></td><td>
        <div class="box-footer" style="flaot:left;margin-left:-8px;">
         <button type="submit" name="Cancel_request"class="btn btn-success" id="submt"> Cancel</button>
        </div></td></tr></table>
        </center>
              </form></div></div></div></div>                   
        <?php }   ?>