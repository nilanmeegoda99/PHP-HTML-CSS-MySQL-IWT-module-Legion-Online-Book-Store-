
<?php
	include('connection.php');
//Create connection
   if(isset($_POST["uName"], $_POST["passw"])){
		$name = $_POST["uName"]; 
        $password = $_POST["passw"];
    
	$sql="SELECT Username,Password FROM administrtor WHERE Username='$name'";
	$result=mysqli_query($conn,$sql);


$count=mysqli_num_rows($result);

if($count==1){
    $row = mysqli_fetch_assoc($result);
    if ( $row['pass'] == $password){
	header("Location: ../dashboard.php");
	$_SESSION["Username"] = $name;
	$_SESSION["Password"] = $password;
        echo "Login Successful";
        return true;
    }
    else {
        echo "Wrong Username or Password";
        return false;
    }
}
else{
	
    return false;
}
	
// Check connection

if (mysqli_connect_errno())    
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


}

?>