<?php
include('./connection.php');

if (isset($_POST['submit'])) {
    // echo "form submit !!--------------------------------------------------------------";

    $name = $_POST["proname"];
    $id = $_POST["productId"];
    $description = $_POST["description"];





    $sql = 'INSERT INTO `product_table`(`Name`, `Description`) VALUES ("' . $name . '","' . $description . '")';


    //echo $sql;

    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo '<script>alert("done")</script>';
        header("Location: http://localhost/php/basics/product_table_add.php");
    }
}
