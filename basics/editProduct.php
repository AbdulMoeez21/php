<?php
include('./header.php');
include("./connection.php");


if (isset($_GET['id'])) {
  // echo $_GET['id'];
  $id = $_GET['id'];

  $sql = 'SELECT * FROM `product_table` where Id = ' . $id . ' ';
  // echo $sql;

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    echo "Invalid Id .. ";
    // header("Location: http://localhost/login/basics/product_table_add.php");
  }
}
?>




<div class="container py-5">
  <h1 class="text-primary">Edit Product </h1>

  <div class="login-box">
    <h2>Upload Prodcuts</h2>
    <form method="post" action="./updateProduct.php">
      <input type="number" value=<?php echo $row['Id'] ?>  name="productId"  >
      <div class="user-box">
        <!-- <label>Product Name</label> -->
        
        <input type="text" name="proname" required="" value="<?php echo $row['Name'] ?> ">

      </div>
      <div class="user-box">
        <!-- <label>Description</label> -->
        <input type="text" name="description" required="" value="<?php echo $row['Description'] ?>" ">

      </div>
      <button type=" submit" name="submit">Update</button>
    </form>
  </div>





</div>












<?php include('./footer.php') ?>