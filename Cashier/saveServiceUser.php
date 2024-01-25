

<?php
if(isset($_POST["submit"])){
include('../db_connect.php');

    $sql = "INSERT INTO users (EmployeeID,UserName,Password )
VALUES ('".$_POST["EmployeeID"]."'
	,'".$_POST["UserName"]."','".$_POST["Password"]."'
	)";
   
if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert
('New User created successfully'); </script>";
header("location:Add_User.php");
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();   
}
?>
