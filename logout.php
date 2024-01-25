<?php
session_start();
  
$username=$_SESSION['UserName'];
try
{
  $date = date('Y-m-d');
 $date_today=date("Ymds");
 $date_time = date('Y-m-d H:m:s');
	$Myhost="localhost";
	$MyDb="finencialdb";
	$DB_con = new PDO("mysql:host={$Myhost};dbname={$MyDb}","","");
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

 session_destroy();
 echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  
  ?>
  
  
