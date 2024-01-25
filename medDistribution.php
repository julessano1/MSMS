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
  if(isset($_POST['Patient-served']))
	{
    $status="served";
    
//    $Date = $_POST['Date'];
//    $PatientName = $_POST['PatientName'];
//    $articletype = $_POST['articletype'];
//    $ID_No = $_POST['ID_No'];
//    $Address = $_POST['Address'];
//    $Insurance = $_POST['Insurance'];
//    $Quantity = $_POST['Quantity'];
//    $MedName  =$_POST['MedName'];
//    $RwfrsAmount  =$_POST['RwfrsAmount'];
//      
      $Updated=$conn->query( "update patient SET status='$status' WHERE status='Payed'");
      
// $sql = "INSERT INTO distributed(PatientName,articletype,ID_No,Address,Insurance,Quantity,MedName,RwfrsAmount,Date)
//
//VALUES ('".$_POST["PatientName"]."','".$_POST["articletype"]."','".$_POST["ID_No"]."','".$_POST["Address"]."','".$_POST["Insurance"]."','".$_POST["Quantity"]."','".$_POST["MedName"]."','".$_POST["RwfrsAmount"]."','".$_POST["Date"]."')"; 
      
  if ($conn->query($Updated) === TRUE) {

echo "<script type= 'text/javascript'>alert
(' Distribution is successfully Recorded!!'); </script>";
 header("location:medDistribution.php");
}    
  
      
//     
//    if($AllowedAmount<=$RequestedAmount)
//    {
//    $Updated=$conn->query( "update loan_application SET status='$status',AllowedAmount = '$AllowedAmount',ApprovedDate='$ApprovedDate' WHERE Loan_ApplicationID='$Loan_ApplicationID'");
//		  if($Updated)
//			{
//          echo ' <span style="color:red; margin:400px;font-size:30px;"> Member Loan succefuly Approved </span> ';
//           
//           
//         }
//			else
//			{
//			echo"Some thing Wrong !!!!";
//			}}
//     else{
//         echo ' <span style="color:red; margin:400px;font-size:30px;">Sorry!Amount selected is Greater </span> ';
//     }
 }

elseif(isset($_POST['Update-Patient']))
  {
    $Cancelstatus=" Canceled";
   $patientName=$_POST['patientName'];
   $patientID=$_POST['PatientID'];
   $articletypeID= $_POST['articletypeID'];
   $ID=$_POST['patientIDNumber'];
   $Adress=$_POST['patientLocation'];
   $Insurance=$_POST['Insurance'];
   $Quantity=$_POST['Quantity'];
   $MedecineID=$_POST['MedecineID'];
    
    $Updated=$conn->query( "update patient SET patientName='$patientName',PatientID='$patientID';articletypeID='$articletypeID',ID='$ID',Insurance='$Insurance',Quantity='$Quantity' WHERE PatientID='$patientID'");
      if($Updated)
      {
          echo ' <span style="color:red; margin:400px;font-size:30px;"> Patient  succefuly Updated </span> ';
           }
      else
      {
      echo"Some thing Wrong !!!!";
      }

 }
     elseif(isset($_POST['Deleting-Medecine']))
  {
   $patientID=$_POST['PatientID'];
      
    $Deleting=$conn->query( "DELETE FROM patient  WHERE PatientID='$patientID'");
      if($Deleting)
      {
          echo ' <span style="color:red; margin:400px;font-size:30px;">Patient succefuly Deleted </span> ';
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
       Medical Distribution 
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
                    <th><span class="label label-success">  Drag Name </span></th>
                    <th><span class="label label-success">Article Type </span></th>
                  <th><span class="label label-success"> Allowed Quantity </span></th>
                    <th><span class="label label-success">  Actions </span></th>
                   </tr>
                </thead>
                        <tbody>
                 <?php
                 
               // trying join query

       $stms_prod_EmployeeName = $conn->query("SELECT patient.patientName,patient.PatientID,patient.patientIDNumber,patient.patientLocation,patient.Phone,insurance.insuranceName, patient.Quantity,articletype.ArticleTypeName,medecine.DragName,medreception.ItemUnit,medreception.UnitPrice,medreception.UnitNumber FROM patient INNER JOIN articletype ON patient.articletypeID=articletype.articletypeID INNER JOIN medreception ON patient.medreceptionID=medreception.medreceptionID INNER JOIN insurance ON patient.insuranceID=insurance.insuranceID INNER JOIN medecine ON medreception.MedecineID=medecine.MedecineID WHERE patient.status='NO' ORDER BY patient.PatientID");
                            
//Display All employee
                            
            $row_count_tryrequest = $stms_prod_EmployeeName->num_rows;
            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_EmployeeName->fetch_assoc()) {
                $patientName = $rows['patientName'];
                $patientID = $rows['PatientID'];
                $ID=$rows['patientIDNumber'];
                $Adress=$rows['patientLocation'];
                $Phone=$rows['Phone'];
                $Insurance=$rows['insuranceName'];
                $MedecineID=$rows['DragName'];
                $articletypeID=$rows['ArticleTypeName']; 
                $Quantity=$rows['Quantity']; 
                ?>

            <?php

                
                    {}                  
              ?>
               <tr>
            <td><?php echo $patientName; ?></td>
            <td><?php echo  $ID; ?></td>
            <td><?php echo $MedecineID; ?></td>
            <td><?php echo $articletypeID; ?></td>
           <td><?php echo $Quantity; ?></td>
<!--            <td><?php echo $Insurance; ?></td>-->
           
            <td><a href="?patientName=<?php echo  $patientName;?>&articletypeID=<?php echo $articletypeID;?>&ID=<?php echo $ID;?>&Adress=<?php echo $Adress;?>&Phone=<?php echo $Phone;?>&Insurance=<?php echo $Insurance;?>&MedecineID=<?php echo $MedecineID;?>&Quantity=<?php echo $Quantity ?>&PatientID=<?php echo $patientID; ?>" >    
                <span class="label label-success" >Edit</span></a>
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
     include('MymedDistribution.php');   
        ?>   
         </section>
   
  </div>
   <?php include("../footer.php");?>

 <?php
//    include("panel_control_sidebar.php");
    ?>


<?php include("../script_user.php");?>
</body>
</html>
 