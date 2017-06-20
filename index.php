<?php
require 'includes/common.php';

if (isset($_SESSION['email'])) {
header('location: products.php');
}

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LIFESTYLE STORE | INDEX PAGE</title>
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
        ?>
       
        
        <div id="banner-image">
            <div class="container">
                <div class="banner-content">
                    <h3>We Sell  LifeStyle</h3><br>
                    <a href="products.php" class="btn btn-primary" role="button">Shop Now</a>
                </div>
            </div>
        </div>
        
        <footer>
            <div class="container">
                <center>
                    Copyright © Lifestyle Store. All Rights
Reserved | Contact Us: +91 90000 00000
                </center>
            </div>
        </footer>
        
    </body>
</html>
