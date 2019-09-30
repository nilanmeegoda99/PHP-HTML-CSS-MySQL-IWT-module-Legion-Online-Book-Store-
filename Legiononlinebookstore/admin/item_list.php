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
										 <li class="list-inline-item active">
                                            <a href="dashboard.php">Admin Dashboard</a>
                                        </li>
										<li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">View Item List</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- Heading-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">STORE ITEM LIST
                               
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END heading-->

                       <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Item table</h3>
								<div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="table-data__tool-right">
							 
								</div>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                       <a href="add_item.php" style='color:#ffffff;'> <i class="zmdi zmdi-plus"></i>add item</button></a>
                                    
                                </div>
                            </div>
<!------->							
						   <div class="table-data__tool">
                               
                               
								
                            </div>
                            <div class="table-responsive table-responsive-data2">
							
											
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                           
                                            <th>ID NO</th>
                                            <th>Title</th>
											<th>In stock</th>
                                            <th>Price</th>
                                            <th>Author</th>
											<th>Image</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
							include '../dbconfig.php';
							$sql = "SELECT * FROM product";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								?>
								 <tr class="tr-shadow">
                                            <td class=" "  ><div style='margin-top:150%; '><?php echo $row["prodID"]?></div></td>
                                            <td><?php echo  $row["prodname"]?></td>
											<td class="desc"><?php echo  $row["producQty"]?></td>
											<td>RS. <?php echo  $row["prodprice"]?></td>
                                            <td>
                                                <span class="status--process"><?php echo  $row["author"]?></span>
                                            </td>
                                            
											<td>
												<div class='row'>
													<div class="image">
                                            <a href="#">
                                                <img src="../uploads/<?php echo  $row["productIMG"]?>" height='200px' width='150px' alt="book img" />
                                            </a>
                                        </div>
												</div>
												<div class='row'>
													<center><p><?php echo  $row["productIMG"]?></p></center>
												</div>
											</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    
                                                    <a href="edit_item.php">
                                                        <a href="../product-registration.php?id=<?php echo $row["prodID"];?>">
													<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button></a>&nbsp
                                                    <a href="../logic/delete-product.php?pid=<?php echo $row['prodID']; ?>">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                     </a>
                                                </div>
                                            </td>
                                        </tr>
										
								
								
								
							<?php		
							}	
							
							} else {
								echo "0 results";
							}
							$conn->close();
							?>
                                     
										<hr>
										
										
										
										
										
                                    </tbody>
									
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

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
