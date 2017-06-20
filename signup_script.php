<?php
require 'includes/common.php';
?>


<?php
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con, md5($_POST['password']));
$name= mysqli_real_escape_string($con,$_POST['name']);
$contact= mysqli_real_escape_string($con,$_POST['contact']);
$city= mysqli_real_escape_string($con,$_POST['city']);
$address= mysqli_real_escape_string($con,$_POST['address']);

$regex_email="/^[a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if(!preg_match($regex_email, $email)){
    echo "Incorrect E-mail";
}

$select_query="SELECT id,email FROM users WHERE email='$email'" ;
$select_query_result= mysqli_query($con, $select_query);


$mysqli_num_rows= mysqli_num_rows($select_query_result);

if($mysqli_num_rows>0)
{
    echo "The User with this E-mail already exist";
}
    else {
    $signup_query="insert into users (name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
    $signup_submit= mysqli_query($con, $signup_query);
        echo "User Successfully Registered !";

    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    header('location:products.php');
    
}


?>