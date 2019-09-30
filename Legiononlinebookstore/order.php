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
        $bkathr="";
		
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
        $bkathr=$row["author"];
		$prodcat=$row["productcatergory"];
			}
		}
		
		?>
        
        <div class="container" >
         <div class="row">
            <div class="col-lg-16">
                <h3 class="page-header">Buy Books
                    <small><?php echo $_GET['prodcate'] ?></small>
                </h3>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Buy Product</li>
                </ol>
            </div>
        </div>
            <div class="row">
            <?php 
			if(isset($_GET['ordersucess'])){
			  $status = $_GET['ordersucess'];
			  if ($status = "yes"){
				  ?>
                  <div class="alert alert-success" >Your order has been placed succesfully..And we will send an email to your email to confirm the purchasing and paying. </div>
                  <?php	
			  }elseif($status = "yes"){
				  ?>
            	  <div class="alert alert-warning" >Fails to placed the order try again..</div>
                  <?php 
			  
			  }
			}
			?>
            <div class="col-md-5">
           <?php 
					 
                 print '<img   src="uploads/'.$ProdImg.'"  style="width:400px;height:450px">';
				  ?>
                </div>
            		          
         
               
                <div class="col-md-7">
                    <h2><?php echo $ProdName; ?></h2>
                    <hr>
                    <form action="logic/saveoder.php" method="POST">
                    <div class="form-horizontal" style="padding: 10px;background-color: #F3F3F3;border: 1px solid #ddd;">
                        <div class="  form-group">
                            <label class="col-md-4 control-label" for="">Order Quantity:</label>  
                            <div class="col-md-2">
                                <input id="" name="pqty" type="text" class="form-control input-md">
                                <input type="hidden" name="pid" value="<?php echo $_GET['prodid']  ?>" >
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
                            <label class="col-md-4 control-label" for="">Author:</label>  
                            <div class="col-md-4">
                                <p  style="font-size: 20px; font-weight: bold;padding-top: 4px;"><?php echo $bkathr; ?></p> 
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
                                   <button id="singlebutton" name="singlebutton" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-shopping-cart " aria-hidden="true">Buy It Now</span></button>
                                            </div>
                                            </div>
                                    <?php } else{ ?>
                                    <div class="  form-group">
                                    <div class="col-md-4"  align="center"> 
                                      <a href="member-registration.php" class="btn btn-primary btn-warning"><span class="glyphicon glyphicon-user"></span> Create a account for buy.</a>
                                   </div>
                                   </div>
                                    <?php } ?> 
                                           <?php } ?></p>
                            </div>

                        </div>
                        
                    
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#desc">Product Description</a></li>
                    </ul>
                    <div class="tab-content"> 
                        <div id="desc" class="tab-pane fade in active">
                            <br>
                            <p><?php echo $ProdDes; ?></p>

                            

                        </div>
                    </div>


                    </p>
                </div>

                <div class="col-md-12">
                 
                    <h2>Similar Products</h2><hr>
                      <style>
            .prod-wrapper{
                padding: 10px;
                
                margin-bottom: 5px;
            }
        </style>
                <div class="col-md-16 col-sm-18">
                    
                   <?php 
				   include './dbconfig.php';
				  
				   $sql="SELECT * FROM product WHERE productcatergory = '".$_GET['prodcate']."'";
				   //execute the query
				   $result = $conn->query($sql);
				   
				   //if result has one or more rows
				   if($result->num_rows > 0){
					while ($row = $result->fetch_assoc()){
								
					  
				   ?>
					
                   <div class="col-md-4">
                        <div class="prod-wrapper">
                            <div class="media"> 
                                <div class="media-left"> <a href="order.php?prodid=<?php echo $row["prodID"]; ?> & prodcate=<?php echo $row["productcatergory"]; ?>">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64"  src="uploads/<?php echo $row["productIMG"]; ?>" data-holder-rendered="true" style="width: 64px; height: 64px;"> </a>
                                </div> 
                                <div class="media-body">
                                    <h4 class="media-heading"><font size="+1"><?php echo $row["prodname"]; ?></font></h4> 
                                    <p><?php echo $row["productDesc"]; ?></p> 
                                </div> 
                                <div class="media-right media-middle">
                                    <p class="text-right">
                                        <a href="#" class="btn btn-default btn-xs "> 
                                            <b>Rs  <?php echo $row["prodprice"];?></b>
                                        </a>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
					}
				   }
					 ?>
                    
                </div>

               

            </div>
            
        </div>
        <div class="row">
            <?php include './template/footer.php'; ?>
            </div>
        <!-- JavaScript plugins (requires jQuery) -->    
        <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
