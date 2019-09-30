
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>LEGIAN BOOK SHOP ADMIN PANEL</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
	<!---------Header-------------->
		<?php include'pages/header.php' ;?>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="../index.php">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Admin Dashboard</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <?php if (isset($_SESSION["UNAME"])) { ?>
									
									<?php } else{ ?>
									<?php } ?> 
                                    <span><?php echo $_SESSION["UNAME"] ?></span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                            <?php 
								include '../dbconfig.php';
								foreach( $conn->query('SELECT customerID,COUNT(*) FROM customer ;') as $row) { 				  		
							?>
                                <h2 class="number"><?php echo $row["COUNT(*)"]; ?></h2>
							<?php } ?>
                                <span class="desc">members </span>
                                <div class="icon ">
                                    <i class="zmdi zmdi-account-o desc"></i>
                                </div>
                            </div>
                        </div>
						
						
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
							<?php 
								include '../dbconfig.php';
								foreach( $conn->query('SELECT Payment_No,COUNT(*) FROM payment ;') as $row) { 				  		
							?>
                                <h2 class="number"><?php echo $row["COUNT(*)"]; ?></h2>
							<?php } ?>
                                <span class="desc">items sold</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart desc"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                             <?php 
								include '../dbconfig.php';
								foreach( $conn->query('SELECT prodID,COUNT(*) FROM product ;') as $row) { 				  		
							?>
                                <h2 class="number"><?php echo $row["COUNT(*)"]; ?></h2>
							<?php } ?>
                                <span class="desc">Items in stock</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note desc"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <?php 
								include '../dbconfig.php';
								foreach( $conn->query('SELECT Payment_No,COUNT(*) FROM payment ;') as $row) { 				  		
							?>
                                <h2 class="number"><?php echo $row["COUNT(*)"]; ?></h2>
							<?php } ?>
                                <span class="desc">total Sales</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-book desc"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->
			<div class='row'>
			<!-- sealing PROGRESS-->
			  <div class="col-md-4 col-lg-4">
                                <div class="task-progress">
                                    <h3 class="title-3">Saling progress</h3>
                                    <div class="au-skill-container">
                                        <div class="au-progress">
                                            <span class="au-progress__title">Adults</span>
                                            <div class="au-progress__bar">
											<?php 
												include '../dbconfig.php';
												foreach( $conn->query('SELECT productcatergory,COUNT(*) FROM product ;') as $row) { 				  		
											?>
												<div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="1">
											<?php } ?>
                                                
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title"> Biographies </span>
                                            <div class="au-progress__bar">
                                                <?php 
												include '../dbconfig.php';
												foreach( $conn->query('SELECT productcatergory,COUNT(*) FROM product ;') as $row) { 				  		
											?>
												<div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="2">
											<?php } ?>
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">E-Books</span>
                                            <div class="au-progress__bar">
                                                <?php 
												include '../dbconfig.php';
												foreach( $conn->query('SELECT productcatergory,COUNT(*) FROM product ;') as $row) { 				  		
											?>
												<div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="3">
											<?php } ?>
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-progress">
                                            <span class="au-progress__title">Educational</span>
                                            <div class="au-progress__bar">
                                                <?php 
												include '../dbconfig.php';
												foreach( $conn->query('SELECT productcatergory,COUNT(*) FROM product ;') as $row) { 				  		
											?>
												<div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="5">
											<?php } ?>
                                                    <span class="au-progress__value js-value"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                                <!-- END sealing PROGRESS-->
                      
						
                        <div class="col-md-4 col-lg-4">
                            <!-- TOP sales-->
							
							
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">last sales</h3>
                                <div class="table-responsive">
                                    <table class="table table-top-campaign">
                                        <tbody>
                                       
												<div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="1">
										 
											
										
										<tr>
                                                <td>1. Sherlock Holmes</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <td>2. SouthEast Asia</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>3. Making Books</td>
                                                <td>9</td>
                                            </tr>
                                            <tr>
                                                <td>4. Reckless Love</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>5. Children of Run</td>
                                                <td>5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END TOP sales-->
                        </div>
                        <div class="col-md-4 col-lg-4">
						<br><br>
                            <!-- RECENT sales REPORT-->
                                        <div class="recent-report md-b-40">
                                            <div class="title-wrap">
                                                <h3 class="title-3">recent sales</h3>
                                                <div class="chart-info-wrap">
                                                    <div class="chart-note">
                                                        <span class="dot dot--blue"></span>
                                                        <span>sales</span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                          
                                            <div class="chart-wrap">
                                                <canvas id="recent-rep-chart"></canvas>
                                            </div>
                                        </div>
                                        <!-- END RECENT sales REPORT-->
                        </div>
                    </div>
                </div>
			</div>
		</div>
            </section>
            <!-- END STATISTIC CHART-->


<hr>
            
            <!---------footer-------------->
				<?php include'pages/footer.php' ;?>
            <!-- END footer-->

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
