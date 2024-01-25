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
       Approve Requested Loan 
        </span>
        </h3>
        </center>
        </div>
        <div class="box-body" style="overflow: auto;">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="font-size:15px;">

                    <th><span class="label label-success">Employee Full  Name</span></th>
                  <th><span class="label label-success"> Identity Number </span></th>
               <th><span class="label label-success">Location  </span></th>
                  
                  <th><span class="label label-success"> Phone Number </span></th>
                    <th><span class="label label-success">  Role Name  </span></th>
                    <th><span class="label label-success">  Actions </span></th>
                   </tr>
                </thead>
                        <tbody>
                 <?php
                 
               // trying join query

                    $stms_prod_requested = $conn->query("SELECT sum(loan_application.Amount) AS RequestedAmount,loan_application.Loan_ApplicationID,loan_application.status,Loan_Application.	Amount,loan_application.Date,loan_application.File,members.Member_Name,members.MemberID_No, members.Member_Address,members.Member_Phone,members.Member_Email
                    FROM loan_application INNER JOIN members ON loan_application.MemberID=members.MemberID WHERE loan_application.status='Pending' GROUP BY members.MemberID 
                    ");
//WHERE loan_application.status='Pending'
            $row_count_tryrequest = $stms_prod_requested->num_rows;
            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_requested->fetch_assoc()) {
                $Loan_ApplicationID = $rows['Loan_ApplicationID'];

                $requestedAmount=$rows['RequestedAmount'];
                $MemberName=$rows['Member_Name'];
                $MemberID_No=$rows['MemberID_No'];
                $Member_Address=$rows['Member_Address'];
                $requestedDate=$rows['Date'];
                $status=$rows['status']; 
                ?>

            <?php

                {
                 }                  
              ?>
               <tr>
            <td><?php echo $MemberName; ?></td>
            <td><?php echo $Member_Address; ?></td>
            <td><?php echo $requestedAmount; ?></td>
           <td><?php echo $requestedDate; ?></td>
            <td style="color:#3d8f7A;"><?php echo $status; ?></td>
            <td><a href="?Loan_ApplicationID=<?php echo  $Loan_ApplicationID;?>&Member_Name=<?php echo $MemberName;?>&MemberID_No=<?php echo $MemberID_No;?>&Member_Address=<?php echo $Member_Address;?>&Amount=<?php echo $requestedAmount;?>" >    
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
 