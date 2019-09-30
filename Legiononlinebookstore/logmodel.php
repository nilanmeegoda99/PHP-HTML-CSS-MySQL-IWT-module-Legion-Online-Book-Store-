<html>
<head>
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  media="screen">
  <link href="css/modern-business.css" rel="stylesheet">
</head>
<body>
<?php include './template/header.php';?>
<div class="container">

<style>
   body {
    background-image: url("logpagebpic.jpg");
    background-color: #cccccc;
}
</style>
	<div class="row">
		<h1 class="text-center">Log In To Legion Online Book Store</h1>
        <div class="logbtns" style="margin-top:97px;">
        <p class="text-center" ><a href="#" class="btn btn-primary btn-lg" role="button" style="width:170px;" data-toggle="modal" data-target="#login-modal">Let's Login</a></p>
        <p class="text-center" ><a class="btn btn-lg btn-default btn-primary" style="width:170px;" href="member-registration.php">Create a account </a></p>
        </div>
         <div class="row" align="left">
         <?php 
			if(isset($_GET['fakeid'])){
			  $status = $_GET['fakeid'];
			  if ($status ="1"){
				  ?>
                   <div class="alert alert-danger" >Wrong Username or Password.Try again..</div>
                  <?php	
			  }
			  
			  
			}
			?>
        </div>
         
	</div>
</div>
<!-- END # BOOTSNIP INFO -->

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="./images/login-big-icon.png">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <div class="container" >
            <div class="row">
               
                <div class="col-md-6">
                    <form   id="login-form" class="form-horizontal" action="logic/user-login.php" method="POST">
                        <fieldset>
                    
		                <div class="modal-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
				    		<input id="login_username" name="username" class="form-control" type="text" placeholder="Username " required>
				    		<input id="login_password" name="password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div class="lgbtn" style="margin-top:10px;">
                                <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
				    	    <div class="lgbtn" style="margin-top:10px;">
                                
                               <button id="login_register_btn" type="button"  class="btn btn-link"> <a href="member-registration.php">Register</a></button>
                            </div>
				        </div>
                   </fieldset>
                    </form>

                </div>
                
            </div>
        </div>
      
     <script src="jquery/js/jquery-1.12.2.min.js"></script> 
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="bootstrap/js/bootstrap.min.js"></script> 
        </body>
        </html>