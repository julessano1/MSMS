<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO users(MemberID, 		roleID,UserName,Password,Date)

VALUES ('".$_POST["MemberID"]."','".$_POST["roleID"]."','".$_POST["UserName"]."','".$_POST["Password"]."','".$_POST["Date"]."')";
   
if ($conn->query($sql) === TRUE) {

echo "<script type= 'text/javascript'>alert
('New Contribution successfully Added!!'); </script>";
header("location:User.php");
} else {
echo "<script type= 'text/javascript'>
alert('Error: " . $sql . "<br>" . $conn->error."');
</script>";
}

$conn->close();   
}
?>