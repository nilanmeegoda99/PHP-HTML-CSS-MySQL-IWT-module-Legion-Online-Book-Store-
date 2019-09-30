<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables
$prodid = $_GET["pid"];

 
 $sql ="DELETE FROM `customer` WHERE `customerID`='".$_GET['pid']."'";
if ($conn->query($sql) === TRUE   ) {
    header("location:../view-members.php?deletesucess=yes");
} else {
    header("location:../view-members.php?deletesucess=no");
}

$conn->close();
?>