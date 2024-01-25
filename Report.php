<!DOCTYPE html>
<html>
<?php include("../header_userok.php");
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
              <center><a href="Report.php?R_Contr"><h3 class="box-title">
        <span class="label label-success">
        Distribution Report 
        </span>
        </h3></a>
        </center>
        </div>
   <div class="row">
    <div class="col-xs-12">
      <?php
   if(isset($_GET['R_Contr'])){?>
    <form role="form" method="POST"action="DistributedReport.php">
       <div class="row">
           <table><tr><td>&nbsp;&nbsp;From</td><td><div class="col-lg-9">
             <div class="form-group">
                   <div class="input-group">
                      </div>
                      <input type="date" class="form-control" name="Contr_StartDate" placeholder="<?php echo $startDate; ?>" required  style="width:160px;" >
                </div></div></td>
               <td>To</td><td><div class="col-lg-3">
                      <div class="form-group">
                <div class="input-group">
                     <input type="date" class="form-control" name="Contr_EndDate" required style="width:160px;">
                    </div>
                </div>
               </div>
               </td>
               </tr>
           </table>
           <center>
               <div class="box-footer">
        <button name="ContrDate"class="btn btn-success" id="submt">
           View Report
                   </button>
                        </div>
        </center>
    </div></form>
        <?php
                    }
        ?>
       </div>
        </div>
      </div>
      <div class="col-xs-2">
          <div class="box-header">
              <center>
                  <a href="Report.php?ReceptionReport"><h3 class="box-title">
                      <span class="label label-success">
        Reception Report
        </span>
        </h3></a>
        </center>
        </div>
          <div class="row">
    <div class="col-xs-12">
      <?php
   if(isset($_GET['ReceptionReport'])){?>
   
   <form method="POST"action="ReceptionReport.php">
       <div class="row">
  <div class="col-lg-9">
   <table><tr><td>From</td><td><div class="col-lg-9">
             <div class="form-group">
                   <div class="input-group">
                      </div>
                      <input type="date" class="form-control" name="ReceptStartDate" placeholder="<?php echo $ReceptStartDate; ?>" required  style="width:160px;" >
                </div></div></td>
               <td>To</td><td>
       <div class="col-lg-3">
                      <div class="form-group">
                <div class="input-group">
                     <input type="date" class="form-control" name="ReceptEndDate" required style="width:160px;">
                    </div>
                         </div>
                       </div>
                       </td>
                       </tr>
                      </table>
                <center>
      <div class="box-footer">
        <button name="Reception"class="btn btn-success" id="submt">
           View Report</button>
        </div>
        </center>
           </div></div></form>
        <?php
                    }
        else{}
        ?>
       </div></div>
      </div>
      <div class="col-xs-2">
          <div class="box-header">
              <center>
                  <a href="Report.php?ServedPatientReport"><h3 class="box-title">
                      <span class="label label-success">
        Served Patient Report
        </span>
        </h3></a>
        </center>
        </div>
          <div class="row">
    <div class="col-xs-12">
      <?php
   if(isset($_GET['ServedPatientReport'])){?>
   
   <form method="POST"action="PatientServed.php">
       <div class="row">
  <div class="col-lg-9">
   <table><tr><td>From</td><td><div class="col-lg-9">
             <div class="form-group">
                   <div class="input-group">
                      </div>
                      <input type="date" class="form-control" name="ServedStartDate" placeholder="<?php echo $ReceptStartDate; ?>" required  style="width:160px;" >
                </div></div></td>
               <td>To</td><td><div class="col-lg-3">
                      <div class="form-group">
                <div class="input-group">
                     <input type="date" class="form-control" name="ServedndDate" required style="width:160px;">
                    </div>
                         </div>
                       </div>
                       </td>
                       </tr>
                      </table>
                <center>
      <div class="box-footer">
        <button name="Mothly_Report"class="btn btn-success" id="submt">
           View Report</button>
        </div>
        </center>
           </div></div></form>
        <?php
                    }
        else{}
        ?>
       </div></div>
      </div>
