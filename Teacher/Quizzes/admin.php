<?php
include_once 'dbConnection.php';
$ref=@$_GET['q'];
//$email = $_POST['uname'];
$email=$_SESSION['email'];
//$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
//$password = stripslashes($password); 
//$password = addslashes($password);
$result = mysqli_query($con,"SELECT email FROM admin WHERE email = '$email'") or die('Error');
$count=mysqli_num_rows($result);
//if($count==1){
//session_start();
//if(isset($_SESSION['email'])){
//session_unset();}
//$_SESSION["name"] = 'Admin';
//$_SESSION["key"] ='sunny7785068889';
//$_SESSION["email"] = $email;
header("location:dash.php");
//}
//else header("location:$ref?w=Warning : Access denied");
?>