<?php
	include('connection.php');
//Create connection   
    
	$sql="SELECT user_count,soald_book FROM static";
	$result=mysqli_query($conn,$sql);

	
// Check connection

if (mysqli_connect_errno())    
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>