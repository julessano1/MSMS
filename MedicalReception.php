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
              <form role="form" method="POST"action="saveReception.php">
               <div class="row">
                <h4 class="box-title"style="margin-left:300px;">
                    <span class="label label-success" >
                Medecine Reception Form
                </span>
                </h4>
                
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"style="width:250px;" >     
                  
                  <div class="form-group">
                 <label> Supplier Name</label>
                  <div class="input-group">

                <select class="form-control select2" name="SupplierID"  style="width:250px;" required >
                            <option value="">Select Supplier Name</option>
                  <?php
                    $sql_SupplierName= "SELECT * FROM newsupplier ";
                   $result_SupplierName= $conn->query($sql_SupplierName);
          $row_count_SupplierName = $result_SupplierName->num_rows;
          if ($row_count_SupplierName> 0)
          {
          while ($rows = $result_SupplierName->fetch_assoc()) {
            $SupplierID = $rows['SupplierID'];
            $SupplierName = $rows['SupplierName'];
            ?>
            <option value="<?php echo $SupplierID;?>"><?php echo $SupplierName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>

                  </div>
                 </div>
              
                   <div class="form-group">
                 <label> Article Name</label>
                  <div class="input-group">

                <select class="form-control select2" name="MedecineID"  style="width:250px;" required >
                            <option value="">Select Drag Name</option>
                  <?php
                    $sql_DragName= "SELECT * FROM medecine ";
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
                     </div>
                   
                    <div class="col-sm-3 col-md-3 ">
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
                 </div>
                 <div class="form-group">
                 <label> Article Package</label>
                  <div class="input-group">

                <select class="form-control select2" name="packageID"  style="width:250px;" required >
                            <option value="">Select Article Package</option>
                  <?php
                    $sql_DragName= "SELECT * FROM package ";
                   $result_DragName= $conn->query($sql_DragName);
          $row_count_DragName = $result_DragName->num_rows;
          if ($row_count_DragName> 0)
          {
          while ($rows = $result_DragName->fetch_assoc()) {
            $MedecineID= $rows['packageID'];
            $DragName = $rows['packageName'];
            ?>
            <option value="<?php echo $MedecineID;?>"><?php echo $DragName;?></option>
            <?php 
            }
          }
            else{ }
                    ?> </select>

                  </div>
                 </div>
                     </div><div class="col-sm-3 col-md-3 ">
                  
                  
                  <div class="form-group">
                 <label>Number of Item per Unit </label>
                  <div class="input-group">

                 <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="Item-Unit" required placeholder="Enter Number of Item per Unit">
                      </div>
                 </div>
                   <div class="form-group">
                 <label> Number of Unit</label>
                  <div class="input-group">

                   <input type="text" class="form-control"  style="width:250px;border-radius:5px"name="UnitNumber" required placeholder="Number of Unit">


                  </div>
                 </div>
                     </div>
                    <label> Unit Price</label>
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px" name="Unit-Price" required placeholder="Enter Unit Price">
                    </div><br>
                   <label> Expired Date</label>
                   <div class="form-group">
                   <div class="input-group">
                      </div>
                      <input type="date" class="form-control" name="ExperidDate" placeholder=" " required  style="width:250px;border-radius:5px" >
                </div>
                  </div>
                <span style="margin-left:300px;">
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
