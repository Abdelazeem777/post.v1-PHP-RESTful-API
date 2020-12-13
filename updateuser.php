<?php
if (isset($_GET['username'],$_GET['id']))
{
  $username=$_GET['username'];
  $id=$_GET['id'];
}
include 'dbconnection.php';
$updateusersql="UPDATE users SET name='$username' WHERE id='$id'";
if($dbconnect->query($updateusersql)===TRUE){
  echo "User update Successfuly";
}else {
  echo "OOops something is wrong";
}
?>
