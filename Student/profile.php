<?php
session_start();
if($_SESSION['login']=='')
{
    echo ' <script>window.location.href = "http://localhost:8080/ML/masterlogin.html"; </script>';
}
;?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>D-Learning </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
        .navbar-inverse>.container-fluid>.navbar-nav>.active>a {
            background-color: #fbca67;
            color: black;
        }
</style>

</head>

<body>
<?php
     $con= new mysqli('localhost','root','','apricity_project')or die("Could not connect to mysql".mysqli_error($con));
      // Using database connection file here
        //$id= $_GET['id'];

     $records = mysqli_query($con,"select url from Meet"); // fetch data from database
     
        
        while($data = mysqli_fetch_assoc($records))
        {
            $link=$data['url'];
        }
    ;?>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img class="brand" src="img/logo.jpg" width="50" height="50" />
            </div>
            <ul class="nav navbar-nav">

                <li><a href="http://localhost:8080/Student/homepage.php">Home</a></li>
                <li><a target="_blank" href="<?php echo $link ;?> ">Meetings</a></li>
                <li><a href="http://localhost:3000/profile" target="_blank">Classroom</a></li>
                <li><a href="http://localhost:8080/Student/Quizzes/account.php?q=1">Quizzes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span
                            class="glyphicon glyphicon-user"></span> Edit Profile</a></li>
                <li><a href="http://localhost:8080/ML/logout.php"
                    ><span
                            class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
</nav>

<div class="bg1">
<div class="row">
  
<div class="container" style="fit-content">
<img style="float:left; width:55%; margin-right: 30px;" src="profile.jpeg"/>


<?php
include_once 'dbConnection.php';
$name =$_SESSION['name'];
$email=$_SESSION['email'];
?>
<br><br><br><br>
<style>
  .form-horizontal {
  width: 30%;
  margin: 0px;
  padding-top: 50px;
  padding-bottom: 50px;
  padding-right: 25px;
  padding-left: 25px;
  background: #000000;
}
</style>

<!-- sign in form begins -->  
  <form style="float:right;" class="form-horizontal" name="form" action="getdb.php" method="POST">


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" value=" <?php echo $name?>" readonly>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" value=" <?php echo $email;?>" readonly>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="section" placeholder="Enter your Section" class="form-control input-md" >
   <option value="Section A">Select Section</option>
  <option value="A">Section A</option>
  <option value="B">Section B</option>
  <option value="C">Section C</option> </select>
  </div>
</div>

<!-- Button -->
<div class="form-group" >
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input type="submit" value="Save Profile" class="btn btn-dark btn-block"/>
  </div>
</div>

</fieldset>
</form>

</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->


</body>
</html>
