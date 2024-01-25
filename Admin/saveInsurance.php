<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO insurance(insuranceName,Discount)

VALUES ('".$_POST["insurenceName"]."','".$_POST["Discount"]."')";
   
if ($conn->query($sql) === TRUE) {

echo "<script type= 'text/javascript'>alert
('New Employee successfully Added!!'); </script>";
header("location:AddInsurence.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>