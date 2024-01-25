<!DOCTYPE html>
<html>
<?php include("../header_userok.php");
$date = date("Y/m/d");
$InterestRate="5%";
session_start();
if(!isset($_SESSION["UserName"])){
  header('location:index.php');
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
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <section class="col-md-12 content">
<div class=" box box-success ">
            <div class="box-body" style="overflow: auto;"width="500px">
              <form role="form" method="POST"action="savePatientTest.php">
               <div class="row">
                <h4 class="box-title"style="margin-left:170px;">
                    <span class="label label-success" >
                Patient Test Form
                </span>
                </h4>
<!--               <?php echo $PatientName;?> -->
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"style="width:250px;" >     
                  
                  <div class="form-group">
                 <label> Patient Name</label>
                      <?php
             $sql_PatientName = "SELECT * FROM  patient  ";
            $result_PatientName = $conn->query($sql_PatientName);
          $row_count_PatientName = $result_PatientName->num_rows;
          if ($row_count_PatientName> 0)
          {
          while ($rows = $result_PatientName->fetch_assoc()) {
            $PatientID = $rows['PatientID'];
            $PatientName = $rows['patientName'];
            $PatientID= $rows['patientIDNumber'];
          }}
            ?>     
                      
                  <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px" value="<?php echo $PatientID;?> "name="patientIDNumber" required placeholder="Enter Patient Name">
                    </div>
                 </div>
              
                   <div class="form-group">
                 <label> Symptom & Feature</label>
                 <div class="input-group">
                   <select class="form-control select2" name="symptomID"  style="width:250px;" required >
                            <option value="">Select Symptom & Features</option>
                  <?php
                    $sql_symptom = "SELECT * FROM symptom ";
                   $result_symptom = $conn->query($sql_symptom);
          $row_count_symptom = $result_symptom->num_rows;
          if ($row_count_symptom> 0)
          {
          while ($rows = $result_symptom->fetch_assoc()) {
            $symptomID = $rows['symptomID'];
            $symptomName = $rows['symptomName'];
            ?>
            <option value="<?php echo $symptomID;?>"><?php echo $symptomName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select> </div>
                 </div>
                     </div><label> Proposed Medecine </label>
                     <div class="input-group">
                           <select class="form-control select2" name="MedecineID"  style="width:250px;" required >
                            <option value="">Select Propose Drag</option>
                  <?php
                    $sql_symptom = "SELECT * FROM medecine ";
                   $result_symptom = $conn->query($sql_symptom);
          $row_count_symptom = $result_symptom->num_rows;
          if ($row_count_symptom> 0)
          {
          while ($rows = $result_symptom->fetch_assoc()) {
            $MedecineID = $rows['MedecineID'];
            $DragName = $rows['DragName'];
            ?>
            <option value="<?php echo $MedecineID ;?>"><?php echo $DragName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>
                    </div><br>
                   <label> Drag Quantity</label>
                      <div class="input-group">
               <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="dragQty" required placeholder="Enter Drag Qty">
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
