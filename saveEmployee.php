<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO employee(EmployeeName,ID,Adress,Phone,Email,roleID,Date)

VALUES ('".$_POST["EmployeeName"]."','".$_POST["Identity"]."','".$_POST["Adress"]."','".$_POST["Phone"]."','".$_POST["Email"]."','".$_POST["roleID"]."','".$_POST["Date"]."')";
   
if ($conn->query($sql) === TRUE) {

echo "<script type= 'text/javascript'>alert
('New Employee successfully Added!!'); </script>";
header("location:AddEmployee.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>