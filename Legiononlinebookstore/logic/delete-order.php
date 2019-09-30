<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
$prodid = $_GET["pid"];


 
 $sql ="DELETE FROM `ordertb` WHERE `orderid`='".$_GET['pid']."'";
if ($conn->query($sql) === TRUE   ) {
    header("location:../view-orders.php?deletesucess=yes");
} else {
    header("location:../view-orders.php?deletesucess=no");
}

$conn->close();
?>