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

        
        <div class="container" style="margin-top:80px" >
        <form   action="logic/save-bucket.php" method="post" enctype="multipart/form-data">
          <table width="600" height="318" border="1" cellpadding="5" cellspacing="0">
            <tr>
              <td width="143">Customer Name</td>
              <td width="431"><font color="#000000">
                <input type="text" value="" name="cusname" id="cusname" />
                </font>
              </td>
            </tr>
             <tr>
              <td>Required Date</td>
              <td><font color="#000000"> <input type="date" value="" name="reqdate" id="reqdate" /></font></td>
            
            </tr>
            <tr>
              <td>TelePhone Number</td>
              <td><font color="#000000"><input type="number" value="" name="telenumber" id="telenumber" /> </font></td>
            
            </tr>
            <tr>
              <td>Email</td>
              <td><font color="#000000"><input type="text" value="" name="email" id="email" /> </font></td>
            </tr>
            <tr>
              <td>Bucket List Image</td>
              <td><font color="#000000"><input type="file"  id="upload_file" value="upload_file"  name="upload_file"  />                   
  			   </font>
				</td>
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
        <div class="col-md-5">
           <?php 
				if(isset($_GET["primage"]))
				{	 
                 print '<img   src="uploads/'.$_GET["primage"].'"  style="width:450px;height:320px">';
				 } ?>
                </div>

         

                             


				<?PHP
		
		
//if page is redirected by save customer.php then we check the parameter
		if(isset($_GET['sucess'])){
	//if querry excuted succesfully
		if($_GET['sucess']=='yes'){
			$message = "Your Bucket list has been succesfully added to our database. We will soon give you a call when the package is ready to pick it up.Thank You!";
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