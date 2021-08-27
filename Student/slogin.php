<?php
session_start();
$_SESSION['login']="yes";
$name= $_GET['name'];
$email=$_GET['email'];
if(preg_match("/1si1[6-9]cs[0-9][0-9][0-9]*@sit[.]ac[.]in/m",$email)){
    $_SESSION['login']="yes";
}
else{
    session_destroy();
    echo '<script>alert("You should login wit your SIT mail only.")</script>';
    echo '<script>window.location.href="https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://localhost:8080/ML/masterlogin.html";</script>';
}
$_SESSION['email']=$email;
$_SESSION['name']=$name;
$con= new mysqli('localhost','root','','apricity_project')or die("Could not connect to mysql".mysqli_error($con));
$sql= "SELECT * FROM user WHERE email='$email'";
$result= mysqli_query($con, $sql);
$count= mysqli_num_rows($result);
if($count==0)
{
$sql= "INSERT INTO user(name, email, password) VALUES ('$name','$email','0')";
$result=mysqli_query($con, $sql);
}
$sql= "SELECT password FROM user WHERE email='$email'";
$result= mysqli_query($con, $sql);
$row= mysqli_fetch_assoc($result);
if($row['password']=='0'){
    echo ' <script>window.location.href = "http://localhost:8080/Student/profile.php?name='.$name.'"; </script>';
    $sql = "UPDATE user SET password='1' WHERE email='$email';";
    $result= mysqli_query($con, $sql);
}else{
echo ' <script>window.location.href = "http://localhost:8080/Student/homepage.php?name='.$name.'"; </script>';
}
?>
