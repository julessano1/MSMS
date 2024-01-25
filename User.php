<!DOCTYPE html>
<html>
<?php include("../header_userok.php");
$date = date("Y/m/d");
$InterestRate="5%";
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
              <form role="form" method="POST"action="SaveNewUser.php">
               <div class="row">
                <h3 class="box-title"style="margin-left:170px;">
                    <span class="label label-success" >
                New User Form
                </span>
                </h3>
                
           <div class="col-sm-3 col-md-3 ">
               <div class="form-group">
                  <div class="input-group">
                  <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"
                       style="width:250px;" >     
                  
                  </div>
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
                  <label>Member Full Name</label>
                     <div class="input-group">
                <select class="form-control select2" name="roleID"  style="width:250px;" required value=""> 
                            <option value="">Select Name</option>
                    <?php
                    $sql_MemberName = "SELECT * FROM  Role ";
                   $result_MemberName = $conn->query($sql_MemberName);
          $row_count_MemberName= $result_MemberName->num_rows;
          if ($row_count_MemberName> 0)
          {
          while ($rows = $result_MemberName->fetch_assoc()) {
            $MemberID = $rows['roleID'];
            $Member_Name = $rows['RoleName'];
            
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
              </div>
                  
<!--
               <div class="form-group">
                  <label>Member Role</label>
                  <div class="input-group">
                   <select class="form-control select2" name="roleID" style="width:250px;" required>
                            <option value=""></option>
                  <?php
                    $sql_Roles = "SELECT * FROM role ";
                   $result_Roles = $conn->query($sql_Roles);
          $row_count_Roles = $result_Roles->num_rows;
          if ($row_count_Roles> 0)
          {
          while ($rows = $result_Roles->fetch_assoc()) {
            $RoleID = $rows['RoleID'];
            $RoleName = $rows['RoleName'];
            ?>
            <option value="<?php echo $RoleID;?>"><?php echo $RoleName;?></option>
            <?php 
            }
          }
                    else
                    {
                    }
                    ?> </select>
                  </div>
                   </div>
-->
             
              </div>
                    <div class="row">
            <div class="col-sm-3 col-md-3 ">
             <div class="form-group">
                  <label>User Name</label>
                     <div class="input-group">
                  <input type="text" class="form-control" name="UserName"
                       style="width:250px;"  required>     
                  </div>
                </div>
             
              </div>
            <div class="form-group">
                  <label>Password</label>
                     <div class="input-group">
                <input type="password" class="form-control" name="Password"
                       style="width:250px;"  required>     
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
