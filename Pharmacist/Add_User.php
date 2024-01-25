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
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <section class="col-md-6 content">
  <div class=" box box-success ">
            <div class="box-header">
              <h3 class="box-title">
        <span class="label label-success">
           Add New User Form
        </span>
        </h3>
        <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div><br>
           </div>
            <div class="box-body" style="overflow: auto;">
              <form role="form" method="POST" action="saveServiceUser.php">
                <div class="form-group">
                  <label>Select Member Name </label>
                  <div class="input-group">
                <select class="form-control select2" name="EmployeeID" style="width:285px;" required>
                            <option value="">Select Employee ID Number</option>
                  <?php
                    $sql_employeeID  = "SELECT * FROM employee ";
                   $result_employeeID = $conn->query($sql_employeeID );
          $row_count_employeeID  = $result_employeeID ->num_rows;
          if ($row_count_employeeID > 0)
          {
          while ($rows = $result_employeeID ->fetch_assoc()) {
            $employeeID = $rows['EmployeeID'];
            $EmployeeNID = $rows['EmployeeName'];
            ?>
            <option value="<?php echo $employeeID;?>"><?php echo $EmployeeNID;?></option>
            <?php 
            }
          }
                    else
                    {
                    }
                    ?> </select>
                  </div>
                 </div>
               
                 <div class="form-group">
                  <label>User Name</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" name="UserName" placeholder="Enter User Name" style="width:250px;" required>
                    </div></div>
                    <div class="form-group">
                  <label>User Password</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="password" class="form-control" name="Password" placeholder="Enter User Password" style="width:250px;" required>
                    </div></div>
                 <div class="box-footer">
                <button type="reset" class="btn btn-primary">Reset</button>
                <button type="submit" name="submit"class="btn btn-success" id="submt"><i class="fa fa-save"></i> Save</button>
            </div>
              </form></div></div>
                </section>
               </div>
          <?php include("../footer.php");?>

            <?php include("panel_control_sidebar.php");?>
            <?php include("../script_user.php");?>
            </body>
            </html>
