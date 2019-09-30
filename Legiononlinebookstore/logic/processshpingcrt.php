<?php session_start(); ?>
<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
$prodid = $_POST["pid"];
$prodqty = $_POST["pqty"];
$prodc=$_POST["pcat"];
$cusname = $_SESSION["UNAME"]; //cusid must be taken from the sessions which should save in login form
$dt1=date("Y-m-d");
$price=$_POST["prodprice"];
$toprice = $price * $prodqty;



 $sql = "INSERT INTO `cart`( `prodID`, `cusID`, `qty`, `tot_amount`) VALUES ('".$prodid."','".$cusname."','".$prodqty."','".$toprice."');";
 $sqlUP ="UPDATE `product` SET `producQty`= producQty-$prodqty WHERE `prodID`=$prodid;";
if ($conn->query($sql) === TRUE  && $conn->query($sqlUP) === TRUE ) {
    header("location:../shopppingcrt.php?prodid=$prodid&ordersucess=yes&cusname=$cusname");
} else {
    header("location:../shopppingcrt.php?prodid=$prodid&ordersucess=no&cusname=$cusname");
}

$conn->close();
?>