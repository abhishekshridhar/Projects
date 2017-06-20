<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) 
    { 
    header('location: products.php'); }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LIFESTYLE STORE|SIGN UP</title>
        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
              
              <script src="bootstrap/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    
              <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                     
              <link rel="stylesheet" type="text/css" href="style.css">
              
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <?php
       require 'includes/header.php';
       ?>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2>SIGN UP</h2>
                    <form method="post" action="signup_script.php">
                    <div class="form-group">
                        
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="contact" placeholder="Contact">
                            
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City">
                            
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                            
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Sign Up</button>

                        
                            
                    </form>
                </div>
            </div>
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
