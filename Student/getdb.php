<?php
$con= new mysqli('localhost','root','','apricity_project')or die("Could not connect to mysql".mysqli_error($con));
session_start();
$email=$_SESSION['email'];
// get the post records
$txtGen = $_POST['gender'];
$txtColl = $_POST['college'];
$txtMob = $_POST['mob'];
$txtSec = $_POST['section'];

// database insert SQL code
$sql = "UPDATE user SET gender='$txtGen',college='$txtColl',mob='$txtMob',section='$txtSec' WHERE email='$email';";
// insert in database 
$rs = mysqli_query($con, $sql);
//$section=$_SESSION['section'];
if($rs)
{
	echo '<script>alert("Saved Profile")</script>';
}
echo ' <script>window.location.href = "http://localhost:8080/Student/homepage.php"; </script>';
?>