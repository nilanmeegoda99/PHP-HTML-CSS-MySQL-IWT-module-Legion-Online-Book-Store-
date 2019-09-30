<!DOCTYPE html>
<html lang="en">


<head>
    
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    


</head>

<body>
 <?php include './template/header.php'; ?>

    <!-- Header Carousel -->
   
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
        
            <div class="item active">
                <div class="fill" style="background-image:url(images/b10.jfif);"></div>
                <div class="carousel-caption">
                    <h3><font  color="#FFFFFF">Read a one Book per every Week!</font></h3>
                </div>
            </div>
             
            <div class="item">
                <div class="fill" style="background-image:url(images/b1.jpg); "></div>
                <div class="carousel-caption">
                <h3><font  color="#FFFFFF">Leaders are always born from books!</font></h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(images/b11.jfif);"></div>
                <div class="carousel-caption">
                   <h3><font  color="#FFFFFF">Books are the most powerful guides for your future!</font></h3>
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url(images/b12.jfif);"></div>
                <div class="carousel-caption">
                   <h3><font  color="#FFFFFF">Leaders are always born from books!</font></h3>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(images/b14.jfif);"></div>
                <div class="carousel-caption">
                   <h3><font  color="#FFFFFF">Now E-Books are available!!</font></h3>
                </div>
            </div>
                        
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
      
    
								

