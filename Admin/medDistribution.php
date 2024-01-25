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
  if(isset($_POST['Approve_Distribution']))
	{
    $status="Distributed";
    
    $PayedDate = $_POST['PayedDate'];
    $PatientID = $_POST['PatientID'];
    $Medecine = $_POST['Medecine'];
    $PriceAmount = $_POST['PriceAmount'];
    
     
    
    $Updated=$conn->query( "update patient SET status='$status',TotalAmount = '$PriceAmount',PayedDate='$PayedDate' WHERE PatientID='$PatientID'");
		  if($Updated)
			{
          echo ' <span style="color:red; margin:400px;font-size:30px;"> Medecine succefuly Distributed </span> ';
           
           
         }
			else
			{
			echo"Some thing went wrong !!!!";
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

                    <th><span class="label label-success">Patient Name</span></th>
                  <th><span class="label label-success"> Identity Number </span></th>
                    <th><span class="label label-success">  Medecine Name </span></th>
                    <th><span class="label label-success">Allowed Quantity </span></th>
                  <th><span class="label label-success"> Price Amount </span></th>
                    <th><span class="label label-success">  Actions </span></th>
                   </tr>
                </thead>
                        <tbody>
				<?php
		if(isset($_REQUEST['ExistingID']))
	{
	 echo "well";	
	}
	?>
                 <?php
                 
               // trying join query
							

	
       $stms_prod_EmployeeName = $conn->query(" SELECT patient.patientName,patient.patientIDNumber,patient.PatientID,patient.patientLocation,patient.Phone,patient.InsuranceID,patient.MedecineID,patient.Nationality,patient.Province,patient.Nationality,patient.District,patient.Sector,patient.articletypeID, patient.Quantity,patient.status,patient.Date, medecine.DragName,medreception.MedreceptionID,medreception.ItemUnit,medreception.UnitNumber,medreception.UnitPrice,medreception.ExperidDate FROM patient INNER JOIN medecine ON patient.MedecineID=medecine.MedecineID INNER JOIN medreception ON medecine.MedecineID=medreception.MedecineID WHERE   patient.status='Payed'");
                            
           $row_count_tryrequest = $stms_prod_EmployeeName->num_rows;
            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_EmployeeName->fetch_assoc()) {
                $patientName = $rows['patientName'];
                $PatientID=$rows['PatientID'];
                $patientIDNumber=$rows['patientIDNumber'];    
                $ID=$rows['patientIDNumber'];
                $District=$rows['District'];
				$Province=$rows['Province'];
				$Sector=$rows['Sector'];
				$Nationality=$rows['Nationality'];
                $Phone=$rows['Phone'];
                $Insurance=$rows['InsuranceID'];
                $MedecineID=$rows['DragName'];
                $articletypeID=$rows['articletypeID']; 
                $Quantity=$rows['Quantity']; 
                $UnitPrice=$rows['UnitPrice'];
                $ItemUnit=$rows['ItemUnit'];
                $UnitNumber=$rows['UnitNumber'];
                $Medecine=$MedecineID." ".$articletypeID;
                $buyingPrice=$UnitPrice/$ItemUnit;
                $SellingAmount=$buyingPrice*1.5;
                $AmountPay=$Quantity*$SellingAmount;
                ?>

            <?php

                {
                 }                  
            
                 ?>
               <tr>
            
            <td><?php echo $patientName; ?></td>
            <td><?php echo  $ID; ?></td>
            <td><?php echo $Medecine; ?></td>
            <td><?php echo $Quantity; ?></td>
           <td><?php echo $AmountPay." "."RWFS"; ?></td>
				   
<!--            <td><?php echo $buyingPrice ; ?></td>-->
       
            <td>

				<a href="?patientName=<?php echo  $patientName;?>&PatientID=<?php echo $PatientID;?>&patientIDNumber=<?php echo $ID;?>&Province=<?php echo $Province;?>&District=<?php echo $District;?>&Nationality=<?php echo $Nationality;?>&Sector=<?php echo $Sector;?>&Phone=<?php echo $Phone;?>&Insurance=<?php echo $Insurance?>&Quantity=<?php echo $Quantity;?>&PriceAmount=<?php echo $AmountPay; ?>&Medecine=<?php echo $Medecine;?>" >    
                <span class="label label-success">Approve Payement</span></a>

          
        
            
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
     include('DataBilling.php');   
        ?>   
        
        
        
    </section>
   
  </div>
   <?php include("../footer.php");?>

<?php include("../script_user.php");?>
</body>
</html>
 