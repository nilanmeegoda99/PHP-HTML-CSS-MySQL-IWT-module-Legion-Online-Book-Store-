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
        
<h2>View All Orders</h2>  
<div class="tbl-header" style="padding-right: 6px;">
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      					    <th>Order Id</th>
                            <th>Product Name</th>
                            <th>ProductID</th>
                            <th>Order Date</th>
                            <th>CustomerID</th>
                            <th>Customer Name</th>
                            <th>Order Quantity</th>
                            <th>Order State</th>
                            <th>Action</th>
    </tr>
  </thead>
</table>
</div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
 <?php 
				 
         include 'dbconfig.php';
         $sql = "SELECT * FROM ordertb,product,customer where ordertb.product = product.prodID AND ordertb.cus_id = customer.f_name";

         
         $result = $conn->query($sql);
            // if result has one or more rows
            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                  ?>
                   <tbody>
                        <tr>
                       <td><?php echo $row['orderid']; ?></td>
                            <td><?php echo $row['prodname']; ?></td>
                            <td><?php echo $row['product']; ?></td>
                            <td><?php echo $row['orderdate']; ?></td>
                            <td><?php echo $row['customerID']; ?></td>
                             <td><?php echo $row['f_name']; ?></td>
                            <td><?php echo $row['orderqty']; ?></td>
                             <td><?php echo $row['order_state']; ?></td>
                            <td>
 				<a href="./logic/orderstate.php?orderid=<?php echo $row["orderid"]; ?> & orderstate=Shipped ">Shipped | </a>
 		   		 <a href="./logic/orderstate.php?orderid=<?php echo $row["orderid"]; ?> & orderstate=Pending ">Pending | </a>
                
				

                                <a href="./logic/delete-order.php?pid=<?php echo $row["orderid"]; ?>">Delete order</a>
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
        <!-- JavaScript plugins (requires jQuery) -->    
        <script src="jquery/js/jquery-1.12.2.min.js"></script> 
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="bootstrap/js/bootstrap.min.js"></script> 
    </body>
</html>
