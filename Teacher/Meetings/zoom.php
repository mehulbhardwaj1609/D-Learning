<?php
session_start();
if($_SESSION['login']=='')
{
    echo ' <script>window.location.href = "http://localhost:8080/ML/masterlogin.html"; </script>';
}
;?>
<head>
    <link rel="stylesheet" href="style.css">
    <script src='https://meet.jit.si/external_api.js'></script>
    <title>D-Learning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img class="brand" src="img/logo.jpg" width="50" height="50" />
            </div>
            <ul class="nav navbar-nav">
                <li><a href="http://localhost:8080/Teacher/homepage.php" target="_blank">Home</a></li>
                <li><a href="#" style= "background-color: #f45e61; color:#000000">Meetings</a></li>
                <li><a href="http://localhost:3000/profile" target="_blank">Classroom</a></li>
                <li><a href="http://localhost:8080/Teacher/Quizzes/dash.php?q=1" target="_blank">Quizzes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://localhost:8080/ML/logout.php"
                    ><span
                            class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
            </ul>
        </div>
    </nav>
 <div class="container">

   <div class="child">
    <div id="jitsi-container"> 
    </div>
   </div>
  
   <form target="_blank" action="sendmeet.php"  method="POST">
    <div class="child">
        <div id="sendLink">
            <p> Meeting Invitation Link</p>
            <textarea name="link" placeholder="Paste Your URL here" rows="3" cols="30"></textarea>
            <br>
            <br>
            <button name="send" type="submit">send</button>
         </div> 
    </div>
</form>
 </div>
  
  <script>
  var container = document.querySelector('#jitsi-container');
  var api = null;
  
 
      var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      var stringLength = 30;
  
      function pickRandom() {
      return possible[Math.floor(Math.random() * possible.length)];
      }
  
  var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');
  
      var domain = "meet.jit.si";
      var options = {
          "roomName": randomString,
          "parentNode": container,
          "width": 600,
          "height": 600,
      };
      api = new JitsiMeetExternalAPI(domain, options);
 
  
  </script>
  </body>
  </html>