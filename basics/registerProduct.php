<?php 
include('./connection.php');


if(isset($_POST['add'])){
   //  echo "form submit !!--------------------------------------------------------------";
$name=$_POST["proname"];
$description=$_POST["description"];

$sql="INSERT INTO `product_table`(`Name`, `Description`) 
VALUES ('$name','$description')";
    }
    //echo $sql;

    $result=mysqli_query($conn,$sql);

    if($result){
        header("Location: http://localhost/login/basics/product_table_add.php");
    }
?>