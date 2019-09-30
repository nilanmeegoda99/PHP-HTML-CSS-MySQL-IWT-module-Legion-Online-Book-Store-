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
		
        $pdname = $_POST["prodname"];
        $pddec = $_POST["proddesc"];
        $pdprice = $_POST["prodprice"];
		$pdqty = $_POST["prodqty"];
		
		$pdcat= $_POST["prodcat"];
		
        $pdimg= $_FILES["upload_file"]["name"];
        $bkauthor = $_POST["bkathr"];

if (!isset($_REQUEST["isUpdate"])) {
	
$sql = "INSERT INTO `product` (`prodname`, `productDesc`, `prodprice`, `producQty`, `productIMG`,`author`,`productcatergory`) VALUES ('".$pdname."','".$pddec."','".$pdprice."','".$pdqty."','".$pdimg."','".$bkauthor."','".$pdcat."')";
} else {

$sql = "UPDATE `product` SET `prodname`='".$pdname."', `productDesc`='".$pddec."', `prodprice`='".$pdprice."', `producQty`='".$pdqty."', `productIMG`='".$pdimg."',`author`='".$bkauthor."', `productcatergory`='".$pdcat."' WHERE `prodID`= '".$_POST['isUpdate']."'";
}

if ($conn->query($sql) === TRUE) {
	    header("location:../product-registration.php?sucess=yes");
} else {
    header("location:../product-registration.php?sucess=no"). $conn->error;
}

$conn->close();
?>