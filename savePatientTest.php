<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO patientTest(patientIDNumber	,symptomID,MedecineID,dragQty,Date)

VALUES ('".$_POST["patientIDNumber"]."','".$_POST["symptomID"]."','".$_POST["MedecineID"]."','".$_POST["dragQty"]."','".$_POST["Date"]."')";
   
if ($conn->query($sql) === TRUE) {
    

echo "<script type= 'text/javascript'>alert
('New Employee successfully Added!!'); </script>";
header("location:index.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>