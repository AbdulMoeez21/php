<?php 

$hostname="localhost";
$userName="root";
$password="";
$db="login_db";

$conn=mysqli_connect($hostname,$userName,$password,$db);
if(!$conn){
    echo "Connection Failed".mysqli_connect_error();
}
//  echo "Connected Successfully";
?>