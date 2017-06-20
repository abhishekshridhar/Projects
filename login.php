<?php
require 'includes/common.php';
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LIFESTYLE STORE|LOGIN PAGE</title>
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
        
        <div class="container adjust">
            <div class="row">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">LOGIN</h3>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make purchase</p>
                            <br>
                            <form method="post" action="login_submit.php">
                    <div class="form-group">
                        
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}$">
                    </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="true" pattern=".{6,}" >
                            
                        </div>
                            
                    
                                <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        </div>
                        
                        <div class="panel-footer">
                            Don't have an account?<a href="signup.php"> Register</a>
                        </div>
                        
                        
                    </div>
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
