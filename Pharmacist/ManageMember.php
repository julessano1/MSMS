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
    <center><a href="ManageMember.php?AddMember">
        <h3 class="box-title">
        <span class="label label-success">
        Add Member
        </span>
        </h3></a>
        </center>
        </div>
         </div>
        <div class="col-xs-2"><div class="box-header">
        <center>
        <a href="ManageMember.php?AddCon"><h3 class="box-title">
        <span class="label label-success">
        Add Contribution
        </span>
        </h3></a>
        </center>
        </div>
          <div class="row">
    <div class="col-xs-12">
      <?php
   if(isset($_GET['AddCon'])){?>
   
    <form method="POST"action="">
       <div class="row">
  <div class="col-lg-9">
    <table>
        <tr><td>
            <div class="form-group">
                <select class="form-control select2" name="Member_Name"  style="width:180px;" required value=""> 
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
            </td>
        </tr>
      </table>
      <center>
      <div class="box-footer">
        <button name="Contribution"class="btn btn-success" id="submt">
          Add Contribution</button>
        </div>
        </center>
           </div></div></form>
        <?php
                    }
        else{}
        ?>
       </div>
            </div>
           </div>
      <div class="col-xs-2">
            <div class="box-header">
              <center><a href="ManageMember.php?Pay_Loan"><h3 class="box-title">
        <span class="label label-success">
        Paying Loan
        </span>
                  </h3></a>
            </center>
            </div>
            <div class="row">
    <div class="col-xs-12">
      <?php
   if(isset($_GET['Pay_Loan'])){?>
   
   <form method="POST"action="">
       <div class="row">
  <div class="col-lg-9">
    <table><tr><td> <div class="form-group"><select class="form-control select2" name="Member_Name"  style="width:180px;" required value=""> 
                            <option value="">Select Name</option>
                    <?php
                    $sql_MemberName = "SELECT * FROM   loan_application INNER JOIN members ON  loan_application.MemberID=Members.MemberID WHERE  loan_application.status='Approved' ";
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
               </select></div></td>
               
       </tr></table>
                <center>
      <div class="box-footer">
        <button name="Pay_Loan"class="btn btn-success" id="submt">
           My Loan</button>
        </div>
        </center>
           </div></div></form>
        <?php
                    }
        else{}
        ?>
       </div>
          </div> 
            </div>
     </div>
    
  </section></div>
      <!-- /.box-header -->
