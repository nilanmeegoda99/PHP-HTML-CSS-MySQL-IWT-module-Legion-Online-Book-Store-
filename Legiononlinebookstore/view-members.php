<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"  media="screen">
        <link rel="stylesheet" href="css/tablecss/css/reset.css">
        <link rel="stylesheet" href="css/tablecss/css/style.css">
        
         
    </head>

    <body>
 <?php include './template/header.php'; ?>
        <section> <!--for demo wrap-->
        
<h2>View All Customers</h2>  
<div class="tbl-header" style="padding-right: 6px;">
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      			    <th >CustomerID</th>
                <th >FirstName</th>
                <th >LastName</th>
                <th >Address</th>
                <th >Birthday</th>
                <th >CustomerIMG</th>
                <th >Email</th>
                <th >Action</th>
    </tr>
  </thead>
</table>
</div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
 <?php 
				  include 'dbconfig.php';
            $sql = "SELECT * FROM  customer;";
            // execute select query
            $result = $conn->query($sql);

            // if result has one or more rows
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    ?>
                   <tbody>
                        <tr>
                        <td><?php echo $row["customerID"]; ?></td>
                        <td><?php echo $row["f_name"]; ?></td>
                        <td><?php echo $row["l_name"]; ?></td>
                        <td><?php echo $row["addressity"]; ?></td>
                        <td><?php echo $row["birthday"]; ?></td> 
                        <td><?php echo $row["customerimg"]; ?></td>
                        <td><?php echo $row["Email"]; ?></td>
                        <td>
                            <a href="member-registration.php?id=<?php echo $row["customerID"];?>">Update</a>
                            <a href="./logic/delete-member.php?pid=<?php echo $row["customerID"]; ?>">Delete</a>
                        </td>
                        </tr>
                      <?php
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
                    </table>
        
  </tbody>
</table>

</div>
</section>                    
   <a href="member-registration.php" class="btn btn-primary btn-primary"  style="margin-left:150px" ><span class="glyphicon glyphicon-fire"></span> Add a new member</a>     
        <script src="jquery/js/jquery-1.12.2.min.js"></script> 
        <!-- Include all compiled plugins (below), or include individual  files as needed -->    
        <script src="bootstrap/js/bootstrap.min.js"></script> 
    </body>
</html>
