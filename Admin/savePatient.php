<?php
if(isset($_POST["submit"])){
$PatientName=$_POST['PatientName'];
include('../db_connect.php');
    $sql = "INSERT INTO patient(patientName,patientIDNumber,	patientLocation,Phone,InsuranceID,MedecineID,Type1,Type2,Type3,Type4,Type5,articletypeID,Quantity,status,Date)

VALUES ('".$_POST["patientName"]."','".$_POST["patientIDNumber"]."','".$_POST["patientLocation"]."','".$_POST["Phone"]."','".$_POST["InsuranceID"]."','".$_POST["MedecineID"]."','".$_POST["Type1"]."','".$_POST["Type2"]."','".$_POST["Type3"]."','".$_POST["Type4"]."','".$_POST["Type5"]."','".$_POST["articletypeID"]."','".$_POST["Quantity"]."','".$_POST["status"]."','".$_POST["Date"]."')";
   
if ($conn->query($sql) === TRUE) {
   

echo "<script type= 'text/javascript'>alert
('New Employee successfully Added!!'); </script>";
    $PatientName=$_POST['PatientName'];
header("location:AddPatient.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>