<div class="col-xs-12">
     
      <div class="col-xs-12">
      <?php
   if(isset($_GET['AddMember'])){
    
       include ('AddNewMember.php');            
   }
        
    else if(isset($_POST['Contribution'])){
               $Member_Name= $_POST['Member_Name'];
                
              $stms_MemberName = $conn->query("
                    SELECT members.MemberID,members.MemberID_No,members.Member_Name,members.Member_Address,members.Member_Phone,members.Member_Email ,members.G_ID,members.RoleID fROM members 
                   WHERE members.MemberID='$Member_Name'  ");
                  $row_MemberName = $stms_MemberName->num_rows;
                if ($row_MemberName > 0)
                    {
                  while ($rows = $stms_MemberName->fetch_assoc()) {
                 $MemberID = $rows['MemberID'];
                 $MemberID_No = $rows['MemberID_No'];
                 $Member_Name=$rows['Member_Name'];
                 $Member_Address = $rows['Member_Address'];
                 $Member_Phone = $rows['Member_Phone'];
                 $Member_Email = $rows['Member_Email'];
                 $G_ID=$rows['G_ID'];
                 $RoleID=$rows['RoleID'];
                
                   }}
                    ?>
              
              <div class="col-xs-9"style="margin-left:;">
        <form role="form" method="POST"action="SaveCon.php">
               <table style="overflow-x:auto;">
                   
                <tr><div class="form-group">
                  <div class="input-group">
                  <input type="hidden" value="<?php echo $MemberID;?>" class="form-control" name="MemberID" style="width:250px;" readonly>     
                  
                  </div>
                    </div>
                     <div class="form-group">
                  <div class="input-group">
                  <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date" style="width:250px;" readonly>     
                  
                  </div>
                    </div><td>
                
                   <div class="form-group">
                  <label> Member Full Name</label>
                  <div class="input-group">
                  <input type="text" value="<?php echo $Member_Name;?>" class="form-control" name="MemberName" style="width:250px;" readonly>     
                  
                  </div>
                    </div></td>
                 <td style="margin:10px;padding:10px;">
                   <div class="form-group">
                  <label> Member Location Address</label>
                  <div class="input-group">
                  <input type="text"  class="form-control" name="MemberAddress" style="width:250px;" value="<?php echo $Member_Address;?>" readonly>     
                  
                  </div>
              </div>
               </td>
               <tr>
                <td style=";">
                     <div class="form-group">
                  <label> Member ID No</label>
                  <div class="input-group">
                <input type="text" value="<?php echo $MemberID_No; ?>" class="form-control" name="MemberID_No" style="width:250px;" readonly>   </div>
               </div>  
                   </td>
                        <td style="margin:10px;padding:10px;">
                    <div class="form-group">
                  <label>Contribution Amount</label>
                  <div class="input-group">
                  <input type="text"class="form-control" name="Payment" style="width:250px;" required>     
                  
                  </div>
              </div></td><td>  <input type="radio" name="Rating" value="Pays:ON TIME" checked>Payed On Time<br>
 
                     </td>
                     <td> <input type="radio" name="Rating" value="Pays:ON Rate">Payed on Rate<br> </td>
                <tr>
             <span style="margin-left:170px;">
          <td>
        <button type="submit" name="submit" class="btn btn-success" id="submt">Save</button>&nbsp;&nbsp;&nbsp;
          <button type="reset" class="btn btn-primary">Reset</button></td>
                </span></tr></table>
               </form>
       
       </div>
          
          <?php
        }  
         else if(isset($_POST['Pay_Loan'])){
            $Member_Name= $_POST['Member_Name'];
             $stms_MemberName = $conn->query(" SELECT SUM(rem_loan.PayedAmount)AS TotAmountPayed,members.MemberID,
                    members.MemberID_No,members.Member_Name,
                     members.Member_Address,members.Member_Phone,loan_application.Amount, 
                     members.Member_Email ,members.G_ID,members.RoleID fROM members
                      INNER JOIN loan_application ON 
                      members.MemberID=loan_application.MemberID 
                      INNER JOIN rem_loan ON members.MemberID_No=rem_loan.Member_NID
                   WHERE members.MemberID='$Member_Name'  ");
                  $row_MemberName = $stms_MemberName->num_rows;
                if ($row_MemberName > 0)
                    {
                  while ($rows = $stms_MemberName->fetch_assoc()) {
                 $MemberID_No = $rows['MemberID_No'];
                 $Member_Name=$rows['Member_Name'];
                 $Member_Address = $rows['Member_Address'];
                  $Member_Phone = $rows['Member_Phone'];
                  $Member_Email = $rows['Member_Email'];
                  $LoanRequested = $rows['Amount'];
                  $G_ID=$rows['G_ID'];
                  $RoleID=$rows['RoleID'];
                  $TotolPayedAmount=$rows['TotAmountPayed'];
                  $Interest=$LoanRequested*5/100;
                  $MyTotalAmount=$LoanRequested+$Interest;
                  $LoanAmountRemaining=$MyTotalAmount-$TotolPayedAmount;
                
                   }}

                    ?>




           <div class="col-xs-9"style="margin-left:;">
   <form method="POST"action=" saveLoanPayement.php">
       <div class="row">
  <div class="col-lg-9">
   <table><tr>
       <td>
        
                      
                      <input type="hidden" class="form-control" name="MemberID" value="<?php echo $MemberID?>"style="width:250px;" readonly>
                    
                  <label>Member Full Name</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" name="MemberName" value="<?php echo $Member_Name?>"style="width:250px;" readonly>
                    </div></div>
           </td>
       <td style="margin:10px;padding:10px;"> 
       <div class="form-group">
                  <label>Member ID No</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control"  value="<?php echo $MemberID_No?>"style="width:250px;" name="Member_NID" readonly>
                    </div></div></td>
               </tr><tr><td style="">
       <div class="form-group">
                  <label>Member Location Address</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" name="MemberAddress" value="<?php echo $Member_Address; ?>" style="width:250px;" readonly>
                    </div></div></td>
       <td style="margin:10px;padding:10px;" >
       <div class="form-group">
            <label>Loan Amount Taken </label>
              <div class="input-group">
                <div class="input-group-addon">
                 <i class="fa fa-user" readonly></i>
                   </div>
                      <input type="text" class="form-control"
                       name="Loan_Taken" Value="<?php echo $MyTotalAmount." "."Frw";?>"style="width:250px;" readonly>
                    </div></div></td>
             </tr>
          <tr> 
           <td style="margin:10px;padding:10px;">
             <div class="form-group">
                  <label>Loan Amount Remaining </label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user" readonly></i>
                      </div>
                      <input type="text" class="form-control" name="Rem_Loan" style="width:250px;" required value="<?php echo $LoanAmountRemaining." "."Frw";?>">
                    </div></div></td>
             <td style="margin:10px;padding:10px;"> 
               <div class="form-group">
                  <label>Loan Payed Amount</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" name="PayedAmount"style="width:250px;" required>
                    </div></div></td>
               </tr>
             <td>
          <button type="submit" name="submit" class="btn btn-success" id="submt"> Submit Payment</button>&nbsp;&nbsp;&nbsp;<button type="reset"  class="btn btn-success" > Cancel</button></td>
        </table>
        </div>
       </div>
     </form>      
       </div>
          <?php
         }
          else {?>
          </div>
          <?php 
              include ('Welcome.php');
          }
             ?> 
         </div>
        </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
