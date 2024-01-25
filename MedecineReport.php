           <?php
           include('../db_connect.php');
           ?> 
           <div class="box-header">
             </div>
            <table id="example1" class="table table-bordered table-striped" style="width:;">
            <thead><tr style="font-size:15px;">
            
            <th><span class=""> Medecine Name </span></th>
            <th><span class="">Medecine Type</span></th>
            <th><span class="">Medecine Quantity</span></th>
            <th><span class="">Expered date</span></th>
            </tr>
            </thead>
            <?php
            
            $stms_prod_requested = $conn->query("SELECT medecine.DragName,articletype.ArticleTypeName,medreception.UnitNumber,medreception.ItemUnit,medreception.MedreceptionID,medreception.ExperidDate FROM medreception INNER JOIN medecine ON medreception.MedecineID=medecine.MedecineID
            INNER JOIN articletype ON medreception.articletypeID=articletype. articletypeID WHERE medecine.DragName='$MyInfo' ");
 
            $row_count_tryrequest = $stms_prod_requested->num_rows;
            if(($row_count_tryrequest)==empty($stms_prod_requested)) {

                $Wrongmessage="Mecine not available in Database ";
    echo "<script type='text/javascript'>alert('$Wrongmessage');

    </script>";

            }


            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_requested->fetch_assoc()) {
                $Loan_ApplicationID = $rows['MedreceptionID'];

                $DragName=$rows['DragName'];
                $ArticleTypeName=$rows['ArticleTypeName'];
                $ItemUnit=$rows['ItemUnit'];
                $ExperidDate=$rows['ExperidDate'];
                $UnitNumber=$rows['UnitNumber'];
                $TotalQuantity=$ItemUnit*$UnitNumber;
            ?>

            <tr>
             <td><?php echo $DragName; ?></td>
            <td><?php echo $ArticleTypeName; ?></td>
<!--            <td><?php echo $ItemUnit; ?></td>-->

            <td><?php echo  $TotalQuantity; ?></td>
          <td><?php echo  $ExperidDate;?></td>

                </tr>   <?php 
            }
                
            }?>     

            </table>



