
<?php

// get database connection
include("connection.php");
if(isset($_POST['submit_image']))
{
 
 $uploadfile=$_FILES["file-input"]["tmp_name"];
 $folder="../uploads/";
 move_uploaded_file($_FILES["file-input"]["tmp_name"], "$folder".$_FILES["file-input"]["name"]);
 

}
				$ID = "";
                $title = "";
                $Author = "";
				$Price="";
				$qty="";
				$des="";
// Store form data in variables
		
				$ID =$_POST["isbnNo"];
                $title =$_POST["bookTitle"];
                $Author =$_POST["bookAuthor"];
				$Price=$_POST["bookPri"];
				$qty=$_POST["bookQty"];
				$des=$_POST["bookDec"];
				$filehipo=$_FILES["file-input"]["name"];


$sql = "INSERT INTO 'product' ('prodID', 'prodname', 'author', 'publisher', 'price', 'category', `Quantity`,'description','productIMG')) VALUES ('$ID', '$title', '$Author', '".$Price."', '$Price', '$qty', '$qty','$des','$filehipo');
";

if ($conn->query($sql) === TRUE) {		

} else { 
    
}

$conn->close();
?>