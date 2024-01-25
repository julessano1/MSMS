
<html>
<?php include("../header_userok.php");
?>
<?php 
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
                   
<div class="col-xs-12">
        <span style="margin-left:170px;">

<form class="form-horizontal" style="margin-left:150px;" action="" method="POST">
                <div class="box-header with-border">
              <h3 class="box-title" style="margin-left:150px;">Enter Drag Name  to find All Related Details</h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your Drag Name " name="DragName">
                  </div>
                </div>
                <span style="margin-left:250px;">
        <button type="submit" name="MyInfo" class="btn btn-success" id="submt"> Find Details Info</button></span>
                
              </div>
              </form>
             </span>
   <?php
if(isset($_POST['DragName'])) 
    {
   $MyInfo= $_POST['DragName'];
   include('MedecineReport.php') ;     
          
          
      }
    else{
    ?>
     <div class="col-xs-12">
        <div class="row">
         <div class="col-lg-12" >
             <br><br><br>
          <center>
        <table  id="example1" class="table table-bordered table-striped" border="0" cellpadding="5" align="center" width="100% px" height="100px" style="border-collapse:collapse;align:center;">
  <tr height="50" bgcolor="#3d8f7A">
      
  </tr>

  <tr bgcolor="#3d8f7A">
      <th height="30" scope="row" colspan="2"><font face="Algerian" size="+2"><p style="margin-left:320px" >Medical Store Management System </p></font></th>
      
  </tr>
   
            </table></center>
         </div>
     </div>
           </div>
    <?php
    }
    ?>
         </div>



  </section></div>
   
     
                </div>

      
     
              </div></div></section></div>
    <?php
     include("../footer.php");
    
    ?>
    </div>

   <?php
    
    include('../script.php');
    ?>
  </body>
</html>
