
<?php session_start(); ?>
<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables

$productid = $_GET['produid'];
$cusname = $_SESSION["UNAME"];
$lqty = $_GET['qtyamunt'];
$price = $_GET['bprice'];



 $sqlUP ="UPDATE `product` SET `producQty`= producQty-'".$_GET['qtyamunt']."' WHERE `prodID`='".$_GET['produid']."'";
 $sql ="UPDATE `cart` SET `qty`=qty+'".$_GET['qtyamunt']."',`tot_amount`=tot_amount+'".$price."' WHERE `cartiD`= '".$_GET['cartid']."'";
if ($conn->query($sql) === TRUE && $conn->query($sqlUP) === TRUE  ) {
    header("location:../shopppingcrt.php?orderstatesucess=yes&prodid=$productid&cusname=$cusname");
} else {
    header("location:../shopppingcrt.php?orderstatesucess=no&prodid=$productid&cusname=$cusname");
}

$conn->close();
?>