
<?php session_start(); ?>
<style>
    .bknav
    {
        background-color: rgb(0,0,0);
    }
</style>
<nav class="navbar   navbar-fixed-top bknav" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"   href="index.php">Legion Bookstore</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    
                    
                    
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="view beauty.php?catg=<?php echo "Novels" ?>">Novels</a>
                            </li>
                            <li>
                                <a href="view beauty.php?catg=<?php echo "E-Books" ?>">E-Books</a>
                            </li>
                            <li>
                                <a href="view beauty.php?catg=<?php echo "Educational" ?>">Educational</a>
                            </li>
                            <li>
                                <a href="view beauty.php?catg=<?php echo "Adults" ?>">Adults</a>
                            </li>
                            <li>
                                <a href="view beauty.php?catg=<?php echo "Teen&Love" ?>">Teen & Love</a>
                            </li>
                            <li>
                                <a href="view beauty.php?catg=<?php echo "ShortStories" ?>">Short Stories</a>
                            </li>
                            <li>
                                <a href="view beauty.php?catg=<?php echo "Fiction" ?>">Fiction</a>
                            </li>
                            <li>
                                <a href="view beauty.php?catg=<?php echo "Biographies" ?>">Biographies</a>
                            </li>
                            <li>
                                <a href="view beauty.php?catg=<?php echo "GuideBooks" ?>">Guide Books</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                    
             
                </ul>
                <ul class="nav navbar-nav navbar-left">
               <?php if (isset($_SESSION["UNAME"]) && $_SESSION["UNAME"]=="Nandana Meegoda") { ?>
                      
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin Functions <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="view-orders.php">View all orders</a>
                            </li>
                            <li>
                                <a href="view-all-products.php">View all products</a>
                            </li>
                             <li>
                                <a href="view-bkt.php">View Bucket Lists</a>
                            </li>
                            <li>
                                <a href="view-members.php">View all members</a>
                            </li>
                            <li>
                                <a href="member-registration.php">Adding a new member</a>
                            </li>
                             <li>
                                <a href="product-registration.php">Adding a new product</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="admin/dashboard.php">Dashboard</a>
                    </li>
                    
                    <?php }elseif (isset($_SESSION["UNAME"]) ){ ?>
                     <li>
                        <a href="view-orders-cus.php?cusname=<?php echo $_SESSION["UNAME"] ?>">My Orders</a>
                    </li>
                    <li>
                        <a href="shopppingcrt.php?prodid=& cusname=<?php echo $_SESSION["UNAME"] ?>">My Cart</a>
                    </li>
                    <li>
                        <a href="member-registration.php?id=<?php echo $_SESSION["CUSSID"] ?>">User Profile</a>
                    </li>
                    
                    <?php } ?>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                
                <?php if (isset($_SESSION["UNAME"])) { ?>
                    <li><a href="">Welcome <?php echo $_SESSION["UNAME"] ?>!</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <?php } else{ ?>
                    <li><a href="member-registration.php">Register</a></li>
                    <li><a href="logmodel.php">Login</a></li>
                    <?php } ?> 
            </ul>
            	
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>