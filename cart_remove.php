<?php
require 'includes/common.php';
$item_id=$_GET['id'];
$id=$_SESSION['id'];
$delete_query="DELETE FROM users_items where user_id='$id' AND item_id='$item_id'";
$result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location:cart.php')
?>
