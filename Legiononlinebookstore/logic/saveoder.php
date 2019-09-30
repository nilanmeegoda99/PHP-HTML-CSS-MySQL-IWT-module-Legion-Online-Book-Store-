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


 $sql = "INSERT INTO `ordertb` (`product`, `orderqty`,`orderdate`,`order_state`,`cus_id`) VALUES ('$prodid','$prodqty','$dt1','Pending','$cusname');";
 $sqlUP ="UPDATE `product` SET `producQty`= producQty-$prodqty WHERE `prodID`=$prodid;";
if ($conn->query($sql) === TRUE  && $conn->query($sqlUP) === TRUE ) {
    header("location:../order.php?ordersucess=yes&prodid=$prodid&prodcate=$prodc");
} else {
    header("location:../order.php?ordersucess=no&prodid=$prodid&prodcate=$prodc");
}

$conn->close();
?>