<div class="col-xs-12">
        <span style="margin-left:170px;">

<form class="form-horizontal" style="margin-left:150px;" action="" method="POST">
                <div class="box-header with-border">
              <h3 class="box-title" style="margin-left:150px;">Enter Your Name or National ID to find your info</h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter your Name or National ID" name="Identity">
                  </div>
                </div>
                <span style="margin-left:250px;">
        <button type="submit" name="MyInfo" class="btn btn-success" id="submt"> Find Your Info</button></span>
                
              </div>
              </form>
             </span>
   <?php
if(isset($_POST['MyInfo'])) 
    {
   $MyInfo= $_POST['Identity'];
   include('MemberReport.php') ;     
          
          
      }
    ?>
         </div>

