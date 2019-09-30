
<?php include '../dbconfig.php'; ?>
<?php

// get database connection

if(isset($_POST['submit_image']))
{
 
 $uploadfile=$_FILES["upload_file"]["tmp_name"];
 $folder="../uploads/";
 move_uploaded_file($_FILES["upload_file"]["tmp_name"], "$folder".$_FILES["upload_file"]["name"]);
 

}
// Store form data in variables
		
        $pname = $_POST["cusname"];
        
        $pnumber = $_POST["telenumber"];
		$pmail = $_POST["email"];
		$date = $_POST["reqdate"];
		
		
		$pdimg= $_FILES["upload_file"]["name"];


	

$sql ="INSERT INTO `bucket`( `customer`, `bucket_img`, `telephone`, `email`, `requireddate`, `pkgstate`) VALUES (".$pname."','".$pdimg."','".$pnumber."','".$pmail."','".$date."','Pending')";


if ($conn->query($sql) === TRUE) {
	    header("location:../bucketupload.php?sucess=yes & primage=$pdimg");
} else {
   
}

$conn->close();
?>

<html>
 <body>

 Hello <?php echo $_POST["cusname"]; ?>!<br>
 Your no is <?php echo $_POST["telenumber"]; ?>.
 Mail <?php echo $_POST["email"]; ?>!<br>
 Your date is <?php echo $_POST["reqdate"]; ?>.

 pic <?php echo  $_FILES["upload_file"]["name"];?>!<br>
 


 </body>
 </html> 