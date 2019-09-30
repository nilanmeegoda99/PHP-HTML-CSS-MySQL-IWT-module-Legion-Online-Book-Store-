<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
$prodid = $_GET["pid"];


 
 $sql ="DELETE FROM `bucket` WHERE `customer`='".$_GET['pid']."'";
if ($conn->query($sql) === TRUE   ) {
    header("location:../view-bkt.php?deletesucess=yes");
} else {
    header("location:../view-bkt.php?deletesucess=no");
}

$conn->close();
?>