<!--
        <div class="col-xs-2"> <div class="box-header">
              <center><a href="Report.php?PayedLoan"><h3 class="box-title">
        <span class="label label-success">
        Payed Loan Report
        </span>
        </h3></a>
        </center>
        </div>
      <div class="row">
    <div class="col-xs-12">
      <?php
   if(isset($_GET['PayedLoan'])){?>
   
   <form method="POST"action="PayedLoanReport.php">
     <div class="row">
           <table><tr><td>From</td><td><div class="col-lg-9">
             <div class="form-group">
                   <div class="input-group">
                      </div>
                      <input type="date" class="form-control" name="PayedLoanStartDate" placeholder="<?php echo $startDate; ?>" required  style="width:160px;" >
                </div></div></td>
               <td>To</td><td><div class="col-lg-3">
                      <div class="form-group">
                <div class="input-group">
                     <input type="date" class="form-control" name="PayedLoanEndDate" required style="width:160px;">
                    </div>
                         </div></div></td></tr></table>
         <center>
                  <div class="box-footer">
        <button name="LoanPayedReport"class="btn btn-success" id="submt">
           View Report</button>
                        </div>
        </center>
    </div></form>
        <?php
                    }
        else{}
        ?>
       </div></div>
    </div>
-->
      <div class="col-xs-2">
            <div class="box-header">
              <center><a href="Report.php?EmployeeReport">
                <h3 class="box-title">
        <span class="label label-success">
      Employee Report
        </span>
                  </h3></a>
            </center>
            </div>
            <div class="row">
    <div class="col-xs-12">
      <?php
   if(isset($_GET['Member_Report'])){?>
   
   <form method="POST"action="EmplReport.php">
       <div class="row">
  <div class="col-lg-9">
   <table><tr><td>From</td><td><div class="col-lg-9">
             <div class="form-group">
                   <div class="input-group">
                      </div>
                      <input type="date" class="form-control" name="startDate" placeholder="<?php echo $startDate; ?>" required  style="width:160px;" >
                </div></div></td>
               <td>To</td><td><div class="col-lg-3">
                      <div class="form-group">
                <div class="input-group">
                     <input type="date" class="form-control" name="endDate" required style="width:160px;">
                    </div>
                         </div></div></td></tr></table>
                <center>
      <div class="box-footer">
        <button name="RequestedDateReport"class="btn btn-success" id="submt">
           View Report</button>
        </div>
        </center>
           </div></div></form>
        <?php
                    }
        else{}
        ?>
       </div></div>  
          </div>
     
      </div>
    
  </section></div><!-- /.box-header -->
 <div class="col-xs-12">
   <?php 
 if(isset($_POST['ContrDate'])) 
    {
   
   
    $ContrStartDate= $_POST['Contr_StartDate'];
    $ContrEndDate=$_POST['Contr_EndDate'];
          
    include('generate_report.php') ;     
          
          
      }
   else if (isset($_POST['RequestedDateReport'])) {
    $startDate= $_POST['startDate'];
    $endDate=$_POST['endDate'];
    include('MyrequestedR.php') ;     
       }
     elseif (isset($_POST['Mothly_Report'])) {
     $product_TypeID=$_POST['category_Type'];
     
     $startDate= $_POST['startDate'];
     $endDate=$_POST['endDate'];
    include('MyMothly_R.php') ;     
         }
     elseif (isset($_POST['current_stock'])) {
     $startDate= $_POST['startDate'];
     $endDate=$_POST['endDate'];
    include('Mycurent_stock.php') ;     
         }
   
   else if(isset($_POST['IntervalDate'])) 
    {
    $startDate= $_POST['DstrartDate'];
    $endDate=$_POST['DendDate'];
          
    include('MyDistributionR.php') ;     
      }
     else if(isset($_POST['ReceptionDateReport'])) 
    {
    $startDate= $_POST['startDate'];
    $endDate=$_POST['endDate'];
      include('MyReceptionR.php') ;     
     }
     else{?>
     <div class="row"><div class="col-lg-12" ><br><br><br>
            <center>
        <table  id="example1" class="table table-bordered table-striped" border="0" cellpadding="5" align="center" width="100% px" height="100%" style="border-collapse:collapse;align:center;">
  <tr height="50" bgcolor="#3d8f7A">
     </tr>

  <tr bgcolor="#3d8f7A">
      <th height="30" scope="row" colspan="2"><font face="Algerian" size="+2"><p style="margin-left:230px" >Medical Store MANAGEMENT SYSTEM </p></font></th>
      
  </tr>
   
            </table></center>
         </div>
     </div>
          
         
     <?php    
     }
     ?>
     
     
   
                  </div></div>

      
     
              </div></div></section></div></div>

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
