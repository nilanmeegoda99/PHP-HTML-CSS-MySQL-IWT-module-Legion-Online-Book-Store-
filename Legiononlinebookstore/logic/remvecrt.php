<?php session_start(); ?>
<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
$cartid = $_GET["cartid"];
$prodids = $_GET["produid"];

$cusname = $_SESSION["UNAME"];


 
 $sql ="DELETE FROM `cart` WHERE `cartiD`='".$_GET['cartid']."'";
 $sqlUP ="UPDATE `product` SET `producQty`= producQty+'".$_GET['crtqty']."' WHERE `prodID`='".$_GET['produid']."'";
if ($conn->query($sql) === TRUE && $conn->query($sqlUP) === TRUE ) {
    header("location:../shopppingcrt.php?prodid=$prodids&cusname=$cusname");
} else {
    header("location:../shopppingcrt.php?prodid=$prodids&cusname=$cusname");
}

$conn->close();
?>