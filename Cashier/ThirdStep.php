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
	<?php
	if (isset($_POST['Approve']))
					{
					echo "NO";	
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
              <center>
                  <a href="ThirdStep.php?Existing">
					  <h3 class="box-title">
        <span class="label label-success">
        Existing Patient 
        </span>
        </h3></a>
        </center>
        </div>
        </div>
      

     
      </div>
       <?php
        if(isset($_GET['Existing'])){?>
        <div class=" box box-success ">
           <div class="box-body" style="overflow: auto;">
              <form role="form" method="POST" action="">
                <div class="form-group">
                  <label>Select Patient ID </label>
                  <div class="input-group">
                <select class="form-control select2" name="PatientID" style="width:285px;" required>
                            <option value="">Select Patient ID Number</option>
                  <?php
                    $sql_employeeID  = "SELECT * FROM patient ";
                   $result_employeeID = $conn->query($sql_employeeID );
          $row_count_employeeID  = $result_employeeID ->num_rows;
          if ($row_count_employeeID > 0)
          {
          while ($rows = $result_employeeID ->fetch_assoc()) {
            $employeeID = $rows['PatientID'];
            $EmployeeNID = $rows['patientIDNumber'];
            ?>
            <option value="<?php echo $employeeID;?>"><?php echo $EmployeeNID;?></option>
            <?php 
            }
          }  else
                  {
                    }
                    ?> </select>
                  </div>
                 </div>
             <span style="margin-left:50px;">
        <button type="submit" name="PatientInfo" class="btn btn-success" id="submt"> Find Patient Info</button></span>
              </form></div>
                      </div>
                      <?php      
        }
   
?>   </section>
					
					
               </div>            
                      
    
  
                   
                </div>
                
				
				
				<?php
					
					if (isset($_POST['PatientInfo']))
					{
						$PatientID=$_POST['PatientID'];
						echo $PatientID;
						include('PayementApproveok.php');
					}
					
					
					?>
				
				
				
                
                            





 </div></div></section></div>
    <?php include("../footer.php");?>

</div>


<?php include("../script_user.php");?>
</body>
</html>
