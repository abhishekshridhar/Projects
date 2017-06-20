<?php
$con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
if(!isset($_SESSION))
    session_start ();
if(!isset($_SESSION['email']))
    header('location:index.php');
?>



<!DOCTYPE html>

<html>
    <head>
        <title>LIFESTYLE STORE|SETTINGS</title>
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
        
        
         <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h3>CHANGE PASSWORD</h3>
                    <form method="post" action="settings_script.php">
                    <div class="form-group">
                        
                        <input type="password" class="form-control" name="old" placeholder="Old password"><?php 
                        
                        if(isset($msg))
                        {echo $msg;}
                        ?>
                    </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new" placeholder="New password">
                            
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="retype" placeholder="Re-Type new password"><br>
                            <?php 
                            
                            if(isset($msg))
                            {
                                echo $msg;
                            }
                            ?>
                        </div>
                        
                        <a href="#">
                            <button type="submit" class="btn btn-primary">Save Changes</button></a>

                        
                            
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
