<?php
require 'includes/common.php';

if(!isset($_SESSION['email']))
    header ('location:index.php');

$id=$_SESSION['id'];
$old= mysqli_real_escape_string($con, md5($_POST['old']));

$select_query="SELECT * FROM users WHERE password='$old'";
$result= mysqli_query($con, $select_query);
$rows= mysqli_num_rows($result);
if($rows==0)
{
    $msg="Invalid password";
    require 'settings.php';
    exit();
}
 else {
    

$new= mysqli_real_escape_string($con, md5($_POST['new']));
$retype=mysqli_real_escape_string($con, md5($_POST['retype']));

if((strlen($new)!= strlen($retype)) || (md5($new)!= md5($retype)))
{
    $msg="Passwords do not match";
    require 'settings.php';
    exit();
    
}
 else {
     $update_query="UPDATE users SET password='$new' WHERE password='$old'";
     $result= mysqli_query($con, $update_query) or die(mysqli_error($con));
}

 }


?>