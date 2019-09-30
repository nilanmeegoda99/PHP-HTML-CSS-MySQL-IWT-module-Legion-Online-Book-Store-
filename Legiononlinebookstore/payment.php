<!DOCTYPE html>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Legion Online Book Store</title>
	
  
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
        
        <?php include './template/header.php'; ?>
        <div class="row">
          
            <section> <!--for demo wrap-->
        
        <h2>View All Orders</h2>  
        <div class="tbl-header" style="padding-right: 6px;">
        <table cellpadding="0" cellspacing="0" border="0">
          <thead>
            <tr>
                                              <th>Payment_No</th>
                                    <th>PAmount</th>
                                    <th>CAmount</th>
                                    <th>Discount</th>                                                     
                                    <th>Cus_ID</th>
                                       
                                   <!-- <th>Order State</th>-->
                                   
            </tr>
          </thead>
        </table>
        </div>
        <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
         <?php 
                          include 'dbconfig.php';
                   $sql = "SELECT * FROM payment where  payment.Cus_ID = '".$_GET['cusid']."'";
        
                   
                   $result = $conn->query($sql);
                      // if result has one or more rows
                      if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?>
                          
                           <tbody>
                                <tr>
                               <td><?php echo $row['Payment_No']; ?></td>
                               <td><?php echo $row['PAmount']; ?></td>
                                    <td><?php echo $row['CAmount']; ?></td>
        
                                    <td><?php echo $row['Discount']; ?></td>
                                    <td><?php echo $row['Cus_ID']; ?></td>
                                  
                                    
                                   
                                   
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
            </div>
           

    

        
               
 
        
  
        <div class="row">
            <?php include './template/footer.php'; ?>
            </div>
        <!-- JavaScript plugins (requires jQuery) -->    
        <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
