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
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                         <li class="list-inline-item active">
                                            <a href="dashboard.php">Admin Dashboard</a>
                                        </li>
										<li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Add New Item</li>
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
                            <h1 class="title-4">Add New Item
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

			<!--add item form----->
						<form action="data base/add_item_logic.php" method="post" class="form-horizontal">
							<div class="row">
                                <div class="card col-md-10 col-lg-10" style='margin-left:100px; margin-right:100px;'>
                                    <div class="card-header ">
                                        <strong>Insert item details</strong> 
                                    </div>
								<div style='margin-left:50px;'>
                                    <div class="card-body card-block col-lg-12 col-md-12">
                                        <div class="has-success form-group">
                                            <label for="isbnNo" class=" form-control-label">Input ID number</label>
                                            <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-key"></i>
                                                        </div>
                                                <input type="text" id="isbnNo" class="form-control-success form-control" required>
											</div>
										</div>
									 </div>
                                    <div class="card-body card-block col-lg-12 col-md-12">
                                        <div class="has-success form-group">
                                            <label for="bookTitle" class=" form-control-label">Input Book title</label>
                                            <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-tags"></i>
                                                        </div>
                                                <input type="text" id="bookTitle" class=" form-control-success form-control" required>
											</div>
										</div>
									</div>
                                    <div class="card-body card-block col-lg-12 col-md-12">
                                        <div class="has-success form-group">
                                            <label for="bookAuthor" class=" form-control-label">Input Book Author</label>
                                            <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa  fa-user"></i>
                                                        </div>
                                               <input type="text" id="bookAuthor" class=" form-control-success form-control" required>
											</div>
										</div>
									</div>
									
									 
									 
									 <div class="card-body card-block row">
                                        <div class="has-success form-group col-lg-6 col-md-6">
                                            <label for="bookPri" class=" form-control-label">Input Book Price</label>
											<div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-usd"></i>
                                                        </div>
                                                <input type="textarea" id="bookPri" class=" form-control-success form-control" required>
											</div>
                                            
										</div>
										
										<div class="col col-md-6">
                                                    <label for="file-input" class=" form-control-label">Book image</label>
													<div class="col-12 col-md-12">
                                                    <input type="file" id="file-input" name="file-input" class="form-control-file">
                                                </div>
                                                </div>
                                                
                                            
										</div>
									 
									<div class="card-body card-block row" >
                                        <div class="has-success form-group col-lg-6 col-md-6">
                                                <div class="col-md-4 col-md-4 ">
                                                    <label for="bookQty" class=" form-control-label">Select Category</label>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <select name="select" id="select" class="form-control">
                                                        <option value="0">Please select</option>
                                                        <option value="1">Option #1</option>
                                                        <option value="2">Option #2</option>
                                                        <option value="3">Option #3</option>
                                                    </select>
                                                </div>
                                        </div>
										<div class="has-success form-group col-lg-6 col-md-6">
                                                <div class="col-md-6 col-md-6 ">
                                                    <label for="bookQty" class=" form-control-label">Input item Quantity</label>
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa  fa-th"></i>
                                                        </div>
                                               <input type="text" id="bookQty" class=" form-control-success form-control" required>
											</div>
                                                </div>
                                            </div>
										
										</div>
									</div>
									
									<div class="card-body card-block col-lg-12 col-md-12" style='margin-left:40px;'>
                                        <div class="has-success form-group">
											<div class="form-group">
                                                
                                                    <label for="bookDec" class=" form-control-label" style='margin-left:15px;'>Input Book description</label>
												<div class="col-12 col-md-12">
                                                    <textarea name="textarea-input" id="bookDec" rows="9" placeholder="description..." class=" form-control-success form-control"></textarea>
												</div>	
                                            </div>
                                     </div>
									</div>
								
								<div>
									<button class="au-btn au-btn-icon au-btn--blue  btn-block" type='submit'>
                                        <i class="zmdi zmdi-plus">&nbsp Save details</i>
									</button>
								</div>
								
								</div>
                                </div>
                            </div>
						</form>
			<!--end add item form-->
			
<hr>
          <!---------footer-------------->
				<?php include'pages/footer.php' ;?>
            <!-- END footer-->
        </div>

    </div>

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
