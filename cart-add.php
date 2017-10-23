<?php
require 'includes/common.php';
?>

<?php
  $item_id=$_GET['id'];
  $user_id=$_SESSION['id'];
  $insert_query="INSERT INTO users_items (user_id,item_id,status) VALUES ('$user_id', '$item_id', 'Added to cart')";
  $result= mysqli_query($con, $insert_query);
  header('location:products.php');
?>
