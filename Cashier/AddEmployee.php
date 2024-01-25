<!DOCTYPE html>
<html>
<?php include("../header_userok.php");
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
              <form role="form" method="POST"action="saveEmployee.php">
               <div class="row">
                <h4 class="box-title"style="margin-left:170px;">
                    <span class="label label-success" >
                Adding New Employee Form
                </span>
                </h4>
                
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"
                       style="width:250px;" >     
                  <div class="form-group">
                  <label> Full Name</label>
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px" name="EmployeeName"required placeholder="Enter Employee full Name">
                      </div>
               <label> Identity Number</label>
                     <div class="input-group">
                         <input type="text" class="form-control" maxlength="16"  style="width:250px;border-radius:5px"name="Identity" required placeholder="Enter Employee User Name">
                    </div>
                    <label> Adress</label>
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Adress" required placeholder="Enter Employee Adress">
                    </div>
                    
                </div>
              
              </div><label> Phone</label>
                     <div class="input-group">
                         <input type="text" class="form-control" maxlength="10" style="width:250px;border-radius:5px"name="Phone" required placeholder="Enter Employee Phone">
                    </div>
                   <label> Email</label>
                     <div class="input-group">
                         <input type="email" class="form-control"  style="width:250px;border-radius:5px"name="Email" required placeholder="Enter Employee Email">
                    </div>
                   <div class="form-group">
                  <label> Role Name </label>
                  <div class="input-group">
                <select class="form-control select2" name="roleID"  style="width:250px;" required >
                            <option value="">Select Role Name</option>
                  <?php
                    $sql_articletype= "SELECT * FROM  role ";
                   $result_articletype= $conn->query($sql_articletype);
          $row_count_articletype = $result_articletype->num_rows;
          if ($row_count_articletype> 0)
          {
          while ($rows = $result_articletype->fetch_assoc()) {
            $articletypeID= $rows['RoleID'];
            $articletypeName = $rows['RoleName'];
            ?>
            <option value="<?php echo $articletypeID;?>"><?php echo $articletypeName ;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>
                  </div>
                 </div>
                   
                    
                 
                 
                 </div>
                <span style="margin-left:170px;">
                    <button type="submit" name="submit" class="btn btn-success" id="submt">Save</button> <button type="reset" class="btn btn-primary">Reset</button>
        
        </span>
               </form>
            </div>
            
      </div></section></div>
  <?php include("../footer.php");?>

</div>


<?php include("../script_user.php");?>
</body>
</html>
