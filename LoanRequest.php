<!DOCTYPE html>
<html>
<?php include("header_user.php");
$date = date("Y/m/d");
$InterestRate="5%";
session_start();
if(!isset($_SESSION["UserName"])){
  header('location:index.php');
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
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="col-md-12 content">
<div class=" box box-success ">
            <div class="box-body" style="overflow: auto;"width="500px">
              <form role="form" method="POST"action="SaveLoanAPlication.php">
               <div class="row">
                <h3 class="box-title"style="margin-left:170px;">
                    <span class="label label-success" >
                Loan Application Form
                </span>
                </h3>
                
           <div class="col-sm-3 col-md-3 ">
               
                  
                  <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"
                       style="width:250px;" >     
                  
                  <input type="hidden" value="<?php echo "Pending";?>" class="form-control" name="status"
                       style="width:250px;" >     
                  
               
                  <div class="input-group">
                  <input type="hidden" value="<?php echo "No";?>" class="form-control" name="status2"
                       style="width:250px;" >     
                  
                  </div>
              
                <div class="form-group">
                  <label>Member Full Name</label>
                     <div class="input-group">
                <select class="form-control select2" name="MemberID"  style="width:250px;" required value=""> 
                            <option value="">Select Name</option>
                    <?php
                    $sql_MemberName = "SELECT * FROM  Members ";
                   $result_MemberName = $conn->query($sql_MemberName);
          $row_count_MemberName= $result_MemberName->num_rows;
          if ($row_count_MemberName> 0)
          {
          while ($rows = $result_MemberName->fetch_assoc()) {
            $MemberID = $rows['MemberID'];
            $Member_Name = $rows['Member_Name'];
            
            ?>
            <option value="<?php echo $MemberID;?>"><?php echo $Member_Name;?></option>
            <?php 
            }
          }
          else
          {
          }
           ?>
               </select>     
                  </div>
                </div>
              <div class="form-group">
                  <label>Loan Period</label>
                     <div class="input-group">
                  <select class="form-control select2" name="Period"  style="width:250px;" required value=""> 
                            <option value="">Select Period</option>
                    <?php
                    $sql_MemberName = "SELECT * FROM period ";
                   $result_MemberName = $conn->query($sql_MemberName);
          $row_count_MemberName= $result_MemberName->num_rows;
          if ($row_count_MemberName> 0)
          {
          while ($rows = $result_MemberName->fetch_assoc()) {
            $periodID = $rows['periodID'];
            $PeriodName = $rows['PeriodName'];
            
            ?>
            <option value="<?php $periodID;?>"><?php echo $PeriodName;?></option>
            <?php 
            }
          }
          else
          {
          }
           ?>
               </select></div>
                </div>
              </div>
                   <div class="form-group">
                  <label>Interest Rate</label>
                     <div class="input-group">
                  <input type="text" class="form-control" name="Rate"
                       style="width:250px;" value="<?php echo $InterestRate;?>"readonly required>     
                  </div>
                </div> 
               <div class="form-group">
                  <label>Loan Amount</label>
                     <div class="input-group">
                  <input type="text" class="form-control" name="Amount"
                       style="width:250px;" required>     
                  </div>
                </div>
                 
                 </div>
                <span style="margin-left:170px;">
                    <button type="submit" name="submit" class="btn btn-success" id="submt">Save</button> <button type="reset" class="btn btn-primary">Reset</button>
        
        </span>
               </form>
            </div>
            
      </div></section></div>
  <?php include("footer.php");?>

</div>
</body>
</html>
