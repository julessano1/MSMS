<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO patient(PatientName,patientIDNumber,patientLocation,Phone,InsuranceID,MedecineID,status,Date)

VALUES ('".$_POST["PatientName"]."','".$_POST["patientIDNumber"]."','".$_POST["patientLocation"]."','".$_POST["Phone"]."','".$_POST["InsuranceID"]."','".$_POST["MedecineID"]."','".$_POST["status"]."','".$_POST["Date"]."')";
   
if ($conn->query($sql) === TRUE) {

echo "<script type= 'text/javascript'>alert
('New Employee successfully Added!!'); </script>";
header("location:ThirdStep.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>