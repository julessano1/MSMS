<?php
if(isset($_POST["submit"])){
include('db_connect.php');

    $sql = "INSERT INTO loan_application(MemberID,File,InterestRate,Amount,Date,status)

VALUES ('".$_POST["MemberID"]."','".$_POST["File"]."','".$_POST["Rate"]."','".$_POST["Amount"]."','".$_POST["Date"]."','".$_POST["status"]."')";
   
if ($conn->query($sql) === TRUE) {

echo "<script type= 'text/javascript'>alert
('New Contribution successfully Added!!'); </script>";
header("location:LoanRequest.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>