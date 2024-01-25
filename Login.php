<?php

if(isset($_POST["submit"])){
include('db_connect.php');
$MyName=$_POST['UserName'];
$MyPassword=$_POST['Password'];
    $stms_prod_requested = $conn->query("SELECT users.UserName,users.Password,users.UserName,role.RoleName, members.Member_Name FROM users INNER JOIN role ON users.roleID=role.roleID INNER JOIN members ON users.MemberID=members.MemberID WHERE users.UserName='$MyName' AND users.Password='$MyPassword' ");

          
            $row_count_tryrequest = $stms_prod_requested->num_rows;
            if ($row_count_tryrequest > 0)
            {
            while ($rows = $stms_prod_requested->fetch_assoc()) {
            $roleName = $rows['RoleName'];   
   if($roleName=="Secretariat") 
           
        
       {
		header("Location:Admin");
			
		}
         
        else {
header("Location:services");
}

            }
            
            }
      
}
            ?>  
 <div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset- well"style=" border-radius:10px;border:20;margin-left:300px;">
          <div class="row"> 
              <div class="col-md-12 col-md-offset-0 well">
                  <table id="example1" class="table table-bordered table-striped" border="0" cellpadding="5" align="center" width="100% px" height="100%" style="border-collapse:collapse;align:center;" bgcolor="#3d8f7A">
                      <tr height="50" bgcolor="#3d8f7A">
          <th height="" colspan="3" scope="col" bgcolor="#3d8f7A">
      	<font face="Algerian" size="+1">
      <center><p style="margin-left:px;align:center;" >FMS Login 
      		 </p>
            </center>
              </font>
               </th>
                 </tr>
                    </table>
              
              </div></div>
			<form role="form" action="" method="post" name="loginform">
				<fieldset>
                    <div class="form-group">
						<label for="name">Your User Name</label>
						<input type="text" name="UserName" placeholder=" User Name " required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Your Password</label>
						<input type="password" name="Password" placeholder="Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="submit" value="Sign in" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
		
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">

		</div>
	</div>
</div>


<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
    
</html>
