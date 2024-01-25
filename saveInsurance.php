<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO Insurence(insurenceName,Date)

VALUES ('".$_POST["insurenceName"]."','".$_POST["Date"]."')";
   
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