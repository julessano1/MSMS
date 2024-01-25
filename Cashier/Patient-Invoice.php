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
      <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
                <div class="box">
                <div class="box-header">
                  <section class="content-header">
  <div class="row">
    <div class="col-xs-2"> 
        <div class="box-header">
              <center><a href="Patient-Invoice.php?InvoiceFinding"><h3 class="box-title">
        <span class="label label-success">
       Finding Patient Invoice
        </span>
        </h3></a>
        </center>
        </div>
   
      </div>
      
</div>
       <?php
        if(isset($_GET['InvoiceFinding'])){?>
        <div class=" box box-success ">
           
            <div class="box-body" style="overflow: auto;">
              <form role="form" method="POST" action="Patient_Invoice.php">
                <table><tr><td>
                <div class="form-group">
                  <div class="input-group">
                 <select class="form-control select2" name="patientID" style="width:285px;" required>
                            <option value="">Select Patient ID Number</option>
                  <?php
                    $sql_employeeID  = "SELECT * FROM patient WHERE patient.status='Payed'";
                   $result_employeeID = $conn->query($sql_employeeID );
          $row_count_employeeID  = $result_employeeID ->num_rows;
          if ($row_count_employeeID > 0)
          {
          while ($rows = $result_employeeID ->fetch_assoc()) {
            $PatientID = $rows['PatientID'];
            $patientIDNumber = $rows['patientIDNumber'];
            ?>
            <option value="<?php echo $patientIDNumber;?>"><?php echo $patientIDNumber;?></option>
            <?php 
            }
          }
                    else
                    {
                    }
                    ?> </select>
               
                  </div>
                    </div></td><td>&nbsp;&nbsp;&nbsp;</td><td>
                  <div class="form-group">
                   <div class="input-group">
                      </div>
                      <input type="date" class="form-control " name="PayedDate" style="width:285px;"   required  style="width:160px;" >
                  </div></td></tr></table>
               
                         <span style="margin-left:50px;">
        <button type="submit" name="FindExisting" class="btn btn-success" id="submt"> Find Patient Invoice</button></span>
              </form></div></div><?php
        }
               ?>
             
                     
               
                 
 
           
             
         
        
   
        
                      
                </section>
               </div>            
                      
    
  
                   
                </div>

      
     
              </div></div></section></div>
    <?php include("../footer.php");?>

</div>


<?php include("../script_user.php");?>
</body>
</html>
