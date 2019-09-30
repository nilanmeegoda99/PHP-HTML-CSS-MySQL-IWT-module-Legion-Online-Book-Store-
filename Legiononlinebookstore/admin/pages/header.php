    
<?php session_start(); ?>
	<!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/logo.png" height= 10% alt="Legian Book Store" />
                        </a>
                    </div>
                    <div class="header__navbar">
					<ul class="list-unstyled">
                       <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-home"></i>HOME
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="../index.php">LEGIAN BOOK SHOP</a>
                                    </li>
                                    <li>
                                        <a href="dashboard.php">DASHBOARD</a>
                                    </li>
                                    
                                </ul>
						   </li>                       
                            <li>
                                <a href="../product-registration.php">
                                    <i class="fas fa-plus"></i>
                                    <span class="bot-line"></span>ADD NEW ITEM</a>
                            </li>
                            <li>
                                <a href="item_list.php">
                                    <i class="fas fa-edit"></i>
                                    <span class="bot-line"></span>VIEW ITEM LIST </a>
                            </li>
                            <li class="has-sub">
                                <a href="edit_item.php">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>EDIT OR REMOVE ITEM </a>
                                </ul>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="header__tool">
                       
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/user pic.png" alt="John Doe" />
                                </div>
                                <div class="content">
								<?php if (isset($_SESSION["UNAME"])) { ?>
									
									<?php } else{ ?>
									<li><a href="member-registration.php">Register</a></li>
									<li><a href="logmodel.php">Login</a></li>
								<?php } ?> 
                                    <a class="js-acc-btn" href="#"><?php echo $_SESSION["UNAME"] ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/user pic.png" alt="propic" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#"><?php echo $_SESSION["UNAME"] ?></a>
                                            </h5>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="account-dropdown__footer">
                                       
                                          <a href="../logout.php"> <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/logo.png" alt="LEGIAN BOOK SHOP" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-home"></i>HOME</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="../index.php">LEGIAN BOOK SHOP</a>
                                </li>
                                <li>
                                    <a href="dashboard.php">DASHBOARD</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                        <a href="../product-registration.php">
                                <i class="fas fa-chart-plus"></i>ADD NEW ITEM</a>
                        </li>
                        <li>
                            <a href="item_list.php">
                                <i class="fas fa-list"></i>VIEW ITEM LIST </a>
                        </li>
                        <li>
                            <a href="edit_item.php">
                                <i class="far fa-edit"></i>EDIT OR REMOVE ITEM </a>
                        </li>
                        
                       
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                
                        
                
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/user pic.png" alt="propic" />
                        </div>
                        <div class="content">
								<?php if (isset($_SESSION["UNAME"])) { ?>
									
									<?php } else{ ?>
									<li><a href="member-registration.php">Register</a></li>
									<li><a href="logmodel.php">Login</a></li>
                    <?php } ?> 
                                    <a class="js-acc-btn" href="#"><?php echo $_SESSION["UNAME"] ?></a>
                                </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/user pic.png" alt="propic" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $_SESSION["UNAME"] ?></a>
                                    </h5>
                                    
                                </div>
                            </div>
                           
                            <div class="account-dropdown__footer">
                                <a href="../logout.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->