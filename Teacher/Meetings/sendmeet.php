<?php

$con= new mysqli('localhost','root','','apricity_project')or die("Could not connect to mysql".mysqli_error($con));
// Everything is working fine but not taking the url
    $username = $_POST['link'];
	$sql="INSERT INTO Meet(url) VALUES ('$username')";
	$result= mysqli_query($con, $sql);
	echo "<script>window.close();</script>" ;
	//$lastInsertedId =  mysql_insert_id(); # Assuming you have an auto increment column in your table.
	//header('Location: Student/homepage.php?id='.$lastInsertedId);

?>
