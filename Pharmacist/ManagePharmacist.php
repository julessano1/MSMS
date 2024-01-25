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
  if(isset($_POST['Approve_requestedLoan']))
	{
    $status="Approved";
    
    $ApprovedDate = $_POST['ApprovedDate'];
    $Loan_ApplicationID = $_POST['Loan_ApplicationID'];
    $Member_Name = $_POST['Member_Name'];
    $MemberID_No = $_POST['MemberID_No'];
    $Member_Address = $_POST['Member_Address'];
    $RequestedAmount = $_POST['RequestedAmount'];
     
    $AllowedAmount = $_POST['AllowedAmount'];
     
    if($AllowedAmount<=$RequestedAmount)
    {
    $Updated=$conn->query( "update loan_application SET status='$status',AllowedAmount = '$AllowedAmount',ApprovedDate='$ApprovedDate' WHERE Loan_ApplicationID='$Loan_ApplicationID'");
		  if($Updated)
			{
          echo ' <span style="color:red; margin:400px;font-size:30px;"> Member Loan succefuly Approved </span> ';
           
           
         }
			else
			{
			echo"Some thing Wrong !!!!";
			}}
     else{
         echo ' <span style="color:red; margin:400px;font-size:30px;">Sorry!Amount selected is Greater </span> ';
     }
 }

elseif(isset($_POST['Cancel_request']))
  {
    $Cancelstatus=" Canceled";
     $ApprovedDate = $_POST['ApprovedDate'];
    $Loan_ApplicationID = $_POST['Loan_ApplicationID'];
    $Member_Name = $_POST['Member_Name'];
    $MemberID_No = $_POST['MemberID_No'];
    $Member_Address = $_POST['Member_Address'];
    $RequestedAmount = $_POST['RequestedAmount'];
    $AllowedAmount = $_POST['AllowedAmount'];
    
    $Updated=$conn->query( "update loan_application SET status='$Cancelstatus' WHERE Loan_ApplicationID='$Loan_ApplicationID'");
      if($Updated)
      {
          echo ' <span style="color:red; margin:400px;font-size:30px;"> Loan Request succefuly Canceled </span> ';
           }
      else
      {
      echo"Some thing Wrong !!!!";
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
       Pharmacist Management 
        </span>
        </h3>
        </center>
        </div>
        <div class="box-body" style="overflow: auto;">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="font-size:15px;">

                    <th><span class="label label-success">Full Name</span></th>
                    <th><span class="label label-success">  Role </span></th>
                  <th><span class="label label-success"> Identity Number </span></th>
               <th><span class="label label-success">Location Address </span></th>
                  
                  <th><span class="label label-success"> Phone Number </span></th>
                    <th><span class="label label-success">  Email Address </span></th>
                    <th><span class="label label-success">  Actions </span></th>
                   </tr>
                </thead>
                        <tbody>
                 <?php
                 
               // trying join query

        $stms_prod_EmployeeName = $conn->query("SELECT employee.EmployeeName,employee.ID,employee.Adress,employee.Phone,employee.Email,employee.Date,role.RoleName FROM employee INNER JOIN role ON employee.RoleID=role.RoleID WHERE role.RoleName='Pharmacist' OR role.RoleName='Admin Pharmacist'
                    ");
//Display All employee
                            
            $row_count_tryrequest = $stms_prod_EmployeeName->num_rows;
            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_EmployeeName->fetch_assoc()) {
                $EmployeeName = $rows['EmployeeName'];
                $ID=$rows['ID'];
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
            <td><?php echo $Role; ?></td>
            <td><?php echo $ID; ?></td>
            <td><?php echo $Adress; ?></td>
           <td><?php echo $Phone; ?></td>
            <td><?php echo $Email; ?></td>
           
            <td><a href="?EmployeeName=<?php echo  $EmployeeName;?>&Role=<?php echo $Role;?>&ID=<?php echo $ID;?>&Adress=<?php echo $Adress;?>&Phone=<?php echo $Phone;?>&Email=<?php echo $Email;?>" >    
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
     include('LoanAllowence.php');   
        ?>   
        
        
        
    </section>
   
  </div>
   <?php include("../footer.php");?>

<?php include("../script_user.php");?>
</body>
</html>
 