<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  media="screen">
        <link rel="stylesheet" href="css/tablecss/css/reset.css">
        <link rel="stylesheet" href="css/tablecss/css/style.css">
        
    </head>

    <body>
     <?php include './template/header.php'; ?>
     
        <?php
        include 'dbconfig.php';
        // create variables to store member details
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : ""; // get value from url parameter, id
        $firstname = "";
        $address = "";
        $email = "";
		$lastname = "";
		$customerID="";
		$birthday="";
		$customerimg="";
		$passw="";
        $sql = "SELECT * FROM customer WHERE customerID='" . $id . "'";
                
        // execute select query
        $result = $conn->query($sql);

        // if result has one or more rows
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                // Get database data and store in variables
                $firstname = $row["f_name"];
                $address = $row["addressity"];
                $email = $row["Email"];
				$lastname =$row["l_name"];
				$customerID=$row["customerID"];
				$birthday=$row["birthday"];
				$customerimg=$row["customerimg"];
				$passw=$row["Password"];
            }
        }
        $conn->close();
        ?>
        <div class="container" style="margin-top:80px" align="center">
        <form action="logic/save-Member.php" method="post" enctype="multipart/form-data">
          <table width="600" height="318" border="1" cellpadding="5" cellspacing="0">
            <tr>
              <td width="143">First Name</td>
              <td width="431"><font color="#000000"> 
                <input type="text"  value="<?php echo $firstname; ?>" name="firstname" id="firstname" /></font>
              </td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td><font color="#000000"> <input type="text" value="<?php echo $lastname; ?>" name="lastname" id="lastname" /></font></td>
            </tr>
            <tr>
              <td>Address</td>
              <td><font color="#000000"> <textarea name="address"    id="address" cols="45" rows="5"><?php echo $address; ?></textarea></font></td>
            </tr>
            <tr>
              <td>Birthday</td>
              <td><font color="#000000"> <input type="date" value="<?php echo $birthday; ?>" name="birthday" id="birthday" /></font></td>
            
            </tr>
            <tr>
              <td>Your Image</td>
              <td><font color="#000000"> <input type="file"  id="upload_file" value="upload_file"  name="upload_file"  />                   
  			  </font>
				</td>
            </tr>
            <tr>
              <td>Email</td>
              <td><font color="#000000"> <input type="email" value="<?php echo $email; ?>" name="email" id="email" /></font></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><font color="#000000"> <input type="password"  value="<?php echo $passw; ?>" name="passwo" id="passwo" /></font></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><font color="#000000"> 
               <?php
                        // check whether the id parameter is set in the url
                        if (isset($_REQUEST["id"])) {
                            // Hidden field will be added to the form only if the parameter id is set
                            ?>
                            <input type="hidden" name="isUpdate" value="<?php echo $id;?>"/>
                            <?php
                        }
                        ?>
                        <input type="submit" name="submit_image" id="button" value="Submit" /></font>
              </td>
             
            </tr>
          </table> 
        </form>
        
       </div>
    <?PHP
		
		
//if page is redirected by save customer.php then we check the parameter
		if(isset($_GET['sucess'])){
	//if querry excuted succesfully
		if($_GET['sucess']=='yes'){
			$message = "Your Account was succesfully created..Your Email Address Will be your Username And Please Remember The Password";
			echo "<script type='text/javascript'>alert('$message');</script>";
			}
		elseif($_GET['sucess']=='no')
		{
			$message = "Some Error occured .Please try again!!!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
				}
	}
		
 ?>

         <script src="jquery/js/jquery-1.12.2.min.js"></script> 
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="bootstrap/js/bootstrap.min.js"></script> 
    </body>
</html>