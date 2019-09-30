<?php session_start() ?>
<?php
include '../dbconfig.php';
$uname = $_POST["username"];
$pass = $_POST["password"];
if($uname=="meegoda60@yahoo.com" && $pass=="suwani1960"){
	$sql="SELECT Username,Password,f_name FROM administrtor;";
	echo $sql;
}else{
$sql = "SELECT customerID,f_name,Email,Password FROM customer WHERE Email='".$uname."' AND Password='".$pass."';";
echo $sql;
}
// execute select query
$result = $conn->query($sql);

// if result has one or more rows
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        // store username and type in Session variables
       $_SESSION["UNAME"]=$row["f_name"];
       $_SESSION["CUSSID"]=$row["customerID"];
        header("location: ../index.php");
   }
	}else{
	
   header("location: ../logmodel.php?fakeid=1");
}
$conn->close();


?>
