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
    <title>D-Learning</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id"
        content="561095451699-hgjilog87lh6u7epuukk5941pvpisn39.apps.googleusercontent.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .nav-link {
            color: green;
        }

        .nav-item>a:hover {
            color: transparent;
        }

        /*code to change background color*/
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
        $email=$_SESSION['email'];
         $sql="SELECT url FROM user where email='$email'";
        $records = mysqli_query($con,$sql); // fetch data from database
        $data = mysqli_fetch_assoc($records);
        $link=$data['url'];
    ;?>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img class="brand" src="img/logo.jpg" width="50" height="50" />
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a target="_blank" href="<?php echo $link ;?>">Meetings</a></li>
                <li><a href="http://localhost:3000/profile" target="_blank">Classroom</a></li>
                <li><a href="http://localhost:8080/Student/Quizzes/account.php?q=1">Quizzes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost:8080/Student/profile.php"
                    ><span
                            class="glyphicon glyphicon-user"></span> Edit Profile</a></li>
                <li><a href="http://localhost:8080/ML/logout.php"
                    ><span
                            class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="container" style="width:fit-content">
        
        <img style="float:left; width:50%; margin-right: 100px;" src="class.jpg" />
        <h1 style="float:right;padding-top: 8%;padding-bottom: 2%;padding-right: 20%; font-size:50px ;">GO AHEAD</h1>
       
     <!--   <a target="_blank" href="<?//php echo $link;?>"><button class="button button1">Join a Meeting</button> </a>     -->
    
        <input type="button" value="Join a Meeting" class="button button1" onclick="window.open('<?php echo $link ;?>')"/>
        <input type="button" value="View Assignments" class="button button2" onclick="window.open('http://localhost:3000/profile')"/>
        <button class="button button3" onclick="window.location.href='http://localhost:8080/Student/Quizzes/account.php?q=1';">Attempt Quizzes</button>
        <h3 style="float:right;padding-bottom: 2%;padding-right: 23%;">GOOD LUCK!</h3>
        
    </div>
    
    <style>
        .button {
        border: none;
        color: white;
        display: block;
        padding: 15px 32px;
        transition-duration: 0.4s;
        cursor: pointer;
        font-size: 16px;
        border-radius: 12px;
        width: 28%;
        margin-bottom: 20px;
        
    }

    .button1 {
        background-color: white; 
        color: black; 
        border: 2px solid #60daaa;
    }

        .button1:hover {
        background-color: #60daaa;
        color: white;
    }

    .button2 {
        background-color: white; 
        color: black; 
        border: 2px solid #f45e61;
    }

        .button2:hover {
        background-color: #f45e61;
        color: white;
    }

    .button3 {
        background-color: white; 
        color: black; 
        border: 2px solid #0eb7da;
    }

        .button3:hover {
        background-color: #0eb7da;
        color: white;
    }

    </style>
 
    
</body>

</html>