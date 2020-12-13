<?php
include 'dbconnection.php';
define('MYSQL_ASSOC',MYSQLI_ASSOC);
$getposts="SELECT * FROM posts";
$posts=$dbconnect->query($getposts);
$postsarray=array();
while ($row = mysqli_fetch_array($posts,MYSQL_ASSOC)){
  $temp['id']=$row['id'];
  $temp['writer']=$row['writer'];
  $temp['postContent']=$row['postContent'];
  array_push($postsarray,$temp);
}
echo json_encode(array("posts"=>$postsarray),JSON_UNESCAPED_UNICODE);

?>
