 <!DOCTYPE html>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Legion Online Books Store</title>
	
  
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
   <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Our Books!
                    <small>Your Wisdom</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Buy Books</li>
                </ol>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-12 col-md-12">
                <img class="img-responsive"  src="images/caro1.jpg" alt="" style="width: 1400px; height: 350px;">
            </div>
        </div>
        <hr>
        
        <?php include './template/header.php'; ?>
					
                  <?php 
				   include './dbconfig.php';
				  
				   $sql="SELECT * FROM product WHERE productcatergory = '".$_GET['catg']."'";
				   //execute the query
				   $result = $conn->query($sql);
				   
				   //if result has one or more rows
				   if($result->num_rows > 0){
					while ($row = $result->fetch_assoc()){
								
					   
				   ?>
	
    

        <!-- Projects Row -->
        <div class="col-md-6 ">
                 <div class="media"> 
                                <div class="media-left"> <a href="order.php?prodid=<?php echo $row["prodID"]; ?> & prodcate=<?php echo $row["productcatergory"]; ?>">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64"  src="uploads/<?php echo $row["productIMG"]; ?>" data-holder-rendered="true" style="width: 80px; height: 80px;"> </a>
                                </div> 
                                <div class="media-body">
                                    <h4 class="media-heading"><font size="+1"><?php echo $row["prodname"]; ?></font></h4> 
                                    <p><?php echo $row["productDesc"]; ?></p>
                                    <p>Author : <font color="blue"><?php echo $row["author"]; ?></font></p>  
                                </div> 
                                <div class="media-right media-middle">
                                    <p class="text-right">
                                        <a href="#" class="btn btn-default btn-xs "> 
                                            <b>Rs  <?php echo $row["prodprice"];?></b>
                                        </a>
                                    </p>
                                    <a href="order.php?prodid=<?php echo $row["prodID"]; ?> & prodcate=<?php echo $row["productcatergory"]; ?>" class="btn btn-success btn-sm"> 
                                    <span class="glyphicon glyphicon-shopping-cart " aria-hidden="true"> <b>Buy It Now</b></span>
                                </a>
                                    
                                </div>
                            </div> 
            </div>
        <!-- /.row -->          
                             
       
         <?php
					}
				   }
					 ?>

    
        

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Legion Online Book Store(PVT) LTD 2019</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
