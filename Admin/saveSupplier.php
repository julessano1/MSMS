<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO NewSupplier(SupplierName,ID,Adress,Phone,Email,Date)

VALUES ('".$_POST["SupplierName"]."','".$_POST["Identity"]."','".$_POST["Adress"]."','".$_POST["Phone"]."','".$_POST["Email"]."','".$_POST["Date"]."')";
   
if ($conn->query($sql) === TRUE) {

echo "<script type= 'text/javascript'>alert
('New Employee successfully Added!!'); </script>";
header("location:AddSupplier.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>