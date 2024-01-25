<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO Medecine(DragName,CategoryName,Description,Manifacturer,	Quantity,Price,Date)

VALUES ('".$_POST["DragName"]."','".$_POST["CategoryName"]."','".$_POST["Description"]."','".$_POST["Manifacturer"]."','".$_POST["Quantity"]."','".$_POST["Price"]."','".$_POST["Date"]."')";
   
if ($conn->query($sql) === TRUE) {

echo "<script type= 'text/javascript'>alert
('New Employee successfully Added!!'); </script>";
header("location:AddMedecine.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>