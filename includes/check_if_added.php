<?php

function check_if_added_to_cart($item_id){
    $con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
    $item=$item_id;
    $id=$_SESSION['id'];
    

    $select_query="SELECT * FROM users_items WHERE item_id='$item' AND user_id ='$id' and status='Added to cart'";
    $result= mysqli_query($con,$select_query);
    $totalrows= mysqli_num_rows($result);
    if($totalrows>=1)
        return 1;
    else
        return 0;
}
?>

