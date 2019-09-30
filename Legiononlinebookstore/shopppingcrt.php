<!DOCTYPE html>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Legion Online Book Store</title>
	
  
     <link rel="stylesheet" type="text/css" href="/phpfreechat-2.1.0/client/themes/carbon/jquery.phpfreechat.min.css" />
 
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"  media="screen">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
       
    </head>
    <body>
   
        <?php include './template/header.php'; ?>
        
        <?php 
        include'dbconfig.php';
        
		$ProdName="";
		$ProdDes="";
		$ProdImg="";
		$ProdPrice="";
        $ProdQty="";
        
		
		$sql="SELECT * FROM product WHERE prodID = '".$_GET['prodid']."'";

		
		// execute select query
        $result = $conn->query($sql);

        // if result has one or more rows
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
		
		$ProdName=$row["prodname"];
		$ProdDes=$row["productDesc"];
        $ProdPrice=$row["prodprice"];
        $ProdQty=$row["producQty"];
        $ProdImg=$row["productIMG"];
       
		
			}
		}
		
		?>
        <style>
          .cartimg
          {
            padding-top: 27px;padding-left: 140px;
          }
        </style>
        <div class="container" >
         <div class="row">
            <div class="col-lg-16">
                <h3 class="page-header">Shopping Cart
                    
                </h3>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Your Cart</li>
                </ol>
            </div>
        </div>
            <div class="row">
            <?php 
			if(isset($_GET['ordersucess'])){
			  $status = $_GET['ordersucess'];
			  if ($status = "yes"){
				  ?>
                  <div class="alert alert-success" >Your cart has been updated succesfully.</div>
                  <?php	
			  }elseif($status = "no"){
				  ?>
            	  <div class="alert alert-warning" >Fails to placed the cart try again..</div>
                  <?php 
			  
			  }
			}
			?>
        <?php if (!empty($_GET['prodid'])) { ?>
            <div class="col-md-5 cartimg">
           <?php 
					 
                 print '<img   src="uploads/'.$ProdImg.'"  style="width:200px;height:250px">';
				  ?>
                </div>
            		          
         
               
                <div class="col-md-7">
                    <h2><?php echo $ProdName; ?></h2>
                    <hr>
                    <form action="logic/processshpingcrt.php" method="POST">
                    <div class="form-horizontal" style="padding: 10px;background-color: #F3F3F3;border: 1px solid #ddd;">
                        <div class="  form-group">
                            <label class="col-md-4 control-label" for="">Quantity:</label>  
                            <div class="col-md-2">
                                <input id="" name="pqty" type="text" class="form-control input-md">
                                <input type="hidden" name="pid" value="<?php echo $_GET['prodid']  ?>" >
                                <input type="hidden" name="prodprice" value="<?php echo $ProdPrice ?>" >
                               
                                 <input type="hidden" name="pcat" value="<?php echo $prodcat ?>" >
                            </div>
                        </div>
                        <div class="  form-group">
                            <label class="col-md-4 control-label" for="">Price:</label>  
                            <div class="col-md-4">
                                <p  style="font-size: 20px; font-weight: bold;padding-top: 4px;">Rs <?php echo $ProdPrice; ?></p> 
                            </div>

                        </div>
                        
                        
                        <div class="  form-group">
                            <label class="col-md-4 control-label" for="">In Stock:</label>  
                            <div class="col-md-4">
                                <p style="padding-top: 7px;"><?php if($ProdQty<1){?>
                                Stock Is Over<?php }else{
									
									?> More than <?php echo $ProdQty; ?> available</p>



                  <?php if (isset($_SESSION["UNAME"])) { ?>
                    <div class="  form-group">
                   <label class="col-md-4 control-label" for=""></label>  
                   <div class="col-md-4">                            
                   <button id="singlebutton" name="singlebutton" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart " aria-hidden="true">Add to Cart Now</span></button>
                            </div>
                            </div>
                    <?php } else{ ?>
                    <div class="  form-group" style="padding-left:149px;">
                    <div class="col-md-4"  align="center"> 
       			   <a href="member-registration.php" class="btn btn-primary btn-warning"><span class="glyphicon glyphicon-user"></span> Create a account for add to cart.</a>
                   </div>
                   </div>
                    <?php } ?> 
                           <?php } ?></p>
                            </div>

                        </div>
                        
                        
            		
                        
                    </div>
                </div>
               
                 
                </div>
            </div>
                    <?php } ?>
            <h2>Cart View <span class="fa fa-shopping-cart"></span></h2>  
