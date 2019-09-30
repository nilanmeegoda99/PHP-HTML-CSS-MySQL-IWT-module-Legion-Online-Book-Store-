<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
// Start the session
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Legion Online Book Store</title>
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/login_css.css" rel="stylesheet"  media="screen">
        <link href="css/admin_log.css" rel="stylesheet"  media="screen">
        
        
</head>

<body>



<div class="container">
<div class="cont">
	<div class="head">
    	<a href="#" class="b3">Home </a>
    </div>
	<h1> Welcome Admin!</h1>
	<form name="adminFrm" action="data base/logic.php"  method="post">
	<div id='msgLbl'></div>
    	<div class="tbox">
        	<input type="text" id='uName' name="uName" placeholder="input user name" value="" >
        </div>
    	
        <div class="tbox">
        	<input type="password" id='passw' name="passw" placeholder="input password" value="" >
        </div>     
 
      <div>
		<input class="btn" type="submit" name="login_btn" value="login">
      </div>  	
	  
      </form>  
      
      <!--footer----->
	<div class="foot">
    	<p>© Copyright 2019 by Legion Online Book Store. &nbsp;All rights reversed.<br></p>
		
    </div>
</div>


 </div>
?>
 <script src="js/admin-log-valida.js"></script>
</body>

</html>

