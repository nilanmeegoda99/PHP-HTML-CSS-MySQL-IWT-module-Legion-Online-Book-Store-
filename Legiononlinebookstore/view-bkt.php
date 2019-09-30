<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  media="screen">
        <link rel="stylesheet" href="css/tablecss/css/reset.css">
        <link rel="stylesheet" href="css/tablecss/css/style.css">
    </head>
    <body>
        <?php include './template/header.php'; ?>
        
             <section> <!--for demo wrap-->
        
<h2>View Bucket List Requests</h2>  
<div class="tbl-header" style="padding-right: 6px;">
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      					    <th>Bucket No</th>
                            <th>Customer Name</th>
                            <th>Bucket List  Image</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Required Date</th>
                            <th>Package State</th>
                            <th>Show Bucket</th>
                            <th>Action</th>
                           
    </tr>
  </thead>
</table>
</div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
 <?php 
				  include 'dbconfig.php';
           $sql = "SELECT * FROM bucket;";
				   //execute the query
				   $result = $conn->query($sql);
				   
				   //if result has one or more rows
				   if($result->num_rows > 0){
					while ($row = $result->fetch_assoc()){
								
                    ?>
                   <tbody>
                        <tr>
                       <td><?php echo $row['bucket_no']; ?></td>
                            <td><?php echo $row['customer']; ?></td>
                            <td><?php echo $row['bucket_img']; ?></td>
                            <td><?php echo $row['telephone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                             <td><?php echo $row['requireddate']; ?></td>
                            <td><?php echo $row['pkgstate']; ?></td>
                             <td><font  color="#000000"><form method="POST" action='view-bkt.php?primage=<?php echo $row["bucket_img"]; ?>'>
<input type="submit" name="button1"  value="Show Bucket">
</form></font></td>
                      
                            <td>
 				<a href="./logic/bucketstate.php?orderid=<?php echo $row["bucket_no"]; ?> & orderstate=Ready ">Ready | </a>
 		   		 <a href="./logic/bucketstate.php?orderid=<?php echo $row["bucket_no"]; ?> & orderstate=Pending ">Pending | </a>
               		
                 <a href="./logic/delete-bucket.php?pid=<?php echo $row["bucket_no"]; ?>">Delete Request</a>
                            </td>
                        </tr>
                      <?php
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
                    </table>
        
  </tbody>
</table>

</div>
</section>
<div class="col-md-5">
           <?php 
				if(isset($_GET["primage"]))
				{	 
                 print '<img   src="uploads/'.$_GET["primage"].'"  style="width:450px;height:320px">';
				 } ?>
                </div>
				       
        <!-- JavaScript plugins (requires jQuery) -->    
        <script src="jquery/js/jquery-1.12.2.min.js"></script> 
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="bootstrap/js/bootstrap.min.js"></script> 
    </body>
</html>
