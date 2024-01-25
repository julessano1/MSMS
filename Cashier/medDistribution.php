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
<?php
   
if(isset($_REQUEST['patientID'])
)
{
header("location:AddSupplier.php");
}
?>
    <?php
//  $patientID=$_REQUEST['PatientID'];  
//   $status="payed";
//     $Updated=$conn->query( "update patient SET status='$status' WHERE 	patientID='$patientID'");
//		  if($Updated)
//			{
//          echo ' <span style="color:red; margin:400px;font-size:30px;"> Member Loan succefuly Approved </span> ';
//           
//           
//         }
//			else
//			{
//			echo"Some thing Wrong !!!!";
//			}  }           
                ?>

    
  
 <div class="content-wrapper" style="margin-left:-20px;">
   <section class="col-md-12 content">
    <div class="box box-success">
          
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
                 
               // trying join query

       $stms_prod_EmployeeName = $conn->query(" SELECT patient.patientName,patient.patientIDNumber,patient.PatientID,patient.patientLocation,patient.Phone,patient.InsuranceID,patient.MedecineID,patient.Nationality,patient.Province,patient.Nationality,patient.District,patient.Sector,patient.articletypeID, patient.Quantity,patient.status,patient.Date, medecine.DragName,medreception.MedreceptionID,medreception.ItemUnit,medreception.UnitNumber,medreception.UnitPrice,medreception.ExperidDate FROM patient INNER JOIN medecine ON patient.MedecineID=medecine.MedecineID INNER JOIN medreception ON medecine.MedecineID=medreception.MedecineID WHERE  patient.status='NO'");
                            
           $row_count_tryrequest = $stms_prod_EmployeeName->num_rows;
            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_EmployeeName->fetch_assoc()) {
                $patientName = $rows['patientName'];
                $PatientID=$rows['PatientID'];
                $patientIDNumber=$rows['patientIDNumber'];    
                $ID=$rows['patientIDNumber'];
                $Adress=$rows['patientLocation'];
                $Phone=$rows['Phone'];
                $Insurance=$rows['InsuranceID'];
                $MedecineID=$rows['DragName'];
                $articletypeID=$rows['articletypeID']; 
                $Quantity=$rows['Quantity']; 
                $UnitPrice=$rows['UnitPrice'];
                $ItemUnit=$rows['ItemUnit'];
                $UnitNumber=$rows['UnitNumber'];
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
            <td><?php echo $MedecineID." ".$articletypeID; ?></td>
            <td><?php echo $Quantity; ?></td>
           <td><?php echo $AmountPay." "."RWFS"; ?></td>
<!--            <td><?php echo $buyingPrice ; ?></td>-->
           
             <td><a href="?patientID=<?php echo $PatientID;?>" >    
                <span class="label label-success">Approve Payement</span></a>
           </td>
                            </tr>       
            <?php  
                
                }
                 }
               else
                    {
                    
                    }
                    ?>
                   </table>
            </div>
           
       </div>
     </section>
</div>
    
          
    