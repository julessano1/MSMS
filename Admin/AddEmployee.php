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

	
	
	

            <div class="box-body" style="overflow: auto;"width="500px">
        <form role="form" method="POST"action="saveEmployee.php ">
               <div class="row">
               
                
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"style="width:250px;" > 
               
                  <div class="form-group">
                 <label> Employee First Name</label>
                  <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px" name="EmployeeFName" required placeholder="Enter Employee First Name">
                    </div>
                 </div>
                <div class="form-group">
                 <label> Employee Last Name</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px" name="EmployeeLname"  required placeholder="Enter Employee Last Name">
                    </div>
                 </div>    
                   <div class="form-group">
                 <label> Employee ID Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="ID" min="0" maxlength="16"  required placeholder="Enter Employee ID">
                    </div>

					   
					   
					   
                 </div>
               </div>
                   <div class="col-sm-3 col-md-3 ">
					   <div class="form-group">
                 <label> Employee Phone Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Phone" maxlength="15" required placeholder="Enter Employee Phone">
                    </div>
                 </div>
					   <div class="form-group">
                 <label> Employee Nationality</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Nationality"  required placeholder="Enter Employee Nationality">
                    </div>
                 </div>
               <div class="form-group">
                 <label> Employee Province</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Province"  required placeholder="Enter Employee Province">
                    </div>
                 </div>
                   
                      
              </div>
                  <div class="form-group">
                 <label> Employee District</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="District"  required placeholder="Enter Employee District">
                    </div>
                 </div>
				    <div class="form-group">
                 <label> Employee Sector</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Sector"  required placeholder="Enter Employee Sector">
                    </div>
                 </div>
                     <div class="form-group">
                 <label> Employee Role Name</label>
                  <div class="input-group">
                <select class="form-control select2" name="roleID"  style="width:250px;" required >
                            <option value="">Select Employee Insuarence</option>
                  <?php
                    $sql_InsuranceName = "SELECT * FROM role ";
                   $result_InsuranceName = $conn->query($sql_InsuranceName);
          $row_count_InsuranceName = $result_InsuranceName->num_rows;
          if ($row_count_InsuranceName> 0)
          {
          while ($rows = $result_InsuranceName->fetch_assoc()) {
            $InsuranceID = $rows['RoleID'];
            $InsuranceName = $rows['RoleName'];
            ?>
            <option value="<?php echo $InsuranceName;?>"><?php echo $InsuranceName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>
                  </div>
                 </div>
                     <span style="margin-left:-180px;">
                      <button type="submit" name="MedAllowed" class="btn btn-success" id="submt">Save</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                  </span>
                    </div>
                 </form>
 
           
            </div>

            
      </section></div>
  <?php include("../footer.php");?>

</div>


<?php include("../script_user.php");?>
</body>
</html>
