<?php
if(isset($_POST["searchtxt"])) 
    {     

        $name = $_POST["searchtxt"]; 


		$sql = "select * from admin where user_Name='".$name."' and pass ='".$password."'";

	if ($conn->query($sql) === TRUE) {
    	$_SESSION["logged_in"] = true; 
        $_SESSION["naam"] = $name;
		header("Location: ../dashboard.php");
	} else {
    	 echo 'The username or password are incorrect!';
	}
        
       $conn->close();    
        
}



?>