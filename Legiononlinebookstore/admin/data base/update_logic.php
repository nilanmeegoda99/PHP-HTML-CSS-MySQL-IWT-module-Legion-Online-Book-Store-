<?php
include_once('connection.php');
	
	$ISBN=$_POST['isbnNo'];
	$title=$_POST['bookTitle'];
	$Author=$_POST['bookAuthor'];
	$Publisher=$_POST['bookPubl'];
	$Price=$_POST['bookPri'];
	$Category=$_POST['select'];
	$qty=$_POST['bookQty'];
	$des=$_POST['bookDec'];
	
	echo"update INTO `product` (`productid`, `productname`, `productdesc`, `productprice`, `productqty`, `productcatogary`, `productimg`) VALUES ('$proid', '$proname', '$prodes', '$proprice', '$proqty', '$procatogary', ''<br>";
	
		// SQL Query
	$sql = "update INTO `product` (`productid`, `productname`, `productdesc`, `productprice`, `productqty`, `productcatogary`, `productimg`) VALUES ('$proid', '$proname', '$prodes', '$proprice', '$proqty', '$procatogary', '');
";

	if ($conn->query($sql) === TRUE) {
    	header("location:../product.php?success");
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>