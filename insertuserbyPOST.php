<?php

if(isset($_POST['username'],$_POST['password'],$_POST['email'],$_POST['address']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $address=$_POST['address'];
}
include 'dbconnection.php';

$insertUserSQL="INSERT INTO users (name,password,email,address) VALUES ('$username','$password','$email','$address')";
if($dbconnect->query($insertUserSQL) === TRUE ){
    echo " User Add Successfuly  " ;
}else{
    echo "OOops some thing is wrong  " ;
}


 ?>
