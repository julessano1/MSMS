
 
   <section class="col-md-12 content">
    <div class="box box-success">
            <div class="box-header">
              <center><h3 class="box-title">
        <span class="label label-success">
       Pharmacist Management 
        </span>
        </h3>
        </center>
        </div>
		
        <div class="box-body" style="overflow: auto;">
          <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="font-size:15px;">

                    <th><span class="label label-success">Patient Name</span></th>
                  <th><span class="label label-success"> Identity Number </span></th>
                    <th><span class="label label-success">  Medecine Name </span></th>
                    <th><span class="label label-success">Allowed Quantity </span></th>
                  <th><span class="label label-success"> Price Amount </span></th>
                    <th><span class="label label-success">  Actions </span></th>
                   </tr>
                </thead>
                        <tbody>
				<?php
		if(isset($_REQUEST['Approve_Payement']))
	{
	 echo "well";	
	}
	?>
                 <?php
							if (isset($_POST['Approve']))
					{
					echo "NO";	
					}
                 
               // trying join query
							

	
       $stms_prod_EmployeeName = $conn->query(" SELECT patient.patientName,patient.patientIDNumber,patient.PatientID,patient.patientLocation,patient.Phone,patient.InsuranceID,patient.MedecineID,patient.Nationality,patient.Province,patient.Nationality,patient.District,patient.Sector,patient.articletypeID, patient.Quantity,patient.status,patient.Date, medecine.DragName,medreception.MedreceptionID,medreception.ItemUnit,medreception.UnitNumber,medreception.UnitPrice,medreception.ExperidDate FROM patient INNER JOIN medecine ON patient.MedecineID=medecine.MedecineID INNER JOIN medreception ON medecine.MedecineID=medreception.MedecineID WHERE patient.patientID='$PatientID' AND patient.status='NO'");
                            
           $row_count_tryrequest = $stms_prod_EmployeeName->num_rows;
            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_EmployeeName->fetch_assoc()) {
                $patientName = $rows['patientName'];
                $PatientID=$rows['PatientID'];
                $patientIDNumber=$rows['patientIDNumber'];    
                $ID=$rows['patientIDNumber'];
                $District=$rows['District'];
				$Province=$rows['Province'];
				$Sector=$rows['Sector'];
				$Nationality=$rows['Nationality'];
                $Phone=$rows['Phone'];
                $Insurance=$rows['InsuranceID'];
                $MedecineID=$rows['DragName'];
                $articletypeID=$rows['articletypeID']; 
                $Quantity=$rows['Quantity']; 
                $UnitPrice=$rows['UnitPrice'];
                $ItemUnit=$rows['ItemUnit'];
                $UnitNumber=$rows['UnitNumber'];
                $buyingPrice=$UnitPrice/$ItemUnit;
                $SellingAmount=$buyingPrice*1.5;
                $AmountPay=$Quantity*$SellingAmount;
                ?>

            <?php

                {
                 }                  
            
                 ?>
               <tr>
          <form>  
            <td><?php echo $patientName; ?></td>
            <td><?php echo  $ID; ?></td>
            <td><?php echo $MedecineID." ".$articletypeID; ?></td>
            <td><?php echo $Quantity; ?></td>
           <td><?php echo $AmountPay." "."RWFS"; ?></td>
				  
<!--            <td><?php echo $buyingPrice ; ?></td>-->
       
            <td>

         <button type="submit" name="ApprovePayement" class="btn btn-success" id="submt"> Find Patient Info</button></td>
        </form>
            
            </tr>       
            <?php  }
                 }
               else
                    {
                    
                    }
                    ?>
                   </table>
            </div>
           
          </div>
          
    </section>
    <section class="col-md-3 content">
 
     <?php
     include('LoanAllowence.php');   
        ?>   
        
        
        
    </section>
   
  </div>
  