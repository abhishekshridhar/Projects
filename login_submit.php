<?php
require 'includes/common.php';
?>

    <?php
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con, md5($_POST['password']));

$select_query="SELECT id,email FROM users WHERE email='$email' and password='$password' " ;
$select_query_result= mysqli_query($con, $select_query);

$mysqli_num_rows= mysqli_num_rows($select_query_result);

if($mysqli_num_rows==0)
{
    echo "The email ID is not signed-in . Or incorrect Password";
}
    else {
    $result= mysqli_fetch_array($select_query_result);
    $_SESSION['email']=$email;
    $_SESSION['user_id']=$result['id'];
    header('location:products.php');
    
}


?>