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
<?php
  if(isset($_POST['UpdateEmplyee']))
	{
    $status="Approved";
    
    $UpdatedDate = $_POST['UpdatedDate'];
    $EmployeeName = $_POST['EmployeeName'];
    $EmployeeID=$_POST['EmployeeID'];
    $EmployeeIDN = $_POST['EmployeeIDN'];
    $EmployeePhone = $_POST['EmployeePhone'];
    $EmployeeEmail = $_POST['EmployeeEmail'];
    $EmployeeAdress = $_POST['EmployeeAdress'];
    $EmployeeRole = $_POST['EmployeeRole'];
    $EmployeeRole = $_POST['EmployeeRole'];
    $EmployeeRole = $_POST['EmployeeRole'];
     
    
    $Updated=$conn->query( "update employee SET EmployeeName = '$EmployeeName',ID='$EmployeeIDN',Adress='$EmployeeAdress',Phone='$EmployeePhone',Email='$EmployeeEmail',roleID='$EmployeeRole',Date='$UpdatedDate' WHERE  	EmployeeID='$EmployeeID'");
		  if($Updated)
			{
          echo ' <span style="color:red; margin:400px;font-size:30px;"> Employee  succefuly updated </span> ';
           
           
         }
			
     else{
         echo ' <span style="color:red; margin:400px;font-size:30px;">Some thing went wrong while updating </span> ';
     }
 }

elseif(isset($_POST['Delete-patient']))
  {
    $Cancelstatus="Deleted";
     $EmployeeName = $_POST['EmployeeName'];
    $EmployeeID=$_POST['EmployeeID'];
    $EmployeeIDN = $_POST['EmployeeIDN'];
    $EmployeePhone = $_POST['EmployeePhone'];
    $EmployeeEmail = $_POST['EmployeeEmail'];
    $EmployeeAdress = $_POST['EmployeeAdress'];
    $EmployeeRole = $_POST['EmployeeRole'];
    $EmployeeRole = $_POST['EmployeeRole'];
    $EmployeeRole = $_POST['EmployeeRole'];
    
    $DeleteEmployee=$conn->query( "DELETE FROM `employee` WHERE employee.EmployeeID='$EmployeeID'");
		  if($DeleteEmployee)
			{
          echo ' <span style="color:red; margin:400px;font-size:30px;"> Employee  succefuly Deleted </span> ';
           
           
         }
			
     else{
         echo ' <span style="color:red; margin:400px;font-size:30px;">Some thing went wrong while updating </span> ';
     }
 }

   ?>
  <body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <?php include("panel_top_header.php");?>
  </header>
  <?php include("panel_left.php");?>
 <div class="content-wrapper">
   <section class="col-md-9 content">
    <div class="box box-success">
            <div class="box-header">
              <center><h3 class="box-title">
        <span class="label label-success">
       Employee Management 
        </span>
        </h3>
        </center>
        </div>
        <div class="box-body" style="overflow: auto;">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="font-size:15px;">

                    <th><span class="label label-success">Full Name</span></th>
                    <th><span class="label label-success"> Identity Number </span></th>
                     <th><span class="label label-success"> Phone Number </span></th>
                    <th><span class="label label-success">  Email Address </span></th>
                     <th><span class="label label-success">Location Address </span></th>
                    <th><span class="label label-success">  Role </span></th>
                   <th><span class="label label-success">  Actions </span></th>
                   </tr>
                </thead>
                        <tbody>
                 <?php
                 
               // trying join query

        $stms_prod_EmployeeName = $conn->query("SELECT employee.EmployeeName,employee. 	EmployeeID,employee.ID,employee.Adress,employee.Phone,employee.Email,employee.Date,role.RoleName FROM employee INNER JOIN role ON employee.RoleID=role.RoleID
                    ");
//Display All employee
                            
            $row_count_tryrequest = $stms_prod_EmployeeName->num_rows;
            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_EmployeeName->fetch_assoc()) {
                $EmployeeName = $rows['EmployeeName'];
                $ID=$rows['ID'];
                $EmployeeID=$rows['EmployeeID'];
                $Adress=$rows['Adress'];
                $Phone=$rows['Phone'];
                $Email=$rows['Email'];
                $Date=$rows['Date'];
                $Role=$rows['RoleName']; 
                ?>

            <?php

                {
                 }                  
              ?>
               <tr>
            <td><?php echo $EmployeeName; ?></td>
            <td><?php echo $ID; ?></td>
            <td><?php echo $Phone; ?></td>
            <td><?php echo $Email; ?></td>
            <td><?php echo $Adress; ?></td>
            <td><?php echo $Role; ?></td>
            
           
           
            <td><a href="?EmployeeName=<?php echo  $EmployeeName;?>&EmployeeID=<?php echo $EmployeeID?>&Role=<?php echo $Role;?>&ID=<?php echo $ID;?>&Adress=<?php echo $Adress;?>&Phone=<?php echo $Phone;?>&Email=<?php echo $Email;?>" >    
                <span class="label label-success">Edit</span></a>
           </td>

            
            </tr>       
            <?php  }
                 }
               else
                    {
                    
                    }
                    ?>
                   </table>
            </div>
           
          </div>
          
    </section>
    <section class="col-md-3 content">
 
     <?php
     include('UpdateEmployee.php');   
        ?>   
        
        
        
    </section>
   
  </div>
   <?php include("../footer.php");?>

<?php include("../script_user.php");?>
</body>
</html>
 