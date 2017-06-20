<?php
require 'includes/common.php';

if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$itemid=$_GET['id'];
$usrid=$_SESSION['id'];

$update_query="UPDATE users_items SET status='Confirmed' WHERE  user_id='$usrid'";
//die($update_query);
$result= mysqli_query($con, $update_query) or die(mysqli_error($con));


echo 'Your order is confirmed! Thank you for shopping with us. <a href="products.php">Click Here</a> to purchase any other item';

?>
