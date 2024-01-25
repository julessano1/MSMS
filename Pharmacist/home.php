<!DOCTYPE html>
<html>
<?php include("../header_userok.php");

?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <?php include("panel_top_header.php");?>
  </header>
  <?php include("panel_left.php");?>
 
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Member Option
        <small>Control panel</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          <?php
          if(isset($_GET['LoanApplication'])){
              include('loan.php');
           }
          else{
           include('home_content.php');   
              
          }
         
          
          
          ?>
        
        <!-- ./col -->
      </div>
       </section>
    </div>
  
  <?php include("../footer.php");?>
<?php include("../script_user.php");?>
    </div>   
</body>
</html>
 