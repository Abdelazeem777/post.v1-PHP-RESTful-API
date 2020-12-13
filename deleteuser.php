<?php
if(isset($_GET['username'])){
  $username=$_GET['username'];
}
include 'dbconnection.php';
$deleteusersql="DELETE FROM users WHERE name='$username'";
if($dbconnect->query($deleteusersql)===TRUE){
  echo "user deleted successfuly";
}else{
  echo "OOops something is wrong";
}
?>
