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
              <form role="form" method="POST"action="SaveMedecine.php">
               <div class="row">
                <h4 class="box-title"style="margin-left:170px;">
                    <span class="label label-success" >
                Adding medecine Form
                </span>
                </h4>
                
           <div class="col-sm-3 col-md-3 ">
               <input type="hidden" value="<?php echo $date;?>" class="form-control" name="Date"
                       style="width:250px;" >     
                  <div class="form-group">
                  <label> Medecine Name</label>
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px" required placeholder="Enter Drag Name" name="DragName">
                    </div>
                      <br>
                    <label> Class Name</label>
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px" required placeholder="Enter Class Name" name="CategoryName">
                    </div>
                    
                </div>
              
              </div>
                   <label> Manifacturing Campany</label>
                     <div class="input-group">
                         <input type="text" class="form-control"  style="width:250px;border-radius:5px" required placeholder="Enter Manifacturing Campany" name="Manifacturer">
                    </div>
                   <label> Description</label>
                     <div class="input-group">
                         <textarea class="form-control"  style="width:250px;border-radius:5px" required placeholder="Enter Medecine Description" name="Description"></textarea>
                    </div>
                    <br>
                 
                 
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
