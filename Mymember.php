<!DOCTYPE html>
<html>
<?php include("header_user.php");
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
  <?php include("panel_left.php");?>'
      <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
                <div class="box">
                <div class="box-header">
                  <section class="content-header">
  
    <?php
        if(isset($_GET['User_Logout']))
        {
           include('Login.php');
        }
        
        
         else { ?>

      <?php
 include('MemberSearch.php');
         }
      ?>

                   
               
                    </section>
                    </div></div></section></div> </section>

      
    <?php
     include("footer.php");
    
    ?>
    </div>

   <?php
    
//    include('../script.php');
    ?>
  </body>
</html>
