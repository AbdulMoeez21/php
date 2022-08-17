<?php
include('./connection.php');


if (isset($_POST['submit'])) {
    //  echo "form submit !!--------------------------------------------------------------";
    $name = $_POST["proname"];
    $id = $_POST["productId"];
    $description = $_POST["description"];


    $sql = 'UPDATE product_table SET Name="'.$name.'",Description="'.$description.'" WHERE Id = '.$id.'';
    echo $sql;

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: http://localhost/php/basics/product_table_add.php");
    }
}
