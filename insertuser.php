<?php

if(isset($_GET['username'],$_GET['password'],$_GET['email'],$_GET['address']))
{
  $username=$_GET['username'];
  $password=$_GET['password'];
  $email=$_GET['email'];
  $address=$_GET['address'];
}
include 'dbconnection.php';

$insertUserSQL="INSERT INTO users (name,password,email,address) VALUES ('$username','$password','$email','$address')";
if($dbconnect->query($insertUserSQL) === TRUE ){
    echo " User Add Successfuly  " ;
}else{
    echo "OOops some thing is wrong  " ;
}


 ?>
