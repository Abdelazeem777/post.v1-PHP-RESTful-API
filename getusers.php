<?php
include 'dbconnection.php';

$getuserssql="SELECT * FROM users";
$users=$dbconnect->query($getuserssql);
if($users->num_rows >0)
{
while ($row=$users->fetch_assoc()){
  echo "<br>".$row['id']." ".$row['name']." ".$row['password']." ".$row['email']." ".$row['address']." ".$row['registertime'] ;
}

}else {
  echo "Error in query !!";
}


?>
