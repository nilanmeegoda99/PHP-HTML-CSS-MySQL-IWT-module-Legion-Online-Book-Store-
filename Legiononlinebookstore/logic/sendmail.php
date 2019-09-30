<?php 
if(isset($_POST['submit'])) {
  // do code
  $msg = 'Name: ' .$_POST['name'] ."\n"
	.'Email: ' .$_POST['email'] ."\n"
	.'Comment: ' ."\n" .$_POST['message'];
	mail('nilanmeegoda@gmail.com','Customer Feedback', $msg);
	 header('Location: ../contact.php?sucess=yes');
} else {
  // do other code block
  header('Location: ../contact.php?sucess=no');
}


?>