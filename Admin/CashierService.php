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
    <center><a href="medDistribution.php?Cashier-Service">
        <h3 class="box-title">
        <span class="label label-success">
        Billing Service
        </span>
        </h3></a>
        </center>
        </div>
         </div>
        <div class="col-xs-2">
            <div class="box-header">
<!--
        <center>
        <a href="ManageCashier.php?User"><h3 class="box-title">
        <span class="label label-success">
        View User
        </span>
        </h3></a>
        </center>
-->
        </div>
          <div class="row">
    <div class="col-xs-12">
      <?php
   if(isset($_GET['UserView'])){?>
   
    <form method="POST"action="">
       <div class="row">
  <div class="col-lg-9">
    <table>
        <tr><td>
            <div class="form-group">
                <select class="form-control select2" name="Role_Name"  style="width:180px;" required value=""> 
                   <option value="">Select Role Name</option>
                    <?php
                    $sql_RoleName = "SELECT * FROM  Role ";
                   $result_RoleName = $conn->query($sql_RoleName);
          $row_count_RoleName= $result_RoleName->num_rows;
          if ($row_count_RoleName> 0)
          {
          while ($rows = $result_MemberName->fetch_assoc()) {
            $RoleNameID= $rows['RoleNameID'];
            $RoleName = $rows['RoleName'];
            
            ?>
            <option value="<?php echo $RoleNameID;?>"><?php echo $RoleName;?></option>
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
        <button name="View User"class="btn btn-success" id="submt">
          View User</button>
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

          <?php 
              include ('Welcome.php');
          
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
