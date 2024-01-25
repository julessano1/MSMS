           <?php
           include('db_connect.php');
           ?> 
           <div class="box-header">
             </div>
            <table id="example1" class="table table-bordered table-striped" style="width:;">
            <thead><tr style="font-size:15px;">
            
            <th><span class=""> Member Name </span></th>
            <th><span class="">Member ID</span></th>
            <th><span class="">Member Location</span></th>
            <th><span class="">Total Contribution</span></th>
            <th><span class=""> Loan Amount </span></th>
            </tr>
            </thead>
            <?php
            
            $stms_prod_requested = $conn->query("SELECT sum(contribution.Share_Amount) AS TotalContributed, sum(loan_application.Amount)as RequestedAmount,loan_application.Loan_ApplicationID, members.Member_Name,members.MemberID_No,members.Member_Address,members.Member_Phone,members.Member_Email,loan_application.Amount FROM members INNER JOIN loan_application ON members.MemberID=loan_application.MemberID INNER JOIN contribution ON members.MemberID=contribution.MemberID WHERE members.Member_Name='$MyInfo' OR members.MemberID_No='$MyInfo' GROUP BY members.MemberID");
 
            $row_count_tryrequest = $stms_prod_requested->num_rows;
            if(($row_count_tryrequest)==empty($stms_prod_requested)) {

                $Wrongmessage="Your Name or Password does not Found in Database Table";
    echo "<script type='text/javascript'>alert('$Wrongmessage');

    </script>";

            }


            if ($row_count_tryrequest > 0)
                {
                while ($rows = $stms_prod_requested->fetch_assoc()) {
                $Loan_ApplicationID = $rows['Loan_ApplicationID'];

                $requestedAmount=$rows['RequestedAmount'];
                $TotalContribution=$rows['TotalContributed'];
                $MemberName=$rows['Member_Name'];
                $MemberID_No=$rows['MemberID_No'];
                $Member_Address=$rows['Member_Address'];
//                $requestedDate=$rows['Date'];
            ?>

            <tr>
             <td><?php echo $MemberName; ?></td>
            <td><?php echo $MemberID_No; ?></td>
            <td><?php echo $Member_Address; ?></td>
            <td><?php echo  $TotalContribution." "."frws"; ?></td>
            <td><?php echo  $requestedAmount." "."frws";?></td>
                </tr>   <?php 
            }
            }?>     

            </table>



