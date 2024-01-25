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
      Medecine Management 
        </span>
        </h3>
        </center>
        </div>
        <div class="box-body" style="overflow: auto;">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="font-size:15px;">

                    <th><span class="label label-success">Drag Name</span></th>
                    <th><span class="label label-success"> Article Type </span></th>
                  <th><span class="label label-success"> Package Name </span></th>
               <th><span class="label label-success">Item per Unit </span></th>
                  
                  <th><span class="label label-success">  Number of Unit </span></th>
                    <th><span class="label label-success"> Unit Price </span></th>
                   
                    <th><span class="label label-success">  Actions </span></th>
                   </tr>
                </thead>
                        <tbody>
                 <?php
                 
               // trying join query

        $stms_prod_EmployeeName = $conn->query("SELECT medreception.ItemUnit,medreception.UnitNumber,medreception.UnitPrice,medreception.TotalAmount,medreception.Date,medecine.DragName,articletype.ArticleTypeName,newsupplier.SupplierName FROM medreception INNER JOIN newsupplier ON newsupplier.SupplierID=medreception.SupplierID INNER JOIN medecine ON medreception.MedecineID=medecine.MedecineID INNER JOIN articletype ON medreception.articletypeID=articletype.articletypeID
        
                    ");
//Display All employee
                            
            $row_count_tryrequest = $stms_prod_EmployeeName->num_rows;
            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_EmployeeName->fetch_assoc()) {
                //$EmployeeName = $rows['Name'];
                $DragName=$rows['DragName'];
                $ArticleTypeName=$rows['ArticleTypeName'];
                //$packageName=$rows['packageName'];
                $ItemUnit=$rows['ItemUnit'];
                $UnitNumber=$rows['UnitNumber'];
                $UnitPrice=$rows['UnitPrice']; 
                $Date=$rows['Date'];
                ?>

            <?php

                {
                 }                  
              ?>
               <tr>
            <td><?php echo $DragName; ?></td>
            <td><?php echo  $ArticleTypeName; ?></td>
            <td><?php echo " "; ?></td>
            <td><?php echo $ItemUnit; ?></td>
           <td><?php echo $UnitNumber; ?></td>
            <td><?php echo $UnitPrice." "."Rwfrs"; ?></td>
           
            <td><a href="?DragName=<?php echo  $DragName;?>&ArticleTypeName=<?php echo $ArticleTypeName;?>&ItemUnit=<?php echo $ItemUnit;?>&UnitNumber=<?php echo $UnitNumber;?>&UnitPrice=<?php echo $UnitPrice;?>&Date=<?php echo $Date;?>" >    
                <span class="label label-success" style="background-color:coral;  ">Edit</span></a>
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
     include('MymedecineData.php');   
        ?>   
        
        
        
    </section>
   
  </div>
   <?php include("../footer.php");?>

<?php include("../script_user.php");?>
</body>
</html>
 