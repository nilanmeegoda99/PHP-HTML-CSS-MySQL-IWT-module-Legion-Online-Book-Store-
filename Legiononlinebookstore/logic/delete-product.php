<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
$prodid = $_GET['pid'];

 $sql ="DELETE FROM `product` WHERE `prodID`=$prodid";
if ($conn->query($sql) === TRUE   ) {
    header("location:../view-all-products.php?deletesucess=yes");
} else {
    header("location:../view-all-products.php?deletesucess=no");
}





 
$conn->close();
?>