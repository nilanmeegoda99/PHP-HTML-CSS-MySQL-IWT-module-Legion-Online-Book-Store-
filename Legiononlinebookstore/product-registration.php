<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <head>
        <meta charset="UTF-8">
        <title>Legion Online Book Store</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  media="screen">
         <link rel="stylesheet" href="css/tablecss/css/reset.css">
        <link rel="stylesheet" href="css/tablecss/css/style.css">
        
    </head>

    <body>
     <?php include './template/header.php'; ?>

        <?php
        include 'dbconfig.php';
        // create variables to sore member details
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : ""; // get value from url parameter, id
        $prodname = "";
        $proddes = "";
        $prodprice = "";
		$prodqty = "";
		$prodimg="";
    $prodcat="";
    $prodauthor="";
		
		
        $sql = "SELECT * FROM product WHERE prodID='" . $id . "'";
                
        // execute select query
        $result = $conn->query($sql);

        // if result has one or more rows
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                // Get database data and store in variables
				$prodname = $row["prodname"];
        		$proddes = $row["productDesc"];
       		    $prodprice = $row["prodprice"];
				$prodqty = $row["producQty"];
        $prodimg= $row["productIMG"];
        $prodauthor= $row["author"];
				$prodcat= $row["productcatergory"];
               
		
            }
        }
        $conn->close();
        ?>
        <div class="container" style="margin-top:80px" align="center">
        <form action="logic/save-product.php" method="post" enctype="multipart/form-data">
          <table width="600" height="318" border="1" cellpadding="5" cellspacing="0">
            <tr>
              <td width="143">Book Title</td>
              <td width="431"><font color="#000000">
                <input type="text" value="<?php echo $prodname; ?>" name="prodname" id="prodname" />
                </font>
              </td>
            </tr>
            <tr>
              <td>Title Description</td>
              <td><font color="#000000"><textarea name="proddesc"    id="proddesc" cols="45" rows="5"><?php echo $proddes; ?></textarea> </font></td>
            </tr>
            <tr>
              <td>Book Price : Rs</td>
              <td><font color="#000000"><input type="number" value="<?php echo $prodprice; ?>" name="prodprice" id="prodprice" /> </font></td>
            
            </tr>
            <tr>
              <td>Book QTY</td>
              <td><font color="#000000"><input type="number" value="<?php echo $prodqty; ?>" name="prodqty" id="prodqty" /> </font></td>
            </tr>
            <tr>
              <td>Book Image</td>
              <td><font color="#000000"><input type="file"  id="upload_file" value="upload_file"  name="upload_file"  />                   
  			   </font>
        </td>
        <tr>
              <td width="143">Book Author</td>
              <td width="431"><font color="#000000">
                <input type="text" value="<?php echo $prodauthor; ?>" name="bkathr" id="bkathr" />
                </font>
              </td>
            </tr>
            <tr>
              <td>Book Category</td>
              <td><font color="#000000">
				
       <?php 
        include 'dbconfig.php';
        
        $result2 = $conn->query("SELECT * FROM catergory")
        ?>
        <select name="prodcat">
          <?php 
        while($rows = $result2->fetch_assoc())
         { 
           $cattype = $rows['category_typ'];
           echo "<option value='$cattype'>$cattype</option>";   
          }
          ?>
          </select>

 </font></td>
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
                        <input type="submit" name="submit_image" id="button" value="Submit" /> </font>
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
			$message = "The Product has been succesfully added to the database";
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