<?php 
include('./connection.php');
 
if(isset($_POST['submit'])){
    // echo "form submit !!--------------------------------------------------------------";
$name=$_POST["username"];
$password=$_POST["password"];

$sql='INSERT INTO `user`(`Name`, `Password`) VALUES 
("'.$name.'","'.$password.'")';
    }
    //echo $sql;

    $result=mysqli_query($conn,$sql);
    if($result){
      //echo '<script>alert("done")</script>';
      header("Location: http://localhost/login/basics/loginUser.php");
    }
?>