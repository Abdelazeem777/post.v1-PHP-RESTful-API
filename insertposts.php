<?php

if(isset($_POST['writer'],$_POST['postcontent']))
{
  $writer=$_POST['writer'];
  $postContent=$_POST['postcontent'];
}
include 'dbconnection.php';
$insertpostsql="INSERT INTO posts(writer,postContent) VALUES('$writer','$postContent')";

if($dbconnect->query($insertpostsql)===TRUE){
  echo "post Added successfully";
}else{
  echo "faild to post";
}

 ?>