<div class="col-lg-2 col-md-2" style="margin-top:50px">
                    <h3>Categories</h3>
                    <div class="list-group">
                     <?php 
				   include './dbconfig.php';
				  foreach( $conn->query('SELECT productcatergory,COUNT(*)FROM product WHERE productcatergory="Novels"  GROUP BY productcatergory;') as $row) { 				  		
 					?>
                    		 <a href="#" class="list-group-item"> <span class="badge"><?php echo $row["COUNT(*)"]; ?></span>Novels</a>  								   
											
					<?php } ?>
                     <?php 
				   include './dbconfig.php';
				  foreach( $conn->query('SELECT productcatergory,COUNT(*)FROM product WHERE productcatergory="E-Books"  GROUP BY productcatergory;') as $row) { 				  		
 					?>
                    		<a href="#" class="list-group-item"> <span class="badge"><?php echo $row["COUNT(*)"]; ?></span>E-Books</a>								   
											
					<?php } ?>
                     <?php 
				   include './dbconfig.php';
				  foreach( $conn->query('SELECT productcatergory,COUNT(*)FROM product WHERE productcatergory="Educational"  GROUP BY productcatergory;') as $row) { 				  		
 					?>
                    		<a href="#" class="list-group-item"> <span class="badge"><?php echo $row["COUNT(*)"]; ?></span>Educational</a>  								   
											
					<?php } ?>
                     <?php 
				   include './dbconfig.php';
				  foreach( $conn->query('SELECT productcatergory,COUNT(*)FROM product WHERE productcatergory="Adults"  GROUP BY productcatergory;') as $row) { 				  		
 					?>
                    		<a href="#" class="list-group-item"> <span class="badge"><?php echo $row["COUNT(*)"]; ?></span>Adults</a>  								   
											
                    <?php } ?>
                    <?php
                    include './dbconfig.php';
                    foreach( $conn->query('SELECT productcatergory,COUNT(*)FROM product WHERE productcatergory="Teen&Love"  GROUP BY productcatergory;') as $row) { 				  		
 					?>
                    		 <a href="#" class="list-group-item"> <span class="badge"><?php echo $row["COUNT(*)"]; ?></span>Teen & Love</a>  								   
											
					<?php } ?>
                     <?php 
				   include './dbconfig.php';
				  foreach( $conn->query('SELECT productcatergory,COUNT(*)FROM product WHERE productcatergory="ShortStories"  GROUP BY productcatergory;') as $row) { 				  		
 					?>
                    		<a href="#" class="list-group-item"> <span class="badge"><?php echo $row["COUNT(*)"]; ?></span>Short Stories</a>								   
											
					<?php } ?>
                     <?php 
				   include './dbconfig.php';
				  foreach( $conn->query('SELECT productcatergory,COUNT(*)FROM product WHERE productcatergory="Fiction"  GROUP BY productcatergory;') as $row) { 				  		
 					?>
                    		<a href="#" class="list-group-item"> <span class="badge"><?php echo $row["COUNT(*)"]; ?></span>Fictional Stories</a>  								   
											
					<?php } ?>
                     <?php 
				   include './dbconfig.php';
				  foreach( $conn->query('SELECT productcatergory,COUNT(*)FROM product WHERE productcatergory="Biographies"  GROUP BY productcatergory;') as $row) { 				  		
 					?>
                    		<a href="#" class="list-group-item"> <span class="badge"><?php echo $row["COUNT(*)"]; ?></span>Biographies</a>  								   
											
                    <?php } ?>
                    <?php 
				   include './dbconfig.php';
				  foreach( $conn->query('SELECT productcatergory,COUNT(*)FROM product WHERE productcatergory="Guide Books"  GROUP BY productcatergory;') as $row) { 				  		
 					?>
                    		<a href="#" class="list-group-item"> <span class="badge"><?php echo $row["COUNT(*)"]; ?></span>Guide Books</a>  								   
											
					<?php } ?>
				                       
                        
                        
                        
                    </div>
                </div>
    <!-- Page Content -->
    <style>
            .container{
                padding-left: 60px;
            }
            .upban{
                height:200px;
            }
            .ph
            {
                padding-top: 17px;
            }
            
        </style>
    <div class="container">
    <div class="col-md-12" style="margin-top:-491px">
	
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header ph">
                   <font color="#0099FF"> Welcome to the new world of Books.<small>Legion Online Book Store</small></font>
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default panel-dark upban">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-shopping-cart"></i>Easy Shopping</h4>
                    </div>
                    <div class="panel-body">
                        <p>Home deliverying products that make you easy without picking directly from our store.E-books are also available. </p>
                        <a href="about.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 upban">
                <div class="panel panel-default panel-dark upban">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw  fa-desktop"></i>Upload your bukcet list to us!</h4>
                    </div>
                    <div class="panel-body">
                        <p>Now you don't need to waste your time,Just upload your BUCKET LIST to our website and we will deliver it to.  </p>
                        <a href="bucketupload.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 upban">
                <div class="panel panel-default panel-dark upban">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-binoculars"></i>Popular E-Books.</h4>
                    </div>
                    <div class="panel-body">
                        <p>With latest titles, you are ready to go!!! </p>
                        <a href="view beauty.php?catg=<?php echo "E-Books" ?>" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    		    <style>
            .prod-wrapper{
                padding: 10px;
                
                margin-bottom: 5px;
            }
        </style>
                <div class="col-md-14 col-sm-16">
                 <div class="row"    style="padding-left: 10px;">
                    <h3>Trending Books!</h3>
                   <?php 
				   include './dbconfig.php';
				   $sql = "SELECT prodID,prodname,productDesc,prodprice,productIMG,productcatergory FROM product LIMIT 3";
				  
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
        
       
        <!-- /.row -->
        <div class="col-md-14 col-sm-16">
                 <div class="row">
                    <h3 style="font-size: 30px;">Books</h3>
                   <?php 
				   include './dbconfig.php';
				   $sql = "SELECT prodID,prodname,productDesc,prodprice,producQty,productIMG,productcatergory FROM product LIMIT 24";
                  
				   //execute the query
				   $result = $conn->query($sql);
				   
				   //if result has one or more rows
				   if($result->num_rows > 0){
					while ($row = $result->fetch_assoc()){
								
                        $ProdQty=$row["producQty"];
				   ?>
                         <style>
                             .bcard{
                                    background-color: rgb(204, 204, 204,0.25);
                                    background-clip: border-box;
                                    border: 1px solid rgba(0,0,0,.125);
                                    border-radius: 5px;
                                    padding-left: 9.5px;
                                    padding-bottom: 7px;
                                    width: 246px;
                             }
                         </style>
                   <div class="col-md-4" style="width: 260px;">
                            <div class="card bcard" style="margin-bottom: 38px;">
                            <img class="card-img-top" alt="64x64" src="uploads/<?php echo $row["productIMG"]; ?>" data-holder-rendered="true" style="width: 100%; height: 212px;padding-top: 4px;  padding-right: 9px;border-radius: 16px" >
                            <div class="card-body">
                                <h5 class="card-title"><font size="+1" color="black"><?php echo $row["prodname"]; ?></font></h5>
                                <p class="card-text"><?php echo $row["productDesc"]; ?></p>
                                <p><font size="+1" color="light-blue">Rs:<?php echo $row["prodprice"]; ?></font></p>
                                <p style="padding-top: 7px;"><?php if($ProdQty<1){?><font color="red">
                                Stock Is Over</font><?php }else{
									
									?><font color="green"> In Stock</font></p><?php } ?></p>
                               <a class="btn btn-primary  active" role="button"  href="order.php?prodid=<?php echo $row["prodID"]; ?> & prodcate=<?php echo $row["productcatergory"]; ?>">Buy Now <span class="fa fa-thumbs-up fa-lg"></a></span></a>
                               <a class="btn btn-info  active" role="button" href="shopppingcrt.php?prodid=<?php echo $row["prodID"]; ?> & cusname=<?php echo $_SESSION["UNAME"] ?>">Add to Cart <span class="fa fa-shopping-cart fa-lg"></a></span></a>
                            </div>
                            </div>
                    
                    </div>
                    
                    <?php
					}
				   }
					 ?>
                </div>

                
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Website Features</h2>
            </div>
            <div class="col-md-6">
                <p>Legion Online BookStore(PVT)LTD:</p>
                <ul>
                    <li><strong>Legion Online BookStore will brings you our maximum support in any time  </strong>
                    </li>
                    <li>A higher security and trust for our customer's details.  </li>
                    <li>Money back gurantee for damaged books and returning is acceptable</li>
                    <li>Your own account to see your orders. </li>
                    <li>24 hours customer service.Online chating systemi is available from 9AM to 5PM</li>
                    <li>All our our books are quality barnds with maximum quality </li>
                </ul>
                <p>Our Online Store is registered store in Sri lanka and our staff is a full of experianced group with a resonsible customer service.We are here to help</p>
            </div>
            <div class="col-md-6">
           
                <?php 
					 
                 print '<img   src="images/5cac6b9e846ce.jpeg"  style="width:400px;height:230px">';
				  ?>
            </div>
        </div>
        <!-- /.row -->

        <hr>
<?php if (!isset($_SESSION["UNAME"])) { ?>
                    <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>If you are satisfied about our product and services then it's time to get start.Let's create a account for you to access our buying features. </p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-primary" href="member-registration.php">Create a account</a>
                </div>
            </div>
        </div>
                    <?php } ?>
                    
                   
        <!-- Call to Action Section -->
        

        <hr>

        <!-- Footer -->
        
      
        

        </div>
    </div>
 
   
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>

    
    <div class="row">
    <?php include './template/footer.php'; ?>
    </div>
</div>
</body>

</html>