<div class="tbl-header" style="padding-right: 6px;">
<table cellpadding="0" cellspacing="3" border="1">
  <thead>
    <tr>
                            
    </tr>
  </thead>
</table>
</div>
<div class="tbl-content">
<table cellpadding="1" cellspacing="1" border="1">
 
                   
  </tbody>
</table>
</div>
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            
                                              
                                              
                                              <th>Product Name</th>
                                              <th>Price (Rs)</th>
                                              <th>Qty</th>
                                               <th>Total Price</th>

                                          </tr>
                                        </thead>
                                        
                                            
                                                         <?php 
                                                      
                                                      include 'dbconfig.php';
                                                      $sql = "SELECT * FROM cart,product where cart.prodID = product.prodID AND cart.cusID = '".$_GET['cusname']."'" ;

                                                      
                                                      $result = $conn->query($sql);
                                                          // if result has one or more rows
                                                          if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            while ($row = $result->fetch_assoc()) {
                                                                ?>
                                                                <tbody>
                                                                      <tr>
                                                                   
                                                                    
                                                                    <td><?php echo $row['prodname']; ?></td>
                                                                    <td><?php echo $row['prodprice']; ?></td>      
                                                                    <td><?php echo $row['qty']; ?></td>
                                                                    <td><?php echo $row['tot_amount']; ?></td>
                                                                          
                                                                          <td>
                                                      <a href="./logic/cartval.php?cartid=<?php echo $row["cartiD"]; ?> & qtyamunt= +1 & produid=<?php echo $row["prodID"]; ?> & bprice=+<?php echo $row["prodprice"]; ?>" > + |  </a>
                                                        <a href="./logic/cartval.php?cartid=<?php echo $row["cartiD"]; ?> & qtyamunt= -1 & produid=<?php echo $row["prodID"]; ?> & bprice=-<?php echo $row["prodprice"]; ?>"> - |  </a>
                                                              
                                                      

                                                                              <a href="./logic/remvecrt.php?cartid=<?php echo $row["cartiD"]; ?> & produid=<?php echo $row["prodID"]; ?> &crtqty=<?php echo $row["qty"]; ?>"><font color="red">Remove</font></a>
                                                                          </td>
                                                                      </tr>
                                                                    <?php
                                                              }
                                                          } else {
                                                              echo "0 results";
                                                          }
                                                          $conn->close();
                                                          ?>
                                          </tr>
                                          
                                        </tbody>
                                      </table>

                                      <div class="row">
                                       
                                        <?php 
                                            include './dbconfig.php';
                                            $namec =$_GET['cusname'];
                                            $sql = "SELECT *,SUM(tot_amount) AS totalcost FROM cart where cart.cusID = '".$_GET['cusname']."'" ;

                                                      
                                                      $result = $conn->query($sql);
                                                          // if result has one or more rows
                                                          if ($result->num_rows > 0) {
                                                            // output data of each row
                                                            
                                                           

                                                            while ($row = $result->fetch_assoc()) {
                                                             
                                                            
                                                              
                                                               
                                                               ?>
                                                          
                                                                  
                                                                   
                                                                    
                                                                   
                                                                   <label class="col-md-4 control-label" for="">Sum:</label>  
                                                                  <div class="col-md-4">
                                                                  <p  style="font-size: 20px; font-weight: bold;padding-top: 4px;">Rs <?php echo $row['totalcost']; ?>  </p> 
                                                                          
                                                                         
                                                                    <?php
                                                              }
                                                          }
                                             ?>
                                        </div>
                                     </div>

                                     
                                     
                                            
                                      <a href="payment.php?cusid=<?php echo $_GET['cusname']; ?>" class="btn btn-primary btn-primary"  style="margin-left:1142px"><span class="glyphicon glyphicon-fire"></span> Check Out! </a>
                                              
                                                    
                                     
        
        </div>
        <div class="row">
            <?php include './template/footer.php'; ?>
            </div>
        
        </div>
     
        <!-- JavaScript plugins (requires jQuery) -->    
        <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
