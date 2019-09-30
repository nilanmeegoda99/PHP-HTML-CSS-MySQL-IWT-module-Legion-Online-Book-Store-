
<?php

// get database connection
include("../dbconfig.php");

// Store form data in variables





 $sql="UPDATE `ordertb` SET `order_state` = '".$_GET['orderstate']."' WHERE `orderid`= '".$_GET['orderid']."'";
if ($conn->query($sql) === TRUE  ) {
    header("location:../view-orders.php?orderstatesucess=yes");
} else {
    header("location:../view-orders.php?orderstatesucess=no");
}

$conn->close();
?>