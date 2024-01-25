<!DOCTYPE html>
<html>
   
<?php 
include("../header_userok.php");
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
                <?php
 if(isset($_POST['MedAllowed'])){
        $date= $_POST['Date'];
        $PatientName= $_POST['PatientName'];
        $PatientID=$_POST['patientIDNumber'];
        $Adress=   $_POST['patientLocation'];
        $Insurance=$_POST['InsuranceID'];
        $Medecine= $_POST['medreceptionID'];
        $Medecine1= $_POST['medreceptionID1'];
        $Medecine2= $_POST['medreceptionID2'];
        $Medecine3= $_POST['medreceptionID3'];
        $articletypeID= $_POST['articletypeID'];
        $Phone=$_POST['Phone'];
        
        include('MedecineAllowance.php');
    }
    else{
    ?> 
   
              <form role="form" method="POST"action="">
               <div class="row">
                <h4 class="box-title"style="margin-left:300px;">
                    <span class="label label-success" >
                Adding Patient Form
                </span>
                </h4>
               
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"style="width:250px;" >     
                  
                  <div class="form-group">
                 <label> Patient Name</label>
                  <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="PatientName" required placeholder="Enter Patient Name">
                    </div>
                 </div>
              
                   <div class="form-group">
                 <label> Patient ID Number</label>
                 <div class="input-group">
                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="patientIDNumber" maxlength="16" required placeholder="Enter Patient ID Number">
                    </div>
                 </div>
                     </div>
                   <div class="col-sm-3 col-md-3 ">
               <label> Patient Location </label>
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="patientLocation" required placeholder="Enter Location Address">
                    </div><br>
                       
                     <label> Phone Number</label>
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px" name="Phone" required maxlength="13" placeholder="Enter Phone Number">
                    </div>  
                       
                
                     </div>
                   <div class="col-sm-3 col-md-3 ">
                     <label> Medecine Name</label>
                  <div class="input-group">

                <select class="form-control select2" name="medreceptionID"  style="width:250px;" required >
                            <option value="">Select Medecine Name</option>
                  <?php
                    $sql_DragName= "SELECT medecine.DragName,medecine.MedecineID FROM medreception INNER JOIN medecine ON medreception.MedecineID=medecine.MedecineID ";
                   $result_DragName= $conn->query($sql_DragName);
          $row_count_DragName = $result_DragName->num_rows;
          if ($row_count_DragName> 0)
          {
          while ($rows = $result_DragName->fetch_assoc()) {
            $MedecineID= $rows['MedecineID'];
            $DragName = $rows['DragName'];
            ?>
            <option value="<?php echo $MedecineID;?>"><?php echo $DragName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>

                  </div>
                     <a href="AddPatient.php?Newfield">Add Other Field</a>  
                       <?php
                       if(isset($_GET['Newfield']))
                       {?>
                       <br>
                        <div class="input-group">

                <select class="form-control select2" name="medreceptionID1"  style="width:250px;"  >
                            <option value="">Select Medecine Name</option>
                  <?php
                    $sql_DragName= "SELECT medecine.DragName,medecine.MedecineID FROM medreception INNER JOIN medecine ON medreception.MedecineID=medecine.MedecineID ";
                   $result_DragName= $conn->query($sql_DragName);
          $row_count_DragName = $result_DragName->num_rows;
          if ($row_count_DragName> 0)
          {
          while ($rows = $result_DragName->fetch_assoc()) {
            $MedecineID= $rows['MedecineID'];
            $DragName = $rows['DragName'];
            ?>
            <option value="<?php echo $MedecineID;?>"><?php echo $DragName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>
                            <br>
                       <div class="input-group">

                <select class="form-control select2" name="medreceptionID2"  style="width:250px;"  >
                            <option value="">Select Medecine Name</option>
                  <?php
                    $sql_DragName= "SELECT medecine.DragName,medecine.MedecineID FROM medreception INNER JOIN medecine ON medreception.MedecineID=medecine.MedecineID ";
                   $result_DragName= $conn->query($sql_DragName);
          $row_count_DragName = $result_DragName->num_rows;
          if ($row_count_DragName> 0)
          {
          while ($rows = $result_DragName->fetch_assoc()) {
            $MedecineID= $rows['MedecineID'];
            $DragName = $rows['DragName'];
            ?>
            <option value="<?php echo $MedecineID;?>"><?php echo $DragName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>
 
                  </div>
                            <br>
                    <div class="input-group">

                <select class="form-control select2" name="medreceptionID3"  style="width:250px;"  >
                            <option value="">Select Medecine Name</option>
                  <?php
                    $sql_DragName= "SELECT medecine.DragName,medecine.MedecineID FROM medreception INNER JOIN medecine ON medreception.MedecineID=medecine.MedecineID ";
                   $result_DragName= $conn->query($sql_DragName);
          $row_count_DragName = $result_DragName->num_rows;
          if ($row_count_DragName> 0)
          {
          while ($rows = $result_DragName->fetch_assoc()) {
            $MedecineID= $rows['MedecineID'];
            $DragName = $rows['DragName'];
            ?>
            <option value="<?php echo $MedecineID;?>"><?php echo $DragName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>
 
                  </div>
                  </div>
                       <?php
                       }
                       ?>
                       
                       <div class="form-group">
                 <label> Article Type</label>
                  <div class="input-group">

                <select class="form-control select2" name="articletypeID"  style="width:250px;" required >
                            <option value="">Select Article Package</option>
                  <?php
                    $sql_articletype= "SELECT * FROM  articletype ";
                   $result_articletype= $conn->query($sql_articletype);
          $row_count_articletype = $result_articletype->num_rows;
          if ($row_count_articletype> 0)
          {
          while ($rows = $result_articletype->fetch_assoc()) {
            $articletypeID= $rows['articletypeID'];
            $articletypeName = $rows['ArticleTypeName'];
            ?>
            <option value="<?php echo $articletypeID;?>"><?php echo $articletypeName ;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>

                  </div>
                 </div></div>
                          
                       
                <label> Insuarance Name</label>
                      <div class="input-group">
                <select class="form-control select2" name="InsuranceID"  style="width:250px;" required >
                            <option value="">Select Insurance Name</option>
                  <?php
                    $sql_InsuranceName = "SELECT * FROM Insurance ";
                   $result_InsuranceName = $conn->query($sql_InsuranceName);
          $row_count_InsuranceName = $result_InsuranceName->num_rows;
          if ($row_count_InsuranceName> 0)
          {
          while ($rows = $result_InsuranceName->fetch_assoc()) {
            $InsuranceID = $rows['insuranceID'];
            $InsuranceName = $rows['insuranceName'];
            ?>
            <option value="<?php echo $InsuranceID;?>"><?php echo $InsuranceName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>
                  </div>
                  </div>
                <span style="margin-left:300px;">
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" name="MedAllowed" class="btn btn-success" id="submt">Next</button>
        
        </span>
               </form>
                <?php
    }?>     
            </div>
      </div></section></div>
  <?php include("../footer.php");?>

</div>


<?php include("../script_user.php");?>
</body>
     
      
</html>
