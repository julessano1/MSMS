<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO employee(EmployeeFName, 	EmployeeLName,ID,Phone,Nationality,Province,District,Sector,Date)

VALUES ('".$_POST["EmployeeFName"]."','".$_POST["EmployeeLName"]."','".$_POST["ID"]."','".$_POST["Phone"]."','".$_POST["Nationality"]."','".$_POST["Province"]."','".$_POST["District"]."','".$_POST["Sector"]."','".$_POST["Date"]."')";
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