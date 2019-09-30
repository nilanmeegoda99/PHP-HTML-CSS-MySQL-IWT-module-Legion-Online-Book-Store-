<?php

// get database connection
include("../dbconfig.php");
if(isset($_POST['submit_image']))
{
 
 $uploadfile=$_FILES["upload_file"]["tmp_name"];
 $folder="../uploads/";
 move_uploaded_file($_FILES["upload_file"]["tmp_name"], "$folder".$_FILES["upload_file"]["name"]);
 

}
// Store form data in variables
		
        $fname = $_POST["firstname"];
        $add = $_POST["address"];
        $em = $_POST["email"];
		$lname = $_POST["lastname"];
		$passi = $_POST["passwo"];
		$bday= $_POST["birthday"];
		
		$filehipo= $_FILES["upload_file"]["name"];

if (!isset($_REQUEST["isUpdate"])) {
$sql = "INSERT INTO `customer` ( `f_name`, `l_name`, `addressity`, `birthday`, `customerimg`, `Email`,`Password`) VALUES ('".$fname."','".$lname."','".$add."','".$bday."','".$filehipo."','".$em."','".$passi."')";
} else {
$sql = "UPDATE `customer` SET `f_name`='".$fname."', `l_name`='".$lname."', `addressity`='".$add."', `birthday`='".$bday."', `customerimg`='".$filehipo."', `Email`='".$em."',`Password`='".$passi."' WHERE `customerID`= '".$_POST['isUpdate']."'";
}

if ($conn->query($sql) === TRUE) {
	    header("location:../member-registration.php?sucess=yes");
		
    

} else {
     header("location:../member-registration.php?sucess=no") . $conn->error;
	
}

$conn->close();
?>