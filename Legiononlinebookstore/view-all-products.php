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
        
<h2>View All Products</h2>  
<div class="tbl-header" style="padding-right: 6px;">
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      <th>Book Id</th>
      <th>Book Title</th>
      <th>Description</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Author</th>
      <th>Book Category</th>
      <th>Action</th>
    </tr>
  </thead>
</table>
</div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
 <?php 
				   include './dbconfig.php';
				   $sql = "SELECT prodID,prodname,productDesc,prodprice,producQty,author,productcatergory FROM product";
				   //execute the query
				   $result = $conn->query($sql);
				   
				   //if result has one or more rows
				   if($result->num_rows > 0){
					while ($row = $result->fetch_assoc()){
								
					   
				   ?>
                   <tbody>
                        <tr>
                            <td><?php echo $row['prodID']; ?></td>
                            <td><?php echo $row['prodname']; ?></td>
                            <td><?php echo $row['productDesc']; ?></td>
                            <td><?php echo $row['prodprice']; ?></td>
                            <td><?php echo $row['producQty']; ?></td>
                            <td><?php echo $row['author'];?></td>
                            <td><?php echo $row['productcatergory'];?></td>
                            <td>
                               <a href="product-registration.php?id=<?php echo $row["prodID"];?>">Update</a>
                                <a href="./logic/delete-product.php?pid=<?php echo $row['prodID']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
					}
				   }
				   
                   ?>
                    </table>
        
  </tbody>
</table>

</div>
</section>
<a href="product-registration.php" class="btn btn-primary btn-primary" style="margin-left:150px"><span class="glyphicon glyphicon-fire"></span> Add a new product</a>
        
        <!-- JavaScript plugins (requires jQuery) -->    
        <script src="jquery/js/jquery-1.12.2.min.js"></script> 
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="bootstrap/js/bootstrap.min.js"></script> 
    </body>
</html>
