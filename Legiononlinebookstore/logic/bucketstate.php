
<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables





 $sql="UPDATE `bucket` SET `pkgstate` = '".$_GET['orderstate']."' WHERE `bucket_no`= '".$_GET['orderid']."'";
if ($conn->query($sql) === TRUE  ) {
    header("location:../view-bkt.php?statesucess=yes");
} else {
    header("location:../view-bkt.php?statesucess=no");
}

$conn->close();
?>