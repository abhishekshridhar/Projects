<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    echo "Only Logged in users can access this page.Please ";
     ?><a href="login.php" class="btn btn-primary">Login</a><?php
          die();
    }
?>
   
<!DOCTYPE html>

<html>
    <head>
        <title>LIFESTYLE STORE|CART</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
              
              <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    
              <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                     
              <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
      
        <?php
        include 'includes/header.php';
        $id=$_SESSION['id'];
        ?>

        <div class="container">
        <table class="table table-striped table-bordered table-hover table-responsive" >
            <tbody>
                <tr><th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th></tr>
                <?php
                
                $select_query="SELECT i.name,i.price,i.id FROM items i INNER JOIN users_items u ON i.id=u.item_id WHERE u.user_id=$id";
                $result= mysqli_query($con, $select_query);
                $total_rows= mysqli_num_rows($result);
                if($total_rows==0)
                {
                    echo "NO ITEMS IN THE CART! ADD ITEMS FIRST!";
                    
                }
                
                else {
                    $sum=0;
                    for($counter=1;$counter<=$total_rows;$counter++)
                    {
                        
                        $row= mysqli_fetch_array($result);
                        $sum=$sum+$row['price'];
                        $itmid=$row['id'];
                        if($counter==1)
                            $ar="$itmid";
                        else {
                        $ar.="|"."$itmid";   
                        }
                    
                
                
                
                
                
                
                  ?><tr><td> <?php echo $counter ?> </td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td> <?php echo '<a href="cart_remove.php?id=' . $itmid . '" class="btn btn-block btn-primary">Remove from cart</a>';?></td></tr>
                        <?php
                
                }
                }
               ?> <tr>
                    <td></td>
                    <td>Total</td>
                    <td><?php echo "Rs."." ". $sum."/-"; ?></td>
                    <td><center><?php 
                    
                    echo '<a href="success.php?id=' . $ar . '" class="btn btn-primary">Confirm Order</a>';?> </center></td>
                </tr> <?php
                ?>
            </tbody>
        </table>
    </div>
        
        <footer id="footer1">
            <div class="container">
                <center>
                    Copyright © Lifestyle Store. All Rights
Reserved | Contact Us: +91 90000 00000
                </center>
            </div>
        </footer>
        
    </body>
</html>
