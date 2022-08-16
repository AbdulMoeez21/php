<?php
 include('./header.php');
include("./connection.php");
?>
<!-- <?php  
    
    if(isset($_GET['Id'])){
        echo $_GET['Id'];
       // echo $_GET['Name'];
       // echo $_GET['Description'];
        echo "hello";
    }
   
    ?> -->


<?php
function getById($product_table,$id){
  global $connection;
  $sql="SELECT * FROM $product_table WHERE Id='$id' ";
  return $sql_run=mysqli_query($connection,$sql);

}
 ?>
<div class="container py-5">
    <h1 class="text-primary">Edit Product </h1>
    <?php 
  if(isset($_GET['Id'])){
 $Id=$_GET['Id'];
 $product=getById("products",$Id);
      if(mysqli_num_rows($product)>0){
        $data=mysqli_fetch_array($product);
        foreach($items as $ai){
          ?>
          <form method="get" action="./product_table_add.php">
          <div class="user-box">
              <label>Product Name</label>
              <input type="text" name="proname" required="" scope="row" value="<?php $ai['Id'] ?>" <?php $data['Id']==$ai['Id']?'':''?> <?php $ai['Name'] ?>>
  
          </div>
          <div class="user-box">
              <label>Description</label>
              <input type="text" name="description" required="" value=" ">
  
          </div>
          <button type="submit" name="update">Updated</button>
      </form>
      <?php
        }

  ?>
    
    <?php
        }else{
          echo "product not found on given id";
         }
}
else{
  echo "Id missing";
 }
  
 ?>




</div>


<!-- <?php
// $connection=mysqli_connect("localhost","root","");
// $db=mysqli_select_db($connection,'user');
// if(isset($_POST['update'])){
//   $Id=$_POST['Id'];
//   $sql="UPDATE 'employee' SET name='$_POST[Name]',des='$_POST[Description]' where Id='$_Post[Id]'";
// $query_run=mysqli_query($connection,$sql);

// if($sql_run){
//   echo "<script>alert ('done')</script";
// }
// else{
//   echo "<script>alert ('do')</script";
// }
// } 
?>  -->














<?php include('./footer.php') ?>