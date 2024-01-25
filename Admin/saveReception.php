<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO medreception(SupplierID,MedecineID,articletypeID,packageID,ItemUnit,UnitNumber,UnitPrice,Date,ExperidDate)

VALUES ('".$_POST["SupplierID"]."','".$_POST["MedecineID"]."','".$_POST["articletypeID"]."','".$_POST["packageID"]."','".$_POST["Item-Unit"]."','".$_POST["UnitNumber"]."','".$_POST["Unit-Price"]."','".$_POST["Date"]."','".$_POST["ExperidDate"]."')";
   
   
if ($conn->query($sql) === TRUE) {

echo "<script type= 'text/javascript'>alert
('New Employee successfully Added!!'); </script>";
header("location:MedicalReception.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>